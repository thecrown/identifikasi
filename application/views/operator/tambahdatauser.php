<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Tambah Akun 
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpandatauser" method="POST" class='form-horizontal form-validate' id="bb">
										<div class="control-group">
											<label for="textfield" class="control-label">Nama User</label>
											<div class="controls">
											<input type="text" name="username" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
										</div>
										<div class="control-group">
										<label for="pwfield" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="pwfield" class="input-xlarge" data-rule-required="true">
											<input type="hidden" name="status" id="pwfield"  value="Aktif" class="input-xlarge" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">Confirm password</label>
										<div class="controls">
											<input type="password" name="confirmfield" id="confirmfield" class="input-xlarge" data-rule-equalTo="#pwfield" data-rule-required="true">
										</div>
									</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Level Akses</label>
											<div class="controls">
												<div class="input-xlarge"><select name="level" id="level" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="Operator">Operator</option>
													<option value="Admin">Admin</option>
												</select></div>
											</div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
