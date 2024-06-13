<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Laporan Penjualan</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<hr>
				</div>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="col-md-12 col-sm-12">
						<div class="jumbotron">
							<div class="container">
								<?php $banyak = 0;
								$total = 0;
								if ($data != false) {
									for ($i = 0; $i < 1; $i++) { ?>
										<div class="row mb-3">
											<div class="col-md-3 col-sm-12">
												<h6 class="text-muted">From</h6>
												<h5 style="color: #000"><b>Admin Toko Online</b></h5>
												<p class="m-0" style="color: #000">KOMPLEK PASAR KEPUH BLOK C</p>
												<p class="m-0" style="color: #000">No. Hp: 083824587800</p>
												<p class="m-0" style="color: #000">E-Mail: info@tokonline.com</p>
											</div>

											<div class="col-md-3 col-sm-12">
												<h6 class="text-muted">To</h6>
												<h5 style="color: #000"><b><?= $data[$i]->nama_lengkap ?></b></h5>
												<p class="m-0" style="color: #000">Dikirim ke: <?= $data[$i]->alamat_penerima ?></p>
												<p class="m-0" style="color: #000">No. Hp: <?= $data[$i]->no_penerima ?></p>

												<!-- <p class="m-0" >E-Mail: info@tokonline.com</p> -->
											</div>

											<div class="col-md-3 offset-md-3 col-sm-12 ">
												<!-- <h6 class="text-muted">To</h6> -->
												<h5 class="mb-3" style="color: #000"><b>Status Pembayaran: </b></h5>
												<?php if ($data[$i]->status_pembayaran == "Belum Melakukan Pembayaran") : ?>
													<p class="m-0 text-warning">Harap Konfirmasi Pembayaran ini jika sudah sesuai</p>
													<!-- <img src="https://1.bp.blogspot.com/-FTQm_MW2tpc/XbznCfNSYwI/AAAAAAAAAs8/BRHfAp2MsjIbv2caSh_UkH6ju2PMGwrawCLcBGAsYHQ/s1600/QR_code_for_mobile_English_Wikipedia.svg.png" alt="QRIS pembayaran" class="w-100"> -->
													<a href="<?= base_url("assets/uploads/buktiTF/" . $data[$i]->bukti_pembayaran) ?>"><img src="<?= base_url("assets/uploads/buktiTF/" . $data[$i]->bukti_pembayaran) ?>" alt="QRIS pembayaran" class="w-100"></a>
												<?php elseif ($data[$i]->status_pembayaran == "Sudah Melakukan Pembayaran") : ?>
													<p class="m-0 text-warning"><?= $data[$i]->status_pembayaran ?></p>
													<a href="<?= base_url("assets/uploads/buktiTF/" . $data[$i]->bukti_pembayaran) ?>"><img src="<?= base_url("assets/uploads/buktiTF/" . $data[$i]->bukti_pembayaran) ?>" alt="QRIS pembayaran" class="w-100"></a>
												<?php elseif ($data[$i]->status_pembayaran == "Approve") : ?>
													<p class="m-0 text-success"><?= $data[$i]->status_pembayaran ?></p>
												<?php elseif ($data[$i]->status_pembayaran == "Barang dikemas") : ?>
													<p class="m-0 text-success"><?= $data[$i]->status_pembayaran ?></p>
												<?php elseif ($data[$i]->status_pembayaran == "Barang dikirim") : ?>
													<p class="m-0 text-success"><?= $data[$i]->status_pembayaran ?></p>
												<?php endif ?>

												<!-- <p class="m-0" >E-Mail: info@tokonline.com</p> -->
											</div>
										</div>
								<?php }
								} ?>

								<hr>
								<div class="row mt-3">
									<?php foreach ($data as $val) { ?>
										<div class="col-md-12 col-sm-12">
											<div class="card w-100 mb-3">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row align-items-center">
															<div class="col-md-2 h-100">
																<img class="w-100 img-rounded" src="<?= base_url("assets/uploads/foto_produk/" . $val->image) ?>" alt="Card image cap">
															</div>

															<div class="col-md-10">
																<span class="text-muted" style="font-style: italic; font-size: 12px;"><?= substr($val->due_datetime, 0, strrpos($val->due_datetime, ' ')) ?></span>
																<h4 class="mt-2">Produk: <?= $val->produk ?></h4>
																<h5>Harga: Rp. <?= number_format($val->harga) ?></h5>
																<p style="margin-bottom: 0;">Dikirim ke alamat: <?= $val->alamat_penerima ?></p>
																<p style="margin:0;">No. Telp Penerima: <?= $val->no_penerima ?></p>
																<p style="margin:0;">Ukuran: <?= $val->ukuran ?></p>
																<p style="margin:0;">Model: <?= $val->model ?></p>
																<p style="margin:0;">Bahan: <?= $val->bahan ?></p>
																<!-- <p style="margin:0;">No. Telp Pemilik Akun: 083824587801</p> -->
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="row align-items-center">
														<div class="col-md-3">
															<p style="margin-bottom: 0;">Banyak: <?= $val->banyak ?></p>
														</div>
														<div class="col-md-3 offset-md-6 text-right">
															<p class="m-0">Subtotal: <?= "Rp. " . number_format($val->banyak * $val->harga) ?></p>
															<!-- <p><?php $banyak += $val->banyak;
																	$total += $val->banyak * $val->harga; ?></p> -->
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>

								<div class="row mt-3">
									<div class="col-md-4 offset-md-8">
										<div class="card">
											<table class="table table-striped">
												<thead>
													<tr>
														<th scope="col">Total Belanja</th>
														<!-- <th scope="col">PPN 11%</th> -->
														<th scope="col">Total Pembayaran</th>
														<th scope="col">Aksi</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><?= $banyak ?></td>
														<!-- <td>Rp. 11.000</td> -->
														<td><?= "Rp. " . number_format($total + (int)$val->ongkir) ?></td>
														<td><a href="<?= base_url("konfirmasi/" . $val->uuid_checkout) ?>" class="btn btn-success">Konfirmasi</a></td>
													</tr>

												</tbody>
											</table>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>