
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>FXFund</title>
    
		<!-- Vendors Style-->
		<link rel="stylesheet" href="css/vendors_css.css">
		  
		<!-- Style-->  
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skin_color.css">
		<link rel="stylesheet" href="css/custom-13.css">
		
     
  </head>
  

	<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">
		
	<div class="wrapper">
		<div id="loader"></div>
		
	  <header class="main-header" style="background-color: #ebf2ff;">
			<div class="d-flex align-items-center logo-box justify-content-start">
				<a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
					<img src="../images/svg-icon/collapse.svg" class="filter-black img-fluid svg-icon" alt="">
				</a>
				<!-- Logo -->
				<a href="index.html" class="logo">
				  <div class="logo-lg">
					  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
					  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
				  </div>
				</a>	
			</div>  
	    <!-- Header Navbar -->
	    <nav class="navbar navbar-static-top">
	      <!-- Sidebar toggle button-->
			  <div class="app-menu">
					<ul class="header-megamenu nav">
						<li class="btn-group nav-item d-md-none">
							<a href="#" class="waves-effect waves-light nav-link push-btn btn-outline no-border" data-toggle="push-menu" role="button">
								<img src="../images/svg-icon/collapse.svg" class="filter-black img-fluid svg-icon" alt="">
						    </a>
						</li>
					</ul> 
			  </div>
			
	      <div class="navbar-custom-menu r-side">
	        <ul class="nav navbar-nav">		
			  
		      <!-- User Account-->
	          <li class="dropdown user user-menu">
	            <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border" data-bs-toggle="dropdown" title="User">
					<img src="../images/svg-icon/user.svg" class="filter-black  rounded svg-icon" alt="" />
	            </a>
	            <ul class="dropdown-menu animated flipInX">
	              <li class="user-body">
									<a class="dropdown-item" href="profile.php"><i class="ti-user text-muted me-2"></i> Profile</a>
									<a class="dropdown-item" href="update-wallet.php"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
									<a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="auth_login.html"><i class="ti-lock text-muted me-2"></i> Logout</a>
	              </li>
	            </ul>
	          </li>				
	        </ul>
	      </div>
	    </nav>
	  </header>
	  
	  <aside class="main-sidebar">
	    <!-- sidebar-->
	    <section class="sidebar position-relative">	
		  	<div class="multinav">
			  <div class="multinav-scroll" style="height: 100%;">	
				  <!-- sidebar menu-->
				  <ul class="sidebar-menu" data-widget="tree">	
						<li class="#">
						  <a href="index.php">
								<img src="../images/svg-icon/sidebar-menu/dashboard.svg" class="filter-black svg-icon" alt="">
								<span>Dashboard</span>
						  </a>
						</li>
						  
						<li class="">
						  <a href="profile.php">
								<img src="../images/svg-icon/sidebar-menu/transactions.svg" class="filter-black svg-icon" alt="">
								<span>Profile</span>
								<span class="pull-right-container">
								</span>
						  </a>
						</li>


						<li class="header">Apps & UI </li>


						<li class="treeview">
						  <a href="#">
								<img src="../images/svg-icon/sidebar-menu/apps.svg" class="filter-black svg-icon" alt="">
								<span>Withdraw</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-right pull-right"></i>
								</span>
						  </a>
						  <ul class="treeview-menu">
								<li><a href="withdraw.php"><i class="ti-more"></i>Withdraw</a></li>
								<li><a href="withdraw-report.php"><i class="ti-more"></i>Withdraw Report</a></li>
						  </ul>
						</li>	


						<li class="treeview">
						  <a href="#">
								<img src="../images/svg-icon/sidebar-menu/apps.svg" class="filter-black svg-icon" alt="">
								<span>Reports</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-right pull-right"></i>
								</span>
						  </a>
						  <ul class="treeview-menu">
								<li><a href="Cashbook.php"><i class="ti-more"></i>Cashbook</a></li>
								<li><a href="earning-bonus.php"><i class="ti-more"></i>Earning</a></li>
								<li><a href="refer-bonus.php"><i class="ti-more"></i>Refer</a></li>
								<li><a href="generation.php"><i class="ti-more"></i>Generation</a></li>
								<li><a href="generation-bonus.php"><i class="ti-more"></i>Generation Bonus</a></li>
						  </ul>
						</li>	



						<li class="treeview">
						  <a href="#">
								<img src="../images/svg-icon/sidebar-menu/forms1.svg" class="filter-black svg-icon" alt="">
								<span>Team</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-right pull-right"></i>
								</span>
						  </a>
						  <ul class="treeview-menu">
								<li><a href="partners.php"><i class="ti-more"></i>Partners</a></li>
								<li><a href="team-members.php"><i class="ti-more"></i>Team Members</a></li>				  
						  </ul>
						</li>

						
						<li class="header">Pages</li>


						<li class="treeview">
						  <a href="#">
								<img src="../images/svg-icon/sidebar-menu/miscellaneous.svg" class="filter-black svg-icon" alt="">
								<span>Transfer</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-right pull-right"></i>
								</span>
						  </a>
						  <ul class="treeview-menu">
								<li><a href="transfer.php"><i class="ti-more"></i>Transfer</a></li>
								<li><a href="transfer-history.php"><i class="ti-more"></i>Transfer History</a></li>
						  </ul>
						</li>	

						<li class="">
						  <a href="update-wallet.php">
								<img src="../images/svg-icon/sidebar-menu/authentication.svg" class="filter-black svg-icon" alt="">
								<span>Update Wallet</span>
						  </a>
						</li>	  

						  	   

						<li class="treeview">
						  <a href="support.php">
								<img src="../images/svg-icon/sidebar-menu/pages.svg" class="filter-black svg-icon" alt="">
								<span>Support</span>
						  </a>
						</li> 
				  </ul>
				  
				  <div class="sidebar-widgets">	
					<div class="mx-25 mb-30 pb-20 side-bx bg-primary rounded20">
						<div class="text-center">
							<img src="../images/crypto-join.png" class="sideimg" alt="">
							<h3 class="title-bx">Invest Now!</h3>
							<a href="#" class="text-white py-10 fs-16 mb-0">
							Manage Your Portfolio
							</a>
						</div>
					</div>  
					<div class="copyright text-start m-25">
					<p><strong class="d-block">TopUp</strong> © 2025 All Rights Reserved</p>
					</div>
				  </div>
			  </div>
			</div>
	    </section>
	  </aside>

	  
