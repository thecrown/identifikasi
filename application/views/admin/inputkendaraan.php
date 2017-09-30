<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Input Jenis Kendaraan
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpanjeniskendaraan" method="POST" class='form-horizontal form-validate' id="bb">
									  <div class="control-group">
											<label for="textfield" class="control-label">Jenis Kendaraan</label>
											<div class="controls">
											<input type="text" name="kendaraan" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
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
									Data  Kategori
								</h3>
							</div>
							<div class="box-content nopadding">
						<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x">
									<thead>
										<tr>
											<th>No</th>
											<th>Jenis Kendaraan</th>
											<th class='hidden-480'>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								        $myquery="select * from tb_kendaraan where  status='1' ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       
								        $i=1;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
											<td><?php echo $i ;?></td>
											<td><?php echo $baris['nama_kendaraan']; ?></td>
											<td class='hidden-480'>
											    <a href="<?php echo base_url();?>index.php/operator/editdatakendaraan/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapuskendaraan/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
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
