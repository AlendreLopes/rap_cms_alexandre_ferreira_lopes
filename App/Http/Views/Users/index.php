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
    <a href="/dashboard/profile"
      class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-address-card me-2" style="font-size:30px; color:blueviolet;"></i> Personal Information
    </a>
  </div>

  <div class="col"></div>

</div>

<div class="row p mx-auto">

  <div class="col"></div>

  <div class="bg-dark col-6 py-3">
    <a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-user-secret me-2" style="font-size:30px; color:blueviolet;"></i> Security Account
    </a>
  </div>

  <div class="col"></div>

</div>

<div class="row p mx-auto">

  <div class="col"></div>

  <div class="bg-dark col-6 py-3">
    <a href="/dashboard/address"
      class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
      <i class="fa-solid fa-location-dot me-2" style="font-size:30px; color:blueviolet;"></i> Address(es)
    </a>
  </div>

  <div class="col"></div>

</div>

<div class="text-center">
  <p><a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primary
      link</a></p>
  <p><a href="#"
      class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Secondary link</a>
  </p>
  <p><a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Success
      link</a></p>
  <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Danger
      link</a></p>
  <p><a href="#" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Warning
      link</a></p>
  <p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info
      link</a></p>
  <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Light
      link</a></p>
  <p><a href="#" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dark
      link</a></p>
  <p><a href="#"
      class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis
      link</a></p>
</div>