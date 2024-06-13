

<!-- inner page section -->
<!-- <section class="inner_page_head">
   <div class="container_fuild">
      <div class="row">
         <div class="col-md-12">
            <div class="full">
               <h3>Product Grid</h3>
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2 id="shopNow">
            Our <span>products</span>
         </h2>
      </div>
      <div class="row">
         <?php if($data != null){ foreach($data as $val){ ?>
            <div class="col-sm-6 col-md-4 col-lg-4">
               <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="#!" id="add_to_cart" class="option1" data-idproduk="<?= $val->id_barang ?>" data-namaproduk="<?= $val->nama_barang ?>" data-hargaproduk="<?= $val->harga_barang ?>" data-ukuran="<?= $val->ukuran ?>" data-model="<?= $val->model ?>" data-bahan="<?= $val->bahan ?>" data-srcImg="<?= $val->gambar ?>">
                           Add To Cart
                        </a>
                        <!-- <a href="#" class="option2">
                           Buy Now
                        </a> -->
                        <a href="<?= base_url('detailproduk/'.$val->id_barang); ?>" class="option2">
                           Detail Produk
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                     <img src="<?= base_url("assets/uploads/foto_produk/") ?><?= $val->gambar ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        <?= $val->nama_barang; ?>
                     </h5>
                     <h6>Rp.
                        <?= number_format($val->harga_barang) ?>
                     </h6>
                  </div>
               </div>
            </div>
         <?php }}else{ ?> 
            <p class="text-center text-danger w-100">Belum ada Produk</p>
         <?php } ?>
      </div>

      <!-- <div class="btn-box">
         <a href="<?= base_url("view_product") ?>">
            View All products
         </a>
      </div> -->
   </div>
</section>
<!-- end product section -->
<script type="text/javascript">
   $(document).ready(function(){
        $('.option1').click(function(){
      var product_id    = $(this).data("idproduk");
      var product_name  = $(this).data("namaproduk");
      var product_price = $(this).data("hargaproduk");
      var quantity      = 1;
      var srcImg        = this.getAttribute("data-srcImg")
      var ukuran        = this.getAttribute("data-ukuran")
      var model        = this.getAttribute("data-model")
      var bahan        = this.getAttribute("data-bahan")
      console.log(srcImg)
      $.ajax({
        url : "<?= site_url('add_to_cart');?>",
        method : "POST",
        data : {
            product_id: product_id, 
            product_name: product_name, 
            product_price: product_price,
            quantity: quantity,
            image: srcImg,
            ukuran: ukuran,
            model: model,
            bahan: bahan
         },
         success: function(data){
          $('#tbody').html(data);
          // alert("Berhasil ditambahkan ke keranjang")
          location.reload()
      }
   });
});

        $('#tbody').load("<?php echo site_url('load_cart');?>");

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

        // $("#btn_send_wa").click(function(){
        //     let text = "";

        //     let namapemesan = $("span#info_nama_pemesan").text()
        //     console.log(namapemesan)
        //     let alamatpemesan = $("#alamat_pemesan").val()

        //     $.map($("#data_table_tr > #data_table_text_product"), function (elem, index){
        //        text += elem.getAttribute("data-textproduct")+" "
        //     })
        //     let btn_sending = $(this).attr("href", "https://api.whatsapp.com/send?phone=6283824587800&text=Hallo Kak saya "+namapemesan+" ingin pesan "+text+"di antar ke alamat "+alamatpemesan)

        //     console.log(text)
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

         console.log(no_telp)

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

     })
</script>