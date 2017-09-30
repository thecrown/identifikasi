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
								<table class="table table-hover table-nomargin table-striped dataTable dataTable-scroll-x  dataTable-grouping dataTable-noheader" data-grouping="expandable" >
									<thead>
										<tr>
											<th>Komponen Bagian</th>
											<th>Kategori Bahan</th>
											<th>Jenis</th>
											<th>Nama Komponen</th>
											<th>Nama Bahan</th>
											<th>Vol / Berat</th>
											<th>Jumlah</th>
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
											<td><div class="input-xlarge"><select name="jenis_dinding_dpn" id="jenis_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="jml_dinding" id="textfield" class="input-small"></td>
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
											<td><div class="input-xlarge"><select name="nama_penguat_dpn" id="nama_penguat_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_penguat" id="textfield" class="input-small" placeholder="panjang"> mm</td>
											<td><input type="text" name="jml_penguat" id="textfield" class="input-small"></td>
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
											<td><div class="input-xlarge"><select name="nama_penguat_panel_tutup" id="nama_penguat_panel_tutup" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_penguat_panel_tutup" id="textfield" class="input-small" placeholder="Panjang">mm</td>
											<td><input type="text" name="jml_penguat_panel_tutup" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Panel Tutup
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
											<td><div class="input-xlarge"><select name="nama_panel_tutup_blk" id="nama_panel_tutup_blk" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Penutup Bak
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel tutup Belakang Kiri
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Tutup Belakang Kanan
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Pintu Belakang
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Dudukan Engsel Pintu Belakang
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Batang Pengunci
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BELAKANG</td>
											<td>
												Engsel Bak
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Panel Diding
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Penguat Dinding
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Sub Frame 
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Spakbor
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KANAN</td>
											<td>
												Engsel Bak Kanan
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Panel Dinding
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Penguat Dinding
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Sub Frame 
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Spakbor
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN KIRI</td>
											<td>
												Engsel Bak Kiri
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Lantai
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Crossmember 1
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Crossmember 2
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Bantalan Chasis Kiri
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Bantalan Chasis Kanan
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												U Bolt
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Pengaman Kolong Kanan
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Pengamanan Kolong Kiri
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Rangka Mendatar Pintu Bak
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Penguat Tegak
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Penuntun Bak
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												AS Engsel
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Mounting Chasis
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										<tr>
											<td>SISI BAGIAN BAWAH</td>
											<td>
												Chasis
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
											<td><div class="input-xlarge"><select name="nama_dinding_dpn" id="nama_dinding_dpn" class='chosen-select'>
													<option value="">Pilih Salah Satu</option>
						                    	    <?php 
									                        $bahan="select * from tb_sparepart where status='1'";
							                                $namabahan=mysql_query($bahan) ;     
							                                while($nmbahan=mysql_fetch_object($namabahan))     
								                            {
								                                 echo "<option value=\"$nmbahan->nama_sparepart\">$nmbahan->nama_sparepart</option>";     
								                            }    
					                                ?> 
					                                    </select></div></td>
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
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Panjang"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Lebar"> x <input type="text" name="pj_dinding" id="textfield" class="input-small" placeholder="Tebal"> mm</td>
											<td><input type="text" name="pj_dinding" id="textfield" class="input-small"></td>
										</tr>
										
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
