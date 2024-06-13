<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan Penjualan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Penjualan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Laporan Penjualan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped table-responsive">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Kode Pembelian</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Banyak</th>
                    <th>Subtotal</th>
                    <th>Customer</th>
                    <th>Alamat</th>
                    <th>No. Penerima</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status Pembayaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $total = 0;
                  if ($data != null) {
                    foreach ($data as $key => $val) { ?>
                      <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $val->uuid_checkout ?></td>
                        <td><?= $val->produk ?></td>
                        <td>Rp. <?= number_format($val->harga) ?></td>
                        <td><?= $val->banyak ?></td>
                        <td>Rp. <?= number_format($val->harga * $val->banyak) ?></td>
                        <td><?= $val->nama_penerima ?></td>
                        <td><?= $val->alamat_penerima ?></td>
                        <td><?= $val->no_penerima ?></td>
                        <td><?= $val->datetime_pay ?></td>
                        <td><span class="badge bg-success"><?= $val->status_pembayaran ?></span></td>
                        <!-- <td><span class="badge bg-success">Rp. <?= number_format($total) ?></span></td> -->
                        <!-- <td class="text-right"><a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default w-100"><i class="fas fa-print"></i> Print</a></td> -->
                      </tr>
                      <?php if ($val->status_pembayaran != "Refund Approve" && $val->status_pembayaran != "Belum Melakukan Pembayaran") {
                        $total += $val->harga * $val->banyak;
                      } ?>
                  <?php }
                  } ?>
                  <tr>
                    <td colspan="11" class="text-left"><span class="btn btn-success">Total Pendapatan: <?= number_format($total); ?></span></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="11" class="text-left">
                      <a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default mr-3"><i class="fas fa-print"></i> Print Per Bulan</a>
                      <!-- <a href="<?= base_url("report_per_year") ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print Per Tahun</a> -->
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>