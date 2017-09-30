<div id="main">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data Karoseri
								</h3>
							</div>
							<div class="box-content nopadding">
						        <table class="table table-hover table-nomargin table-striped">
						        <thead>
						            <th>No</th>
									<th>Nama Karoseri</th>
						            <th>Alamat</th>
						            <th>Nomor Telp</th>
						            <th>email</th>
						        </thead>
						         <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from view_perhitunganberat where id='$id' group by karoseri order by kategori ASC";
				                        $data=mysql_query($myquery) or die (mysql_error());
								        $j=1;
								        while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
										    <td><?php echo $j;?></td>
										    <td><?php echo $baris['karoseri'];?></td>
										    <td><?php echo $baris['alamat'];?></td>
										    <td><?php echo $baris['telp'];?></td>
										    <td><?php echo $baris['email'];?></td>
										</tr>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data Gambar
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
				<div class="row-fluid">
				<div class="span12">
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
										    <td><?php echo number_format($baris['pj'],2);?></td>
										    <td><?php echo number_format($baris['lb'],2);?></td>
										    <td><?php echo number_format($baris['tb'],2);?></td>
										   <td><?php
										              if($baris['kategori'] =='Plat')
										                    {
										                        if($baris['jenken']=='Dump Truck')
										                        {
										                        $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                        echo number_format ($b,2);
										                        }
										                        else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Shell')
										                        {
										                         $b=(0.5*3.14*($baris['lb']+$baris['tb']))*$baris['pj']*1.4;
										                         echo number_format ($b,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Frame')
										                        {
										                         $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                         echo number_format ($b,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Dinding')
										                        {
										                         $b=(0.5*(3.14*$baris['pj']*$baris['lb']))*$baris['tb'];
										                         echo number_format ($b,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Sekat')
										                        {
										                         $b=(0.5*$baris['pj']*$baris['lb']*$baris['tb'])-(3.14*2.75*2.75*$baris['tb'])-(3.14*0.5*50*50*$baris['tb'])-(3.14*0.5*75*75*$baris['tb']);
										                         echo number_format ($b,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Manhole')
										                        {
										                         $b=3.14*(2*$baris['pj'])*$baris['lb']*$baris['tb'];
										                        echo number_format ($b,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Walkway')
										                        {
										                         $b=(2*$baris['pj']*$baris['tb']*15)+(2*$baris['lb']*$baris['tb']*15);
										                         echo number_format ($b,2);
										                        }
										                    }
										                else if($baris['kategori'] =='Absorber / Bantalan Kayu')
										                {
										                     $b=$baris['pj']*$baris['lb']*$baris['tb'];
										                        echo number_format ($b,2);
										                }
										                else
										                {
										                        echo number_format ($baris['ukuran'],2);
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
																 echo number_format ($a,2);
										                        }
										                        else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Shell')
										                        {
										                         $a=(((0.5*3.14*($baris['lb']+$baris['tb']))*$baris['pj']*1.4)*$baris['massajenis'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Frame')
										                        {
										                         $a=($baris['jumlah']*$baris['pj']*$baris['lb']*$baris['tb']*$baris['massajenis'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Dinding')
										                        {
										                         $a=(((0.5*(3.14*$baris['pj']+$baris['lb']))*$baris['tb'])*$baris['massajenis']*$baris['jumlah'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Sekat')
										                        {
										                         $a=(((0.5*$baris['pj']*$baris['lb']*$baris['tb'])-(3.14*2.75*2.75*$baris['tb'])-(3.14*0.5*50*50*$baris['tb'])-(3.14*0.5*75*75*$baris['tb']))*$baris['massajenis']*$baris['jumlah'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Manhole')
										                        {
										                         ($a=(3.14*(2*$baris['pj'])*$baris['lb']*$baris['tb'])*$baris['massajenis'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Walkway')
										                        {
										                         $a=((2*$baris['pj']*$baris['tb']*15)+(2*$baris['lb']*$baris['tb']*15)*$baris['massajenis'])/1000000000;;
										                         echo number_format ($a,2);
										                        }
																else if ($baris['jenken']=='Tangki Bahan Cair' and $baris['jenis']=='Piping')
										                        {
										                         $a=($baris['ukuran']*$baris['berat'])/1000000000;
										                         echo number_format ($a,2);
										                        }
																else
																{
																	echo"";
																}																	
										                    }
										                else if ($baris['kategori']=='Kerangka')
										                {
										                        $a=($baris['berat']*$baris['ukuran'])/1000;
										                        echo number_format ($a,2);
										                }
										                 else if ($baris['kategori']=='Absorber / Bantalan Kayu')
										                {
										                        $a=(($baris['pj']*$baris['lb']*$baris['tb'])*$baris['massajenis'])/1000000000;
										                        echo number_format ($a,2);
										                        
										                }
										                else if ($baris['kategori']=='Aksesoris')
										                {
										                    $a=($baris['berat']*$baris['jumlah']);
										                    echo number_format ($a,2);
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
									    echo number_format($total,2); echo" Kg";
							            ?></th></b>
									</table>
									
							</div>
						</div>
				</div>
				</div>
		 <div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Data Perhitungan
								</h3>
							</div>
							<div class="box-content nopadding">
						        <table class="table table-hover table-nomargin table-striped">
						        <thead>
						            <th>No</th>
									<th>Berat karoseri (Kg)</th>
						            <th>Berat Muatan (T)</th>
						            <th>Berat Penumpang (Kg)</th>
						            <th>Berat Kosong Kendaraan (Kg)</th>
						             <th>JBB (T)</th>
						              <th>JBI (T)</th>
						        </thead>
						         <tbody>
						        <?php 
						                $id=$id;
						                $myquery="select * from view_totalberat where id='$id'";
				                        $data=mysql_query($myquery) or die (mysql_error());
								        $j=1;
								        while($baris=mysql_fetch_array($data))
		                                {
							         ?>
										<tr>
										    <td><?php echo $j;?></td>
										    <td><?php echo $baris['brtkaroseri'];?></td>
										    <td><?php echo $baris['brt'];?></td>
										    <td><?php  $x=$baris['brtorang'] * 80; echo $x; ?></td>
										    <td><?php echo $baris['brtkosong'];?></td>
										    <td><?php $jbb=(($baris['brtkaroseri']/1000)+$baris['brt']+($baris['brtorang']/1000)+($baris['brtkosong']/1000));
										                        echo number_format($jbb,2);										    
										        ?></td>
										     <td><?php 
										                if($baris['sumbu']=='1.1' and $jbb>'0' and $jbb<='12')
                                                            {
                                                                    echo"Karoseri Lanjut";
                                    
                                                            }	
                                                        else if ($baris['sumbu']=='1.2' and $jbb>'0' and $jbb<='16')
                                                            {
                                                                echo"Karoseri Lanjut";
                                                            }					
                                                        else if ($baris['sumbu']=='1.2' and $jbb>'0' and $jbb<='16')
                                                            {
                                                                echo"Karoseri Lanjut";
                                                            }
                                                        else if ($baris['sumbu']=='11.2' and $jbb>'0' and $jbb<='21')
                                                            {
                                                                echo"Karoseri Lanjut";
                                                            }
                                                        else if ($baris['sumbu']=='1.22' and $jbb>'0' and $jbb<='24')
                                                            {
                                                                echo"Karoseri Lanjut";
                                                            }
                                                        else if ($baris['sumbu']=='1.1.22' and $jbb>'0' and $jbb<='16')
                                                            {
                                                                echo"Karoseri Lanjut";
                                                            }
                                                        else
                                                        {
                                                                echo'Tidak Memenuhi';
                                                        }																						            								    
										        ?></td>
										</tr>
									<?php
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
