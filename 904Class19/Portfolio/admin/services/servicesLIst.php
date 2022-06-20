<!DOCTYPE html>
<html lang="en">

<?php 
if (basename(__DIR__)!= 'admin') {
	$baseUrl = '../';
	$isInternalUrl = true;
}else{
	$baseUrl = '';
	$isInternalUrl = false;
}

// <!-- /heading -->
include '../includes/head.php';
// database connection 
require '../controller/dbConfigue.php';

?>
<body>

	<!-- Main navbar -->
	<?php include '../includes/topNavBar.php' ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="../assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">SR.Sihab</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Dhaka,BD
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->

					<?php include '../includes/navigation.php' ?>

					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="banner.php"><i class="icon-menu2 position-left"></i> Banner</a></li>
							<li class="active">List</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Left Banner List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="servicesCreate.php" class="btn btn-primary add_new">Add New</a></li>
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
							<!-- success msg -->
							<?php if (isset($_GET['msg'])) {
						# code...
				     	?>
				    	<div class="alert <?php echo $_GET['acls'];  ?> " role="alert">
                          <?php echo $_GET['msg']; ?>
						</div>
				    	<?php } ?>
						<div class="panel-body ">

						<table class="table table-bordered table-striped datatable-basic ">
							<thead>
								<tr>
									<th >SL.</th>
									<th >Services Name</th>
									<th >Services Details</th>
									<th >Icon Name</th>
									<th >Design Status</th>
									<th  class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>

							<?php 
							$SelectQry = "SELECT * FROM `services` WHERE  (design_status = 1) AND (active_status = 1 ) " ;
							$ServicesList = mysqli_query($conn, $SelectQry);
							foreach ($ServicesList as $key => $service) {
								
						 
						     	?>
								<tr>
									<td> <?php echo ++$key; ?> </td>
									<td> <?php echo $service['service_name']; ?> </td>
									<td> <?php echo $service['service_details']; ?> </td>
									<td> <?php echo $service['icon_name']; ?> </td>
									<td> <?php echo $service['design_status']; ?> </td>
									<td class="text-center">
							  <a href="servicesUpdate.php?id=<?php echo $service['id']; ?>" class="ml-2 mr-2"><i class="icon-pencil5"></i></a>
							  <a href="servicesDelete.php?id=<?php echo $service['id']; ?>" class="ml-2 mr-2"><i class=" icon-trash"></i></a>
									</td>
								</tr>
							<?php	} ?>
							</tbody>
						</table>
						</div>

					</div>
					<!-- /basic datatable -->




					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->
				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Right Banner List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="servicesCreate.php" class="btn btn-primary add_new">Add New</a></li>
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
							<!-- success msg -->
							<?php if (isset($_GET['msg2'])) {
						# code...
				     	?>
				    	<div class="alert <?php echo $_GET['acls'];  ?> " role="alert">
                          <?php echo $_GET['msg']; ?>
						</div>
				    	<?php } ?>
						<div class="panel-body ">

						<table class="table table-bordered table-striped datatable-basic ">
							<thead>
								<tr>
									<th >SL.</th>
									<th >Services Name</th>
									<th >Services Details</th>
									<th >Icon Name</th>
									<th >Design Status</th>
									<th  class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>

							<?php 
							$SelectQry = "SELECT * FROM `services` WHERE  (design_status = 2) AND (active_status =1 )" ;
							$ServicesList = mysqli_query($conn, $SelectQry);
							foreach ($ServicesList as $key => $service) {
								
						 
						     	?>
								<tr>
									<td> <?php echo ++$key; ?> </td>
									<td> <?php echo $service['service_name']; ?> </td>
									<td> <?php echo $service['service_details']; ?> </td>
									<td> <?php echo $service['icon_name']; ?> </td>
									<td> <?php echo $service['design_status']; ?> </td>
									<td class="text-center">
									<a href="servicesUpdate.php?id=<?php echo $service['id']; ?>" class="ml-2 mr-2"><i class="icon-pencil5"></i></a>
									<a href="servicesDelete.php?id=<?php echo $service['id']; ?>" class="ml-2 mr-2"><i class=" icon-trash"></i></a>
									</td>
								</tr>
							<?php	} ?>
							</tbody>
						</table>
						</div>

					</div>
					<!-- /basic datatable -->




					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->






<!-- heading -->
<?php include '../includes/script.php'?>
<!-- /heading -->
</body>
</html>
