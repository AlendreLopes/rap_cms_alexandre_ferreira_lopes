<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">
      <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
    </li>
  </ol>
</nav>


<div class="text-center mb-4">

  <h3 class="py-1"><?= $user['username'] ?></h3>
  <small><?= $user['email'] ?></small>

</div>

<div class="row p mx-auto">

  <div class="col"></div>

  <div class="bg-dark col-6 py-3">
    <a href="/dashboard/user/profile"
      class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-address-card me-2" style="font-size:30px; color:blueviolet;"></i> Personal Information
    </a>
  </div>

  <div class="col"></div>

</div>

<div class="row p mx-auto">

  <div class="col"></div>

  <div class="bg-dark col-6 py-3">
    <a href="/dashboard/user/security" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-user-secret me-2" style="font-size:30px; color:blueviolet;"></i> Security Account
    </a>
  </div>

  <div class="col"></div>

</div>

<div class="row p mx-auto">

  <div class="col"></div>

  <div class="bg-dark col-6 py-3">
    <a href="/dashboard/user/address"
      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-location-dot me-2" style="font-size:30px; color:blueviolet;"></i> Address(es)
    </a>
  </div>

  <div class="col"></div>

</div>