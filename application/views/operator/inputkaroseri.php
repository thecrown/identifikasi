<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Input Karoseri
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpankaroseri" method="POST" class='form-horizontal form-validate' id="bb">
									  <div class="control-group">
											<label for="textfield" class="control-label">Nama Karoseri</label>
											<div class="controls">
											<input type="text" name="namakaroseri" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Alamat Karoseri</label>
											<div class="controls">
											<textarea name='alamat' class='span8' rows='2'></textarea>
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nomor Telepon</label>
											<div class="controls">
											<input type="text" name="notelp" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Email</label>
											<div class="controls">
											<input type="email" name="email" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
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
				 <div class="row-fluid">
				<div class="span12">
						<div class="box box-color box-bordered">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data  Karoseri
								</h3>
							</div>
							<div class="box-content nopadding">
						<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Karoseri</th>
											<th>Nama Pimpinan</th>
											<th>Alamat</th>
											<th>Telp</th>
											<th>Email</th>
											<th class='hidden-480'>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								        $myquery="select * from tb_karoseri where  status='1' ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       
								        $i=1;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
											<td><?php echo $i ;?></td>
											<td><?php echo $baris['nama_karoseri']; ?></td>
											<td><?php echo $baris['pemilik']; ?></td>
											<td><?php echo $baris['alamat']; ?></td>
											<td><?php echo $baris['telp']; ?></td>
											<td><?php echo $baris['email']; ?></td>
											<td class='hidden-480'>
											    <a href="<?php echo base_url();?>index.php/operator/editdatakaroseri/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapuskaroseri/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
											</td>
										</tr>
										<?php
										    $i++;
										    }
										?>
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
</div>
</body>
</html>
