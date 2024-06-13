<section class="inner_page_head">
	<div class="container_fuild">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<h3>Riwayat Pembelian Anda</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="why_section layout_padding">
   <div class="container">
      <!-- <div class="heading_container heading_center">
         <h2>
            Untuk melakukan pembayaran bisa dilihat pada tombol detail
         </h2>
      </div> -->
      <div class="row">
         <div class="col-md-12 col-sm-12">

            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Barang diterima
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     <div class="list-group">
                     <?php if($data != false){ foreach($data as $key => $val){ ?>
                        <?php if($val->status_pembayaran == "Barang diterima"){ ?>
                        <a href="<?= base_url("detailriwayat/".$this->session->userdata('user_logged')['id_user']."/".$val->uuid_checkout) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                           <div class="row">
                              <div class="col-md-2 col-sm-12">
                                 <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100 rounded">
                              </div>
                              <div class="col-md-10 col-sm-12">
                                 <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?= $val->produk ?></h5>
                                    <small class="text-muted" style="font-size: 12px; font-style: italic; margin: 0; margin-bottom: .6rem"><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></small>
                                 </div>
                                 <?php 
                                 if($val->status_pembayaran == "Belum Melakukan Pembayaran"){
                                    echo "<p class='text-danger'>Silahkan melakukan pembayaran. Klik tombol lihat detail</p>";
                                 }else if($val->status_pembayaran == "Refund"){
                                    echo "<p class='text-warning'>".$val->status_pembayaran."</p>";
                                 }else{
                                    echo "<p class='text-success'>".$val->status_pembayaran."</p>";
                                 }
                                 ?>
                                 <p class="mb-1">Alamat Penerima: <?= $val->alamat_penerima ?></p>
                                 <small class="text-muted mb-1" style="margin: 0; margin-bottom: .6rem">Pembelian dengan kode: <?= $val->uuid_checkout ?></small>
                                 <p class="mb-1 font-weight-bold text-right">Total Pembayaran: Rp. <?= number_format($val->harga*$val->banyak+$val->ongkir) ?></p>
                              </div>
                           </div>
                        </a>
                     <?php }}} ?>
                  </div>
               </div>
                </div>
              </div>
              <div class="card">
                <!-- <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Barang refund & Return
                    </button>
                  </h5> -->
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                     <?php if($data != false){ foreach($data as $key => $val){ ?>
                        <?php if($val->status_pembayaran == "Refund" || $val->status_pembayaran == "Refund Approve" || $val->status_pembayaran == 'Return' || $val->status_pembayaran == 'Return Approve' || $val->status_pembayaran == "return atau refund Reject"){ ?>
                           <a href="<?= base_url("detailriwayat/".$this->session->userdata('user_logged')['id_user']."/".$val->uuid_checkout) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                              <div class="row">
                                 <div class="col-md-2 col-sm-12">
                                    <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100 rounded">
                                 </div>
                                 <div class="col-md-10 col-sm-12">
                                    <div class="d-flex w-100 justify-content-between">
                                       <h5 class="mb-1"><?= $val->produk ?></h5>
                                       <small class="text-muted" style="font-size: 12px; font-style: italic; margin: 0; margin-bottom: .6rem"><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></small>
                                     </div>
                                     <?php 
                                       if($val->status_pembayaran == "Return"){
                                          echo "<p class='text-danger'>Return</p>";
                                       }else if($val->status_pembayaran == "Refund"){
                                          echo "<p class='text-warning'>".$val->status_pembayaran."</p>";
                                       }else{
                                          echo "<p class='text-success'>".$val->status_pembayaran."</p>";
                                       }
                                     ?>
                                     <p class="mb-1">Alamat Penerima: <?= $val->alamat_penerima ?></p>
                                     <small class="text-muted mb-1" style="margin: 0; margin-bottom: .6rem">Pembelian dengan kode: <?= $val->uuid_checkout ?></small>
                                     <p class="mb-1 font-weight-bold text-right">Total Pembayaran: Rp. <?= number_format($val->harga*$val->banyak+$val->ongkir) ?></p>
                                     <p class="text-muted">Note Reject: <?= $val->note_reject ?></p>
                                 </div>
                              </div>
                          </a>
                     <?php } ?>
                  <?php }} ?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                      Sudah dikonfirmasi
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                     <?php if($data != false){ foreach($data as $key => $val){ ?>
                        <?php if($val->status_pembayaran == "Sudah Melakukan Pembayaran" || $val->status_pembayaran == "Barang dikemas" || $val->status_pembayaran == 'Barang dikirim' || $val->status_pembayaran == 'Approve'){ ?>
                           <a href="<?= base_url("detailriwayat/".$this->session->userdata('user_logged')['id_user']."/".$val->uuid_checkout) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                              <div class="row">
                                 <div class="col-md-2 col-sm-12">
                                    <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100 rounded">
                                 </div>
                                 <div class="col-md-10 col-sm-12">
                                    <div class="d-flex w-100 justify-content-between">
                                       <h5 class="mb-1"><?= $val->produk ?></h5>
                                       <small class="text-muted" style="font-size: 12px; font-style: italic; margin: 0; margin-bottom: .6rem"><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></small>
                                     </div>
                                     <?php 
                                       if($val->status_pembayaran == "Return"){
                                          echo "<p class='text-danger'>Return</p>";
                                       }else if($val->status_pembayaran == "Belum Melakukan Pembayaran"){
                                          echo "<p class='text-warning'>Menunggu Konfirmasi</p>";
                                       }else{
                                          echo "<p class='text-success'>".$val->status_pembayaran."</p>";
                                       }
                                     ?>
                                     <p class="mb-1">Alamat Penerima: <?= $val->alamat_penerima ?></p>
                                     <small class="text-muted mb-1" style="margin: 0; margin-bottom: .6rem">Pembelian dengan kode: <?= $val->uuid_checkout ?></small>
                                     <p class="mb-1 font-weight-bold text-right">Total Pembayaran: Rp. <?= number_format($val->harga*$val->banyak+$val->ongkir) ?></p>
                                 </div>
                              </div>
                          </a>
                     <?php } ?>
                  <?php }} ?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                      Menunggu Konfirmasi
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                     <?php if($data != false){ foreach($data as $key => $val){ ?>
                        <?php if($val->status_pembayaran == "Belum Melakukan Pembayaran" || $val->status_pembayaran == "Belum Melakukan Pembayaran Approve" || $val->status_pembayaran == 'Return' || $val->status_pembayaran == 'Return Approve'){ ?>
                           <a href="<?= base_url("detailriwayat/".$this->session->userdata('user_logged')['id_user']."/".$val->uuid_checkout) ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                              <div class="row">
                                 <div class="col-md-2 col-sm-12">
                                    <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100 rounded">
                                 </div>
                                 <div class="col-md-10 col-sm-12">
                                    <div class="d-flex w-100 justify-content-between">
                                       <h5 class="mb-1"><?= $val->produk ?></h5>
                                       <small class="text-muted" style="font-size: 12px; font-style: italic; margin: 0; margin-bottom: .6rem"><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></small>
                                     </div>
                                     <?php 
                                       if($val->status_pembayaran == "Return"){
                                          echo "<p class='text-danger'>Return</p>";
                                       }else if($val->status_pembayaran == "Belum Melakukan Pembayaran"){
                                          echo "<p class='text-warning'>Menunggu Konfirmasi</p>";
                                       }else{
                                          echo "<p class='text-success'>".$val->status_pembayaran."</p>";
                                       }
                                     ?>
                                     <p class="mb-1">Alamat Penerima: <?= $val->alamat_penerima ?></p>
                                     <small class="text-muted mb-1" style="margin: 0; margin-bottom: .6rem">Pembelian dengan kode: <?= $val->uuid_checkout ?></small>
                                     <p class="mb-1 font-weight-bold text-right">Total Pembayaran: Rp. <?= number_format($val->harga*$val->jumlah_beli+$val->ongkir) ?></p>
                                 </div>
                              </div>
                          </a>
                     <?php } ?>
                  <?php }} ?>
                  </div>
                </div>
              </div>
              
            </div>




            
</section>

<script type="text/javascript">
   $("#btn_send_wa").click(()=>{
      let _data = []
      let uuid_co = rand(10)
      let alamat_penerima = $("#alamat_pemesan").val()
      let no_telp = $("#info_modal_no_penerima").html()
      let srcPembayaran = document.querySelector("#buktiInputPembayaran")
      $.map($("#data_table_tr > #data_table_text_product"), function (elem, index){
         _data[index] = {
            id_barang: elem.getAttribute("data-id_produk"),
            product: elem.getAttribute("data-textproduct"),
            banyak: elem.getAttribute("data-banyakproduk"),
            harga: elem.getAttribute("data-hargaperitem"),
            image: elem.getAttribute("data-image"),
            ukuran: elem.getAttribute("data-ukuran"),
            model: elem.getAttribute("data-model"),
            bahan: elem.getAttribute("data-bahan"),
            provinsi: $("#provinsi").data("provinsi"),
            kota: $("#kota").data("kota"),
            ekspedisi: $("#ekspedisi").data("ekspedisi"),
            ongkir: $("#ongkir").data("ongkir")
         }
      })

      console.log(_data)

      let data = JSON.stringify(_data)

      sendData(uuid_co, data, alamat_penerima, no_telp, srcPembayaran)

   })
   

   function sendData(uuid_co, _data, alamat_penerima, no_telp, srcPembayaran) {
      var xhr = new XMLHttpRequest();
      var url = "http://localhost/app/co/";

      let form = new FormData()

      form.append("uuid", uuid_co)
      form.append("data", _data)
      form.append("alamat", alamat_penerima)
      form.append("no_telp", no_telp)
      // form.append("gambarPembayaran", srcPembayaran.files)
      jQuery.each(jQuery('#buktiInputPembayaran')[0].files, function(i, file) {
          form.append('gambarPembayaran', file);
      });

      let formData = new FormData();
      fetch('http://localhost/app/co/', {
          method:"POST",
          body: form
      })
      .then(response =>{
          response.text()
          .then(data => {
               let alertData = data
               if(alertData == "tidak bisa checkout karena stok terbatastrue"){
                  let newAlert = alertData.substring(0, alertData.indexOf("true"));
                  alert(newAlert)
                  location.reload()
               }
               if(data == true || data == "true"){
                  let id_userss = "<?= $this->session->userdata('user_logged')['id_user'] ?>"
                  if(id_userss != null || id_userss != "" || id_userss != 0){
                     window.location.replace("<?= base_url('riwayat/'.$this->session->userdata('user_logged')['id_user']) ?>")
                  }else{
                     alert("Silahkan login terlebih dahulu")
                  }
               }
          })
      })

      return false;
  }

   const rupiah = (number)=>{
     return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
   }

  const rand = length => {
      let result = '';
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      const charactersLength = characters.length;
      let counter = 0;
      while (counter < length) {
         result += characters.charAt(Math.floor(Math.random() * charactersLength));
         counter += 1;
      }
      return result;
  }
</script>