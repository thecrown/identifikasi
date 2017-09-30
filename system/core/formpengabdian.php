<div style="margin:10px 0;"></div>
    <div class="easyui-tabs" data-options="tools:'#tab-tools'" style="width:auto;height:auto">
	    <div title="Upload Proposal Excel" style="padding:10px">
			<?php echo form_open_multipart('index.php/operator/excelpengabdian');?>
		   <table class="table table-bordered table-condensed table-striped" width="100%">
                    <tr>
                        <td>
						Upload File
                        </td>
                        <td>:</td>
                        <td>
						<input type="file" name="import" size="20" multiple /> &nbsp; <!--&nbsp; <a  href="">Download Format Excel</a>--!>
                        </td>
                    </tr>
                    <tr>
						<td colspan="3" style="text-align: left;">
						<input class="btn btn-primary" type="submit" name="save" value="Upload" id="CP_btLogin" />
						</td>
					</tr>
                </table>
			<?php echo form_close();?>
        </div>
		<div title="Upload Proposal Perjudul" style="padding:10px">
		<?php echo form_open_multipart('index.php/operator/add_pengabdian');?>
		   <table class="table table-bordered table-condensed table-striped" width="100%">
                    <tr>
                        <td width="30%">
                            Judul Kegiatan
                        </td>
                        <td width="70%">
                            <textarea name="judul_kegiatan"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Ketua Pelaksana
                        </td>
                        <td >
                        <input type="text" name="ketua">
						</td>
					</tr>
					<tr>
                        <td >
                            NIDN Ketua
                        </td>
                        <td >
                        <input type="text" name="nidn">
						</td>
					</tr>
					<tr>
                        <td >
                            NIP Ketua
                        </td>
                        <td >
                        <input type="text" name="nip">
						</td>
					</tr>
					<tr>
                        <td>
                            Golongan
                        </td>
                       <td>
                            <select name="golongan">
							<option value="-">-Pilih Salah Satu-</option>
							<option value="3a">3a</option>
							<option value="3b">3b</option>
							<option value="3c">3c</option>
							<option value="3d">3d</option>
							<option value="4a">4a</option>
							<option value="4b">4b</option>
							<option value="4c">4c</option>
							<option value="4d">4d</option>
							<option value="4e">4e</option>
						</select>
                        </td>
                    </tr>
					 <tr>
                        <td width="15%">
                            Jabatan Akademik
                        </td>
                       <td>
						<select name="fungsional">
							<option value="-">Pengajar</option>
							<option value="Asisten Ahli">Asisten Ahli</option>
							<option value="Lektor">Lektor</option>
							<option value="Lektor Kepala">Lektor Kepala</option>
							<option value="Guru Besar">Profesor</option>
						</select>
                        </td>
                    </tr>
                    <tr>
                        <td>
						Jenis Kelamin
                        </td>
                       <td>
						<select name="sex">
							<option value="-">-Pilih Salah Satu-</option>
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						</select>
                        </td>
                    </tr>
					<tr>
                        <td >
                           Fakultas
                        </td>
                        <td >
                        <?php mysql_select_db("teguh_sip3mu") or die (mysql_error());         
								//Menampilkan combo box     
								echo "<select name=\"fakultas\" id=\"fakultas\">";     
								$myquery="select nama_fakultas from fakultas";
								$daftarfak=mysql_query($myquery) or die (mysql_error());     
								while($dataku=mysql_fetch_object($daftarfak))     
									{
									echo "<option value=\"$dataku->nama_fakultas\">$dataku->nama_fakultas</option>";     
									}     
							echo "</select>"; ?>
						</td>
					</tr>
					<tr>
                        <td>
						Telp
                        </td>
                       <td>
						<input type="text" name="telp">
                        </td>
                    </tr>
					<tr>
                        <td>
						email
                        </td>
                        <td>
						<input type="text" name="email">
                        </td>
                    </tr>
					<tr>
                        <td >
                            Anggota Kegiatan
                        </td>
                        <td>
							<ol>
								<li><input type="text" name="anggota1"> 
									<input type="text" name="nip1" placeholder="NIP">
									<select name="sex_anggota1">
										<option value="-">-Pilih Salah Satu-</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</li>
								<li><input type="text" name="anggota2"> 
									<input type="text" name="nip2" placeholder="NIP">
									<select name="sex_anggota2">
										<option value="-">-Pilih Salah Satu-</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</li>
								<li><input type="text" name="anggota3"> 
									<input type="text" name="nip3" placeholder="NIP">
									<select name="sex_anggota3">
										<option value="-">-Pilih Salah Satu-</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</li>
								<li><input type="text" name="anggota4"> 
									<input type="text" name="nip4" placeholder="NIP">
									<select name="sex_anggota4">
										<option value="-">-Pilih Salah Satu-</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</li>
							</ol>
						</td>
						
					</tr>
					<tr>
                        <td>
						Mitra
                        </td>
                        <td>
						<input type="text" name="mitra">
                        </td>
                    </tr>
					<tr>
                        <td>
						Lokasi Kegiatan
                        </td>
                        <td>
						<input type="text" name="lokasi">
                        </td>
                    </tr>
					<tr>
                        <td>
						Biaya disetujui
                        </td>
                        <td>
						<input type="text" name="biaya">
                        </td>
                    </tr>
					<tr>
                        <td>
						Upload File
                        </td>
                        <td>
						<input type="file" name="proposal" size="20" multiple />
                        </td>
                    </tr>
                    <tr>
						<td colspan="3" style="text-align: center; font-family: Verdana; font-size: 12px;
						font-weight: bold; height: 25px; color: #ff0000;">
						</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: left;">
						<input type="submit" name="btbatal" value="Batal" id="CP_btbatal" />&nbsp;
						<input type="submit" name="bttambah" value="Tambah" id="CP_btLogin" />
						</td>
					</tr>
                </table>
			<?php echo form_close();?>
        </div>
    </div>
