<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="/dashboard/user/address">
                <i class="fa fa-address-card" aria-hidden="true"></i> Address(es)
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Create Address</li>
    </ol>
</nav>

<div class="col-md-12">

    <div class="card-shadow-sm p-2">

        <div class="card-header">

            <h5 class="text-center mb-5 my-2">
                User Address
            </h5>
            <?php if (isset($_SESSION['errors'])): ?>
                <?= $_SESSION['errors']['userAddress'] ?>
            <?php endif; ?>
        </div>

        <div class="card-body">

            <form id="addressForm" action="/dashboard/user/address/store" method="POST" data-viacep>

                <input type="hidden" name="_method" value="PUT" />

                <div class="row mb-3">

                    <div class="col text-center">
                        Digite apenas o seu CEP no campo ao lado:
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="zip_code">CEP 00000-000</label>
                        <input class="form-control" id="zip_code" name="zip_code" type="text" value="<?= old('zip_code') ?? '' ?>" autofocus
                          data-viacep-cep />
                    </div>

                    <div class="col-md-4">
                        <div class=" d-flex fex justify-content-center items-baseline">
                            <a class="btn btn-outline-danger mt-4" target="_blank" href="https://buscacepinter.correios.com.br/app/endereco/index.php"
                                title="Site Oficial dos Correios">Não lembra do seu CEP, pesquise aqui!</a>
                        </div>
                    </div>

                </div>

                <div class=" mb-3">
                    <label class="form-label" for="address">Endereço</label>
                    <input class="form-control" id="address" name="address" type="text" data-viacep-endereco />
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label" for="address_number">Número</label>
                        <input class="form-control" id="address_number" name="address_number" type="text" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="address_complement">Complemento</label>
                        <input class="form-control" id="address_complement" name="address_complement" type="text" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="neighborhood">Bairro</label>
                        <input class="form-control" id="neighborhood" name="neighborhood" type="text"
                            data-viacep-bairro />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label" for="city">Cidade</label>
                        <input class="form-control" id="city" name="city" type="text" data-viacep-cidade />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="state">Estado</label>
                        <input class="form-control" id="state" name="state" type="text" data-viacep-estado />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="country">País</label>
                        <input class="form-control" id="country" name="country" type="text" value="BR" readonly />
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <a class="btn btn-secondary" href="/dashboard/address">Cancel</a>
                    <button class="btn btn-info" type="submit">
                        Add Address
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>