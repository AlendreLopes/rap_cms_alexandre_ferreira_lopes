############################ Admins
SELECT id,name,email,email_verified_at,password,remember_token,created_at,updated_at FROM beheerders;

insert into 
  beheerders (
    id, 
    name, 
    email, 
    email_verified_at, 
    password, 
    remember_token, 
    created_at, 
    updated_at
  )
values
  (
    $id, 
    $name, 
    $email, 
    $email_verified_at, 
    $password, 
    $remember_token, 
    $created_at, 
    $updated_at
  );

update beheerders
set
    name = name,
    email = email,
    email_verified_at = email_verified_at,
    password = password,
    remember_token = remember_token,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from beheerders where id = $id;
############################ Coupons
SELECT id,name,discount,valid_until,created_at,updated_at FROM coupons;

insert into 
        coupons (
          id, 
          name, 
          discount, 
          valid_until, 
          created_at, 
          updated_at
        )
      values
        (
          $id, 
          $name, 
          $discount, 
          $valid_until, 
          $created_at, 
          $updated_at
        );

update coupons
set
    name = name,
    discount = discount,
    valid_until = valid_until,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
            coupons 
          where 
            id = $id;

SELECT
    id,
    name,
    slug,
    quantity,
    price,
    description,
    thumbnail,
    first_image,
    second_image,
    third_image,
    status,
    merk_id,
    kategory_id,
    created_at,
    updated_at
FROM produkts;

insert into 
              produkts (
                id, 
                name, 
                slug, 
                quantity, 
                price, 
                description, 
                thumbnail, 
                first_image, 
                second_image, 
                third_image, 
                status, 
                merk_id, 
                kategory_id, 
                created_at, 
                updated_at
              )
            values
              (
                $id, 
                $name, 
                $slug, 
                $quantity, 
                $price, 
                $description, 
                $thumbnail, 
                $first_image, 
                $second_image, 
                $third_image, 
                $status, 
                $merk_id, 
                $kategory_id, 
                $created_at, 
                $updated_at
              );

update produkts
set
    name = name,
    slug = slug,
    quantity = quantity,
    price = price,
    description = description,
    thumbnail = thumbnail,
    first_image = first_image,
    second_image = second_image,
    third_image = third_image,
    status = status,
    merk_id = merk_id,
    kategory_id = kategory_id,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
                  produkts 
                where 
                  id = $id;

SELECT id, name, created_at, updated_at FROM kleurs;

insert into 
                    kleurs (
                      id, 
                      name, 
                      created_at, 
                      updated_at
                    )
                  values
                    (
                      $id, 
                      $name, 
                      $created_at, 
                      $updated_at
                    );

update kleurs
set
    name = name,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
                        kleurs 
                      where 
                        id = $id;

SELECT id, name, slug, created_at, updated_at FROM kategories;

insert into 
                          kategories (
                            id, 
                            name, 
                            slug, 
                            created_at, 
                            updated_at
                          )
                        values
                          (
                            $id, 
                            $name, 
                            $slug, 
                            $created_at, 
                            $updated_at
                          );

update kategories
set
    name = name,
    slug = slug,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
                              kategories 
                            where 
                              id = $id;

SELECT id, name, created_at, updated_at FROM maats;

insert into 
                                maats (
                                  id, 
                                  name, 
                                  created_at, 
                                  updated_at
                                )
                              values
                                (
                                  $id, 
                                  $name, 
                                  $created_at, 
                                  $updated_at
                                );

update maats
set
    name = name,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
                                    maats 
                                  where 
                                    id = $id;

SELECT id, name, slug, created_at, updated_at FROM merks;

insert into 
                                      merks (
                                        id, 
                                        name, 
                                        slug, 
                                        created_at, 
                                        updated_at
                                      )
                                    values
                                      (
                                        $id, 
                                        $name, 
                                        $slug, 
                                        $created_at, 
                                        $updated_at
                                      );

update merks
set
    name = name,
    slug = slug,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
    merks 
  where 
    id = $id;

SELECT
    id,
    quantity,
    total,
    delivered_at,
    user_id,
    coupon_id,
    created_at,
    updated_at
FROM volgordes;

insert into 
    volgordes (
      id, 
      quantity, 
      total, 
      delivered_at, 
      user_id, 
      coupon_id, 
      created_at, 
      updated_at
    )
  values
    (
      $id, 
      $quantity, 
      $total, 
      $delivered_at, 
      $user_id, 
      $coupon_id, 
      $created_at, 
      $updated_at
    );

update volgordes
set
    quantity = quantity,
    total = total,
    delivered_at = delivered_at,
    user_id = user_id,
    coupon_id = coupon_id,
    created_at = created_at,
    updated_at = updated_at
where
    id = 'id';

delete from 
                                                volgordes 
                                              where 
                                                id = $id;