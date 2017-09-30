<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.8.2.min.js"></script>
<script language="javascript">
   function tambahHobi() {
     var idf = document.getElementById("idf").value;
     var stre;
     stre="<p id='srow" + idf + "'><input type='text' size='40' name='rincian_hobi[]' placeholder='Masukkan Hobi' /> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
     $("#divHobi").append(stre);
     idf = (idf-1) + 2;
     document.getElementById("idf").value = idf;
   }
   function hapusElemen(idf) {
     $(idf).remove();
   }
</script>
<div id="main">
			<div class="container-fluid">
                <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-ok"></i>
									Input Perhitungan Karoseri Kendaraan
								</h3>
							</div>
							<div class="box-content">
								<form action="<?php echo base_url();?>index.php/operator/simpanperhitungan" method="POST" class='form-horizontal form-validate' id="bb">
									 <?php echo form_hidden('id',$edit->id)?>
									     <input id="idf" value="1" type="hidden" />
                                        <p> Nama : <input name="nama" type="text" id="nama" size="40"> </p>
                                         <button type="button" onclick="tambahHobi(); return false;">Tambah Rincian Hobi</button>
                                        <div id="divHobi"></div>
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
</div>
</div>
</body>
</html>
