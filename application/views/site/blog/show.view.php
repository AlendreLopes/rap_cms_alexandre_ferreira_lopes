<main>

    <div class="mx-auto mt-5 py-5 sm:px-6 lg:px-8">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

            <div class="col-lg-12 px-0">

                <h1 class="display-4 fst-italic">Blog post</h1>

                <h2 class="text-center"><?= htmlspecialchars($post['title']) ?></h2>

                <p class="lead my-3 text-break">
                    <?= nl2br(htmlspecialchars($post['description'])) ?>
                </p>
            </div>
        </div>

        <p class="text-end mb-6">
            <a href="/blog" class="text-blue-500 underline">Go back to blog</a>
        </p>

    </div>
</main>