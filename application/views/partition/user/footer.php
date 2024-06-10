<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
           <div class="full">
              <div class="logo_footer">
               <a href="#"><img width="70" src="<?= base_url("assets/admin/images/") ?>logo_w.png" alt="#" /></a>
            </div>
            <div class="information_f">
               <p><strong>ADDRESS:</strong> Komplek Pasar Kepuh Blok C No.11 Kabupaten Kuningan</p>
            </div>
         </div>
      </div>
      <div class="col-md-8">
         <div class="row">
            <div class="col-md-2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="<?= base_url("") ?>">Beranda</a></li>
                           <li><a href="<?= base_url("view_product") ?>">Produk</a></li>
                           <li><a href="<?= base_url("about") ?>">Tentang</a></li>
                           <li><a href="<?= base_url("contact") ?>">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>     
            <div class="col-md-10">
               <div class="widget_menu">
                  <h3>Newsletter</h3>
                  <div class="information_f">
                   <p>Subscribe by our newsletter and get update our product.</p>
                </div>
                <div class="form_sub">
                  <form>
                     <fieldset>
                        <div class="field">
                           <input type="email" placeholder="Enter Your Mail" name="email" />
                           <input type="submit" value="Subscribe" />
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</footer>
<!-- footer end -->
<div class="cpy_">
   <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://fkom.uniku.ac.id/">SKRIPSI FKOM UNIKU</a><br>

      Create By <a href="https://www.instagram.com/riogofani/" target="_blank">Rio Gofani</a>

   </p>
</div>
<!-- jQery -->

<!-- popper js -->
<script src="<?= base_url("assets/"); ?>js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url("assets/") ?>js/bootstrap.js"></script>
<!-- custom js -->
<script src="<?= base_url("assets/"); ?>js/custom.js"></script>

<script type="text/javascript">


         // let box_nav_item = document.querySelector(".navbar-nav");
         // let nav_item = box_nav_item.querySelectorAll("li.nav-item");
         let nav_item = document.querySelectorAll("li.nav-item");

         let pathUrl = window.location.pathname.split("/");
         if(pathUrl[pathUrl.length-1] == "view_product"){

            for(let i = 0; i < nav_item.length; i++){
               nav_item[0].className = nav_item[0].className.replace(" active", "");
               // this.className += " active";
               nav_item[1].className = "nav-item active"
            }

         }else if(pathUrl[pathUrl.length-1] == "about"){
            for(let i = 0; i < nav_item.length; i++){
               nav_item[0].className = nav_item[0].className.replace(" active", "");
               // this.className += " active";
               nav_item[2].className = "nav-item active"
            }
         }else if(pathUrl[pathUrl.length-1] == "contact"){
           for(let i = 0; i < nav_item.length; i++){
            nav_item[0].className = nav_item[0].className.replace(" active", "");
               // this.className += " active";
               nav_item[3].className = "nav-item active"
            }
         }else if(pathUrl[pathUrl.length-2] == "riwayat"){
           for(let i = 0; i < nav_item.length; i++){
            nav_item[0].className = nav_item[0].className.replace(" active", "");
               // this.className += " active";
               nav_item[5].className = "nav-item active"
            }
         }else if(pathUrl[pathUrl.length-3] == "detailriwayat"){
           for(let i = 0; i < nav_item.length; i++){
            nav_item[0].className = nav_item[0].className.replace(" active", "");
               // this.className += " active";
               nav_item[5].className = "nav-item active"
            }
         }

         console.log(pathUrl)

         if(localStorage.getItem('popState') != 'shown'){
            document.querySelector("#btn-modal").click()
            localStorage.setItem("popState", "shown")
            localStorage.setItem("uuid", parseInt(10)+Math.floor(Math.random() * (parseInt(100000) - parseInt(10) + 1))+"_abs")


            let data = []
            let dataModel = []
            let dataUkuran = []

            let cardBahan = document.querySelectorAll(".bahan")
            cardBahan.forEach((a) => {
               a.onclick = function(){
                  let b = document.querySelector(".bahan.activeSelect")
                  if(b) b.classList.remove('activeSelect')
                  this.classList.add("activeSelect")

                  document.querySelector("#bahan").value = a.getAttribute("data-bahan")
               }
            })

            let cardModel = document.querySelectorAll(".model")
            cardModel.forEach((a) => {
               a.onclick = function(){
                  let b = document.querySelector(".model.activeSelect")
                  if(b) b.classList.remove('activeSelect')
                  this.classList.add("activeSelect")

                  document.querySelector("#model").value = a.getAttribute("data-model")
               }
            })

            let cardukuran = document.querySelectorAll(".ukuran")
            cardukuran.forEach((a) => {
               a.onclick = function(){
                  let b = document.querySelector(".ukuran.activeSelect")
                  if(b) b.classList.remove('activeSelect')
                  this.classList.add("activeSelect")

                  document.querySelector("#ukuran").value = a.getAttribute("data-ukuran")
               }
            })
         }

         // document.querySelector("#uuid").value = localStorage.getItem("uuid").split("_")[0];

         // document.querySelector("#ls").value = localStorage.getItem("uuid").split("_")[0]

         // document.cookie = "uuid = " + localStorage.getItem("uuid").split("_")[0]

         

      </script>
   </body>
   </html>