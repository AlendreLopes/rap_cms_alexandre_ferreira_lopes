<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="/dashboard">
        <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      <i class="fa fa-address-card" aria-hidden="true"></i> Address(es)
    </li>
  </ol>
</nav>


<div class="row">

  <div class="col-3"></div>

  <div class="bg-dark col-6 py-3">
    Your('s) Address(es)
  </div>

  <div class="col-3 py-3 text-center">
    <a href="/dashboard/address/create" class="btn btn-outline-success">
      Add one
    </a>
  </div>

</div>

<div class="row mt-2">

  <?php if ($userAddress): ?>

    <?php foreach ($userAddress as $address): ?>

      <div class="col-3"></div>

      <div class="bg-dark col-6 py-3">ZIPCode: <?= $address['zip_code'] ?> - Address: <?= $address['address'] ?></div>

      <div class="col-3 py-3 text-center">

        <button data-id="<?= 'address.php' ?>" class="btn btn-outline-info userAddress" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">View</button>

        <a href="#" onclick="deleteItem(<?= $address['id'] ?>)" class="btn btn-outline-danger text-end">Delete</a>

        <form id="<?= $address['id'] ?>" action="/dashboard/address/delete" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="id" value="<?= $address['id'] ?>">
        </form>

      </div>

    <?php endforeach; ?>

  <?php else: ?>

    <div class="col-3"></div>

    <div class="bg-dark col-6 py-3 text-center">
      <i class="fa fa-registered" aria-hidden="true"></i> No address registered!
    </div>

    <div class="col-3"></div>

  <?php endif; ?>

</div>

<!-- Modal 01 -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
  tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="modal-body" class="modal-body"></div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second
          modal</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 02 -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
  tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
          first</button>
      </div>
    </div>
  </div>
</div>