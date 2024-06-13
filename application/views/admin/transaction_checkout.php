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
                      <th>Nama Pemilik Akun</th>
                      <th>No. Handphone Pemilik AKun</th>
                      <th>No. Handphone Penerima</th>
                      <th>Produk</th>
                      <th>Alamat Penerima</th>
                      <th>Due Date</th>
                      <th>Status Pembayaran</th>
                      <th>Aksi</th>
                      <!-- <th>Total Yang Harus diBayar</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($data != null){ foreach($data as $key => $val){ ?>
                    <tr>
                      <td><?= $key+1 ?></td>
                      <td><?= $val->nama_lengkap ?></td>
                      <td><?= $val->no_hp ?></td>
                      <td><?= $val->no_penerima ?></td>
                      <td><?= $val->produk ?></td>
                      <td><?= $val->alamat_penerima ?></td>
                      <td><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></td>
                      <td>
                        <?php 
                          if($val->status_pembayaran == "Belum Melakukan Pembayaran"){
                            echo "<p class='bg-warning rounded text-center'>Menunggu Konfirmasi</p>";
                          }else if($val->status_pembayaran == "Sudah Melakukan Pembayaran"){
                            echo "<p class='text-warning'>".$val->status_pembayaran."</p>";
                          }else if($val->status_pembayaran == "Refund" || $val->status_pembayaran == "Return"){
                            echo "<p class='text-warning btn btn-sm btn-primary'>".$val->status_pembayaran."</p>";
                          }else{
                            echo "<p class='text-success'>".$val->status_pembayaran."</p>";
                          }
                        ?>
                        </td>
                      <!-- <td><span class="badge bg-success">Rp. <?= number_format($val->banyak*$val->harga) ?></span></td> -->
                      <td>
                        <?php if ($val->status_pembayaran == "Sudah Melakukan Pembayaran" || $val->status_pembayaran == "Belum Melakukan Pembayaran"): ?>
                      	<a href="<?= base_url("lihat_request/".$val->uuid_checkout) ?>" class="btn btn-warning">Lihat</a>
                      	<a href="<?= base_url("konfirmasi/".$val->uuid_checkout) ?>" class="btn btn-success">Konfirmasi</a>
                      	<?php endif ?>
                      	<?php if ($val->status_pembayaran == "Approve"): ?>
                        <a href="<?= base_url("lihat_request/".$val->uuid_checkout) ?>" class="btn btn-warning">Lihat</a>
                        <a href="<?= base_url("barangdikemas/".$val->uuid_checkout) ?>" class="btn btn-secondary">Barang dikemas</a>
                        <a href="<?= base_url("barangdikirim/".$val->uuid_checkout) ?>" class="btn btn-primary">Barang dikirim</a>
                        <?php endif ?>
                        <?php if ($val->status_pembayaran == "Barang dikemas"): ?>
                        <a href="<?= base_url("lihat_request/".$val->uuid_checkout) ?>" class="btn btn-warning">Lihat</a>
                        <a href="<?= base_url("barangdikirim/".$val->uuid_checkout) ?>" class="btn btn-primary">Barang dikirim</a>
                        <?php endif ?>
                        <?php if ($val->status_pembayaran == "Barang dikirim"): ?>
                        <a href="<?= base_url("lihat_request/".$val->uuid_checkout) ?>" class="btn btn-warning">Lihat</a>
                        <?php endif ?>
                        <?php if ($val->status_pembayaran == "Refund"): ?>
                        <a href="#!" class="btn btn-primary btn-sm text-warning" id="btn-modal" data-toggle="modal" data-target="#exampleModalCenter<?= $key ?>" type="button">Lihat</a>
                        <?php endif ?>
                        <?php if($val->status_pembayaran == "Return"): ?>
                        <a href="#!" class="btn btn-primary btn-sm text-warning" id="btn-modal" data-toggle="modal" data-target="#exampleModalCenter<?= $key ?>" type="button">Lihat</a>
                        <?php endif; ?>
                      </td>
                      <!-- <td class="text-right"><a href="<?= base_url("print_invoice") ?>" rel="noopener" target="_blank" class="btn btn-default w-100"><i class="fas fa-print"></i> Print</a></td> -->
                    </tr>

                    <div class="modal fade" id="exampleModalCenter<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Customer  <b><?= $val->nama_lengkap ?></b> meminta refund barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                             <?php if($data_refund != null){ $dataDeskripsi = ""; $nominalRefund = 0; $ongkir = 0;?>
                                            <?php foreach($data_refund as $key => $vall){ ?>
                                            <?php if($val->uuid_checkout == $vall->uuid_checkout){ ?>
                                                <?php 
                                                  $dataDeskripsi = $vall->deskripsi;
                                                  $nominalRefund += $vall->harga_barang * $vall->banyak;
                                                  $ongkir = (int)$vall->ongkir;
                                                ?>
                             <div class="modal-body">
                                <div class="container">
                                   <div class="row">
                                     <div class="col-md-4">
                                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                          
                                                <p><b>Gambar yang akan di kembalikan</b></p>
                                                <br>
                                                <img src="<?= base_url("assets/uploads/foto_refund/".$vall->gambar_refund) ?>" class="w-100">
                                              
                                            
                                        </div>
                                      </div>
                                     </div>
                                     <div class="col-md-8">
                                      <p><b>Deskripsi Pengembalian:</b><br><?= $dataDeskripsi ?></p>
                                      <br>
                                      <p><b>Harga Barang:</b> <br>Rp. <?= number_format($vall->harga_barang) ?></p>
                                      <br>
                                      <p><b>Jumlah pengembalian: </b><br> <?= number_format($vall->jumlah_pengembalian) ?></p>
                                      <br>
                                      <span>Nominal pengembalian:<br> Rp. <?= number_format($vall->harga_barang*$vall->jumlah_pengembalian/*+$ongkir*/); ?></span>

                                      <p class="mt-3 mb-0">Note untuk reject</p>
                                      <textarea id="note_reject" placeholder="Note untuk reject" class="form-control"></textarea>
                                      <hr class="w-100">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <a class="btn btn-danger" id="reject" href="<?= base_url("reject/".$vall->uuid_checkout."/note/reject") ?>">Reject</a>
                               <a href="<?= base_url("approverefund/".$vall->uuid_checkout."/approverefund/".$val->status_pembayaran) ?>" class="btn btn-primary">Approve</a>
                                      
                                     </div>
                                   </div>
                                   <!-- <div class="row">
                                     <div class="col-md-12">
                                       
                                     </div>
                                   </div> -->
                                </div>
                             </div>
                             <div class="modal-footer">
                               
                             </div>
                                              <?php }} ?>
                                            <?php } ?>
                          </div>
                       </div>
                    </div>

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

  <script type="text/javascript">
    const carousel = document.querySelector(".carousel-inner")
    carousel.firstChild.nextSibling.setAttribute("class", "carousel-item active")

    let note_reject_text = document.querySelectorAll("#note_reject")

    note_reject_text.forEach(note_text=>{
      note_text.addEventListener("change", e => {
        let btn_reject = document.querySelector("#reject")
        
        let href = e.srcElement.nextSibling.nextElementSibling.nextSibling.nextSibling.nextSibling.nextSibling.getAttribute("href")
        // let const_string = href.slice(-11).split("/")[0]
        let new_const_ = href.replace("note", e.target.value)

        let new_string = href.replace("note", e.target.value)
        let fix_string = new_string.split(" ").join("_")
          
        e.srcElement.nextSibling.nextElementSibling.nextSibling.nextSibling.nextSibling.nextSibling.setAttribute("href", fix_string)

      })
    })

    // function note_reject(e){

    //   let new_href = string.replace("note", e.value)
      
    //   const createAttr = document.createAttribute("href")
    //   createAttr.value = new_href

    //   btn_reject.forEach(d=>{
    //     d.setAttribute("href", new_href)
    //   })
    // }

  </script>