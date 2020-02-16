<?php
	require 'class/function/curl_api.php';
	require 'class/function/function.php';
	require 'class/session/session_index.php';

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
<?php
    include 'include/header.php';
?>
	</head>

	<body class="pace-top">
		<!-- begin #page-loader -->
		<div id="page-loader" class="fade show">
			<span class="spinner"></span>
		</div>
		<!-- end #page-loader -->
	
		<!-- begin login-cover -->
		<div class="login-cover">
			<div class="login-cover-image" style="background-image: url(assets/img/login-bg/index04.jpg)" data-id="login-cover-image"></div>
			<div class="login-cover-bg"></div>
		</div>
		<!-- end login-cover -->
	
		<!-- begin #page-container -->
		<div id="page-container" class="fade">
			<!-- begin login -->
			<div class="login login-v2" data-pageload-addclass="animated fadeIn">
				<!-- begin brand -->
				<div class="login-header" style="height:200px;">
					<a href="#" class="widget-card widget-card-rounded m-b-20" style="height:100%;" data-id="widget">
						<div class="widget-card-cover" style="height:100%; background-size:contain; background-color:transparent; background-image: url(<?php echo $data01; ?>)"></div>
					</a>
				</div>
				<!-- end brand -->

				<!-- begin login-content -->
				<div class="login-content">
					<form action="public/home.php" method="post" class="margin-bottom-0">
						<div class="form-group m-b-20">
							<input type="text" class="form-control form-control-lg text-center" style="font-size:1.25rem" value="<?php echo $data02; ?>" required readonly />
						</div>
						<div class="login-buttons">
<?php
	if ($banLogeo === true) {
?>
							<button type="submit" class="btn btn-success btn-block btn-lg">SI, EL MISMISIMO :P</button>
<?php
	}
?>
							<!--<button type="submit" class="btn btn-danger btn-lg" style="width:48%; float:right;">SOY OTRA PERSONA XD</button>-->
							<!--<button type="submit" class="btn btn-success btn-lg" style="width:48%;">SI, EL MISMISIMO :P</button>-->
						</div>
					</form>
				</div>
				<!-- end login-content -->
			</div>
			<!-- end login -->
		
			<!-- begin scroll to top btn -->
			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
			<!-- end scroll to top btn -->
		</div>
		<!-- end page container -->
	
<?php
    include 'include/footer.php';
?>
	</body>
</html>