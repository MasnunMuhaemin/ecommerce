<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Lihat Data</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Lihat Data</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<section class="content">
		<div class="card card-solid">
			<div class="card-body">
				<?php if($data != null){ foreach($data as $val){ ?>
					<div class="row mb-5 pb-5 border-bottom">
						<div class="col-12 col-sm-6">
							<h3 class="d-inline-block d-sm-none"><?= $val->nama_barang ?></h3>
							<div class="col-12">
								<img src="<?= base_url("assets/uploads/foto_produk/").$val->gambar ?>" class="product-image w-75" alt="Product Image">
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<h3 class="my-3"><?= $val->nama_barang ?></h3>
							<p><?= $val->deskripsi ?></p>
							<hr>
							<div class="bg-gray py-2 px-3 mt-4">
								<h2 class="mb-0">
									Rp. <?= number_format($val->harga_barang) ?>
								</h2>
								<h4 class="mt-0">
									<small>Stok: <?= $val->stok_barang ?></small><br>
									<!-- <small>Harga belum termasuk ongkir.</small> -->
								</h4>
							</div>

							<div class="mt-4">
								<a href="<?= base_url("edit_data/").$val->id_barang ?>" class="btn btn-warning btn-lg btn-flat text-white mr-2">
									<i class="fas fa-edit fa-lg mr-2"></i>
									Ubah
								</a>

								<a href="<?= base_url("delete/").$val->id_barang ?>" class="btn btn-danger btn-lg btn-flat text-white mr-2">
									<i class="fas fa-trash fa-lg mr-2"></i>
									Hapus
								</a>
							</div>
						</div>
					</div>
				<?php }}else{ ?> 
					<div class="row">
						<div class="col-12 col-sm-6">
							<h3 class="d-inline-block d-sm-none">Belum ada data produk</h3>
							<div class="col-12">
								<!-- <img src="<?= base_url("assets/admin/") ?>/dist/img/prod-1.jpg" class="product-image" alt="Product Image"> -->
								<p>Belum ada Data Produk</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>