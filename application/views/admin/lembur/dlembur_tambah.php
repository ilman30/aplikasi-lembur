 <div class="content-wrapper">
 	<section class="content">
 		<div class="box box-default">
 			<div class="box-header with-border">
 				<h3 class="box-title">Tambah Lembur</h3>
 				<div class="box-tools pull-right">
 					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
 				</div>
 			</div>
 			<form action="<?php echo base_url('tambah-aksi') ?>" method="POST">
 				<div class="box-body">
 					<div class="row">
 						<div class="col-md-4">
 							<div class="form-group">
								<select class="form-control" style="width: 100%;" autocomplete="off" name="nik_staff" required>
									<option value="">-Pilih-</option>
									<?php foreach ($staff as $key) { ?>
										<option value="<?php echo $key->nik_staff ?>"><?php echo $key->nama_staff ?></option>
									<?php } ?>
								</select>
 							</div>
 							<div class="form-group">
 								<label>Tunjangan Lembur</label>
 								<input type="text" name="tunj_lembur" required="" autocomplete="off" class="form-control" placeholder="Masukan Nama Dosen..." onkeypress="input_number(event)" oninput="hitung_lembur(event)" id="tunj_lembur">
 							</div>
 							<div class="form-group">
 								<label>Jumlah Jam</label>
 								<input type="text" name="jumlah_jam" required="" autocomplete="off" class="form-control" placeholder="Masukan Nama Dosen..." onkeypress="input_number(event)" oninput="hitung_lembur(event)" id="jumlah_jam">
 							</div>
 							<div class="form-group">
 								<label>Total</label>
 								<input type="text" name="total_tunj_lembur" required="" autocomplete="off" class="form-control" placeholder="Masukan Nama Dosen..." onkeypress="input_number(event)" id="total_tunj_lembur" readonly="">
 							</div>
 						</div>
 						
 						
 					</div>
 					<div class="row">
 						<div class="col-md-12">
 							<?php echo validation_errors(); ?>
 							<?php
 							if (!empty($this->session->flashdata('message'))) {
 								$pesan = $this->session->flashdata('message');
 								echo $pesan;
 							}
 							?>
 						</div>
 					</div>
 				</div>
 				<div class="box-footer">
 					<button class="btn btn-success" type="submit">Submit</button>
 					&nbsp;
 					<button class="btn btn-warning" type="reset" onclick="pindah('data-dosen')">Cancel</button>
 				</div>
 			</form>
 		</div>
 	</section>
 </div>
