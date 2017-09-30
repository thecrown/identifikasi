<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Input Perhitungan Berat Karoseri
								</h3>
							</div>
							<div class="box-content">
                              <form action="<?php echo base_url();?>index.php/operator/proseskaroseri" method="POST" class='form-horizontal form-validate' id="bb">
									 <div class="control-group">
											<label for="textfield" class="control-label">Nama Karoseri</label>
											<div class="controls">
												<div class="input-xlarge"><select name="karoseri" id="karoseri" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kar="select * from tb_karoseri where status='1'";
							                                $karo=mysql_query($kar) ;     
							                                while($karoseri=mysql_fetch_object($karo))     
								                            {
								                                 echo "<option value=\"$karoseri->nama_karoseri\">$karoseri->nama_karoseri</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</div>
										</div>
									  <div class="control-group">
											<label for="textfield" class="control-label">Nama Jenis Kendaraan</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jeniskendaraan" id="jeniskendaraan" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kendaraan from tb_kendaraan where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kendaraan\">$kategori1->nama_kendaraan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</div>
										</div>
										 <div class="control-group">
											<label for="textfield" class="control-label">Konfigurasi Sumbu Roda</label>
											<div class="controls">
												<div class="input-xlarge"><select name="sumbu" id="sumbu" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="1.1">1.1</option>
													<option value="1.2">1.2</option>
													<option value="11.2">11.2</option>
													<option value="1.22">1.22</option>
													<option value="1.1.22">1.1.22</option>
													<option value="1.1.222">1.1.222</option>
													<option value="1.222">1.222</option>
					                                    </select></div>
											</div>
										</div>
									  <div class="control-group">
											<label for="textfield" class="control-label">Merek</label>
											<div class="controls">
											<input type="text" name="merek" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
									</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Tipe</label>
											<div class="controls">
											<input type="text" name="tipe" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
										    </div>
									</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Berat Kosong Kendaraan</label>
											<div class="controls">
											<input type="text" name="brtkosong" id="textfield" class="input-mini" data-rule-required="true" data-rule-minlength="2"> Kg
										    </div>
									</div>
									<div class="control-group">
											<label for="textfield" class="control-label">Jumlah Orang</label>
											<div class="controls">
												<div class="input-large"><select name="brtorng" id="brtorng" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
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
				   <div class="row-fluid">
				<div class="span12">
						<div class="box box-color box-bordered">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data  Perhitungan Berat Karoseri
								</h3>
							</div>
							<div class="box-content nopadding">
						<table class="table table-hover table-nomargin dataTable table-bordered dataTable-scroll-x">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal Input</th>
											<th>Nama Jenis Kendaraan</th>
											<th>Nama Karoseri</th>
											<th>Jumlah Sumbu</th>
											<th class='hidden-480'>Options</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								        $myquery="select * from tb_datarakitan where  status='1' order by time desc ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       
								        $i=1;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
											<td><?php echo $i ;?></td>
											<td><?php echo $baris['time']; ?></td>
											<td><?php echo $baris['jenis_kendaraan']; ?></td>
											<td><?php echo $baris['karoseri']; ?></td>
											<td><?php echo $baris['sumbu']; ?></td>
											<td class='hidden-480'>
											   
											    <a href="<?php echo base_url();?>index.php/operator/detaildataperhitungan/<?php echo $baris['id']?>" onClick="return Detaildata()" class="btn" rel="tooltip" title="View"><i class="icon-search"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/tambahdata/<?php echo $baris['id']?>" onClick="return Tambahdata()"class="btn" rel="tooltip" title="Tambah Data"><i class="icon-plus"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/editdataperhitungan/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hitungmuatan/<?php echo $baris['id']?>" onClick="return Hitungmuatan()"class="btn" rel="tooltip" title="Hitung Muatan"><i class="icon-file-text-alt"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapusperhitungan/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
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
