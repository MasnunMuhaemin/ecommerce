<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Chat</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-end">
              <h3 class="card-title bg-warning rounded p-2">New Message</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Pengguna</th>
                    <!-- <th>Harga Barang</th> -->
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($notif != null) { ?>
                    <?php foreach ($notif as $key => $val) { ?>
                      <?php if ($val->id_sender != $this->session->userdata['admin_logged']['id_user']) { ?>
                        <tr>
                          <td><?= $key++ ?></td>
                          <td style="position: relative;"><?= $val->nama ?> <sup style="background-color: red; border-radius: 50%; padding: .7rem; position: absolute; top: 30%; bottom: 50%; right: .5rem" id="notif-side"><?= $val->notif ?></sup></td>
                          <!-- <td><?= $val->message ?></td> -->
                          <!-- <td><img src="<?= base_url("assets/uploads/buktiTF/") ?><?= $val->image ?>" alt="Bukti tf" class="w-50"></td> -->
                          <td><a href="<?= base_url("ochat/$val->id_sender/dibaca") ?>" class="btn btn-primary mr-3">Buka</a><a href="<?= base_url("deleteChat/" . $val->id_users) ?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                      <?php } ?>
                    <?php } ?>
                  <?php } ?>
                </tbody>
                <!-- <tfoot>
                  	<tr>
                  		<td colspan="7" class="text-left">
                  			<a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  		</td>
                  	</tr>
                  </tfoot> -->
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Pengguna</th>
                    <!-- <th>Harga Barang</th> -->
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($data != null) {
                    foreach ($data as $key => $val) {
                  ?>
                      <tr>
                        <td><?= $key + 1 ?></td>
                        <td style="position: relative;"><?= $val->nama_lengkap ?></td>
                        <!-- <td><?= $val->message ?></td> -->
                        <!-- <td><img src="<?= base_url("assets/uploads/buktiTF/") ?><?= $val->image ?>" alt="Bukti tf" class="w-50"></td> -->
                        <td><a href="<?= base_url("ochat/$val->id_users/null") ?>" class="btn btn-primary mr-3">Buka</a><a href="<?= base_url("deleteChat/" . $val->id_users) ?>" class="btn btn-danger">Hapus</a></td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
                <!-- <tfoot>
                    <tr>
                      <td colspan="7" class="text-left">
                        <a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                      </td>
                    </tr>
                  </tfoot> -->
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>