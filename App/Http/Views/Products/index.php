<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

    <div class="col-lg-12 px-0">

        <h1 class="display-4 fst-italic">Ours Products</h1>

        <p class="lead mb-0 text-end">

            <a href="/products/create" class="text-info-emphasis fw-bold">New product</a>

        </p>

    </div>

</div>

<div class="row mb-2">

    <?php if (empty($products)): ?>

        <div class="col-md-12 mb-4">
            <h1 class="display-4 fst-italic text-center">No one product registred!</h1>
        </div>

    <?php else: ?>

        <?php foreach ($products as $product): ?>

            <div class="col-md-6">

                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                    <div class="col p-4 d-flex flex-column position-static">

                        <strong
                            class="d-inline-block mb-2 <?= ((htmlspecialchars($product['id']) % 2) == 0) ? 'text-success-emphasis' : 'text-primary-emphasis'; ?>"><?= $product['title'] ?></strong>

                        <h3 class="mb-0"><?= htmlspecialchars($product['title']) ?></h3>

                        <div class="mb-1 text-body-secondary">Nov 12</div>

                        <p class="card-text mb-auto">
                            <?= substr(htmlspecialchars($product['description']), 0, 15) ?>
                        </p>

                        <a href="/blog/show?id=<?= htmlspecialchars($product['id']) ?>"
                            class="<?= ((htmlspecialchars($product['id']) % 2) == 0) ? 'link-success' : 'link-primary'; ?> link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            Continue reading
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>

                    </div>

                    <div class="col-auto d-none d-lg-block">

                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Image</text>
                        </svg>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>
        
    <?php endif; ?>

</div>