<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					
						<a class="" href="#">
							<h2 style="padding-top:20% ">Kilimanjaro Hospital Management System</h2>
						</a>
						
						<a class="" id="" data-toggle="collapse" href=".navbar-collapse">
							<span class="">Toggle navigation</span>
							<i class=""></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:2% ">
								<h2>Kilimani Hospital Management System</h2>
							</li>
						
						
							
									<img src="images/images.jpg"> <span class="username">



									<?php $query=mysqli_query($con,"select fullName from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullName'];
}
									?> 
								</a>
								<ul class="">
									<li>
										<a href="edit-profile.php">
											My Profile
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Change Password
										</a>
									</li>
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="" data-toggle="collapse" href=".navbar-collapse">
							<div class=""></div>
							<div class=""></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
				
					
					<!-- end: NAVBAR COLLAPSE -->
				</header>
