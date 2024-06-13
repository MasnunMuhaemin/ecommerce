   <!DOCTYPE html>
   <html>

   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="<?= base_url("assets/admin/images/") ?>logo_w.png" type="">
      <title><?= $title ?></title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url("assets/"); ?>css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="<?= base_url("assets/"); ?>css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?= base_url("assets/"); ?>css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?= base_url("assets/"); ?>css/responsive.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="<?= base_url("assets/"); ?>js/jquery-3.4.1.min.js"></script>
   </head>

   <body>

      <!--  <div class="floating-container">
         <div class="floating-button"><i class="fa fa-plus"></i></div>
         <div class="element-container"> -->
      <!-- <a href="https://google.com"> 
   <span class="float-element tooltip-left">
   <i class="material-icons">phone</i>
   </span>
</a> -->

      <!-- <a href="https://wa.me/083824587800">
   <span class="float-element" style="background: #4CAF50; text-decoration: none;">
      <i class="fa fa-whatsapp"></i>
   </span>
</a>
<a href="chat">
   <span class="float-element" style="background: #FF9800; text-decoration: none;">
      <i class="fa fa-comment"></i>
   </span>
</a>
</div>
</div> -->

      <?php if ($this->session->userdata("user_logged")) { ?>
         <button style="position: fixed; bottom: 0; right: 50px; background-color: #f18424;
   color: white;
   padding: 8px 12px;
   border: none;
   cursor: pointer;
   opacity: 0.8; z-index: 1000;
   width: 150px;" class="open-button" onclick="openForm()"><span style="position: absolute; right: 1rem; background-color: #000; border-radius: 50%; width: 1.3rem; height: 1.3rem; font-size: .8rem;" id="count_notif">0</span> <i class="fa fa-send"></i> Chat</button>
         <div class="chat-popup" id="myForm">
            <form class="form-container" method="post" onsubmit="return sendChat()">
               <!-- <h3>Rio Gofani - Customer Service</h3> -->
               <div class="d-flex align-items-start">
                  <span class="mb-3">Silahkan kirim pesan CS kami akan menjawab - <b>(layanan chat beroperasi pada pukul: 09:00 - 20.00)</b></span>
                  <button type="button" class="no-bordered open-chat-home"><i class="fa fa-chevron-right"></i></button>
               </div>

               <hr>

               <label for="msg"><b>Nama Lengkap</b></label>
               <input type="text" name="nama" class="nameInstant" placeholder="Nama Lenkap" value="<?= $this->session->userdata('user_logged')['nama_lengkap']; ?>" readonly required>

               <label for="msg"><b>Message</b></label>
               <textarea placeholder="Type message.." name="msg" class="msgInstant" id="mshHome" required></textarea>

               <button type="submit" class="btn">Send</button>
               <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
         </div>

         <div class="chat-popup-home" id="myFormChat">
            <!-- <form class="form-container" method="post" enctype="multipart/form-data" id="sendWithFile"> -->
            <div class="form-container">
               <div class="box-chat">
                  <div class="nav-chat d-flex align-items-center">
                     <button type="button" class="mr-2 close-chat-home"><i class="fa fa-chevron-left"></i></button>
                     <p class="lead" style="margin: 0">Kami siap membantu anda.</p>
                  </div>
                  <div class="box-chat-home">




                     <!-- <div class="chat-to">
                     <img src="<?= base_url("assets/uploads/buktiTF/adele1.png") ?>" alt="bukti pembayaran" class="w-100">
                     <p>asdsa</p>
                  </div> -->
                  </div>
                  <hr>
                  <div class="box-reply">
                     <div class="box-paperclip">

                        <input type="file" name="fileupload" id="fileupload"><i class="fa fa-paperclip paperclip"></i>

                     </div>
                     <!-- <input type="text"> -->
                     <textarea name="typeMsg" id="typeMsg" class="scrolbar-none" cols="30" rows="1" required></textarea>
                     <button type="button" onclick="uploadfile()"><i class="fa fa-send"></i></button>
                  </div>
               </div>

            </div>

            <!-- </form> -->
         </div>
      <?php } else { ?>
         <button style="position: fixed; bottom: 0; right: 23px; background-color: #555;
   color: white;
   padding: 8px 12px;
   border: none;
   cursor: pointer;
   opacity: 0.8; z-index: 1000;
   width: 150px;" class="open-button" onclick="openForm()"><i class="fa fa-send"></i> Chat</button>

         <div class="chat-popup" id="myForm">
            <div class="btn-not-login">
               <a href="auth" class="btn btn-success mb-3 w-100">Login</a>
               <button type="button" class="btn btn-danger w-100" onclick="closeForm()">Close</button>
            </div>
         </div>
      <?php } ?>




      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" style="position: fixed; bottom: 0; z-index: 1000; display: none;" data-target="#exampleModalCenter" id="btn-modal">
         Launch demo modal
      </button>

      <!-- Modal Quesioner -->
      <?php if ($this->session->userdata("user_logged")) { ?>
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Harap isi quesioner dibawah ini</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12 col-sm-12">
                              <h3>Bahan apa yang anda sukai?</h3>
                              <hr>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card bahan" data-bahan="Adem">
                                 <div class="card-body">
                                    <p class="card-text">Bahan Adem</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card bahan" data-bahan="Jersy">
                                 <div class="card-body">
                                    <p class="card-text">Bahan Levis</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card bahan" data-bahan="Levis">
                                 <div class="card-body">
                                    <p class="card-text">Bahan Levis</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row mt-3">
                           <div class="col-md-12 col-sm-12">
                              <h3>Model apa yang anda sukai</h3>
                              <hr>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card model" data-model="T_Shirt">
                                 <img class="card-img-top w-100" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-7577385/uniqlo_limited_uniqlo_bt21_rj_shirt_full01_re513p6h.jpg" alt="Card image cap">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card model" data-model="Panjang">
                                 <img class="card-img-top w-100" src="https://lzd-img-global.slatic.net/g/p/45068158b208e149d2237e1f50944271.jpg_2200x2200q80.jpg_.webp" alt="Card image cap">
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card model" data-model="Separo">
                                 <img class="card-img-top w-100" src="https://ds393qgzrxwzn.cloudfront.net/resize/c500x500/cat1/img/images/0/Jc5M6IzBES.jpg" alt="Card image cap">
                              </div>
                           </div>
                        </div>

                        <div class="row mt-3">
                           <div class="col-md-12 col-sm-12">
                              <h3>Ukuran apa yang anda minati</h3>
                              <hr>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card ukuran" data-ukuran="L">
                                 <div class="card-body">
                                    <p class="card-text">Ukuran L</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card ukuran" data-ukuran="M">
                                 <div class="card-body">
                                    <p class="card-text">Ukuran M</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12">
                              <div class="card ukuran" data-ukuran="XL">
                                 <div class="card-body">
                                    <p class="card-text">Ukuran XL</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="modal-footer">
                     <form action="saveQuesioner" method="post">
                        <input type="text" name="uuid" id="uuid">
                        <input type="text" id="bahan" name="bahan">
                        <input type="text" id="model" name="model">
                        <input type="text" id="ukuran" name="ukuran">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      <?php } ?>



      <script type="text/javascript">
         let dataDummy

         function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.querySelector(".open-button").style.display = "none";
         }

         function closeForm() {
            document.getElementById("myForm").style.display = "none";
            document.querySelector(".open-button").style.display = "block";
         }

         document.querySelector(".open-chat-home").addEventListener("click", () => {
            document.querySelector(".chat-popup").style.display = "none"
            document.querySelector(".chat-popup-home").style.display = "block"
            let box_chat = document.querySelector(".box-chat-home")
            if (box_chat.scrollTop == 0) {
               scrollToBottom()
            }

            dibaca()
         })

         function dibaca() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/app/updateNotif/"

            let data = JSON.stringify({
               id: <?= $id_user = (isset($this->session->userdata['user_logged'])) ? $this->session->userdata['user_logged']['id_user'] : '123' ?>,
               status: "dibaca"
            })

            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8")
            xhr.onload = function() {
               document.querySelector("#count_notif").innerHTML = "0"
            }
            xhr.send(data);

         }

         document.querySelector(".close-chat-home").addEventListener("click", () => {
            document.querySelector(".chat-popup").style.display = "block"
            document.querySelector(".chat-popup-home").style.display = "none"

         })

         if ('<?= (isset($this->session->userdata["user_logged"])) ? $this->session->userdata['user_logged']['id_user'] : 'null' ?>' != null) {
            window.addEventListener("load", () => {
               setInterval(() => {
                  load_chat()
                  load_notif()
               }, 1000)

            })
         }

         function load_notif() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/app/getNotif/" + <?= $user_id = (isset($this->session->userdata['user_logged'])) ? $this->session->userdata['user_logged']['id_user'] : '123' ?>

            xhr.onloadstart = function() {
               // document.getElementById("notif-side").innerHTML = "0";
            }

            xhr.onerror = function() {
               alert("Gagal mengambil data");
            };

            xhr.onloadend = function() {
               console.log(this.responseText)
               let data = JSON.parse(this.responseText);
               console.log(url)
               if (data.code != 404) {
                  document.getElementById("count_notif").innerHTML = data
               } else {

               }

            };

            xhr.open("GET", url, true);
            xhr.send();
         }

         function load_chat() {
            // let user_id = (isset($this->session->userdata['user_logged'])) ? $this->session->userdata['user_logged']['id_user'] : '123'
            fetch("http://localhost/app/getChat")
               .then(response => response.json()).then(data => {
                  let box_chat = document.querySelector(".box-chat-home")
                  if (data.code == 404) {
                     box_chat.style.textAlign = "center"
                     box_chat.innerHTML = data.message
                     return false;
                  }
                  data.forEach(d => {
                     box_chat.style.textAlign = "left"
                     if (d.id_sender != "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image == "") {
                        dataDummy += `<div class="chat-from">`
                        // dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
                        dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
                        dataDummy += `</div>`
                     }

                     if (d.id_sender != "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image != "" && d.message != "") {
                        dataDummy += `<div class="chat-from">`
                        dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}" class="w-100"/>`
                        dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
                        dataDummy += `</div>`
                     }

                     if (d.id_sender != "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image != "" && d.message == "") {
                        dataDummy += `<div class="chat-from">`
                        // dataDummy += `<div class="img-only">`
                        dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}" class="w-100"/>`
                        dataDummy += `<span class="time">${d.time}</span>`
                        // dataDummy += `</div>`
                        dataDummy += `</div>`
                     }

                     if (d.id_sender == "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image == "") {
                        dataDummy += `<div class="chat-to">`
                        // dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
                        dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
                        dataDummy += `</div>`
                     }

                     if (d.id_sender == "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image != "" && d.message != "") {
                        dataDummy += `<div class="chat-to">`
                        dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}" class="w-100"/>`
                        dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
                        dataDummy += `</div>`
                     }

                     if (d.id_sender == "<?= $this->session->userdata['user_logged']['id_user'] ?>" && d.image != "" && d.message == "") {
                        dataDummy += `<div class="chat-to">`
                        // dataDummy += `<div class="img-only">`
                        dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/ class="w-100">`
                        dataDummy += `<span class="time">${d.time}</span>`
                        // dataDummy += `</div>`
                        dataDummy += `</div>`
                     }

                  })
                  // console.log(dataDummy)
                  box_chat.innerHTML = dataDummy
                  // scroll_top()
                  dataDummy = ""
               })
         }

         function loadChat() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/app/getChat";

            xhr.onloadstart = function() {
               document.getElementById("button").innerHTML = "Loading...";
               console.log(this.responseText)
            }

            xhr.onerror = function() {
               alert("Gagal mengambil data");
            };

            xhr.onloadend = function() {
               console.log(this.response)
               if (this.responseText !== "") {
                  var data = JSON.parse(this.responseText);
                  let idSender = "<?= $this->session->userdata('user_logged')['id_user'] ?>"
                  let box_chat = document.querySelector(".box-chat-home")

                  data.forEach((d, e) => {
                     console.log(d.image.length)
                     if (d.id_sender == idSender) {

                        if (d.image != "") {


                           // setInterval( scrollToBottom , 1000 )
                           setTimeout(function() {
                              let node = document.createElement("div")
                              node.classList.add("chat-to")
                              let img = document.createElement("img")
                              let fileLocation = "<?= base_url("assets/uploads/buktiTF/") ?>" + d.image
                              img.classList.add("w-100")
                              img.setAttribute("src", fileLocation)

                              if (d.message != "") {
                                 let text = document.createElement("p")

                                 let textNode = document.createTextNode(d.message)

                                 text.appendChild(textNode)
                                 node.appendChild(img, text)

                                 box_chat.appendChild(node)

                              }

                              let text = document.createElement("p")

                              let textNode = document.createTextNode(d.message)

                              text.appendChild(textNode)
                              node.appendChild(img)

                              box_chat.appendChild(node)


                              scrollToBottom()
                           }, 0)


                        }


                        if (d.message != "") {

                           // setInterval( scrollToBottom , 1000 )
                           setTimeout(function() {
                              let node = document.createElement("div")
                              node.classList.add("chat-to")
                              let text = document.createElement("p")
                              let textNode = document.createTextNode(d.message)

                              text.appendChild(textNode)

                              node.appendChild(text)

                              // let box_chat = document.querySelector(".box-chat-home")
                              box_chat.appendChild(node)
                              scrollToBottom()
                           }, 0)


                        }
                     }

                     if (d.id_sender != idSender && d.id_receive == idSender) {
                        if (d.image != "") {


                           // setInterval( scrollToBottom , 1000 )
                           setTimeout(function() {
                              let node = document.createElement("div")
                              node.classList.add("chat-from")
                              let img = document.createElement("img")
                              let fileLocation = "<?= base_url("assets/uploads/buktiTF/") ?>" + d.image
                              img.classList.add("w-100")
                              img.setAttribute("src", fileLocation)

                              if (d.message != "") {
                                 let text = document.createElement("p")

                                 let textNode = document.createTextNode(d.message)

                                 text.appendChild(textNode)
                                 node.appendChild(img, text)

                                 box_chat.appendChild(node)

                              }

                              let text = document.createElement("p")

                              let textNode = document.createTextNode(d.message)

                              text.appendChild(textNode)
                              node.appendChild(img)

                              box_chat.appendChild(node)


                              scrollToBottom()
                           }, 0)


                        }


                        if (d.message != "") {

                           // setInterval( scrollToBottom , 1000 )
                           setTimeout(function() {
                              let node = document.createElement("div")
                              node.classList.add("chat-from")
                              let text = document.createElement("p")
                              let textNode = document.createTextNode(d.message)

                              text.appendChild(textNode)

                              node.appendChild(text)

                              // let box_chat = document.querySelector(".box-chat-home")
                              box_chat.appendChild(node)
                              scrollToBottom()
                           }, 0)


                        }
                     }

                  })

               } else {
                  console.log("gagal")
               }
            };

            xhr.open("GET", url, true);
            xhr.send();

         }

         function sendChat() {
            var xhr = new XMLHttpRequest();
            var url = "http://localhost/app/chat";

            if (document.querySelector(".msgInstant").value != '') {
               var data = JSON.stringify({
                  nama: document.querySelector(".nameInstant").value,
                  msg: document.querySelector(".msgInstant").value,
                  status: "Belum dibaca"
               });

               xhr.open("POST", url, true);
               xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
               xhr.onload = function() {
                  // console.log (this.responseText);

                  document.querySelector(".msgInstant").value = ""

                  let parentBox = document.querySelector(".box-chat-home")
                  removeChild(parentBox)
                  loadChat()
                  // setInterval( scrollToBottom , 1000 )
                  setTimeout(scrollToBottom, 0)
               };

               xhr.send(data);
               document.querySelector(".chat-popup").style.display = "none"
               document.querySelector(".chat-popup-home").style.display = "block"

               return false;
            }

            return false;
         }

         async function uploadfile() {
            let form = new FormData()
            let file = document.querySelector("#fileupload")
            let msg = document.querySelector("#typeMsg")

            // console.log(file.files[0])

            form.append("file", file.files[0])
            form.append("msg", msg.value)

            msg.value = ""
            file.value = ""
            // console.log(form)

            await fetch("http://localhost/app/chatUser", {
               method: "POST",
               body: form
            }).then(res => {
               console.log(res.text())
               let parentBox = document.querySelector(".box-chat-home")
               removeChild(parentBox)
               loadChat()
               // setInterval( scrollToBottom , 1000 )
               // setTimeout(scrollToBottom, 0)
            })
         }

         function scrollToBottom() {
            let parentBox = document.querySelector(".box-chat-home")
            parentBox.scrollTo(0, parentBox.scrollHeight)
         }

         function removeChild(parent) {
            while (parent.firstChild) {
               parent.removeChild(parent.firstChild)
            }
         }

         let bbbox = document.querySelector(".box-chat-home")
      </script>