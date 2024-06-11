<section class="inner_page_head">
	<div class="container_fuild">
		<div class="row">
			<div class="col-md-12">
				<div class="full">
					<h3>Detail Produk</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="why_section layout_padding">
	<div class="container">
		
		<div class="row">
			<?php if($data != null){ foreach($data as $val){ ?>
				<div class="col-md-8">
					<div class="box">
						<div class="img-box">
							<img src="<?= base_url("assets/uploads/foto_produk/".$val->gambar) ?>" alt="<?= $val->nama_barang ?>" class="w-100">
						</div>

					</div>
					<!-- <div class="detail-box">
						<h5>
							<?= $val->nama_barang ?>
							<p></p>
						</h5>
						<p>
							<?= $val->deskripsi ?>
						</p>
					</div> -->
				</div>
			<?php }} ?>
			<?php if($data != null){ foreach($data as $val){ ?>
				<div class="col-md-4">
					<div class="box ">
					<!-- <div class="img-box">
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
							<g>
								<g>
									<path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667
									v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667
									S123.221,234.667,117.333,234.667z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
									S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
									S368.853,469.333,245.333,469.333z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989
									c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011
									s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347
									C389.717,143.296,390.443,136.576,386.752,131.989z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005
									s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083
									c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333
									c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667
									S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136
									c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667
									s-4.8,10.667-10.667,10.667H192z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667
									c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
									S315.221,277.333,309.333,277.333z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288
									c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352
									c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
									S400.555,277.333,394.667,277.333z" />
								</g>
							</g>
							<g>
								<g>
									<path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333
									c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
								</g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
						</svg>
					</div> -->
					<div class="detail-box">
						<h5 class="text-left">
							<?= $val->nama_barang ?>
						</h5>
						<p class="text-left">
							Rp. <?= number_format($val->harga_barang) ?>
						</p>
						<p class="text-left">Stock: <?= $val->stok_barang ?></p>
						<p class="text-left">
							<?= $val->deskripsi ?>
						</p>
						<p class="text-left">Jumlah Pesanan: <input id="jml_pesan" type="number" class="form-control" value="1" min="1" max="<?= $val->stok_barang ?>"></p>
						<button id="dataproduk" class="btn-bg-salmon" data-idproduk="<?= $val->id_barang ?>" data-namaproduk="<?= $val->nama_barang ?>" data-hargaproduk="<?= $val->harga_barang ?>" data-stok="<?= $val->stok_barang ?>" data-image="<?= $val->gambar ?>">Tambah Keranjang</button>
					</div>
				</div>
			</div>
		<?php }} ?>
	</div>
</div>
</section>

<script type="text/javascript">
	$(document).ready(function(){
		$('#dataproduk').click(function(){
			var product_id    = $(this).data("idproduk");
			var product_name  = $(this).data("namaproduk");
			var product_price = $(this).data("hargaproduk");
			var quantity      = $("#jml_pesan").val();
			var stok 		  = $(this).data("stok")
			var image         = $(this).data("image")
			console.log(stok)
			if(parseInt($("#jml_pesan").val()) != -1 && parseInt($("#jml_pesan").val()) != 0){
				if ($("#jml_pesan").val() <= parseInt(stok)) {
					$.ajax({
						url : "<?= site_url('add_to_cart');?>",
						method : "POST",
						data : {
							product_id: product_id, 
							product_name: product_name, 
							product_price: product_price,
							quantity: quantity,
							image: image
						},
						success: function(data){
							$('#tbody').html(data);
							// alert("Berhasil ditambahkan ke keranjang")
							location.reload()
						}
					});
				}else{
					alert("Maaf Stok Barang Tersisa : "+stok)
				}
				
			}else{
				alert("Mohon Isi Data Dengan Benar")
			}

		});

		$('#tbody').load("<?php echo site_url('load_cart');?>");

		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); 
			$.ajax({
				url : "<?php echo site_url('delete_cart');?>",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#tbody').html(data);
				}
			});
		});

		$(document).on("change", ".product_qty", function(){
			$.ajax({
				url : "<?php echo site_url('update_cart');?>",
				method : "POST",
				data : {
					row_id : $(this).data("rowid"),
					qty: $(this).val()
				},
				success :function(data){
					$('#tbody').html(data);
				}
			});
		})

		// $("#btn_send_wa").click(function(){
		// 	let text = "";

		// 	let namapemesan = $("span#info_nama_pemesan").text()
		// 	console.log(namapemesan)
		// 	let alamatpemesan = $("#alamat_pemesan").val()

		// 	$.map($("#data_table_tr > #data_table_text_product"), function (elem, index){
		// 		text += elem.getAttribute("data-textproduct")+" "
		// 	})
		// 	let btn_sending = $(this).attr("href", "https://api.whatsapp.com/send?phone=6283824587800&text=Hallo Kak saya "+namapemesan+" ingin pesan "+text+"di antar ke alamat "+alamatpemesan)

		// 	console.log(text)
		// })

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

	})
</script>