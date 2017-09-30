<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									<?php 
									    $kategori=$this->input->post('kategori');
									    $namakendaraan=$this->input->post('jenis_kendaraan');
									?>
									Input Part Kendaraan untuk Jenis <?php echo $kategori;?>
								</h3>
							</div>
							<div class="box-content">
								<?php
								
								if($kategori=='Plat')
								{
								?>
								<form action="<?php echo base_url();?>index.php/operator/simpansparepart" method="POST" class='form-horizontal form-validate' id="bb">
									  	<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											<input type="hidden" name="kategori" value="<?php echo $kategori?>">
											<input type="hidden" name="nama_kendaraan" value="<?php echo $namakendaraan?>">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Massa Jenis Part</label>
											<div class="controls">
											<input type="text" name="massajenis" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m3
										    </div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
								</form>
								<?php
								}
								else if($kategori=='Kerangka')
								{?>
									<form action="<?php echo base_url();?>index.php/operator/simpansparepart" method="POST" class='form-horizontal form-validate' id="bb">
									  	<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											<input type="hidden" name="kategori" value="<?php echo $kategori?>">
											<input type="hidden" name="nama_kendaraan" value="<?php echo $namakendaraan?>">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Berat</label>
											<div class="controls">
											<input type="text" name="berat" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m
										    </div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
								</form>
								<?php
								}
								else if($kategori=='Absorber / Bantalan Kayu')
								{?>
									<form action="<?php echo base_url();?>index.php/operator/simpansparepart" method="POST" class='form-horizontal form-validate' id="bb">
									  	<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											<input type="hidden" name="kategori" value="<?php echo $kategori?>">
											<input type="hidden" name="nama_kendaraan" value="<?php echo $namakendaraan?>">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Massa Jenis Part</label>
											<div class="controls">
											<input type="text" name="massajenis" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m3
										    </div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
								</form>
								<?php
								}
								else if($kategori=='Aksesoris')
								{
								?>
									<form action="<?php echo base_url();?>index.php/operator/simpansparepart" method="POST" class='form-horizontal form-validate' id="bb">
									  	<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											<input type="hidden" name="kategori" value="<?php echo $kategori?>">
											<input type="hidden" name="nama_kendaraan" value="<?php echo $namakendaraan?>">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Berat</label>
											<div class="controls">
											<input type="text" name="berat" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m
										    </div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
										<?php
										}
										else
										{
										?>
										<form action="<?php echo base_url();?>index.php/operator/simpansparepart" method="POST" class='form-horizontal form-validate' id="bb">
									  	<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											<input type="hidden" name="kategori" value="<?php echo $kategori?>">
											<input type="hidden" name="nama_kendaraan" value="<?php echo $namakendaraan?>">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Massa Jenis Part</label>
											<div class="controls">
											<input type="text" name="massajenis" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m3
										    </div>
										</div>
									<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
									</div>
								</form>
								<?php	
								}
								?>
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
