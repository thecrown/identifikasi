<body>
	<div id="navigation">
		<div class="container-fluid">
			<a id="brand">Sistem Identifikasi Kendaraan Angkut </a>
			    <div class="user">
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $username; ?><img src="<?php echo base_url();?>img/people.png" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo base_url();?>index.php/operator/pengaturanakun/<?php echo $username?>">Pengaturan Akun</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/operator/keluar">Keluar</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Input Data</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="<?php echo base_url();?>Administrator/inputkategori">Input Jenis</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>Administrator/inputjeniskendaraan">Input Jenis Kendaraan</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>Administrator/inputsparepart">Input Part</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>Administrator/inputkaroseri">Input Karoseri</a>
					</li>
				</ul>
				</div>
				<!--<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Perhitungan Karoseri</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="<?php echo base_url();?>index.php/operator/perhitungan">Input Data Perhitungan</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>admin/htberatkaroseri">Hitung Berat Karoseri</a>
					</li>
				</ul>
			</div>-->
		</div>
	