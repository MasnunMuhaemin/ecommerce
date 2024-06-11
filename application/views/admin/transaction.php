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
              <li class="breadcrumb-item active">Lihat Transaksi</li>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lihat Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Harga Barang</th>
                      <th>Jumlah Terjual</th>
                      <th>Tanggal</th>
                      <th>Total Pendapatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($data != null){ foreach($data as $key => $val){ ?>
                    <tr>
                      <td><?= $key+1 ?></td>
                      <td><?= $val->kode_barang ?></td>
                      <td><?= $val->nama_barang ?></td>
                      <td><?= $val->harga_barang ?></td>
                      <td><?= $val->stok_pengeluaran ?></td>
                      <td><?= $val->tgl_input ?></td>
                      <td><span class="badge bg-success">Rp. <?= number_format($val->total_pendapatan) ?></span></td>
                      <!-- <td class="text-right"><a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default w-100"><i class="fas fa-print"></i> Print</a></td> -->
                    </tr>
                    <?php }} ?>
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