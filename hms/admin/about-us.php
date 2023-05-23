<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
//Code for Update the Content

  	if(isset($_POST['submit']))
  {
   
     $pagetitle=$_POST['pagetitle'];
$pagedes=$con->real_escape_string($_POST['pagedes']);
     $query=mysqli_query($con,"update tblpage set PageTitle='$pagetitle',PageDescription='$pagedes' where  PageType='aboutus'");
    if ($query) {
 
    echo '<script>alert("About Us has been updated.")</script>';
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | About Us </title>
		
		
	</head>
	<body>
				
<?php include('include/sidebar.php');?>
			<div class="">
				

					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				
								<div class="">
									<h1 class="">Admin  | Update the About us Content</h1>
															
								<ol class="">
									<li>
										<span>Admin </span>
									</li>
									<li class="active">
										<span>Update the About us Content</span>
									</li>
								</ol>
				
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="">
						

									<div class="">
								<div class="">
									
									
                  <form class="" method="post">
                    <?php
                
$ret=mysqli_query($con,"select * from  tblpage where PageType='aboutus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="">
                       <label for="exampleInputUsername1">Page Title</label>
                      <input id="pagetitle" name="pagetitle" type="text" class="form-control" required="true" value="<?php  echo $row['PageTitle'];?>">
                    </div>
                    <div class="">
                      <label for="exampleInputEmail1">Page Description</label>
                      <textarea class="form-control" name="pagedes" id="pagedes" rows="12"><?php  echo $row['PageDescription'];?></textarea>
                    </div>
                    
                    <?php } ?>
                    <button type="submit" class="" name="submit">Submit</button>
                  </form>
								</div>
							</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php } ?>
