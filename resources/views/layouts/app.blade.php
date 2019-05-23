<!DOCTYPE html>
<html lang="en">
    <head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Asta - Bootstrap 4 Responsive Clean Admin HTML5 Dashboard Template</title>

		<!--favicon -->
		<!-- <link rel="icon" href="../favicon.ico" type="image/x-icon"/> -->

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

		<!--Style css-->
		<link rel="stylesheet" href="{{ asset('assets/css/leftmenu-style.css')}}">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/toggle-menu/sidemenu-dark.css')}}">

	</head>

	<body class="app ">

		<div id="spinner"></div>

		<div id="app" class="page">
			<div class="main-wrapper page-main" >
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index.html">
						<img src="../assets/img/brand/logo.png" class="header-brand-img" alt="  Asta-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
						</ul>
                        <div class=" form-inline mr-auto horizontal" id="headerMenuCollapse">
							<div class="d-none d-lg-block">
								<ul class="nav">
									<li class="nav-item with-sub">
										<a class="nav-link mr-0" href="#">
											<i class="fa fa-cog"></i>
											<span> Settings</span>
										</a>
										<div class="sub-item dropdown-menu-right">
											<ul>
												<li>
													<a href="#">Setting 1</a>
												</li>
												<li>
													<a href="#">Setting 2</a>
												</li>
												<li>
													<a href="#">Setting 3</a>
												</li>

											</ul>
										</div><!-- sub-item -->
									</li>
									<li class="nav-item with-sub">
										<a class="nav-link" href="#"><i class="fa fa-cube"></i><span>Options</span></a>
										<div class="sub-item dropdown-menu-right">
											<ul>
												<li>
													<a href="#">Option 1 </a>
												</li>
												<li>
													<a href="#">Option 2</a>
												</li>
												<li>
													<a href="#">Option 3</a>
												</li>

												<li class="sub-with-sub">
													<a href="#">Option 3</a>
													<ul>
														<li>
															<a href="#">Option 01</a>
														</li>
														<li>
															<a href="#">Option 02</a>
														</li>
														<li>
															<a href="#">Option 03</a>
														</li>
														<li>
															<a href="#">Option 04</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
										<!-- dropdown-menu -->
									</li>
								</ul>
						    </div>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    <li class=""><a href="#" class=" "></a>
							<form class="form-inline mr-auto">
								<div class="search-element">
									<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search"tabindex="1">
									<button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
								</div>
						    </form>
						</li>
							<li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg "><i class="fa fa-envelope-o"></i></a><span class="pulse bg-danger"></span>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="../assets/img/avatar/avatar-1.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Stewart Ball</b>
													<p>Your template awesome</p>
												</div>
												<div class="time">6 hours ago</div>
											</div>

										</div>
									</a>
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="../assets/img/avatar/avatar-2.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Jonathan North</b>
													<p>Your Order Shipped.....</p>
												</div>
												<div class="time">45 mins ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../assets/img/avatar/avatar-4.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Victor Taylor</b>
													<p>Hi!, I' am web developer</p>
												</div>
												<div class="time"> 8 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../assets/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
													<p>Hi!, I' am web designer</p>
												</div>
												<div class="time"> 3 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="../assets/img/avatar/avatar-5.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Sam	Lyman</b>
													<p>Hi!, I' am java developer</p>
												</div>
												<div class="time"> 15 mintues ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg"><i class="fa fa-bell-o"></i></a><span class="pulse bg-danger"></span>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item">
										<i class="fa fa-users  text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-exclamation-triangle text-danger"></i>
										<div class="dropdown-item-desc">
											<b>Error message occurred....</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-warning"></i>
										<div class="dropdown-item-desc">
											<b> Adding new people</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-shopping-cart text-success"></i>
										<div class="dropdown-item-desc">
											<b>Your items Arrived</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-comment text-primary"></i>
										<div class="dropdown-item-desc">
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand"  id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
							<img src="../assets/img/avatar/avatar-1.jpg" alt="profile-user" class="rounded-circle w-32">
							<div class="d-sm-none d-lg-inline-block">Victorina</div></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion ion-android-person"></i> Profile
								</a>
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion-android-drafts"></i> Messages
								</a>
								<a href="profile.html" class="dropdown-item has-icon">
									<i class="ion ion-gear-a"></i> Settings
								</a>
								<a href="#" class="dropdown-item has-icon">
									<i class="ion-ios-redo"></i> Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>

				<aside class="app-sidebar">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
								<img alt="image" src="../assets/img/avatar/avatar-1.jpg" class=" avatar-md rounded-circle">
								<span class="ml-2 d-lg-block">
									<span class="text-dark app-sidebar__user-name mt-5">Victorina</span><br>
									<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="index.html"><span>Sales Dashboard </span></a></li>
								<li><a class="slide-item" href="index2.html"><span>E-Commerce</span></a></li>
								<li><a class="slide-item" href="index3.html"><span>HR Dashboard </span></a></li>
								<li><a class="slide-item" href="index4.html"><span>Finance Dashboard </span></a></li>
								<li><a class="slide-item" href="index5.html"><span>Social Dashboard</span></a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements.html" class="slide-item"> Elements</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="toastr.html" class="slide-item"> Toastr</a></li>
								<li><a href="calender.html" class="slide-item"> Calendar</a></li>
								<li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
								<li><a href="modals.html" class="slide-item"> Modals</a></li>
								<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="users.html" class="slide-item"> Users List</a></li>
								<li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
								<li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="icons-ion.html" class="slide-item"> Ion Icons</a></li>
								<li><a href="icons-fontawesome.html" class="slide-item"> Font Awesome</a></li>
								<li><a href="icons-feather.html" class="slide-item"> Feather Icons</a></li>
								<li><a href="icons-materialdesign.html" class="slide-item"> Material Design</a></li>
								<li><a href="icons-themify.html" class="slide-item"> Themify</a></li>
								<li><a href="icons-simpleline.html" class="slide-item"> Simple line</a></li>
								<li><a href="icons-pe7.html" class="slide-item"> pe7</a></li>
								<li><a href="icons-flag.html" class="slide-item"> Flag Icons</a></li>
								<li><a href="icons-weather.html" class="slide-item"> Weather Icons</a></li>
								<li><a href="icons-typicons.html" class="slide-item"> Typicons</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="table.html" class="slide-item">Basic Tables</a></li>
								<li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="formelements.html" class="slide-item"> Form Elements</a></li>
								<li><a href="formadvanced.html" class="slide-item"> Advanced Form</a></li>
								<li><a href="formeditor.html" class="slide-item"> Form Editor</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
								<li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
								<li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
								<li><a href="echart.html" class="slide-item"> ECharts</a></li>
								<li><a href="chartist.html" class="slide-item"> Chartist</a></li>
								<li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
								<li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="maps.html" class="slide-item"> Google Maps</a></li>
								<li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
							</ul>
						</li>
						@can('isAdmin')
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
								<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="reset.html" class="slide-item"> Reset Password</a></li>
								<li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="505.html" class="slide-item"> 505</a></li>
								<li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
							</ul>
						</li>
						@endcan
						

					</ul>
				</aside>

				<div class="app-content">
					<div class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Empty page</li>
							<li class="ml-auto d-lg-flex d-none">
								<span class="sparkline_bar mr-2 float-left"></span>
								<span class="float-left border-">
									<span class="mb-0 mt-1 mr-2">1,267</span><small class="mb-0 mr-3">[ Visitors ]</small>
								</span>
								<span class="sparkline_bar1 mr-2 float-left"></span>
								<span class="float-left">
									<span class="mb-0 mt-1 mr-2">215</span><small class="mb-0">[ Chats ]</small>
								</span>
							</li>
                        </ol>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
                                    @yield('content')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy;  Asta-Admin 2018. Design By<a href="https://spruko.com/"> Spruko</a>
					</div>
				</footer>

			</div>
		</div>

		<!--Jquery.min js-->
		<script src="{{ asset('assets/js/jquery.min.js')}}"></script>

		<!--popper js-->
		<script src="{{ asset('assets/js/popper.js')}}"></script>

		<!--Tooltip js-->
		<script src="{{ asset('assets/js/tooltip.js')}}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="{{ asset('assets/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>

		<!--Scroll-up-bar.min js-->
		<script src="{{ asset('assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>

		<!--mCustomScrollbar js-->
		<script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!--Sidemenu js-->
		<script src="{{ asset('assets/plugins/toggle-menu/sidemenu.js')}}"></script>

		<!--Othercharts js-->
		<script src="{{ asset('assets/plugins/othercharts/jquery.knob.js')}}"></script>
		<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

		<!--Scripts js-->
		<script src="{{ asset('assets/js/scripts.js')}}"></script>

    </body>
    </html>