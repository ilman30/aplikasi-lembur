<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header" style="padding-top: 10px; padding-left: 12px;">
						<h3 class="box-title">Managemen Data Lembur</h3>
					</div>
					<?php
					if (!empty($this->session->flashdata('message'))) {
						$pesan = $this->session->flashdata('message');
						echo $pesan;
					}
					?>
					<div class="box-body">
						<button class="btn btn-primary" style="margin-bottom: 10px" onclick="pindah('tambah-lembur')"><i class="fa fa-plus"></i>&nbspAdd Data</button>
						<br>
						<div class="table-responsive" style="border:unset;">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Tunjangan Lembur</th>
										<th>Jumlah Jam</th>
										<th>Total</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($lembur as $key) { ?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $key->nik_staff ?></td>
											<td><?php echo $key->nama_staff ?></td>
											<td><?php echo $key->tunj_lembur ?></td>
											<td><?php echo $key->jumlah_jam ?></td>
											<td><?php echo $key->total_tunj_lembur ?></td>
											<td></td>
												<!-- tombol delete -->
												
											</tr>
											<?php $no++;
										} ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
