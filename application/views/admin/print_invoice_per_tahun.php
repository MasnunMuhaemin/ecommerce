<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/admin/") ?>dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> WARDANI COLLECTION
          <small class="float-right">Tanggal Print: <?= date("d/m/Y") ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong> <strong>Wardani Collection</strong><br>
          Komplek Pasar Kepuh Blok C <br>
          No.11 Kabupaten Kuningan <br>
          Phone: 083824587800<br>
          Wardanicollection@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <!-- <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div> -->
      <!-- /.col -->
      <div class="col-sm-4 offset-sm-4 invoice-col">
        <div class="d-flex align-items-end flex-column">
          
        <p style="margin: 0; padding: 0;"><b>Invoice #007612</b></p>
        
        <p style="margin: 0; padding: 0;"><b>Order ID:</b> 4F3S8J</p>
        <p style="margin: 0; padding: 0;"><b>Account:</b> <?= $this->session->userdata('admin_logged')['role']; ?></p>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <!-- <th>Kode</th> -->
                      <th>Produk</th>
                      <th>Harga</th>
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
                    <?php $total = 0; if($data != null){ foreach($data as $key => $val){ $total += $val->harga;?>
                    <tr>
                      <td><?= $key+1 ?></td>
                      <!-- <td><?= $val->uuid_checkout ?></td> -->
                      <td><?= $val->produk ?></td>
                      <td>Rp. <?= number_format($val->harga_satuan) ?></td>
                      <td><?= $val->banyak ?></td>
                      <td>Rp. <?= number_format($val->harga) ?></td>
                      <td><?= $val->nama_penerima ?></td>
                      <td><?= $val->alamat_penerima ?></td>
                      <td><?= $val->no_penerima ?></td>
                      <td><?= substr($val->datetime_pay, 0, strrpos($val->datetime_pay, ' ')) ?></td>
                      <td><span class="badge"><?= $val->status_pembayaran ?></span></td>
                      <!-- <td><span class="badge bg-success">Rp. <?= number_format($total) ?></span></td> -->
                      <!-- <td class="text-right"><a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default w-100"><i class="fas fa-print"></i> Print</a></td> -->
                    </tr>
                    <?php }} ?>
                    <!-- <tr>
                      <td colspan="11" class="text-right"><span class="btn btn-success">Total Pendapatan: <?= $total; ?></span></td>
                    </tr> -->
                  </tbody>
                  <!-- <tfoot>
                    <tr>
                      <td colspan="11" class="text-left">
                        <a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default mr-3"><i class="fas fa-print"></i> Print Per Bulan</a>
                        <a href="<?= base_url("report_per_year") ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print Per Tahun</a>
                      </td>
                    </tr>
                  </tfoot> -->
                </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-4 offset-sm-8">
        <div class="table-responsive">
          <table class="table">
            <!-- <tr>
              <th style="width:50%">Subtotal:</th>
              <td>$250.30</td>
            </tr> -->
            <!-- <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr> -->
            <!-- <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr> -->
            <tr>
              <th>Total:</th>
              <td>
                <?php 

                

                echo "Rp. ".number_format($total);

                ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
