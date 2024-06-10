<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Tambah Data Barang</h3><br>
							<p class="text-warning"><?= $this->session->flashdata('infoFlashAdd'); ?></p>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="<?= base_url("actAddProduk") ?>" method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="Kode Barang">Kode Barang</label>
									<input name="kode_produk" type="text" class="form-control" placeholder="Kode Produk">
								</div>
								<div class="form-group">
									<label for="nama_barang">Nama Barang</label>
									<input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk">
								</div>
								<div class="form-group">
									<label for="Harga_Barang">Harga Barang</label>
									<input name="harga_produk" type="number" class="form-control" placeholder="Harga Produk">
								</div>
								<div class="form-group">
									<label for="Stok_Barang">Stok Barang</label>
									<input name="stok_produk" type="number" class="form-control" placeholder="Stok Produk">
								</div>

								<div class="form-group">
									<label for="ukuran">Ukuran Barang</label>
									<input name="ukuran_barang" type="text" class="form-control" placeholder="Ukuran Produk">
								</div>

								<div class="form-group">
									<label for="Stok_Barang">Model Barang</label>
									<input name="model_barang" type="text" class="form-control" placeholder="Model Produk">
								</div>

								<div class="form-group">
									<label for="Stok_Barang">Bahan Barang</label>
									<input name="bahan_barang" type="text" class="form-control" placeholder="bahan Produk">
								</div>

								<div class="form-group">
									<label for="Tanggal">Tanggal Input</label>
									<input name="tgl_input" type="date" class="form-control" placeholder="Tanggal Input">
								</div>

								<div class="form-group">
									<label for="deskripsiBarang">Deskripsi Barang</label>
									<textarea name="deskripsi_produk" class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Gambar Barang</label>
									<div class="input-group">
										<div class="custom-file">
											<input name="gambar" type="file" class="custom-file-input">
											<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	let label = document.querySelector(".custom-file-label");
	let inputFile = document.querySelector("input[type='file']");

	inputFile.addEventListener("change", (e) => {
		label.innerHTML = e.target.files[0].name;
	})

	// $(document).ready(function() {
	// 	$('input[type="file"]').change(function(e) {
	// 		var geekss = e.target.files[0].name;
	// 		$("custom-file-label").text(geekss + ' is the selected file.');

	// 	});
	// });
</script>

