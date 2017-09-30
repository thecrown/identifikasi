<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Input Jenis Muatan
								</h3>
							</div>
							<div class="box-content">
                              <form action="<?php echo base_url();?>index.php/operator/simpanjenismuatan" method="POST" class='form-horizontal form-validate' id="bb">
									<div class="control-group">
											<label for="textfield" class="control-label">Jenis Muatan</label>
											<div class="controls">
											<input type="text" name="jenis" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
									</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Volume</label>
											<div class="controls">
											<input type="text" name="volume" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2"> m3
										    </div>
									</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Berat</label>
											<div class="controls">
											<input type="text" name="berat" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="1"> Ton
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
									Data  Jenis Muatan
								</h3>
							</div>
							<div class="box-content nopadding">
						<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal Input</th>
											<th>Nama Jenis Muatan</th>
											<th>Berat</th>
											<th class='hidden-480'>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								        $myquery="select * from tb_muatan where  status='1' order by time desc ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       
								        $i=1;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
											<td><?php echo $i ;?></td>
											<td><?php echo $baris['time']; ?></td>
											<td><?php echo $baris['jenis']; ?></td>
											<td><?php echo $baris['berat']; ?></td>
											<td class='hidden-480'>
											   
											    <a href="<?php echo base_url();?>index.php/operator/editmuatan/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapusmuatan/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
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
