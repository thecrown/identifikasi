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
        <form action="<?php echo base_url();?>index.php/operator/simpanprosesx" method="POST" class='register' id="bb">
            <?php
				$chkbox = $_POST['chk'];
				$BX_NAME=$_POST['BX_NAME'];
				$BX_age=$_POST['BX_age'];			
				$BX_gender=$_POST['BX_gender'];
				$BX_birth=$_POST['BX_birth'];					
			?>
            <fieldset class="row2">				
                <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1?>
								</td>
								<td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[]" value="<?php echo $BX_NAME[$a]; ?>">
								</td>
								<td>
									<label for="BX_age">Age</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age" value="<?php echo $BX_age[$a]; ?>">
								</td>
								<td>
									<label for="BX_gender">Gender</label>
									<input type="text" readonly="readonly" name="BX_gender" value="<?php echo $BX_gender[$a]; ?>">
								</td>
								<td>
									<label for="BX_birth">Berth Pre</label>
									<input type="text" readonly="readonly" name="BX_birth" value="<?php echo $BX_birth[$a]; ?>">
								</td>
							</p>
						</tr>
					<?php } ?>
					</tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
            
            <div class="form-actions">
										<input type="submit" class="btn btn-primary" value="Lanjut">
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
