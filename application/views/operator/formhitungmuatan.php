<div id="main">
			<div class="container-fluid">
				<div class="row-fluid">
				<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data Perhitungan Volume Muatan
								</h3>
							</div>
							<div class="box-content">
							   <form action="<?php echo base_url();?>index.php/operator/simpanhitungmuatan" method="POST" class='form-horizontal form-validate' id="bb">
							    <input type="hidden" name="id" value="<?php echo $edit->id;?>" id="textfield" class="input-xlarge" data-rule-required="true" > 
						        <table class="table table-hover table-nomargin table-striped">
										 <div class="control-group">
										 <label for="textfield" class="control-label">Nama Karoseri</label>
                                            <div class="controls">
										    <input type="text" name="karoseri" value="<?php echo $edit->karoseri;?>" readonly="readonly"id="textfield" class="input-xlarge" data-rule-required="true" > 
										    </div>
										</div>
										 <div class="control-group">
										 <label for="textfield" class="control-label">Nama Jenis Kendaraan</label>
                                            <div class="controls">
								                <input type="text" name="jeniskendaraan" value="<?php echo $edit->jenis_kendaraan;?>" readonly="readonly"id="textfield" class="input-xlarge" data-rule-required="true" ></div>
										</div>
										<div class="control-group">
										     <label for="textfield" class="control-label">Jumlah Sumbu</label>
										     <div class="controls"><input type="text" name="sumbu" value="<?php echo $edit->sumbu;?>" readonly="readonly"id="textfield" class="input-xlarge" data-rule-required="true" > </div>
										</div>
										<div class="control-group">
										    <label for="textfield" class="control-label">Merek</label>
										    <div class="controls"><input type="text" name="merek" value="<?php echo $edit->merek;?>" readonly="readonly"id="textfield" class="input-xlarge" data-rule-required="true" > </div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Jenis Muatan</label>
											    <div class="controls">
													<div class="input-xlarge">
													    <select name="jenismuatan" id="jenis" class='chosen-select'>
													    <option value="">Pilih Salah Satu</option>
						                    	              <?php
									                            $kat="select jenis from tb_muatan where status='1'";
							                                    $kategori=mysql_query($kat) ;     
							                                    while($kategori1=mysql_fetch_object($kategori))     
								                                    {
								                                        echo "<option value=\"$kategori1->jenis\">$kategori1->jenis</option>";     
								                                    }
					                                            ?> 
					                                    </select>
					                                </div>
												</div>
											</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Dimensi</label>
											    <p><div class="controls"><input type="text" name="pj" id="textfield1" class="input-mini" placeholder="P" data-rule-required="true" data-rule-minlength="1">  mm</div> 
											    <p><div class="controls"><input type="text" name="lb" id="textfield2" class="input-mini" placeholder="L" data-rule-required="true" data-rule-minlength="1"> mm </div> 
											    <p><div class="controls"><input type="text" name="tb" id="textfield3" class="input-mini" placeholder="T" data-rule-required="true" data-rule-minlength="1"> mm</div> 
											    <p><div class="controls"><input type="text" name="h" id="textfield5" class="input-mini" placeholder="H" data-rule-required="true" data-rule-minlength="1"> mm</div> 
											    <p><div class="controls"><input type="text" name="s" id="textfield5" class="input-mini" placeholder="S" data-rule-required="true" data-rule-minlength="1"> mm</div> 
				                        </div>
										<div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Simpan">
										<button type="cancel" class="btn">Batal</button>
										</div>
									</table>
								</form>
							</div>
						</div>
				</div>
				<div class="span6">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										Gambar Komponen
									</h3>
								</div>
								<div class="box-content nopadding">
									<?php if ($edit->jenis_kendaraan=='Dump Truck')
										{
										?>
									<center><img src="<?php echo base_url();?>img/bakdumptruk.png"></center>
									<?php
									    }
										else if ($edit->jenis_kendaraan=='Tangki Bahan Cair')
										{
									?>	
									<center><img src="<?php echo base_url();?>img/tangkiair.PNG"></center>
									<?php
									}
										else if ($edit->jenis_kendaraan=='Tangki Bahan Gas')
										{
									?>
									<center><img src="<?php echo base_url();?>img/truckdump.png"></center>
									<?php
										}
										else if ($edit->jenis_kendaraan=='Concrete Mixer')
										{
									?>
									<center><img src="<?php echo base_url();?>img/truckdump.png"></center>
									<?php
										}
									?>
								</div>
						</div>
					</div>
				</div>
				
  <div class="container-fluid">
				<div class="row-fluid">
				    <div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data  Perhitungan Volume Muatan
								</h3>
							</div>
							<div class="box-content nopadding">
						        <table class="table table-hover table-nomargin table-striped">
						        <thead>
						            <th>No</th>
						            <th>P</th>
						            <th>L</th>
						            <th>T</th>
						            <th>H</th>
						            <th>S</th>
						            <th>Jenis Muatan</th>
						            <th>Volume (m3)</th>
						            <th>Vol. Muatan (Ton)</th>
						        </thead>
						        <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from view_perhitunganmuatan where id_karoseri='$id'";
				                        $data=mysql_query($myquery) or die (mysql_error());
								        $j=1;
								        $total=0;
		                                while($baris=mysql_fetch_array($data))
		                                {
											?>
										<tr>
										    <td><?php echo $j;?></td>
										    <td><?php echo number_format($baris['pj'],2);?></td>
										    <td><?php echo number_format($baris['lb'],2);?></td>
										    <td><?php echo number_format($baris['tb'],2);?></td>
										    <td><?php echo number_format($baris['h'],2);?></td>
										    <td><?php echo number_format($baris['s'],2);?></td>
										    <td><?php echo $baris['jenismuatan'];?></td>
										    <td><?php 
										                 if($baris['jeniskendaraan']=='Dump Truck')
										                        {
										                        $a=(($baris['pj']*$baris['lb']*$baris['tb'])-(2*0.5*$baris['h']*$baris['s']*$baris['pj']))/1000000000;
										                        echo number_format ($a,2);
										                        }
										                else
										                        {
										                        
										                        }
										        ?></td>
										        <td><?php 
										                 if($baris['jeniskendaraan']=='Dump Truck')
										                        {
										                        $b=((($baris['pj']*$baris['lb']*$baris['tb'])-(2*0.5*$baris['h']*$baris['s']*$baris['pj']))/$baris['volume'])/1000000000;
										                        echo number_format ($b,2);
										                        }
										                else
										                        {
										                        
										                        }
										        ?></td>
										</tr>
									<?php
									    $j++;
									    }	
									?>
									</tbody>
									</table>	
										<p>
										<form action="<?php echo base_url();?>index.php/operator/validasiberatmuatan" method="POST" class='form-horizontal form-validate' id="bb1">
										<?php
										   if(empty($b))
										   {
											   
										   }
										   else
										   {
										?>
									  
										<input type="hidden" name="brtmuatan" value="<?php echo number_format($b,2);?>" id="textfield" class="input-xlarge" data-rule-required="true" > 
										<input type="hidden" name="volmuatan" value="<?php echo number_format($a,2);?>" id="textfield" class="input-xlarge" data-rule-required="true" > 
										  <input type="hidden" name="id" value="<?php echo $edit->id;?>" id="textfield" class="input-xlarge" data-rule-required="true" > 
										   <input type="submit" class="btn btn-primary" value="Validasi">
										   <button type="cancel" class="btn">Batal</button>
											 <?php
										   }
									   ?>
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
</body>
</html>
