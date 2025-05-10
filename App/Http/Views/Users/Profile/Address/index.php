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
    <a href="/dashboard/user/address/create" class="btn btn-outline-success">
      Add one
    </a>
  </div>

</div>

<div class="row mt-2">

  <?php if ($userAddress): ?>

    <?php foreach ($userAddress as $address): ?>

      <div class="col-3"></div>

      <d class="bg-dark col-6 py-3">

        <i class="fa-solid fa-house"></i> - <?= $address['address'] ?>, <?= $address['address_number'] ?> <?= $address['address_complement'] ?? '' ?> 
        <br>
        <small class="ms-5"><?= $address['zip_code'] ?> - <?= $address['neighborhood'] ?> - <?= $address['city'] ?> - <?= $address['state'] ?></small>

      </d>

      <div class="col-3 py-3 text-center">

        <a class="btn btn-outline-info userAddress" href="/dashboard/user/address/edit?id=<?= $address['id'] ?>"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>

        <a href="#" onclick="deleteItem(<?= $address['id'] ?>)" class="btn btn-outline-danger text-end">Delete</a>

        <form id="<?= $address['id'] ?>" action="/dashboard/user/address/delete" method="post">
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