<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Edit Part Kendaraan
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpaneditsparepart" method="POST" class='form-horizontal form-validate' id="bb">
								<?php echo form_hidden('id',$edit->id)?>
								        <div class="control-group">
											<label for="textfield" class="control-label">Jenis Part</label>
											    <div class="controls">
													<div class="input-xlarge"><select name="kategori" id="kat_dinding_dpn" class='chosen-select'>
													<option value="<?php echo $edit->nama_kategori?>"><?php echo $edit->nama_kategori?></option>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select>
					                                </div>
												</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Part</label>
											<div class="controls">
											<input type="text" value="<?php echo $edit->nama_sparepart?>" name="namasparepart" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Bahan</label>
											<div class="controls">
											<input type="text" value="<?php echo $edit->bahan?>" name="namabahan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Massa Jenis part</label>
											<div class="controls">
											<input type="text"value="<?php echo $edit->massajenis?>" name="massajenissparepart" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg/m3
										    </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Berat Part</label>
											<div class="controls">
											<input type="text"value="<?php echo $edit->berat?>" name="berat" id="textfield" class="input-small" data-rule-required="true" data-rule-minlength="1"> Kg
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
									Data  Part kendaraan
								</h3>
							</div>
							<div class="box-content nopadding">
						<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x">
									<thead>
										<tr>
											<th>No</th>
											<th>Jenis Kendaraan</th>
											<th>Nama Kategori</th>
											<th>Nama Part</th>
											<th>Nama Bahan</th>
											<th>Massa Jenis Part</th>
											<th>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								        $myquery="select * from tb_sparepart where  status='1'  order by nama_kategori ASC";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       
								        $i=1;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
											<td><?php echo $i ;?></td>
											<td><?php echo $baris['jenis_kendaraan']; ?></td>
											<td><?php echo $baris['nama_kategori']; ?></td>
											<td><?php echo $baris['nama_sparepart']; ?></td>
											<td><?php echo $baris['bahan']; ?></td>
											<td><?php echo $baris['massajenis']; ?></td>
											<td class='hidden-480'>
											    <a href="<?php echo base_url();?>index.php/operator/editdatasparepart/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapussparepart/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
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
