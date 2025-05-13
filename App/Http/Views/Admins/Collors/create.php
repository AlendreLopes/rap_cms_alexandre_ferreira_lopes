<div class="container mt-2 p-3 rounded text-body-emphasis bg-body-secondary shadow">

    <div class="col-lg-12 mb-2">
        <h4>
            Collor Create
        </h4>
    </div>

    <div class="col-lg-12 mb-2">

        <?php if ($errors['errors']): ?>
            <div class="col-sm-12 text-center text-danger m-2">
                <?= $errors['errors']['collors'] ?>
            </div>
        <?php endif; ?>

    </div>

    <form id="productsDependenciesForm" action="/administrators/collors/store" class="mb-4" method="POST">

        <input type="hidden" name="_method" value="PUT">

        <div class="row mb-2">

            <div class="row mb-2">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" minlength="2" maxlength="150"
                        value="<?= old('name') ?? '' ?>" required>
                    <?php if ($errors['errors']): ?>
                        <div class="col-sm-12 text-center text-danger m-2">
                            <?= $errors['errors']['name'] ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="row mb-2">

                <div class="col text-end">

                    <a href="/administrators/collors" class="btn btn-outline-secondary">Cancel</a>

                    <button class="btn btn-outline-success">Create</button>

                </div>

            </div>

    </form>

</div>