<?php
include_once 'header.php';
?>
<style>
table {
  width: 100%;
  border-collapse: collapse;
  
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<form method="POST">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Student Profile</li>
				</ul>
			</div>	
			
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
					<div class= " row wc-title ">
					<div class="col-lg-3 " ><h4>Student Profile</h4></div>
				
					<div class="col-lg-8 " > <input type="text"  name="txtname"  id="txtname" class="form-control" placeholder="search" >  </div>
					<div class="col-lg-1 " > <button type="submit" name="btnsearch"  class="btn btn-warning"  > search </button></div>
					</div>
					</div>
				</div>
				<?php

			if (isset($_POST["btnsearch"])) {

				include_once "../DBCODE/Database.php";
				$db=new Database();
				$name = $_POST['txtname'];
    	$rs=$db->GetData("select * from user where fullname like '%{$name}%'");

			
			echo "	<table>
				<tr>
					<th>student id </th>
						<th>Student name</th>
						<th>Username</th>
						<th>Phone</th>
						<th>Address</th>
						<th>E-mail</th>
				</tr>";
			while($row = mysqli_fetch_assoc($rs)){
			echo "<tr>";
			echo "<td>" . $row['userid'] . "</td>";
			echo "<td>" . $row['fullname'] . "</td>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['phone'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "<td>" . $row['e-mail'] . "</td>";
			echo "</tr>";
  
 			}
			 echo "</table>";
		}
	
				
?>
				
					
				
											
 </div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</form>
	</main>
	<div class="ttr-overlay"></div>


	
 


<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>


<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
</html>