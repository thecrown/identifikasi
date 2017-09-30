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
						            <th>Panjang (mm)</th>
						            <th>Lebar (mm)</th>
						            <th>Tebal (mm)</th>
						            <th>Volume (mm3)</th>
						            <th>Berat</th>
						            <th>Massa Jenis (Kg/m)</th>
						            <th>Massa (Kg)</th>
						        </thead>
						        <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from view_perhitunganberat where id='$id'group by jenis order by kategori ASC ";
				                        $data=mysql_query($myquery) or die (mysql_error());
								       $i=1;
								       $total=0;
		                                while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
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
										                        else if ($baris['jenken']=='Tangki Bahan Cair')
										                        {
										                         $b=(0.5*3.14*($baris['pj']+$baris['lb']))*$baris['tb']*1.4;
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
										                        $a=(($baris['pj']*$baris['lb']*$baris['tb'])*$baris['massajenis'])/1000000000;
										                        echo $a;
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
									    $i++;
									    $total += $a;
									    }	
									?>
									</tbody>
									<tr>
									   <th colspan='9'><b>Berat Total</b></th>
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
