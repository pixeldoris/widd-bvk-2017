<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <img class="logo -admin" src="{{ Storage::url('other/bvk-logo.png') }}" alt="Logotyp BVK AB">
    </div>
  </div>
</div>
<div class="col-sm-12">
  <nav class="navbar -admin navbar-inverse">
    <div class="container">
      <ul class="nav navbar-nav">
        <li class="{{ set_active('admin') }}"><a href="#">Kontakt</a></li>
        <li class="{{ set_active('admin/tjanster') }}"><a href="#">Tjänster</a></li>
        <li class="{{ set_active('admin/om-foretaget') }}"><a href="#">Om Företaget</a></li>
        <li class="{{ set_active('admin/tidigare-projekt') }}"><a href="#">Tidigare Projekt</a></li>
        <li class="{{ set_active('admin/certifikat') }}"><a href="#">Certifikat</a></li>
        <li class="{{ set_active('admin/samarbetpartners') }}"><a href="#">Samarbetspartners</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Logga ut</a></li>
      </ul>
    </div>
  </nav>
</div>
