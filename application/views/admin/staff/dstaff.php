<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header" style="padding-top: 10px; padding-left: 12px;">
						<h3 class="box-title">Managemen Data Staff</h3>
					</div>
					<?php
					if (!empty($this->session->flashdata('message'))) {
						$pesan = $this->session->flashdata('message');
						echo $pesan;
					}
					?>
					<div class="box-body">
						<button class="btn btn-primary" style="margin-bottom: 10px" onclick="pindah('tambah-dosen')"><i class="fa fa-plus"></i>&nbspAdd Data</button>
						<br>
						<div class="table-responsive" style="border:unset;">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>No. Telp</th>
										<th>Alamat</th>
										<th>Tempat tanggal lahir</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($staff as $key) { ?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $key->nik_staff ?></td>
											<td><?php echo $key->nama_staff ?></td>
											<td><?php echo $key->no_telp ?></td>
											<td><?php echo $key->alamat ?></td>
											<td><?php echo $key->ttl ?></td>
											<td><button class="btn btn-primary" onclick="pindah('Admin/edit_dosen')"><i class="fa fa-edit"></i></button>
												<button class="btn btn-danger" data-toggle="modal" data-target="#deleteData"><i class="fa fa-trash-o"></i></button></td>
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
