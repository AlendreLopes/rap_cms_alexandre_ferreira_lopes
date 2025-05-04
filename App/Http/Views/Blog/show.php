<div class="mx-auto mt-5 py-5 sm:px-6 lg:px-8">

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

        <div class="col-lg-12 px-0">

            <h1 class="display-4 fst-italic">Blog post</h1>

            <h2 class="text-center">
                <?= htmlspecialchars($post['title']) ?>
            </h2>

            <p class="lead my-3 text-break">
                <?= nl2br(htmlspecialchars($post['description'])) ?>
            </p>

            <p class="lead my-3 text-break text-end">
                Words: <?= str_word_count(htmlspecialchars($post['description'])) ?>
            </p>

            <?php if (isset($_SESSION['rap_cms'])): ?>
                <span class="d-flex flex justify-content-end">
                    <?php
                    $userId = $_SESSION['rap_cms']['userId'];
                    if ($post['user_id'] === $userId): ?>

                        <a href="/blog/edit?id=<?= $post['id'] ?>"
                            class="btn btn-outline-success me-2 text-end">Edit</a>

                        <a  href="#" onclick="deleteItem(<?= $post['id'] ?>)" class="btn btn-outline-danger text-end">Delete</a>

                        <form id="<?= $post['id'] ?>" action="/blog/delete" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        </form>

                    <?php endif; ?>
                </span>
            <?php endif; ?>
        </div>
    </div>

    <p class="text-end mb-6">
        <a href="/blog" class="text-blue-500 underline">Go back to blog</a>
    </p>

</div>