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



include '../includes/head.php'?>
<!-- /heading -->

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
							<li class="">List</li>
							<li class="active">Banner Update</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content">
				 <!-- this code for fethc data -->
				 <?php
				 require "../controller/dbConfigue.php";
				 $servicesId = $_GET['id'];
				 $getSingleDataQry = "SELECT * FROM services WHERE id = {$servicesId} ";
				 $singleDataResult = mysqli_query($conn, $getSingleDataQry);
				 
				 ?>
					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading mb-5" >
							<h5 class="panel-title">Banner List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="" class="btn btn-primary add_new">Add New</a></li>
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
						<div class="panel-body form_list_panel">
						<form class="form-horizontal" action="../controller/servicesController.php" method="post">
								<fieldset class="content-group">


								<?php 

								foreach ($singleDataResult as $key => $singleResult) {

								
								    ?>       
								    <div class="form-group">
										<input type="hidden" name="services_id" value=" <?php echo $singleResult['id']  ?> ">
										<label class="control-label col-lg-2" for="serviceName"  >Services Name</label>
										<div class="col-lg-10">
											<input id ="serviceName" name ="serviceName" type="text" class="form-control" value="<?php echo $singleResult['service_name'] ?>">
										</div>
									</div>		
									<div class="form-group">
										<label class="control-label col-lg-2" for="servicesDetails"  >Services Details</label>
										<div class="col-lg-10">						
											<textarea id="servicesDetails" name="servicesDetails" rows="5" cols="5" class="form-control" placeholder="Default textarea"><?php echo $singleResult['service_details'] ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="iconName">Icon Name</label>
										<div class="col-lg-10">
										<input id ="iconName" name="iconName"  type="text" class="form-control" value="<?php echo $singleResult['icon_name'] ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2" for="designStatus"  >Design Status</label>
										<div class="col-lg-10">
											<input id ="designStatus" name ="designStatus" type="number" class="form-control" value="<?php echo $singleResult['design_status'] ?>">
										</div>
									</div>

									<?php } ?>
								</fieldset>

								<div class="text-right">
									<button type="submit" name="UpdateData" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
									<a href="servicesLIst.php"class="btn btn-warning">Back To Banner List</i></a>
								</div>
							</form>


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
