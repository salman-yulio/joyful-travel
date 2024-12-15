<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #009ada;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-family:Arial;" href="#"><img src="img/logo1.png" width="60x" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"><i class="bi bi-border-width"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if ($_SESSION['role'] === 'admin'): ?>
        
        <?php elseif ($_SESSION['role'] === 'visitor'): ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link dropdown-item text-white" href="index-user.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-item text-white" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-item text-white" href="contact.php">Contact</a>
        </li>
      </ul>
    <?php endif; ?>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link dropdown-item text-white" onclick="return confirm('Anda Yakin Ingin Keluar?')" href="logout.php">Logout</a> 
      </li>
    </ul>
  </div>
</nav>