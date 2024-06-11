<section class="why_section layout_padding pb-0">
   <div class="container">
      <!-- <div class="heading_container heading_center">
         <h2>
            Untuk melakukan pembayaran bisa dilihat pada tombol detail
         </h2>
      </div> -->
      <div class="row">
         <div class="col-md-12 col-sm-12">
         	<div class="jumbotron">
         		<div class="container">
         			<?php $banyak =0; $total = 0; if($data != false){ for($i = 0; $i < 1; $i++){ ?>
	         			<div class="row mb-3">
	         				<div class="col-md-3 col-sm-12">
	         					<h6 class="text-muted">From</h6>
	         					<h5 class=""><b>Admin Wardani Collection</b></h5>
	         					<p class="m-0" >Komplek Pasar Kepuh Blok C No.11 Kabupate Kuningan</p>
	         					<p class="m-0" >No. Hp: 083824587800</p>
	         					<p class="m-0" >wardanicollection@gmail.com</p>
	         				</div>

	         				<div class="col-md-3 col-sm-12">
	         					<h6 class="text-muted">To</h6>
	         					<h5 class=""><b><?= $this->session->userdata('user_logged')['nama_lengkap'] ?></b></h5>
	         					<p class="m-0" >Dikirim ke: <?= $data[$i]->alamat_penerima ?></p>
	         					<p class="m-0" >No. Hp: <?= $data[$i]->no_penerima ?></p>
	         					<!-- <p class="m-0" >E-Mail: info@tokonline.com</p> -->
	         				</div>

	         				<div class="col-md-4 offset-md-2 col-sm-12">
	         					<!-- <h6 class="text-muted">To</h6> -->
	         					<h5 class="mb-3"><b>Status Pembayaran: </b></h5>
	         					<?php if ($data[$i]->status_pembayaran == "Belum Melakukan Pembayaran"): ?>
	         						<p class="m-0 text-warning rounded">Menunggu Konfirmasi Admin</p>

	         						<!-- <div class="alert alert-info" role="alert">
		         						<span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAJ1BMVEVHcEwSWaBLiLs/erIYXqUNVqAPWKEoZqgPWKATWqIeYaYZXaQIU53VgPbsAAAADHRSTlMAUQshgvbkLtavQG3cPpwYAAAA30lEQVQ4jY2TWRaDIAxFIQgEYf/rrWQQNbFtfuTwLpkN4S+D6Fg65VqGazmynnx5GhN4nHYAqI2uoM6Lyn4JmDr7OgiUJ+1ITIQZASQbeZP4mznGFcDpm0FwgfIDENdhfwtRJMlMSVoApfIyONITmHoTvQcLXPUtWMDqd0B1XPoNoIF1GVx1gOAR9xyqJR5VVFmARTz7QIT6Sl4nd6lACTuLbYwSFvE+TfI1wAKgABHZAlFCqA8GYHWmrDZPWLc5y5rQnuvyCQHnCTHTEyxqWcbH1fnW1Bv0zbG+/t5v9gHzYRTWqrL4SAAAAABJRU5ErkJggg=="> Norek BRI: 443121</span>
										</div>
	         						
	         						<p class="m-0 text-info" >Silahkan lakukan pembayaran pada nomor rekening yang tertera <b>atas nama: Siska Wulandari</b></p> -->
	         					<?php else: ?>
	         						<p class="m-0 text-success" ><?= $data[$i]->status_pembayaran ?></p>
	         						<!-- <img src="<?= base_url("assets/images/qrpembayaran.png") ?>" alt="QRIS pembayaran" class="w-50"> -->
	         					<?php endif ?>



	         					<?php if($data[$i]->status_pembayaran == "Barang dikirim"){ ?>
	         						<div class="d-flex justify-content-around mt-3">
				                     <a href="<?= base_url("barangditerima/".$this->session->userdata('user_logged')['id_user']."/".$data[$i]->uuid_checkout)."/barangditerima" ?>" class="btn btn-primary btn-sm mr-2 ">Barang diterima</a>
				                     <a href="#!" class="btn btn-primary btn-sm text-warning" id="btn-modal" data-toggle="modal" data-target="#exampleModalCenterRefund" type="button" data-id="<?= $this->session->userdata('user_logged')['id_user'] ?>" data-uuid="<?= $data[$i]->uuid_checkout ?>" data-status="barangtidakditerima">Barang tidak diterima/ barang tidak sesuai</a>
	         						</div>
	         						<div class="modal fade" id="exampleModalCenterRefund" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									     	<form action="<?= base_url("barangtidakditerima") ?>" method="post" enctype="multipart/form-data">
											  <div class="modal-content">
											     <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLongTitle">Alasan barang tidak diterima</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											           <span aria-hidden="true">&times;</span>
											        </button>
											     </div>
											     <div class="modal-body">
											        <div class="container">
											           <div class="row">
											             <div class="col-md-4">
											              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
											                <div class="carousel-inner">
											                	<?php if($data!=false){ foreach($data as $key => $val){ ?>
											                		<?php if($key == 0){ ?>
													                  <div class="carousel-item active">
													                    <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100">
													                  </div>
													               <?php }else{ ?>
													                  <div class="carousel-item">
													                    <img src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" class="w-100">
													                  </div>
													               <?php } ?>
											               	<?php }} ?>
											                </div>
											              </div>
											             </div>
											             <div class="col-md-8">
											              <div class="form-group">
															    <label for="deskripsi_refund">Deskripsikan</label>
															    <textarea class="form-control m-0" id="deskripsi_refund" aria-describedby="refundHelp" placeholder="Tulis alasan disini" name="deskripsi"></textarea>
															    <small id="refundHelp" class="form-text text-muted">*Tuliskan alasan anda dengan benar dan jelas agar owner <b>Approve</b> dengan cepat. Proses ini akan memakan waktu cukup lama jika alasan anda bertele - tele dan tidak jelas</small>
															  </div>
															  <img id="imageRefund" class="w-100 mb-3" />
															  <div class="input-group mb-3">
																  <div class="custom-file">
																    <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon01" name="gambarRefund">
																    <label class="custom-file-label" id="file-label-refund" for="inputGroupFile02">Pilih Gambar yang akan di refund</label>
																  </div>
																</div>
															  
															  <input type="hidden" name="id_user" value="<?= $this->session->userdata('user_logged')['id_user'] ?>">
															  <input type="hidden" name="uuid" value="<?= $data[$i]->uuid_checkout ?>">
															  <input type="hidden" name="status" value="barangtidakditerima">
															  <input type="hidden" name="harga_barang" value="<?= $data[$i]->harga ?>">
															  <input type="text" min="1" name="jumlah_pengembalian" value="1" placeholder="Jumlah Pengembalian" id="jumlahRefund">
															  <div>
															  	<div class="form-check p-0" style="width: 50px">
																  <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Refund" checked>
																  <label class="form-check-label ml-5" for="exampleRadios1">
																    Refund
																  </label>
																</div>
																<div class="form-check p-0" style="width: 50px">
																  <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="Return">
																  <label class="form-check-label ml-5" for="exampleRadios1">
																    Return
																  </label>
																</div>
															  </div>
											             </div>
											           </div>
											        </div>
											     </div>
											     <div class="modal-footer">
											       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											       <button type="submit" class="btn btn-danger">Ya barang tidak diterima/ barang tidak sesuai</button>
											       <!-- <a href="<?= base_url("barangdikirim/".$data[$i]->uuid_checkout) ?>" class="btn btn-primary">Approve Refund</a> -->
											       <!-- <a href="<?= base_url("barangtidakditerima/".$this->session->userdata('user_logged')['id_user']."/".$data[$i]->uuid_checkout)."/barangtidakditerima" ?>" class="btn btn-danger btn-sm ml-2 ">Ya barang tidak diterima</a>  -->
											     </div>
											  </div>
									     	</form>
										</div>
									</div>
	         						
			                  <?php } ?>
	         					<!-- <p class="m-0" >E-Mail: info@tokonline.com</p> -->
	         				</div>
	         			</div>
         			<?php }} ?>
         			
         			<hr>
         			<div class="row mt-3">
         				<?php $subtotal = 0; if($data != false){ foreach($data as $val){ $subtotal += $val->harga*$val->banyak; ?>
         				<div class="col-md-12 col-sm-12">
         					<div class="card w-100 mb-3">
         						<div class="card-body">
         							<div class="container-fluid">
         								<div class="row align-items-center">
         									<div class="col-md-2 h-100">
         										<img class="w-100 img-rounded" src="<?= base_url("assets/uploads/foto_produk/".$val->image) ?>" alt="Card image cap">
         									</div>

         									<div class="col-md-10">
         										<span class="text-muted" style="font-style: italic; font-size: 12px;">4/13/2023</span>
         										<h4 class="mt-2">Produk: <?= $val->produk ?></h4>
         										<h5>Harga: Rp. <?= number_format($val->harga) ?></h5>
         										<p style="margin-bottom: 0;">Dikirim ke alamat: <?= $val->alamat_penerima ?></p>
         										<p style="margin:0;">No. Telp Penerima: <?= $val->no_penerima ?></p>
         										<p style="margin:0;">Ukuran: <?= $val->ukuran ?></p>
         										<p style="margin:0;">Model: <?= $val->model ?></p>
         										<p style="margin:0;">Bahan: <?= $val->bahan ?></p>
         										<!-- <p style="margin:0;">No. Telp Pemilik Akun: 083824587801</p> -->
         									</div>
         								</div>
         							</div>
         						</div>
         						<div class="card-footer">
         							<div class="row align-items-center">
         								<div class="col-md-3">
        										<p style="margin-bottom: 0;">Banyak: <span id="banyakbeli"><?= $val->banyak ?></span></p>
         								</div>
         								<div class="col-md-3 offset-md-6 text-right">
         									<p class="m-0">Subtotal: <?= "Rp. ".number_format($val->banyak*$val->harga) ?></p>
         									<!-- <p><?php $banyak += $val->banyak; $total += $val->banyak*$val->harga; ?></p> -->
         								</div>
         							</div>
         						</div>
         					</div>
         				</div>
         				<?php } ?>
         			</div>

         			<div class="row mt-3">
         				<div class="col-md-6 offset-md-6">
         					<div class="card">
	         					<table class="table table-responsive">
	         						<thead>
	         							<tr>
	         								<th scope="col">Total Belanja</th>
	         								<th scope="col">Subtotal</th>
	         								<th scope="col">Ongkir</th>
	         								<th scope="col">Total Pembayaran</th><!-- 
	         								<?php if($val->status_pembayaran == "Belum Melakukan Pembayaran"){ ?>
	         									<th scope="col">Aksi</th>
	         								<?php } ?> -->
	         							</tr>
	         						</thead>
	         						<tbody>
	         							<tr>
	         								<td><?= $banyak ?></td>
	         								<td>Rp. <?= number_format($subtotal) ?></td>
	         								<td>Rp. <?= number_format((int) $val->ongkir) ?></td>
	         								<td><?= "Rp. ".number_format($total+(int)$val->ongkir) ?></td>
	         								<!-- <td>
	         									<?php if($val->status_pembayaran == "Belum Melakukan Pembayaran"){ ?>
							                     <a type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#uploadBukti">Bayar</a>
							                  <?php } ?>
	         								</td> -->
	         							</tr>
	         							
	         						</tbody>
	         					</table>
         						
         					</div>
         				</div>
         			</div>
         		<?php } ?>
         		</div>
         		
         	</div>
         </div>
      </div>
   </div>
</section>

<div class="modal fade" id="uploadBukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form method="post" action="<?= base_url('bayar') ?>" enctype="multipart/form-data">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Lakukan Pembayaran</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Lakukan pembayaran sejumlah: Rp. <?= number_format($total+(int) $val->ongkir) ?></p>
	        <input type="hidden" name="uuid" id="uuid_upload">
	        <img id="imageBukti" class="w-100 mb-3" />
	        <div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="gambar">
				    <label class="custom-file-label" for="inputGroupFile01">Pilih Bukti Pembayaran</label>
				  </div>
				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Kirim</button>
	      </div>
    	</form>
    </div>
  </div>
  <script type="text/javascript">
  	let banyak_beli = document.querySelector("#banyakbeli");
	let jumlahRefund = document.querySelector("#jumlahRefund");

	jumlahRefund.addEventListener("keyup", e => {
		if(parseInt(e.key) > parseInt(banyak_beli.innerHTML)){
			alert("Pembelian hanya: "+banyak_beli.innerHTML)
			jumlahRefund.value = 1
		}
	})
  </script>
</div>

<!-- modal refund -->



<script type="text/javascript">

	


	document.querySelector("#uuid_upload").value = "<?= $this->uri->segment(3) ?>"
	$('#inputGroupFile01').on('change',function(){
		var reader = new FileReader();
		const img = document.querySelector("#imageBukti")
       //get the file name
       var fileName = $(this)[0].files[0].name
       console.log($(this)[0].files[0])
       //replace the "Choose a file" label
       $(this).next('.custom-file-label').html(fileName);
       reader.onload = e => {
       	console.log(e.target)
       	img.setAttribute("src", e.target.result)
       }

       reader.readAsDataURL($(this)[0].files[0]);
   })

   $('#inputGroupFile02').on('change',function(){
		var reader = new FileReader();
		const img = document.querySelector("#imageRefund")
       //get the file name
       var fileName = $(this)[0].files[0].name
       console.log($(this)[0].files[0])
       //replace the "Choose a file" label
       $(this).next('.file-label-refund').html(fileName);
       reader.onload = e => {
       	console.log(e.target)
       	img.setAttribute("src", e.target.result)
       }

       reader.readAsDataURL($(this)[0].files[0]);
   })

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