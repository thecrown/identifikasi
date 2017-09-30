		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
				</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="box box-color box-bordered">
						<div class="box-title">
							<h3>
								<i class="icon-user"></i>
								Pengaturan Akun Sistem Informasi Alumni Departemen Teknik Sistem Komputer
							</h3>
						</div>
						<div class="box-content nopadding">
							<div class="tab-content padding tab-content-inline tab-content-bottom">
								<div class="tab-pane active" id="profile">
								 <?php if(!empty($identitas))
								    {//JIKA DATA TIDAK KOSONG
                                   ?>
									<form action="<?php echo base_url();?>index.php/operator/simpanpengaturanakun" method="POST" class='form-horizontal form-validate' id="bb">
									<?php echo form_hidden('id',$identitas->id_user);?>
										<div class="row-fluid">
											<div class="span10">
												<div class="control-group">
													<label for="name" class="control-label right">User Name:</label>
													<div class="controls">
														<?php echo $identitas->username;?>
													</div>
												</div>
												<div class="control-group">
													<label for="pw" class="control-label right">Password:</label>
													<div class="controls">
													   <?php
										                    $encrypt=$identitas->password;
										                    $decrypt=base64_decode(base64_decode($encrypt));
										                 ?>
														<input type="password" name="pw" class='input-xlarge' value="<?php echo $decrypt ?>">
													</div>
												</div>
												<div class="form-actions">
													<input type="submit" class='btn btn-primary' value="Simpan">
													<input type="reset" class='btn' value="Batal">
												</div>
											</div>
											<?php 
    }else{//JIKA DATA KOSONG
        echo "Data kosong Silahkan isi Biodata Anda. \n";
?>
  <?php  }
  ?>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div></div>

</body>
</html>
