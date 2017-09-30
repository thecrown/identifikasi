<div id="main">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Perhitungan Berat Kendaraan
								</h3>
							</div>
							<div class="box-content nopadding">
							  <form action="<?php echo base_url();?>index.php/operator/simpanhtberatkaroseri" method="POST" class='form-horizontal form-validate' id="bb">
							    <?php
							        $karoseri=$this->input->post('karoseri');
							        $jeniskendaraan=$this->input->post('jeniskendaraan');
							        $merek=$this->input->post('merek');
							    ?>
							    <input type="hidden" name="1" id="textfield" value='Dinding Depan'>
							    <input type="hidden" name="2" id="textfield" value='Penguat dinding depan'>
							    
							    <input type="hidden" name="3" id="textfield" value='Lantai'>
                                <input type="hidden" name="4" id="textfield" value='Crossmember'>
                                <input type="hidden" name="5" id="textfield" value='Bantalan Chasis Kiri'>
                                <input type="hidden" name="6" id="textfield" value='Bantalan chassis kanan'>
                                <input type="hidden" name="7" id="textfield" value='U Bolt'>
                                <input type="hidden" name="8" id="textfield" value='Pengaman Kolong Kanan'>
                                <input type="hidden" name="9" id="textfield" value='Pengaman Kolong Kiri'>
                                <input type="hidden" name="10" id="textfield" value='Rangka Mendatar Pintu Bak'>
                                <input type="hidden" name="11" id="textfield" value='Penguat Tegak'>
                                <input type="hidden" name="12" id="textfield" value='Penuntun Bak'>
                                <input type="hidden" name="13" id="textfield" value='AS Engsel'>
                                <input type="hidden" name="14" id="textfield" value='Mounting Chasis'>
                                <input type="hidden" name="15" id="textfield" value='Chasis'>
                                
                                
                                <input type="hidden" name="16" id="textfield" value='Penguat Panel Tutup Belakang'>
                                <input type="hidden" name="17" id="textfield" value='Panel Tutup Belakang'>
                                <input type="hidden" name="18" id="textfield" value='Penutup Bak'>
							    <input type="hidden" name="19" id="textfield" value='Engsel tutup Belakang Kiri'>
							    <input type="hidden" name="20" id="textfield" value='Engsel tutup Belakang Kanan'>
                                <input type="hidden" name="21" id="textfield" value='Engsel Pintu Belakang'>
                                <input type="hidden" name="22" id="textfield" value='Dudukan Engsel Pintu Belakang'>
                                <input type="hidden" name="23" id="textfield" value='Batang Pengunci'>
                                <input type="hidden" name="24" id="textfield" value='Engsel Bak'>
                                
                                <input type="hidden" name="25" id="textfield" value='Panel Diding Kanan'>
                                <input type="hidden" name="26" id="textfield" value='Penguat Dinding Kanan'>
                                <input type="hidden" name="27" id="textfield" value='Sub Frame Kanan'>
                                <input type="hidden" name="28" id="textfield" value='Spakbor Kanan'>
                                <input type="hidden" name="29" id="textfield" value='Engsel Bak Kanan'>
                                
                                
                                <input type="hidden" name="30" id="textfield" value='Panel Diding Kiri'>
                                <input type="hidden" name="31" id="textfield" value='Penguat Dinding Kiri'>
                                <input type="hidden" name="32" id="textfield" value='Sub Frame Kiri'>
                                <input type="hidden" name="33" id="textfield" value='Spakbor Kiri'>
                                <input type="hidden" name="34" id="textfield" value='Engsel Bak Kiri'>
                                
							    <input type="hidden" name="karoseri" value="<?php echo $karoseri?>"><input type="hidden" name="jeniskendaraan" value="<?php echo $jeniskendaraan?>"><input type="hidden" name="merek" value="<?php echo $merek?>">
								<table class="table table-hover table-nomargin table-striped dataTable dataTable-scroll-x  dataTable-grouping dataTable-noheader" data-grouping="expandable" >
									<thead>
										<tr>
											<th>Keterangan</th>
											<th>Nama Komponen Bagian</th>
											<th>Jenis</th>
											<th>Jenis Bahan</th>
											<th>Jumlah</th>
											<th>Volume / Panjang Komponen</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>SISI BAGIAN DEPAN</td>
											<td>
												Dinding Depan
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_dinding_dpn" id="kat_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_dinding_dpn" id="bahan_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_dinding" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_dinding_dpn" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_dinding_dpn" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_dinding_dpn" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
										</tr>
										<tr>
											<td>SISI BAGIAN DEPAN</td>
											<td>
												Penguat Dinding
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penguat_dpn" id="kat_penguat_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penguat_dpn" id="bahan_penguat_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penguat" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penguat" id="textfield" class="input-small" placeholder="panjang"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Penguat Panel tutup
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="jenis_penguat_panel_tutup" id="jenis_penguat_panel_tutup" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penguat_panel_tutup" id="bahan_penguat_panel_tutup" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penguat_panel_tutup" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penguat_panel_tutup" id="textfield" class="input-small" placeholder="Panjang">mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Panel Tutup Belakang
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_panel_tutup_blk" id="kat_panel_tutup_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_panel_tutup_blk" id="bahan_panel_tutup_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_panel_tutup_blk" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_panel_tutup_blk" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_panel_tutup_blk" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_panel_tutup_blk" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Penutup Bak
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penutup_bak" id="kat_penutup_bak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penutup_bak" id="bahan_penutup_bak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penutup_bak" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penutup_bak" id="textfield" class="input-small" placeholder="Panjang"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel tutup Belakang Kiri
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engseltutup_kr" id="kat_engseltutup_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_engseltutup_kr" id="bahan_engseltutup_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engseltutup_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engseltutup_kr" id="textfield" class="input-small" placeholder="Berat"> 
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Tutup Belakang Kanan
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engseltutup_kn" id="kat_engseltutup_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_engseltutup_kn" id="bahan_engseltutup_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engseltutup_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engseltutup_kn" id="textfield" class="input-small" placeholder="Panjang"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Pintu Belakang
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engselpintu_blk" id="kat_engselpintu_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_engselpintu_blk" id="bahan_engselpintu_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engselpintu_blk" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engselpintu_blk" id="textfield" class="input-small" placeholder="Panjang"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Dudukan Engsel Pintu Belakang
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_dudukan_engselpintu_blk" id="kat_dudukan_engselpintu_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_dudukan_engselpintu_blk" id="bahan_dudukan_engselpintu_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_dudukan_engselpintu_blk" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_dudukan_engselpintu_blk" id="textfield" class="input-small" placeholder="Panjang"> Kg 
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Batang Pengunci
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_batang_pengunci" id="kat_batang_pengunci" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_batang_pengunci" id="bahan_batang_pengunci" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_batang_pengunci" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_batang_pengunci" id="textfield" class="input-small" placeholder="Panjang"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Bak
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engselbak" id="kat_engselbak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_engselbak" id="bahan_engselbak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engselbak" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engselbak" id="textfield" class="input-small" placeholder="Panjang"> Kg 
											
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Panel Diding
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_paneldinding_kn" id="kat_dpaneldinding_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_paneldinding_kn" id="bahan_paneldinding_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_paneldinding_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_paneldinding_kn" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_paneldinding_kn" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_paneldinding_kn" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Penguat Dinding
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penguatdinding_kn" id="kat_penguatdinding_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penguatdinding_kn" id="bahan_penguatdinding_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penguatdinding_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penguatdinding_kn" id="textfield" class="input-small" placeholder="Panjang"> mm
											
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Sub Frame 
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_subframe_kn" id="kat_subframe_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_subframe_kn" id="bahan_subframe_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_subframe_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_subframe_kn" id="textfield" class="input-small" placeholder="Panjang"> mm
											
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Spakbor
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_spakbor_kn" id="kat_spakbor_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_spakbor_kn" id="bahan_spakbor_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_spakbor_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_spakbor_kn" id="textfield" class="input-small" placeholder="Panjang"> 
											
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Engsel Bak Kanan
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engselbak_kn" id="kat_engselbak_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_engselbak_kn" id="bahan_engselbak_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engselbak_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engselbak_kn" id="textfield" class="input-small" placeholder="Panjang">
											
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Panel Diding Kiri
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_paneldinding_kr" id="kat_dpaneldinding_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_paneldinding_kr" id="bahan_paneldinding_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_paneldinding_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_paneldinding_kr" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_paneldinding_kr" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_paneldinding_kr" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Penguat Dinding
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penguatdinding_kr" id="kat_penguatdinding_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penguatdinding_kr" id="bahan_penguatdinding_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penguatdinding_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penguatdinding_kr" id="textfield" class="input-small" placeholder="Panjang"> mm
											
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Sub Frame 
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_subframe_kr" id="kat_subframe_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_subframe_kr" id="bahan_subframe_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_subframe_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_subframe_kr" id="textfield" class="input-small" placeholder="Panjang"> mm
											
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Spakbor
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_spakbor_kr" id="kat_spakbor_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_spakbor_kr" id="bahan_spakbor_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_spakbor_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_spakbor_kr" id="textfield" class="input-small" placeholder="Panjang"> 
											
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Engsel Bak Kiri
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_engselbak_kr" id="kat_engselbak_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
										<td><div class="input-xlarge"><select name="bahan_engselbak_kr" id="bahan_engselbak_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_engselbak_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_engselbak_kr" id="textfield" class="input-small" placeholder="Panjang">
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Lantai
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_lantai" id="kat_lantai" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_lantai" id="bahan_lantai" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_lantai" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_lantai" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_lantai" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_lantai" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Crossmember 1
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_member1" id="kat_member1" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_member1" id="bahan_member1" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_member1" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_member1" id="textfield" class="input-small" placeholder="Panjang">  mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Bantalan Chasis Kiri
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_bantalan_kr" id="kat_bantalan_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_bantalan_kr" id="bahan_bantalan_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_bantalan_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_bantalan_kr" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_bantalan_kr" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_bantalan_kr" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Bantalan Chasis Kanan
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_bantalan_kn" id="kat_bantalan_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_bantalan_kn" id="bahan_bantalan_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_bantalan_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_bantalan_kn" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_bantalan_kn" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_bantalan_kn" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												U Bolt
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_ubolt" id="kat_ubolt" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_ubolt" id="bahan_ubolt" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_ubolt" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_ublot" id="textfield" class="input-small" placeholder="Berat">  Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Pengaman Kolong Kanan
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_kolong_kn" id="kat_kolong_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_kolong_kn" id="bahan_kolong_kn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jm_kolong_kn" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_kolong_kn" id="textfield" class="input-small" placeholder="Berat"> Kg</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Pengamanan Kolong Kiri
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_kolong_kr" id="kat_kolong_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_kolong_kr" id="bahan_kolong_kr" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_kolong_kr" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_kolong_kr" id="textfield" class="input-small" placeholder="Berat"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Rangka Mendatar Pintu Bak
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_rangkabak" id="kat_rangkabak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_rangkabak" id="bahan_rangkabak" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_rangkabak" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_rangkabak" id="textfield" class="input-small" placeholder="Panjang"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Penguat Tegak
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penguattgk" id="kat_penguattgk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penguattgk" id="bahan_penguattgk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_penguattgk" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_penguattgk" id="textfield" class="input-small" placeholder="Panjang">  mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Penuntun Bak
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_penuntun" id="kat_penuntun" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_penuntun" id="bahan_penuntun" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="pj_penuntun" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_penuntun" id="textfield" class="input-small" placeholder="Berat"> Kg</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												AS Engsel
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_asengsel" id="kat_asengsel" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_asengsel" id="bahan_asengsel" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_asengsel" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="berat_asengsel" id="textfield" class="input-small" placeholder="Berat"> Kg
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Mounting Chasis
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_mounting" id="kat_mounting" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_mounting" id="bahan_mounting" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_mounting" id="textfield" class="input-small"placeholder="Jumlah"></td>
											<td><input type="text" name="pj_mounting" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="lb_mounting" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="tb_mounting" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Chasis
											</td>
											<td>
												<div class="control-group">
													<div class="input-xlarge"><select name="kat_chasis" id="kat_chasis" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $kat="select nama_kategori from tb_kategori where status='1'";
							                                $kategori=mysql_query($kat) ;     
							                                while($kategori1=mysql_fetch_object($kategori))     
								                            {
								                                 echo "<option value=\"$kategori1->nama_kategori\">$kategori1->nama_kategori</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
												</div>
											</td>
											<td><div class="input-xlarge"><select name="bahan_chasis" id="bahan_chasis" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select bahan from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->bahan\">$nmbahan->bahan</option>";     
								                            }    
					                                ?> 
					                                    </select></div>
											</td>
											<td><input type="text" name="jml_chasis" id="textfield" class="input-small" placeholder="Jumlah"></td>
											<td><input type="text" name="pj_chasis" id="textfield" class="input-small" placeholder="Panjang"> mm
										</tr>
									</tbody>
								</table>
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
