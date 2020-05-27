<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Mashi Fashion</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link href="<?php echo base_url();?>assets/css/styles.css "rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	<!-- Base URL -->
	<script>var base_url = '<?php echo site_url() ?>';</script>
	<style>
		.form-error {
			color: #ff0000;
			font-size: 13px;
		}
	</style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #9fcdff;">
	<a class="navbar-brand" href="index.html">Mashi Fashion</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
	><!-- Navbar Search-->


	</div>


	<!-- Navbar-->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link"><span id="time"></span>
				<span id="date"></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"><?php echo $this->session->userdata('name');?></a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Profile</a>
				<div class="dropdown-divider"></div>
				<button type="button" class="btn btn-link" data-toggle="modal" data-target="#logout">
					<i class="glyphicon glyphicon-plus"></i>
					Logout
				</button>

			</div>
		</li>

	</ul>


</nav>
<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Logout</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="text"> Are You Sure You Want To Logout </div>
			</div>
			<div class="modal-footer">
				<form action="<?php echo base_url('login/Login/logout');?>" method="post">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Logout</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="layoutSidenav">
	<div id="layoutSidenav_nav">


		<nav class="sb-sidenav accordion sb-sidenav-dark"  id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<a class="nav-link" href="<?php echo  base_url('dashboard');?>"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-tachometer-alt"></i>
						</div>
						Dashboard
					</a>

					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventory" aria-expanded="false" aria-controls="collapseInventory"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-shopping-basket "></i>
						</div>
						Products
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseInventory" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('inventory/Inventory');?>">
								Items
							</a>
							<a class="nav-link" href="<?php echo base_url('inventory/Categories');?>">
								Product Categories
							</a>
							<a class="nav-link" href="<?php echo base_url('inventory/Types');?>">
								Product Types
							</a>
							<a class="nav-link" href="<?php echo base_url('inventory/Unitsmeasure');?>">Units Measure
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePurchases" aria-expanded="false" aria-controls="collapsePurchases"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-store"></i>
						</div>
						Inventory
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapsePurchases" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('stocks/InventoryReport');?>">
								Inventory Reports
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePurchases" aria-expanded="false" aria-controls="collapsePurchases"
					>
						<div class="sb-nav-link-icon">
							<i class="fas  fa-truck"></i>
						</div>
						Purchases
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapsePurchases" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('purchaseorders/Purchaseorders');?>">
								Purchase Orders
							</a>
							<a class="nav-link" href="<?php echo base_url('purchaseorders/CreatePurchases');?>">
								Create PO
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSuppliers" aria-expanded="false" aria-controls="collapseSuppliers"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-users "></i>
						</div>
						Suppliers
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down">
							</i>
						</div>
					</a>
					<div class="collapse" id="collapseSuppliers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('suppliers/suppliers');?>">
								Suppliers
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManufacturing" aria-expanded="false" aria-controls="collapseManufacturing"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-tasks"></i>
						</div>
						Manufacturing
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down">
							</i>
						</div>
					</a>
					<div class="collapse" id="collapseManufacturing" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('manufacturing/Manufacturing');?>">
								Manufacturing Orders
							</a>
							<a class="nav-link" href="<?php echo base_url('manufacturing/CreateManufacturing');?>">
								Create MO
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomers" aria-expanded="false" aria-controls="collapseCustomers"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-address-book " ></i>
						</div>
						Customers
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseCustomers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('customers/customer');?>">
								Customers
							</a>
						</nav>
					</div>

					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSalesOrders" aria-expanded="false" aria-controls="collapseSalesOrders"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-shopping-cart "></i>
						</div>
						Sales Orders
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseSalesOrders" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo base_url('orders/Orders');?>">Sales Orders</a><a class="nav-link" href="<?php echo base_url('orders/CreateOrders');?>">Create Sales Orders</a></nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotifications" aria-expanded="false" aria-controls="collapseNotifications"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-bell"></i>
						</div>
						Website
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div
						>
					</a>
					<div class="collapse" id="collapseNotifications" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('notifications/notifications');?>">
								Notification
							</a>
						</nav>
					</div>

					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="false" aria-controls="collapseReports"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-flag "></i>
						</div>
						Reports
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseReports" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('reports/reports');?>>
							Reports
							</a>
							<a class="nav-link" href="../reports/incomeexp.php">
							Income AND Expenditure Reports
							</a>
							<a class="nav-link" href="../reports/userreport.php">
								User Reports
							</a>
							<a class="nav-link" href="../reports/stockreport.php">
								Stock Reports
							</a>
							<a class="nav-link" href="../reports/productionreports.php">
								Production Reports
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-user "></i>
						</div>
						Users
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="<?php echo base_url('users/users');?> ">
								Users
							</a>
						</nav>
					</div>
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBackups" aria-expanded="false" aria-controls="collapseBackups"
					>
						<div class="sb-nav-link-icon">
							<i class="fas fa-paperclip "></i>
						</div>
						Backups
						<div class="sb-sidenav-collapse-arrow">
							<i class="fas fa-angle-down"></i>
						</div>
					</a>
					<div class="collapse" id="collapseBackups" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="../backups/backup.php">
								Backups
							</a>
						</nav>
					</div>


				</div>

			</div>


		</nav>
	</div>
