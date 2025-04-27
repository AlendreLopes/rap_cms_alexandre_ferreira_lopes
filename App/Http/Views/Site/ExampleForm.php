<main>

    <div class="mx-auto mt-5 py-5 sm:px-6 lg:px-8">

        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

            <div class="col-lg-12 px-0">

                <h1 class="display-4 fst-italic">Blog Create</h1>

                <form id="blogCreateForm" method="post" class="row g-3 needs-validation" novalidate>

                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="name_first" value="Mark"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" name="name_second" value="Otto"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" name="username"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="publishad" id="radioDefault1" value="published">
                        <label class="form-check-label" for="radioDefault1">
                            Publiched
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="publishad" id="radioDefault2" value="draft">
                        <label class="form-check-label" for="radioDefault2">
                            Draft
                        </label>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="agree" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>

                </form>

            </div>

        </div>

        <p class="text-end mb-6">
            <a href="/blog" class="text-blue-500 underline">Go back to blog</a>
        </p>

    </div>
</main>