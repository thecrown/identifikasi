<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Identifikasi Kendaraan
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpandatauser" method="POST" class='form-horizontal form-validate' id="bb">
									  <div class="control-group">
											<label for="textfield" class="control-label">Jenis Kendaraan</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jenkendaraan" id="jk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="alumni">Truk</option>
													<option value="operator">Pick-Up</option>
													<option value="pimpinan">Bus</option>
												</select></div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Jumlah Sumbu Roda</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jensumburoda" id="jsr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="alumni">1</option>
													<option value="operator">2</option>
													<option value="pimpinan">3</option>
												</select></div>
											</div>
										</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Jumlah Roda Belakang</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jmlrodabelakang" id="jrb" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="alumni">2</option>
													<option value="operator">4</option>
													<option value="pimpinan">8</option>
												</select></div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Jumlah Roda Depan</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jmlrodadepan" id="jrd" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="alumni">2</option>
													<option value="operator">4</option>
													<option value="pimpinan">8</option>
												</select></div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Dimensi</label>
										</div>
										<div class="control-group">
										<label for="emailfield" class="control-label">Jarak Sumbu</label>
										<div class="controls">
											<input type="text" name="jrksumbu" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										</div>
									</div>
									<div class="control-group">
										<label for="emailfield" class="control-label">Panjang</label>
										<div class="controls">
											<input type="text" name="pjng" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										</div>
									</div>
									<div class="control-group">
										<label for="emailfield" class="control-label">Lebar</label>
										<div class="controls">
											<input type="text" name="lbr" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										</div>
									</div>
									<div class="control-group">
										<label for="emailfield" class="control-label">Tinggi</label>
										<div class="controls">
											<input type="text" name="tng" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										</div>
									</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Hitung">
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
