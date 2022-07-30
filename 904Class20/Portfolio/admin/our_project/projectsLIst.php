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
							<h5 class="panel-title">projects List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a href="projectsCreate.php" class="btn btn-primary add_new">Add New</a></li>
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
									<th >Category</th>
									<th >projects Name</th>
									<th >projects Link</th>
									<th >Project Thumbnail</th>
									<th >Active Status</th>
									<th  class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>

							<?php 
							$SelectQry = "SELECT our_projects.*, categories.category_name FROM `our_projects` INNER JOIN categories ON our_projects.category_id = categories.id WHERE our_projects.active_status = 1 ORDER BY our_projects.id" ;

							$projectsList = mysqli_query($conn, $SelectQry);
							foreach ($projectsList as $key => $project) {
								
						 
						     	?>
								<tr>
									<td> <?php echo ++$key; ?> </td>			
									<td> <?php echo $project['category_name']; ?> </td>
									<td> <?php echo $project['project_name']; ?> </td>
									<td> <?php echo $project['project_link']; ?> </td>
									<td> <img  width="80" height="80" src="<?php echo '../uploads/projectThums/'.$project['project_thumb']; ?>"/> </td>
									<td> <?php echo $project['active_status']; ?> </td>
									<td class="text-center">
							  <a href="projectsUpdate.php?id=<?php echo $project['id']; ?>" class="ml-2 mr-2"><i class="icon-pencil5"></i></a>
							  <a href="projectsDelete.php?id=<?php echo $project['id']; ?>" class="ml-2 mr-2"><i class=" icon-trash"></i></a>
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



<script>// menu active class add by sohan 
$(document).ready(function(){
    $(".sr_menu ").click(function(){
      $(this).toggleClass("active");
    });
  });
  </script>


<!-- heading -->
<?php include '../includes/script.php'?>
<!-- /heading -->
</body>
</html>
