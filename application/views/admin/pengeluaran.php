<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Pengeluaran Produk</h3><br>
							<p class="text-warning"><?= $this->session->flashdata('infoPengeluaran'); ?></p>
						</div>

						<form action="<?= base_url("actPengeluaran") ?>" method="post">
							<div class="card-body">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01">Pilih</label>
									</div>
									<select class="custom-select kd_brg" id="inputGroupSelect01" name="kd_brg">
										<option selected>Kode Produk</option>
										<?php if ($data != null) {
											foreach ($data as $val) { ?>
												<option value="<?= $val->kode_barang ?>" data-harga="<?= $val->harga_barang ?>" data-produk="<?= $val->nama_barang ?>"><?= $val->kode_barang ?></option>
										<?php }
										} ?>
									</select>
								</div>
								<div class="form-group">
									<label for="nama_barang">Nama Barang</label>
									<input name="nama_produk_pengeluaran" type="text" class="form-control nm_brg" placeholder="Nama Produk" readonly>
								</div>
								<div class="form-group">
									<label for="Harga_Barang">Harga Barang</label>
									<input name="harga_produk_pengeluaran" type="number" class="form-control hrg_brg" placeholder="Harga Produk" readonly>
								</div>
								<div class="form-group">
									<label for="Stok_Barang">Jumlah produk Keluar</label>
									<input name="stok_produk_pengeluaran" type="number" class="form-control stok" placeholder="Stok Produk">
								</div>
								<div class="form-group">
									<label for="Harga_Barang">Total</label>
									<input name="total_pendapatan" type="number" class="form-control total_pendapatan" placeholder="Total" readonly>
								</div>
								<div class="form-group">
									<label for="Tanggal">Tanggal Input</label>
									<input name="tgl_input_pengeluaran" type="date" class="form-control" placeholder="Tanggal Input">
								</div>

								<!-- <div class="form-group">
									<label for="deskripsiBarang">Deskripsi Barang</label>
									<textarea name="deskripsi_produk" class="form-control" rows="3"></textarea>
								</div> -->
								<!-- <div class="form-group">
									<label for="exampleInputFile">Gambar Barang</label>
									<div class="input-group">
										<div class="custom-file">
											<input name="gambar" type="file" class="custom-file-input">
											<label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
										</div>
									</div>
								</div> -->

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

<script type="text/javascript">
	let kode_barang = document.querySelector(".kd_brg")
	let nama_barang = document.querySelector(".nm_brg")
	let stok = document.querySelector(".stok")
	let ttl_pengeluaran = document.querySelector(".total_pendapatan")
	let hrg_brg = document.querySelector(".hrg_brg")
	kode_barang.onchange = (e) => {
		const [option] = e.target.selectedOptions
		hrg_brg.value = option.dataset.harga
		nama_barang.value = option.dataset.produk
	}

	stok.addEventListener("keyup", () => {
		ttl_pengeluaran.value = parseInt(stok.value) * parseInt(hrg_brg.value)
	})
</script>