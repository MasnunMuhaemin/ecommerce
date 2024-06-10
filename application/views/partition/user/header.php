<?php
$user_logged = $this->session->userdata('user_logged');
?>
<div class="hero_area">
   <!-- header section strats -->
   <header class="header_section">
      <div>
         <nav class="navbar navbar-expand-lg custom_nav-container ">
            <div class="container">
               
            <a class="navbar-brand" href="<?= base_url() ?>"><img width="50" src="<?= base_url("assets/admin/images/") ?>logo_w.png" style="padding: 0;" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?= base_url("about") ?>">About</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                     </ul>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("view_product") ?>">Products</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("about") ?>">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("contact") ?>">Contact</a>
                  </li>
                  <?php if(!$this->session->userdata('user_logged')){ ?>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("login") ?>">Login</a>
                  </li>
                  <?php } ?>
                     <?php
                     if ($user_logged["role"] == 'user') { 
                     ?> 
                  <li class="nav-item">
                     <a class="nav-link" href="" data-toggle="modal" data-target="#myModal">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                           <g>
                              <g>
                                 <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                 c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                 C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                 c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                 C457.728,97.71,450.56,86.958,439.296,84.91z" />
                              </g>
                           </g>
                           <g>
                              <g>
                                 <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                 c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
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
                        <sup><?= $totalItems ?></sup>
                     </a>
                  </li>
                  <?php }
                   else 
                  { ?> 
                     <li>test</li>
                   <?php
                  }
                  ?>
                  <?php if ($this->session->userdata('user_logged')) { ?>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("riwayat/".$this->session->userdata('user_logged')['id_user']) ?>">Riwayat</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url("logout") ?>">Logout</a>
                  </li>
                  <?php } ?>
                  <!-- <form class="form-inline">
                     <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                     </button>
                  </form> -->
               </ul>
            </div>
         </div>
         </nav>
      </div>
   </header>
   <!-- end header section -->
   
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Keranjang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
         <div class="row">

            <div class="col-sm-12 col-md-6">
               <b>Olshop Markas Cemilan</b>
               <p class="text-justify">Alamat Pelanggan: Jalan Siliwangi Gg Lame 2 RT.08/05/RW.Lingkungan Aton Cijoho Kecamatan Kuningan Kabupaten Kuningan Jawa Barat 45513 Indonesia</p>
               <div class="row">
                  <div class="col-md-4">

                  </div>
               </div>
            </div>

            <div class="col-sm-12 col-md-6">
               <div class="box d-flex align-items-end flex-column w-100">
                  <p>Date: <?= date("d-m-y") ?></p>
                  <p>Nama Pemesan: <span id="info_nama_Pay"><?php 

                        if($this->session->userdata('user_logged')){
                           echo $this->session->userdata('user_logged')['nama_lengkap'];
                        }else{
                           echo "Anonymouse";
                        }

                     ?></span></p>
                  <p>Alamat Pemesan: <span id="info_modal_alamat_pemesan">...</span></p>
                  <p>No Penerima: <span id="info_modal_no_penerima">...</span></p>
               </div>
            </div>

         </div>

         <div class="row">
            <div class="col-md-12 col-sm-12">
               <h2 class="text-center"><b>ITEM</b></h2>
            </div>
            <div class="col-md-6 col-sm-12">
               <h3 class="text-center">Produk & Informasi</h3>
               <table class="table table-responsive w-100 shadow">
                 <thead>
                   <tr>
                     <th scope="col" class="w-100">Produk</th>
                     <th scope="col" class="w-100">Harga</th>
                     <th scope="col" class="w-100">Banyak</th>
                     <th scope="col" class="w-100">Subtotal</th>
                     <th scope="col" class="w-100">Aksi</th>
                     <th colspan="0"></th>
                  </tr>
               </thead>
               <tbody id="tbody"></tbody>
            </table>

            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="row shipping-btns">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="">Provinsi</label>
                           <select name="provinsi" class="form-control" required=""></select>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label>Kota</label>
                           <select name="kota" class="form-control" required=""></select>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label>Ekspedisi</label>
                           <select name="ekspedisi" class="form-control" required=""></select>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label>Ongkos Kirim</label>
                           <select name="ongkir" id="onkir" class="form-control" required=""></select>
                        </div>
                     </div>
                  </div>
                  <!-- <?= var_dump($this->session->userdata('user_logged')) ?> -->
                  <label for="alamat_pemesan">Alamat Pemesan</label>
                  <textarea name="alamat_pemesan" id="alamat_pemesan" class="form-control" placeholder="Kosongkan jika ingin mengirim ke alamat anda sendiri" cols="30" rows="3" required readonly><?= (isset($this->session->userdata['user_logged']) ? $this->session->userdata['user_logged']['alamat'] : '' ) ?></textarea>
                  <br>
                  <label for="alamat_pemesan_tambah">Alamat Pemesan Lainnya</label>
                  <textarea name="alamat_pemesan_tambah" id="alamat_pemesan_tambah" class="form-control" placeholder="Gunakan alamat lainnya" cols="30" rows="3"></textarea>
                  <label for="no_penerima" class="mt-3">No. Penerima</label>
                  <input type="text" class="form-control mb-3" placeholder="Kosongkan untuk nomer sendiri" id="no_penerima" value="<?= (isset($this->session->userdata['user_logged']) ? $this->session->userdata['user_logged']['no_hp'] : '' ) ?>" required>
               </div>
            </div>
         </div>
         <!-- <div class="col-md-12 col-sm-12">
            <input type="text" placeholder="Nama pemesan" id="nama_pemesan" class="form-control mb-3">
         </div> -->
         <div class="col-md-6 col-sm-12">
            <h3 class="text-center">Silahkan melakukan pembayaran</h3>
            <div class="card shadow">
               <div class="card-body">
                  <div class="card-title">
                     <div class="alert alert-info" role="alert">
                        <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAJ1BMVEVHcEwSWaBLiLs/erIYXqUNVqAPWKEoZqgPWKATWqIeYaYZXaQIU53VgPbsAAAADHRSTlMAUQshgvbkLtavQG3cPpwYAAAA30lEQVQ4jY2TWRaDIAxFIQgEYf/rrWQQNbFtfuTwLpkN4S+D6Fg65VqGazmynnx5GhN4nHYAqI2uoM6Lyn4JmDr7OgiUJ+1ITIQZASQbeZP4mznGFcDpm0FwgfIDENdhfwtRJMlMSVoApfIyONITmHoTvQcLXPUtWMDqd0B1XPoNoIF1GVx1gOAR9xyqJR5VVFmARTz7QIT6Sl4nd6lACTuLbYwSFvE+TfI1wAKgABHZAlFCqA8GYHWmrDZPWLc5y5rQnuvyCQHnCTHTEyxqWcbH1fnW1Bv0zbG+/t5v9gHzYRTWqrL4SAAAAABJRU5ErkJggg=="> Norek BRI: 443121</span>
                     </div>
                  </div>
                  <div class="card-text">
                     <p class="text-muted m-0 p-0 mb-3">*Silahkan melakukan pembayaran ke nomer rekening di atas. Dan kirimkan bukti pembayaran anda beserta nama pengirim.</p>

                     <img id="buktiPembayaranCust" class="w-100 mb-3">
                     <input type="file" class="form-control pb-3 mb-3" id="buktiInputPembayaran" multiple>

                     <?php 
                        if($this->session->userdata('user_logged')){
                      ?>
                      <!-- <a href="https://api.whatsapp.com/send?phone=6283824587800&text=test" class="btn btn-success w-100 disabled" id="btn_send_wa" target="_blank">Keep Cemilan <span class="fa fa-long-arrow-right"></span></a> -->
                      <a href="#!" class="btn btn-success w-100 disabled" id="btn_send_wa">Lanjut Pembayaran <span class="fa fa-long-arrow-right"></span></a>
                      <?php }else{ ?>
                      <a href="<?= base_url("login") ?>" class="btn btn-success w-100">Login terlebih dahulu untuk checkout</a>
                      <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal footer -->
   

</div>
</div>
</div>

<script type="text/javascript">

   let btn_send_wa = document.querySelector("#btn_send_wa");
   let nama_pemesan = document.querySelector("#nama_pemesan");
   let no_penerima = document.querySelector("#no_penerima");
   let alamat_pemesan = document.querySelector("#alamat_pemesan");
   let infoAlamatPemesan = document.querySelector("#info_modal_alamat_pemesan");
   let infoNamaPemesan = document.querySelector("#info_nama_pemesan");
   let info_modal_no_penerima = document.querySelector("#info_modal_no_penerima");
   let buktiPembayaranCust = document.querySelector("#buktiPembayaranCust")
   let tambah_alamat = document.querySelector("#alamat_pemesan_tambah")


   let dataUser = [ 0, 0, 0, 0, 0, 0, 0, 0];

   // nama_pemesan.addEventListener("change", () => {
   //    if (nama_pemesan.value !== "") {
   //       dataUser[0] = nama_pemesan.value;
   //       infoNamaPemesan.innerHTML = nama_pemesan.value
   //       if (checkVarDataUser()) {
   //          btn_send_wa.classList.remove("disabled");
   //       }
   //    }
   // })

      if(alamat_pemesan.value != ""){
         dataUser[0] = 1;
         infoAlamatPemesan.innerHTML = alamat_pemesan.value;
         if (checkVarDataUser()) {
            btn_send_wa.classList.remove("disabled");
         }
      }
   tambah_alamat.addEventListener("keyup", () => {
      if (tambah_alamat.value === "") {
         infoAlamatPemesan.innerHTML = alamat_pemesan.value;
      }else{
         infoAlamatPemesan.innerHTML = tambah_alamat.value;
      }
   })

      if(no_penerima.value != ""){
         dataUser[1] = 1;
         info_modal_no_penerima.innerHTML = no_penerima.value;
         if (checkVarDataUser()) {
            btn_send_wa.classList.remove("disabled");
         }
      }
   no_penerima.addEventListener("change", () => {
   })

   $('#buktiInputPembayaran').on('change',function(){
      var reader = new FileReader();
      const img = document.querySelector("#buktiPembayaranCust")
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

       dataUser[2]=1
       if (checkVarDataUser()) {
         btn_send_wa.classList.remove("disabled");
      }
   })

   $(document).ready(function() {
      $.ajax({
         url: '<?= base_url("update_provinsi") ?>',
         success: function(hasil) {
            $("select[name=provinsi]").html(hasil);
            $("select[name=provinsi]").on("change", function() {
               $("#provinsi").html($("option:selected", this).attr("nama"))
               $("#provinsi").attr("data-provinsi", $("option:selected", this).attr("nama"))
               dataUser[3]=1
               if (checkVarDataUser()) {
                  btn_send_wa.classList.remove("disabled");
               }
            })
         }
      })
   })
   $(document).ready(function() {
      $("select[name=provinsi]").on("change", function() {
         // mendapatkan id_provinsi yg dipillih
         var id_provinsi = $(this).val();
         // mendapatkan isi atribut nama, dari option yang dipilih
         var nama_provinsi = $("option:selected").attr("nama");
         // menaruh di input yg bernama nama_provinsi
         $("input[name=nama_provinsi]").val(nama_provinsi);
         $.ajax({
            url: '<?= base_url("datakota") ?>',
            type: 'POST',
            data: 'idprov=' + id_provinsi,
            success: function(hasil) {
               $("select[name=kota]").html(hasil);
               $("select[name=kota]").on("change", function() {
                  $("#kota").html($("option:selected", this).attr("nama"))
                  $("#kota").attr("data-kota", $("option:selected", this).attr("nama"))
                  dataUser[4]=1
                  if (checkVarDataUser()) {
                     btn_send_wa.classList.remove("disabled");
                  }
               })

            }
         });
         $("select[name=ekspedisi]").val(null);
         $("select[name=ongkir]").val(null);

         $("input[name=nama_kota]").val(null);
         $("input[name=tipe]").val(null);
         $("input[name=kode_pos]").val(null);
         $("input[name=nama_ekspedisi]").val(null);
         $("input[name=nama_paket]").val(null);
         $("input[name=biaya_paket]").val(null);
         $("input[name=lama_paket]").val(null);
      })
   })
   $(document).ready(function() {
      $("select[name=kota]").on("change", function() {
         // mendapatkan isi atribut nama
         var nama = $("option:selected", this).attr("nama");
         var kodepos = $("option:selected", this).attr("kodepos");
         var tipe = $("option:selected", this).attr("tipe");
         $("input[name=nama_kota]").val(nama);
         $("input[name=tipe]").val(tipe);
         $("input[name=kode_pos]").val(kodepos);
         dataUser[5]=1
         if (checkVarDataUser()) {
            btn_send_wa.classList.remove("disabled");
         }
      })
   })
   $(document).ready(function() {
      $.ajax({
         url: '<?= base_url("dataekspedisi") ?>',
         success: function(hasil) {
            var ekspedisi = $("select[name=ekspedisi]").html(hasil);
         }
      })
   })
   $(document).ready(function() {
      $("select[name=ekspedisi]").on("change", function() {
         var nama = $("option:selected", this).attr("nama");
         $("input[name=nama_ekspedisi]").val(nama);
         $("#ekspedisi").html($("option:selected", this).attr("nama"))
         $("#ekspedisi").attr("data-ekspedisi", $("option:selected", this).attr("nama"))
         dataUser[6]=1
         if (checkVarDataUser()) {
            btn_send_wa.classList.remove("disabled");
         }
      })
   })
   $(document).ready(function() {
      $("select[name=ekspedisi]").on("change", function() {
         // mendapatkan id kota dari selectnya kota
         var id_kota = $("select[name=kota]").val();
         var ekspedisi = $("select[name=ekspedisi]").val();
         var total_berat = $("input[name=total_berat]").val();
         $.ajax({
            url: '<?= base_url("dataongkir") ?>',
            type: 'POST',
            data: 'id_kota=' + id_kota + '&ekspedisi=' + ekspedisi + '&total_berat=' + total_berat,
            success: function(hasil) {
               // alert(hasil);
               $("select[name=ongkir]").html(hasil);
               dataUser[7]=1
               if (checkVarDataUser()) {
                  btn_send_wa.classList.remove("disabled");
               }
            }
         })
      })
   })
   $(document).ready(function() {
      $("select[name=ongkir]").on("change", function() {
         // mendapatkan isi dari atribut nama,biata,lama
         var nama = $("option:selected", this).attr("nama");
         var biaya = $("option:selected", this).attr("biaya");
         var lama = $("option:selected", this).attr("lama");

         $("input[name=nama_paket]").val(nama);
         $("input[name=biaya_paket]").val(biaya);
         $("input[name=lama_paket]").val(lama);

         $("#total_ongkir").html("Rp. " + biaya);

         var total_belanja = $("input[name=total_belanja]").val();
         var biaya_paket = $("input[name=biaya_paket]").val();

         var total_bayar = parseInt($("#data_table_product_total").data("producttotal")) + parseInt(biaya)
         $("#ongkir").html(rupiah($("option:selected", this).attr("biaya")))
         $("#ongkir").attr("data-ongkir", $("option:selected", this).attr("biaya"))
         $("#data_table_product_total").html(rupiah(total_bayar));
         $(".total_bayar").val(total_bayar);

         dataUser[8]=1
         if (checkVarDataUser()) {
            btn_send_wa.classList.remove("disabled");
         }
      })
   })

   const rupiah = (number)=>{
     return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
   }

   function checkVarDataUser(){
      
      let checking = dataUser.every(item => {
         if(item != 0){
            return true
         }else{
            return false
         }
      })

      return checking

      // if(/*dataUser[0] != null && */ dataUser[0] != null && dataUser[1] != null && dataUser[2] == 1){
      //    return true;
      // }else{
      //    return false;
      // }
   }

</script>