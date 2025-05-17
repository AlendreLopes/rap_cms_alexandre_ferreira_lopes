<?php

namespace App\Http\Models;

use App\Common\Sessions;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class Cart
{

    public function cart(): array
    {
        return $_SESSION['rap_cms_cart']['products'] ?? [];
    }

    public function cartTotal()
    {
        return $_SESSION['rap_cms_cart']['total'] ?? 0;
    }

    public function add(CartProduct $product)
    {

        // Product is not in cart
        $productInCart = false;

        if (count($this->cart()) > 0):

            foreach ($this->cart() as $cartProduct) {

                if ($cartProduct->getId() === $product->getId()) {

                    $newQuantity = $cartProduct->getQuantity() + $product->getQuantity();

                    $cartProduct->setQuantity($newQuantity);

                    // Product is on cart
                    $productInCart = true;

                    break;

                }

            }

        endif;

        if (!$productInCart):

            $this->setProductInCart($product);

        endif;

        // Get Total price of product
        $this->setProductInCartTotal($product);

        Sessions::add('success', 'Product added on cart!');
    }

    private function setProductInCart($product)
    {
        $_SESSION['rap_cms_cart']['products'][] = $product;
    }

    private function setProductInCartTotal(CartProduct $product)
    {
        $_SESSION['rap_cms_cart']['total'] += $product->getPrice() * $product->getQuantity();
    }

    public function update(int $id)
    {
        if ($_SESSION['rap_cms_cart']['products']) {
            foreach ($this->cart() as $index => $product) {
                if ($product->getId() === $id) {
                    $quantity = $product->getQuantity();
                    $quantity--;
                    $product->setQuantity($quantity);
                    if ($product->getQuantity() === 0) {
                        unset($_SESSION['rap_cms_cart']['products'][$index]);
                        $_SESSION['rap_cms_cart']['total'] -= $product->getPrice() * $product->getQuantity();
                        Sessions::add('error', 'Product removed!');
                    }
                    $_SESSION['rap_cms_cart']['total'] -= $product->getPrice() * $product->getQuantity();
                    Sessions::add('success', 'Product quantity removed!');
                }
            }
        }
    }

    public function store(int $id)
    {
        if ($_SESSION['rap_cms_cart']['products']) {
            foreach ($this->cart() as $index => $product) {
                if ($product->getId() === $id) {
                    // unset($_SESSION['rap_cms_cart']['products'][$index]);
                    $quantity = $product->getQuantity();
                    $quantity++;
                    $product->setQuantity($quantity);
                    $_SESSION['rap_cms_cart']['total'] += $product->getPrice() * $product->getQuantity();
                    Sessions::add('success', 'Product quantity added!');
                }
            }
        }
    }

    public function remove(int $id)
    {
        if ($_SESSION['rap_cms_cart']['products']) {
            foreach ($this->cart() as $index => $product) {
                if ($product->getId() === $id) {
                    unset($_SESSION['rap_cms_cart']['products'][$index]);
                    $_SESSION['rap_cms_cart']['total'] -= $product->getPrice() * $product->getQuantity();
                    Sessions::add('error', 'Product removed!');
                }
            }
        }
    }

    public function destroy()
    {
        unset($_SESSION['rap_cms_cart']);
        Sessions::add('success', 'Cart is clear!');
    }
}