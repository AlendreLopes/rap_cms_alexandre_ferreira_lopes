<main>

    <div class="mx-auto mt-5 py-5 sm:px-6 lg:px-8">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

            <div class="col-lg-12 px-0">

                <h1 class="display-4 fst-italic">Blog Create</h1>

                <form id="blogCreateForm" method="post" class="row g-3 needs-validation">

                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="<?= $_POST['title'] ?? '' ?>" required>
                        <?php if (isset($error['title'])): ?>
                            <?= $error['title'] ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                            required><?= $_POST['description'] ?? '' ?></textarea>
                    </div>
                    <?php if (isset($error['description'])): ?>
                        <?= $error['description'] ?>
                    <?php endif; ?>

                    <div class="form-check form-switch form-check">
                        <input class="form-check-input" type="checkbox" id="status" name="status" value="Published">
                        <label class="form-check-label" for="status">Post published?</label>
                    </div>
                    <?php if (isset($error['status'])): ?>
                        <?= $error['status'] ?>
                    <?php endif; ?>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create Post</button>
                    </div>

                </form>

            </div>

        </div>

        <p class="text-end mb-6">
            <a href="/blog" class="text-blue-500 underline">Go back to blog</a>
        </p>

    </div>
</main>