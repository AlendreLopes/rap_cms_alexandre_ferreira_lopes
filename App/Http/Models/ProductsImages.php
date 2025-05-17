<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProducsImagesForm;
use finfo;

class ProductsImages
{

    public function index()
    {

        $connection = App::resolve(Connection::class);
        $query = "SELECT * FROM products_images AS img LEFT JOIN products AS p ON img.product_id = p.id";

        $images = $connection->query($query)->fetchAll();

        return $images;

    }

    public function carouselSite()
    {

        $connection = App::resolve(Connection::class);
        $query = "SELECT * FROM products_images AS img LEFT JOIN products AS p ON img.product_id = p.id";
        $images = $connection->query($query)->fetchAll();
        return $images;

    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products_images WHERE product_id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetchAll();

        return $show;
    }

    public function create($adm): bool
    {
        $product = ProducsImagesForm::validate($attributes = [
            'product_id' => $_POST['product_id'],
        ]);

        $store = $this->store(
            $adm,
            $attributes['product_id'],
            $_FILES['file']['tmp_name']
        );

        if (!$store) {

            $product->hasErrors('files', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Product registered with succcess!');
        return true;
    }


    public function store($adm, $product_id, $files): bool
    {
        $fileInfo = new finfo(FILEINFO_MIME_TYPE);

        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO products_images (adm_id, product_id, file, file_path, created_at) 
            VALUES (:adm_id, :product_id, :file, :file_path, :created_at)";

        $modelFiles = $files;

        foreach ($modelFiles as $file) {

            $fileExtension = array_search($fileInfo->file($file), array(
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
                'webp' => 'image/webp',
            ), true);

            $fileSha = sha1_file($file);
            $fileName = "{$fileSha}.{$fileExtension}";

            if (
                move_uploaded_file(
                    $file,
                    sprintf(
                        './public/assets/uploads/products/%s.%s',
                        $fileSha,
                        $fileExtension
                    )
                )
            ) {

                $store = $connection->query($query, [
                    ':adm_id' => $adm,
                    ':product_id' => $product_id,
                    ':file' => $fileName,
                    ':file_path' => '/public/assets/uploads/products/',
                    ':created_at' => date('Y-m-d h:m:s')
                ]);

            }
        }

        if ($store) {
            return true;
        }

        return false;

    }

    public function edit($id, $adm, $file_path): bool
    {
        $product = ProducsImagesForm::validate($attributes = [
            'product_id' => $_POST['product_id'],
        ]);

        $update = $this->update(
            $id,
            $adm,
            $attributes['product_id'],
            $_FILES['file']['tmp_name'],
            $file_path
        );

        if (!$update) {

            $product->hasErrors('files', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Product updated with succcess!');
        return true;
    }

    public function update($id, $adm, $product_id, $file, $file_path): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE products_images SET adm_id =:adm_id, product_id = :product_id, file = :file, file_path = :file_path, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':adm_id' => $adm,
            ':product_id' => $product_id,
            ':file' => $file,
            ':file_path' => $file_path,
            ':updated_at' => date('Y-m-d h:m:s')
        ]);

        if ($update) {
            return true;
        }

        return false;
    }

    public function destroy($id)
    {
        $connection = App::resolve(Connection::class);

        $selectFile = "SELECT * FROM products_images WHERE id = :id";
        
        $deleteQuery = "DELETE FROM products_images WHERE id = :id";

        $file = $connection->query($selectFile, [':id' => $id])->fetch();

        if ($file) {

            if (file_exists(".{$file['file_path']}{$file['file']}")) {

                if (unlink(".{$file['file_path']}{$file['file']}")) {

                    $destroy = $connection->query($deleteQuery, [':id' => $id]);

                    if ($destroy) {

                        return true;
                    }

                    return false;

                }
            }
        }
    }

}