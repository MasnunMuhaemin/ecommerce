<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Open Chat</h3><br>
							<p class="text-warning"><?= $this->session->flashdata('infoFlashAdd'); ?></p>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-chat">
									<?php if($data != null || $data != "") foreach($data as $val){ ?>
										<?php if ($val->id_sender == $this->session->userdata('admin_logged')['id_user']) { ?>
											<?php if($val->image != "" && $val->message != ""){ ?>
												<div class="chat-right">
														<img src="<?= base_url("assets/uploads/buktiTF/$val->image") ?>" alt="Bukti TF">
														<p><?= $val->message; ?> <span class="time"><?= $val->time ?></span></p>
													<div class="bubble-chat-right">
													</div>
												</div>
											<?php }else if($val->image =="" && $val->message != ""){ ?>
												<div class="chat-right">
														<p><?= $val->message; ?> <span class="time"><?= $val->time ?></span></p>
													<div class="bubble-chat-right">
													</div>
												</div>
											<?php }else if($val->image !="" && $val->message == ""){ ?>
												<div class="chat-right">
													<div class="img-only">
														<img src="<?= base_url("assets/uploads/buktiTF/$val->image") ?>" alt="Bukti TF">
														<span class="time"><?= $val->time ?></span>
													</div>
													<div class="bubble-chat-right">
													</div>
												</div>
											<?php } ?>
										<?php }else{ ?>
											<?php if($val->image != "" && $val->message != ""){ ?>
												<div class="chat-left">
														<img src="<?= base_url("assets/uploads/buktiTF/$val->image") ?>" alt="Bukti TF">
														<p><?= $val->message; ?> <span class="time"><?= $val->time ?></span></p>
													<div class="bubble-chat-left">
													</div>

												</div>
											<?php }else if($val->image =="" && $val->message != ""){ ?>
												<div class="chat-left">
														<p><?= $val->message; ?> <span class="time"><?= $val->time ?></span></p>
													<div class="bubble-chat-left">
													</div>
												</div>
											<?php }else if($val->image !="" && $val->message == ""){ ?>
												<div class="chat-left">
													<div class="img-only">
														<img src="<?= base_url("assets/uploads/buktiTF/$val->image") ?>" alt="Bukti TF">
														<span class="time"><?= $val->time ?></span>
													</div>
													<div class="bubble-chat-left">
													</div>
												</div>
											<?php } ?>
										<?php } ?>

									<?php }else{
										echo "<p class='text-center'>Belum ada pesan</p>";
									} ?>
								</div>
									<div class="chat-reply">
										<form action="<?= base_url("sendChatAdmin") ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_user" value="<?= $this->uri->segment(2) ?>">
											<input type="file" name="file">
											<textarea name="msg" id="" cols="50" rows="2"></textarea>
											<button class="btn btn-primary" id="submitChat"><i class="fab fa-telegram"></i></button>
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	const id = "<?= $this->uri->segment(2) ?>"
	console.log(id)
	const url = "http://192.168.56.101/app/getAllChatAdminAPI/"+id
	console.log(url)
	const box_chat = document.querySelector(".form-chat")
	let dataDummy

	if(box_chat.scrollTop == 0){
        box_chat.scrollTo(0, box_chat.scrollHeight)
    }
	
	function load_chat(){
		fetch(url)
		.then(response => response.json()).then(data => {
			data.forEach(d => {
				if(d.id_sender != "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image == ""){
					dataDummy += `<div class="chat-left">`
					// dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
					dataDummy += `</div>`
				}else

				if(d.id_sender != "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image != ""){
					dataDummy += `<div class="chat-left">`
					dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
					dataDummy += `</div>`
				}else

				if(d.id_sender != "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image != "" && d.message == ""){
					dataDummy += `<div class="chat-right">`
					dataDummy += `<div class="img-only">`
					dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<span class="time">${d.time}</span>`
					dataDummy += `</div>`
					dataDummy += `</div>`
				}else

				if(d.id_sender == "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image == ""){
					dataDummy += `<div class="chat-right">`
					// dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
					dataDummy += `</div>`
				}else

				if(d.id_sender == "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image != ""){
					dataDummy += `<div class="chat-right">`
					dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<p>${d.message} <span class="time">${d.time}</span></p>`
					dataDummy += `</div>`
				}else

				if(d.id_sender == "<?= $this->session->userdata('admin_logged')['id_user'] ?>" && d.image != "" && d.message == ""){
					dataDummy += `<div class="chat-right">`
					dataDummy += `<div class="img-only">`
					dataDummy += `<img src="<?= base_url('assets/uploads/buktiTF/') ?>${d.image}"/>`
					dataDummy += `<span class="time">${d.time}</span>`
					dataDummy += `</div>`
					dataDummy += `</div>`
				}

			})
				// console.log(dataDummy)
				box_chat.innerHTML = dataDummy
				scroll_top()
				dataDummy = ""
		})
	}

	function scroll_top()
{
    $('.form-chat').scrollTop = $('.form-chat').scrollHeight;
}

    function scrollToBottom(){
      
    }



    setInterval(() => {
		// removeChild(box_chat)
		load_chat()
    }, 1000)

</script>

