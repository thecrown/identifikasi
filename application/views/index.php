<body>
	<div id="navigation">
		<div class="container-fluid">
			<a id="brand">Sistem Identifikasi Kendaraan Angkut</span></a>
				<div class="user">		
					<div class="dropdown">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">Sistem Login <img src="<?php echo base_url();?>img/people.png" alt=""></a>
							<ul class="dropdown-menu pull-right span3">
								<li>
									<div class="box">
										<div class="box-title" style="margin-top:-10px;">
											<h4>Login Sistem</h4>
										</div>
										<div class="box-content">
											<div class="login-body">
												<form action="<?php echo base_url()?>identifikasi/auth" method='POST' class='form-validate' id="test">
													<div class="control-group">
														<div class="email controls">
															<input type="text" name="username" id="iduser" placeholder="User ID" data-rule-required="true" style="width:90%;">
														</div>
													</div>
													<div class="control-group">
														<div class="pw controls">
															<input type="password" name="password" id="upw" placeholder="Password" data-rule-required="true" style="width:90%;">
														</div>
													</div>
													<div class="submit">
														<div class="remember">
															
														</div>
														<div class="pull-right"><input type="submit" value="Log in" class='btn btn-primary'></div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</li>
							</ul>
					</div>
				</div>
		</div>
	</div>
	
							    <center><img src="<?php echo base_url();?>img/coverdimensi.png"></center>
				
<div id="footer">
	<p>SIKA 2017<span class="font-grey-4">|</span> <a href="mailto : k.teguh.m@gmail.com">Contact</a> <span class="font-grey-4">|</span> <a href="#">Imprint</a></p>
	<a href="#" class="gototop"><i class="icon-arrow-up"></i></a>
</div>
</body>
</html>
