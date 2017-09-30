<div id="main">
			<div class="container-fluid">
				<div class="row-fluid">
				<div class="span6">
						<div class="box box-color box-bordered">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data  Perhitungan Berat Karoseri
								</h3>
							</div>
							<div class="box-content">
							   <form action="<?php echo base_url();?>index.php/operator/simpanprosesperhitungan" method="POST" class='form-horizontal form-validate' id="bb">
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
										<?php if ($edit->jenis_kendaraan=='Dump Truck')
										{
										?>
										<div class="control-group">
											  <label for="textfield" class="control-label">Posisi Part</label>
												<div class="controls">
													<div class="input-xlarge">
													    <select name="sisi" id="sisi" class='chosen-select'>
													    <option value="">Pilih Salah Satu</option>
						                    	        <option value="Sisi Kiri">Sisi Kiri</option>
						                    	        <option value="Sisi Kanan">Sisi Kanan</option>
						                    	        <option value="Sisi Depan">Sisi Depan</option>
						                    	        <option value="Sisi Belakang">Sisi Belakang</option>
						                    	        <option value="Sisi Bawah">Sisi Bawah</option>
					                                    </select>
					                                </div>
												</div>
										</div>
										<?php
										}
										else if ($edit->jenis_kendaraan=='Tangki Bahan Cair')
										{
										?>
											<div class="control-group">
											  <label for="textfield" class="control-label">Posisi Part</label>
												<div class="controls">
													<div class="input-xlarge">
													    <select name="sisi" id="sisi" class='chosen-select'>
													    <option value="">Pilih Salah Satu</option>
						                    	        <option value="Atas">Atas</option>
						                    	        <option value="Bawah">Bawah</option>
						                    	        <option value="Depan">Depan</option>
						                    	        <option value="Belakang">Belakang</option>
						                    	        </select>
					                                </div>
												</div>
										</div>
										<?php	
										}
										?>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Komponen Bagian</label>
											    <div class="controls">
													<div class="input-xlarge">
													    <select name="jenis" id="jenis" class='chosen-select'>
													    <option value="">Pilih Salah Satu</option>
						                    	              <?php 
									                            $kat="select nama_sparepart from tb_sparepart where status='1'";
							                                    $kategori=mysql_query($kat) ;     
							                                    while($kategori1=mysql_fetch_object($kategori))     
								                                    {
								                                        echo "<option value=\"$kategori1->nama_sparepart\">$kategori1->nama_sparepart</option>";     
								                                    }    
					                                            ?> 
					                                    </select>
					                                </div>
												</div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Jenis</label>
											    <div class="controls">
													<div class="input-xlarge"><select name="kategori" id="kat_dinding_dpn" class='chosen-select'>
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
											<label for="textfield" class="control-label">Jenis Bahan</label>
											 <div class="controls">
											<div class="input-xlarge">
											<select name="namabahan" id="bahan_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1' group by bahan";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select>
					                            </div>
											</div>
										</div>
										 <div class="control-group">
												<label for="textfield" class="control-label">Jumlah </label>
												<div class="controls"><input type="text" name="jumlah" id="textfield0" class="input-mini"placeholder="Jumlah" data-rule-required="true" data-rule-minlength="1"></div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Dimensi</label>
											    <p><div class="controls"><input type="text" name="pj" id="textfield1" class="input-mini" placeholder="Panjang" data-rule-required="true" data-rule-minlength="1">  mm</div> 
											    <p><div class="controls"><input type="text" name="lb" id="textfield2" class="input-mini" placeholder="Lebar" data-rule-required="true" data-rule-minlength="1"> mm </div> 
											    <p><div class="controls"><input type="text" name="tb" id="textfield3" class="input-mini" placeholder="Tebal" data-rule-required="true" data-rule-minlength="1"> mm</div> 
											     <p><div class="controls"><input type="text" name="dim" id="textfield5" class="input-mini" placeholder="Diameter" data-rule-required="true" data-rule-minlength="1"> mm</div> 
				                        </div>
										<div class="control-group">
											<label for="textfield" class="control-label">Ukuran</label>
											<div class="controls"><input type="text" name="ukuran" id="textfield4" class="input-small"placeholder="Ukuran" data-rule-required="true" data-rule-minlength="1"> mm </div>
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
				</div>
				<div class="span6">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										Gambar Kendaraan
									</h3>
								</div>
								<div class="box-content nopadding">
									<?php if ($edit->jenis_kendaraan=='Dump Truck')
										{
										?>
									<center><img src="<?php echo base_url();?>img/truckdump.png"></center>
									<?php
									    }
										else if ($edit->jenis_kendaraan=='Tangki Bahan Cair')
										{
									?>	
									<center><img src="<?php echo base_url();?>img/truckdump.png"></center>
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
						Keterangan : 
						<ol>
						    <li>Side Panel Kiri atau Kanan</li>
						    <li>Main Frame</li>
						    <li>Pintu Belakang</li>
						    <li>Panel Depan</li>
                            <li>Sub Frame</li>
                            <li>Perisai Kolong</li>
                            <li>Engsel</li>
                            <li>Pengunci</li>
                            <li>Spakbor</li>
						<ol>
					</div>
					
				</div>
				
  <div class="container-fluid">
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
						        <table class="table table-hover table-nomargin table-striped">
						        <thead>
						            <th>No</th>
						            <th>Nama Part</th>
						            <th>Jenis Part</th>
						            <th>Jumlah</th>
						            <th>Panjang</th>
						            <th>Lebar</th>
						            <th>Tebal</th>
						            <th>Volume</th>
						            <th>Berat</th>
						            <th>Massa Jenis</th>
						            <th>Massa (Kg)</th>
						        </thead>
						        <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from view_perhitunganberat where id='$id' group by jenis order by kategori ASC";
				                        $data=mysql_query($myquery) or die (mysql_error());
								        $i=1;
								        $j=1;
								        $total=0;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
										    <td><?php echo $j;?></td>
										    <td><?php echo $baris['jenis'];?></td>
										    <td><?php echo $baris['kategori'];?></td>
										    <td><?php echo $baris['jumlah'];?></td>
										    <td><?php echo $baris['pj'];?></td>
										    <td><?php echo $baris['lb'];?></td>
										    <td><?php echo $baris['tb'];?></td>
										   <td><?php
										              if($baris['kategori'] =='Plat')
										                    {
										                        if($baris['jenken']=='Dump Truck')
										                        {
										                        $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                        echo $b;
										                        }
										                        else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Shell')
										                        {
										                         $b=(0.5*3.14*($baris['pj']+$baris['lb']))*$baris['tb']*1.4;
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Frame')
										                        {
										                         $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Dinding')
										                        {
										                         $b=(0.5*(3.14*$baris['pj']+$baris['lb']))*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Sekat')
										                        {
										                         $b=(0.5*$baris['pj']*$baris['lb']*$baris['tb'])-(3.14*2.75*2.75*$baris['tb'])-(3.14*0.5*50*50*$baris['tb'])-(3.14*0.5*75*75*$baris['tb']);
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Manhole')
										                        {
										                         $b=3.14*(2*$baris['pj'])*$baris['lb']*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Walkway')
										                        {
										                         $b=(2*$baris['pj']*$baris['tb']*15)+(2*$baris['lb']*$baris['tb']*15);
										                         echo $b;
										                        }
										                    }
										                else if($baris['kategori'] =='Absorber / Bantalan Kayu')
										                {
										                     $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                        echo $b;
										                }
										                else
										                {
										                        echo$baris['ukuran'];
										                }
										            ?></td>
										  <td><?php 
										             if($baris['kategori']=='Kerangka')
										                    {
										                    echo $baris['berat'];
										                    }
										                else if ($baris['kategori']=='Aksesoris')
										                {
										                    echo $baris['berat'];
										                }
										                else
										                {
										                        echo"0";
										                }
										                ?></td>
										            <td><?php echo $baris['massajenis'];?></td>
										            <td><?php 
										                    if($baris['kategori']=='Plat')
										                    { 
																if($baris['jenken']=='Dump Truck')
										                        {
										                        $a=(($baris['pj']*$baris['lb']*$baris['tb'])*$baris['massajenis'])/1000000000;
										                        echo $a;
										                        }
										                        else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Shell')
										                        {
										                         $a=(((0.5*3.14*($baris['pj']+$baris['lb']))*$baris['tb']*1.4)/$baris['massajenis'])/1000000000;
										                         echo $a;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Frame')
										                        {
										                         $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Dinding')
										                        {
										                         $b=(0.5*(3.14*$baris['pj']+$baris['lb']))*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Sekat')
										                        {
										                         $b=(0.5*$baris['pj']*$baris['lb']*$baris['tb'])-(3.14*2.75*2.75*$baris['tb'])-(3.14*0.5*50*50*$baris['tb'])-(3.14*0.5*75*75*$baris['tb']);
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Manhole')
										                        {
										                         $b=3.14*(2*$baris['pj'])*$baris['lb']*$baris['tb'];
										                         echo $b;
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['']=='Walkway')
										                        {
										                         $b=(2*$baris['pj']*$baris['tb']*15)+(2*$baris['lb']*$baris['tb']*15);
										                         echo $b;
										                        }
																
										                       
										                    }
										                else if ($baris['kategori']=='Kerangka')
										                {
										                        $a=($baris['berat']*$baris['ukuran'])/1000;
										                        echo $a;
										                }
										                 else if ($baris['kategori']=='Absorber / Bantalan Kayu')
										                {
										                        $a=(($baris['pj']*$baris['lb']*$baris['tb'])*$baris['massajenis'])/1000000000;
										                        echo $a;
										                        
										                }
										                else if ($baris['kategori']=='Aksesoris')
										                {
										                    $a=($baris['berat']*$baris['jumlah']);
										                    echo $a;
										                }
										                ?></td>
										</tr>
									<?php
									    $j++;
									    $i++;
									    $total += $a;
									    }	
									?>
									</tbody>
									<tr>
									   <th colspan='10'><b>Berat Total</b></th>
									   <th><b><?php 
									    echo $total; echo" Kg";
							            ?></th></b>
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
