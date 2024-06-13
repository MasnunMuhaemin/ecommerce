<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Edit Data Barang</h3>
							<p><?= $this->session->flashdata('infoFlashAdd'); ?></p>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="<?= base_url("actEdit") ?>" method="post" enctype="multipart/form-data">
							<input type="text" name="id_barang" value="<?= $data[0]->id_barang ?>" style="display: none;">
							<div class="card-body">
								<div class="form-group">
									<label for="Kode Barang">Kode Barang</label>
									<input name="kode_produk" type="text" class="form-control" placeholder="Kode Produk" value="<?= $data[0]->kode_barang ?>">
								</div>
								<div class="form-group">
									<label for="nama_barang">Nama Barang</label>
									<input name="nama_produk" type="text" class="form-control" placeholder="Nama Produk" value="<?= $data[0]->nama_barang ?>">
								</div>
								<div class="form-group">
									<label for="Harga_Barang">Harga Barang</label>
									<input name="harga_produk" type="number" class="form-control" placeholder="Harga Produk" value="<?= $data[0]->harga_barang ?>">
								</div>
								<div class="form-group">
									<label for="Stok_Barang">Stok Barang</label>
									<input name="stok_produk" type="number" class="form-control" placeholder="Stok Produk" value="<?= $data[0]->stok_barang ?>">
								</div>
								<div class="form-group">
									<label for="Tanggal">Tanggal Input</label>
									<input name="tgl_input" type="date" class="form-control" placeholder="Tanggal Input" value="<?= $data[0]->tgl_input ?>">
									<input name="tgl_input_old" type="text" style="display: none;" class="form-control" placeholder="Tanggal Input" value="<?= $data[0]->tgl_input ?>">
								</div>
								<div class="form-group">
									<label for="deskripsiBarang">Deskripsi Barang</label>
									<textarea name="deskripsi_produk" class="form-control" rows="3"><?= $data[0]->deskripsi ?></textarea>
								</div>
								<div class="form-group">
									<input name="gambar_old" style="display: none;" type="text" value="<?= $data[0]->gambar ?>">
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