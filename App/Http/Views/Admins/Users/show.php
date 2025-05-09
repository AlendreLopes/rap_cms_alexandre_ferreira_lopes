<div class="col-md-4">

    <div class="card p-2">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <img :src="authUser.user?.profile_photo_url" :alt="authUser.user?.name" width="150" height="150"
                class="rounded-circle">
        </div>

        <div class="input-group my-3">
            <!-- Profile Photo File Input -->
            <input id="image" name="image" type="file" class="form-control" @change="handleFileInputChange"
                :key="data.image_key" required>
            <button type="submit" class="btn btn-info" @click="hanleUpdateProfilePhoto">Change photo</button>
        </div>

    </div>

    <ul class="list-group w-100 tet-center mt-2">

        <li class="list-group-item">
            <i class="bi bi-person"></i> <?= $users["name"] ?>
        </li>
        <li class="list-group-item">
            <i class="bi bi-envelope-at-fill"></i> <?= $users['email'] ?>
        </li>
        <li class="list-group-item">
            <a href="/dashboars/user/orders" class="text-decoration-none">
                <i class="bi bi-bag-check-fill"></i> Orders
            </a>
        </li>

    </ul>

</div>

<div class="col-md-8">

    <div class="card-shadow-sm p-2">

        <div class="card-header">
            <h5 class="text-center my-2">
                <i class="fa-solid fa-user-gear"></i> User Details
            </h5>
        </div>

        <div class="card-body">

            <form>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input class="form-control" id="zip_code" name="zip_code" type="text"
                                onclick="searchZipCode" />
                            <label for="zip_code">CEP 00000-000</label>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-floating d-flex fex justify-content-center items-baseline"
                            v-if="!authUser.user?.profile_completed">
                            <a id="searchZipCode" class="btn btn-danger" target="_blank"
                                href="https://buscacepinter.correios.com.br/app/endereco/index.php"
                                title="Site Oficial dos Correios">Não lembra do seu CEP, pesquise aqui!</a>
                        </div>
                    </div>

                </div>

                <div class="form-floating mb-3">
                    <input class="form-control" id="address" name="address" type="text" />
                    <label for="address">Endereço</label>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="address_number" name="address_number" type="text" />
                            <label for="address_number">Número</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="address_complement" name="address_complement" type="text" />
                            <label for="address_complement">Complemento</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="neighborhood" name="neighborhood" type="text" />
                            <label for="neighborhood">Bairro</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">

                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="city" name="city" type="text" />
                            <label for="city">Cidade</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="state" name="state" type="text" />
                            <label for="state">Estado</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="country" name="country" type="text" />
                            <label for="country">País</label>
                        </div>
                    </div>

                </div>

                <div class="mt-4">

                    <div class="d-grid">
                        <button class="btn btn-info" type="submit" <?php //= "!authUser.user?.profile_completed" ?>>
                            Update info
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>
    
</div>

<script>
    // Search Zip code
    // const searchZipCode = async () => {
    //   try {
    //     const response = await axios.get("https://viacep.com.br/ws/" + data.userCurrentInfo.zip_code + "/json")
    //     console.log(response)
    //     data.userCurrentInfo.address = response.data.logradouro
    //     data.userCurrentInfo.neighborhood = response.data.bairro
    //     data.userCurrentInfo.city = response.data.localidade
    //     data.userCurrentInfo.state = response.data.estado
    //     data.userCurrentInfo.country = 'Brasil'
    //   } catch (error) {
    //     console.log(error)
    //   }
    // }
    // 
</script>