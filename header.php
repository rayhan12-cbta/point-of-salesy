<header class="header">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="dashboard.php">
        <img src="images/logo (2).png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
        DASBOARD
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="products.php">Master</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rekap.php">Rekap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>  
        </ul>
      </div>
    </div>
  </nav>
</header>

<style>
  .header {
    background-color: #333;
    padding: 20px;
    text-align: center;
  }

  .navbar-brand {
    font-size: 24px;
    font-weight: bold;
  }

  .navbar-brand img {
    margin-right: 10px;
  }

  .navbar-nav {
    margin-top: 10px;
  }

  .nav-item {
    margin-right: 20px;
  }

  .nav-link {
    color: #fff;
    text-decoration: none;
  }

  .nav-link:hover {
    color: #ccc;
  }

  .dropdown-menu {
    background-color: #333;
    border: none;
    border-radius: 0;
  }

  .dropdown-item {
    color: #fff;
    text-decoration: none;
  }

  .dropdown-item:hover {
    color: #ccc;
  }
</style>