<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url("admin") ?>" class="brand-link">
    <img src="<?= base_url("assets/admin/") ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">WARDANI COLLECTION</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url("assets/admin/images/logo_w.png") ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrator</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-close">
          <a href="<?= base_url("admin") ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Menu
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php if ($this->session->userdata('admin_logged')['role'] == "admin") { ?>
              <li class="nav-item">
                <a href="<?= base_url("add_data") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("view_data") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Data Produk</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= base_url("pengeluaran") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="<?= base_url("transaction") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?= base_url("transaction_checkout") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Request</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("report") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("home-chat-admin") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chats <sup style="background-color: red; border-radius: 50%; padding: .5rem; position: absolute; top: 30%; right: .5rem" id="notif-side">0</sup></p>
                </a>
              </li>
            <?php } else if ($this->session->userdata('admin_logged')['role'] == "pemilik") {  ?>
              <li class="nav-item">
                <a href="<?= base_url("report") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a href="<?= base_url("report") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("home-chat-admin") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chats</p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </li>


        <li class="nav-item">
          <a href="<?= base_url("logout") ?>" class="nav-link">
            <i class="nav-icon fa fa-sign-out-alt"></i>
            <p class="text">Keluar</p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
  window.addEventListener("load", () => {
    setInterval(() => {
      loadChat()
    }, 1000)
  })

  function loadChat() {
    var xhr = new XMLHttpRequest();
    var url = "http://localhost/app/getNotif/" + <?= $this->session->userdata['admin_logged']['id_user'] ?>

    xhr.onloadstart = function() {
      // document.getElementById("notif-side").innerHTML = "0";
    }

    xhr.onerror = function() {
      alert("Gagal mengambil data");
    };

    xhr.onloadend = function() {
      let data = JSON.parse(this.responseText);
      if (data.code != 404)
        document.getElementById("notif-side").innerHTML = data

    };

    xhr.open("GET", url, true);
    xhr.send();

  }
</script>