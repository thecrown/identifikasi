<div id="main">
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
						            <th>Nama Part</th>
						            <th>Jenis Part</th>
						            <th>Jumlah</th>
						            <th>Panjang</th>
						            <th>Lebar</th>
						            <th>Tebal</th>
						            <th>Ukuran</th>
						            <th>Jumlah</th>
						            <th>Option</th>
						        </thead>
						        <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from tb_databeratkaroseri where id_karoseri='$id' ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       $i=1;
									   $total=0;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
										    <td><?php echo $baris['jenis'];?></td>
										    <td><?php echo $baris['kategori'];?></td>
										    <td><?php echo $baris['namabahan'];?></td>
										    <td><?php echo $baris['pj'];?></td>
										    <td><?php echo $baris['lb'];?></td>
										    <td><?php echo $baris['tb'];?></td>
										    <td><?php echo $baris['ukuran'];?></td>
										    <td><?php echo $baris['jumlah'];?></td>
											<td class='hidden-480'>
											   
											    <a href="<?php echo base_url();?>index.php/operator/editdataberatkaroseri/<?php echo $baris['id']?>" onClick="return Editdata()"class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="<?php echo base_url();?>index.php/operator/hapusdataberatkaroseri/<?php echo $baris['id']?>" onClick="return Hapusdata()"class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
												
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
