<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<style>
  li {
    font-family: monospace;
    font-weight: 800;
  }

  .sidebar-brand-text {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fa fa-camera" aria-hidden="true"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Malcolm Lismore</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="../index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Manage</div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="register.php">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>User Register</span></a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="appointments.php">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <span>Bookings</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fa fa-file-image" aria-hidden="true"></i>
      <span>Manage Gallery</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Photo Galleries:</h6>
        <a class="collapse-item" href="galleryPortraits/adminPortraits.php">Portraits</a>
        <a class="collapse-item" href="galleryNature/adminNature.php">Nature</a>
        <a class="collapse-item" href="galleryWedding/adminWedding.php">Wedding</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Heading -->
  <div class="sidebar-heading">Website Interface</div>

  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="../index.html" target="_blank"><span>Home</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" target="_blank" href="#" data-toggle="collapse" data-target="#collapseTw" aria-expanded="true" aria-controls="collapseTw">
      <span>Gallery</span>
    </a>
    <div id="collapseTw" class="collapse" aria-labelledby="headingTw" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Page Gallery:</h6>
        <a class="collapse-item" href="../galleryPortraits.php" target="_blank">Portrait</a>
        <a class="collapse-item" href="../galleryNature.php" target="_blank">Nature</a>
        <a class="collapse-item" href="../galleryWedding.php" target="_blank">Wedding</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../aboutme.php" target="_blank"><span>About Me</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="../services.php" target="_blank"><span>Services</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../pricing/pricing.html" target="_blank"><span>Pricing</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        Select "Logout" below if you are ready to end your current session.
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">
          Cancel
        </button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>