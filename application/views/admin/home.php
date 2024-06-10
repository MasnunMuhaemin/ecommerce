Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-dolly-flatbed"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Data Produk</span>
              <span class="info-box-number">
                <?php if($data != null){ foreach($data as $key => $val) {}?> 
                <?= $key+1  ?> Produk tersedia

                <?php }else{
                  echo 0;
                } ?>
                <small></small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shipping-fast"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pengeluaran</span>
              <span class="info-box-number">
                <?php if($dataPengeluaran != null){ foreach($dataPengeluaran as $key => $val) {}?> 
                <?= $key+1  ?> Produk telah di checkout
                <?php }else{
                  echo 0;
                } ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-dollar-sign"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendapatan</span>
              <span class="info-box-number">
                <?php if($dataPengeluaranFromLaporan != null){ $total = 0; foreach($dataPengeluaranFromLaporan as $key => $val) { $total += $val->subtotal ;}?> 
               Rp. <?= number_format($total)  ?>
              <?php }else{
                echo 0;
              } ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>

      <div class="row">
       <div class="col-md-12">
        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Data Produk</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Deskripsi Barang</th>
                    <!-- <th>Gambar Barang</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php if($data != null){ foreach($data as $key => $val){ ?>
                    <?php if($key >= 0 && $key <= 9){ ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><a href="<?= base_url("edit_data/".$val->id_barang) ?>"><?= $val->kode_barang ?></a></td>
                    <td><!-- <a href="pages/examples/invoice.html"> --><?= $val->nama_barang ?><!-- </a> --></td>
                    <td>Rp. <?= number_format($val->harga_barang) ?></td>
                    <td><?= $val->stok_barang ?></td>
                    <td><?= $val->deskripsi ?></td>
                    
                  </tr>
                  <?php }}} ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer clearfix">
            <a href="<?= base_url("view_data") ?>" class="btn btn-sm btn-info float-left">Lihat Semua Produk</a>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
