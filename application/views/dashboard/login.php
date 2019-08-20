<body class="animsition">
	<div class="page-wrapper">
		<div class="page-content--bge5">
			<div class="container">
				<div class="login-wrap">
					<div class="login-content">
						<div class="login-logo">
							<a href="#">
								<img src="<?php echo base_url()?>assets/images/icon/logo.png" alt="CoolAdmin" style="height:150px;">
							</a>
						</div>
						<div class="login-form">
							<form action="<?php echo base_url('login/verify')?>" method="post">
								<div class="form-group">
									<label>Username</label>
									<input class="au-input au-input--full" type="text" name="uname"
										placeholder="Username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="au-input au-input--full" type="password" name="password"
										placeholder="Password">
								</div>
								<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">sign in</button>
							</form>
							<!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                            <?php 
                            if (isset($_GET['suc']) && $_GET['suc'] ==2) {
                            	echo '<p style="color:red;text-align:center;">Username or password Incorrect</p>';
                            }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
