
<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		<header class="header-mobile d-block d-lg-none">
			<div class="header-mobile__bar">
				<div class="container-fluid">
					<div class="header-mobile-inner">
						<a class="logo" href="index.html">
							<img src="<?php echo base_url()?>assets/images/icon/logo.png" alt="CoolAdmin" style="height:65px" />
						</a>
						<button class="hamburger hamburger--slider" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<nav class="navbar-mobile">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled">
						<li>
							<a href="<?php echo base_url()?>home/index">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-chart-bar"></i>Artists</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/view_artist">
										<i class="fas fa-chart-bar"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_artist">
										<i class="fa fa-plus-square"></i>Add Artist</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-table"></i>Discography</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/view_discography">
										<i class="fas fa-table"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_discography">
										<i class="fa fa-plus-square"></i>Add Discography</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="far fa-check-square"></i>Studio</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/list_studio">
										<i class="fas fa-table"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_studio">
										<i class="far fa-check-square"></i>Add Studio</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url()?>home/bookings">
								<i class="fa fa-book"></i>Bookings</a>
						</li>
						<li>
							<a href="<?php echo base_url()?>home/changepwd">
								<i class="fa fa-key"></i>Change Password</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- END HEADER MOBILE-->

		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
			<div class="logo">
				<a href="#">
					<img src="<?php echo base_url()?>assets/images/icon/logo.png" alt="Cool Admin" style="height:75px" />
				</a>
			</div>
			<div class="menu-sidebar__content js-scrollbar1">
				<nav class="navbar-sidebar">
					<ul class="list-unstyled navbar__list">
						<!-- <li class="active has-sub"> -->
						<!-- <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a> -->

						<li>
							<a href="<?php echo base_url()?>home/index">
								<i class="fas fa-tachometer-alt"></i>Dashboard</a>
						</li>


						<!-- </li> -->
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-chart-bar"></i>Artists</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/view_artist">
										<i class="fas fa-chart-bar"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_artist">
										<i class="fa fa-plus-square"></i>Add Artist</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="fas fa-table"></i>Discography</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/view_discography">
										<i class="fas fa-table"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_discography">
										<i class="fa fa-plus-square"></i>Add Discography</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a class="js-arrow" href="#">
								<i class="far fa-check-square"></i>Studio</a>
							<ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
									<a href="<?php echo base_url()?>home/list_studio">
										<i class="fas fa-table"></i>View All</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>home/add_studio">
										<i class="far fa-check-square"></i>Add Studio</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url()?>home/bookings">
								<i class="fa fa-book"></i>Bookings</a>
						</li>
						<li>
							<a href="<?php echo base_url()?>home/changepwd">
								<i class="fas fa-tachometer-alt"></i>Change Password</a>
						</li>
					
					</ul>
				</nav>
			</div>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<div class="header-button">
								<div class="account-wrap">
									<div class="account-item clearfix">
										<div class="account-dropdown__footer">
											<a href="<?php echo base_url('login/logout')?>">
												<i class="zmdi zmdi-power"></i>Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- HEADER DESKTOP-->
