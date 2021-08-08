<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Admin Panel</small>
		</h1>
	</section>
	<?php 
	if (!empty($this->session->flashdata('message'))) {
		$pesan = $this->session->flashdata('message');
		echo $pesan;
	}
	?>
	<?php 
	if (!empty($this->session->flashdata('warning'))) {
		$pesan1 = $this->session->flashdata('warning');
		echo $pesan1;
	}
	?>
	<section class="content">
		<div class="row">
			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $dosen; ?></h3>
						<p>Data Staff</p>
					</div>
					<div class="icon">
						<i class="fa fa-users" style="font-size: 0.72em;"></i>
					</div>
					<a href="<?php echo base_url('data-staff') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $gaji; ?></h3>
						<p>Data Lembur</p>
					</div>
					<div class="icon">
						<i class="fa fa-database" style="font-size: 0.72em;"></i>
					</div>
					<a href="<?php echo base_url('data-lembur') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>

			

		</div>
	</section>
</div>
