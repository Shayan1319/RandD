<?php
session_start();
error_reporting(0);
include('link/conn.php');
if (strlen($_SESSION['loginid']==0)) {
?>   <script>
location.replace('logout.php')
</script><?php
  } else{
    if(isset($_POST['submit']))
    {
        $updateid=$_GET['update'];
        // echo $updateid;
        $Department = mysqli_real_escape_string($conn,$_POST['Department']);
        $University = mysqli_real_escape_string($conn,$_POST['University']);
        $Name = mysqli_real_escape_string($conn,$_POST['Name']);
        $Father_Name = mysqli_real_escape_string($conn,$_POST['Father_Name']);
        $Registration_Number = mysqli_real_escape_string($conn,$_POST['Registration_Number']);
        $Address = mysqli_real_escape_string($conn,$_POST['Address']);
        $Password = mysqli_real_escape_string($conn,$_POST['Password']);
        $Phone_Number = mysqli_real_escape_string($conn,$_POST['Phone_Number']);
        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
        $file = $_FILES['file'];
        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];
        if($fileerror==0){
            $destfile='/images/'. "$filename";
            // echo $destfile;
          move_uploaded_file($filepath,"../$destfile");
        // $pass= password_hash($Password, PASSWORD_BCRYPT);
    }
    $query= mysqli_query($conn,"UPDATE `login` SET `Name`='$Name',`Father_Name`='$Father_Name',`University`='$University',`Address`='$Address',`Phone_Number`='$Phone_Number',`Email`='$Email',`Password`='$Password',`Image`='$filename', `Department`='$Department' WHERE `Id`='$updateid'");
       if($query){echo '<script>alert( "Data inserted success fully");</script>';}
       else{echo '<script>alert( "Data Not Inserted");</script>';}
    }
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zoo R&D</title>
    <?php include('link/links.php') ?>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
    <!-- preloader section -->
    <?php
    include ('link/nav.php');
    $Id = $_GET['update'];
    $query= mysqli_query($conn,"SELECT * FROM `login` WHERE `Id`='$Id'");
    while ($fach=mysqli_fetch_array($query)){
    ?>
    <!-- header section -->
    <header class="header text-center my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img src="images/<?php  echo $fach['Image'];?>" class="img-responsive img-circle tm-border" style="width: auto;" alt="🧑🏻‍💻">
                    <hr>
                    <h1 class="tm-title bold shadow">Hi, I am <?php  echo $fach['Name'];?></h1>
                    <h1 class="white ts-title bold shadow">Designation <?php  echo $fach['Type'];?></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- about and skills section -->
<div class="container">
    <form action="profile.php" method="POST" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about p-5 rounded-5">
                    <h1 class="accent">Easy Profile</h1>
                    <br>
                    <h3>Name   :    <input type="text" name="Name" id="Name" class="form-control" value="<?php  echo $fach['Name'];?>"></h3>
                    <h3>Father Name   :   <input type="text" name="Father_Name" id="Father_Name" class="form-control" value="<?php  echo $fach['Father_Name'];?>"></h3>
                    <h3>University   :   <input type="text" name="University" id="University" class="form-control" value="<?php  echo $fach['University'];?>"></h3>
                    <h3>Department   :   <input type="text" name="Department" id="Department" class="form-control" value="<?php  echo $fach['Department'];?>"></h3>
                    <h3>Image   :    <input onchange="loadFile(event)" value="<?php echo $fach ['Image']?>" type="file" name="file" id="file" >
                    <p><img src="images/<?php echo $fach ['Image']?>" id="output" width="200" alt="🧑🏻‍💻" /></p>
                    <script>
                    var loadFile = function(event) {
                        var image = document.getElementById('output');
                        image.src = URL.createObjectURL(event.target.files[0]);
                    };
                    </script>
                    </h3>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="skills p-5 rounded-5">
                    <h1 class="white">Contact Details</h1>
                    <br>
                    <h3>Address   :   <input type="text" name="Address" id="Address" class="form-control" value="<?php  echo $fach['Address'];?>"></h3>
                    <h3>Phone Number   :   <input type="text" name="Phone_Number" id="Phone_Number" class="form-control" value="<?php  echo $fach['Phone_Number'];?>"></h3>
                    <h3 for="password">Password
                    <input type="text" name="Password" id="Password" class="form-control" value="<?php  echo $fach['Password'];?>"></h3>
                    <h3 for="email">Email
                    <input type="email" name="Email" id="email" class="form-control" value="<?php  echo $fach['Email'];?>"></h3>
                    <button type="submit" name="submit" class="btn btn-success">Change</button>
                </div>
            </div>
        </div>
    </form>
</div>
 <!-- footer section -->
<div class="container-fluid my-5">
    <section class="">
        <!-- Footer -->
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:<a class="text-white" href="https://peshawarzoo.gkp.pk/">Peshawar Zoo</a> || Created by @Kurtlar Developer of <a href="https://www.suit.edu.pk/">Suit Peshawar</a>
        </div>
        <!-- Copyright -->
        <!-- Footer -->
    </section>
</div>
    <!-- javascript js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
$(window).load(function(){
    $('.preloader').delay(1000).fadeOut("slow"); // set duration in brackets    
});
// HOME BACKGROUND SLIDESHOW
$(function(){
    jQuery(document).ready(function() {
		$('body').backstretch([
	 		 "images/tm-bg-slide-1.jpg", 
	 		 "images/tm-bg-slide-2.jpg",
			 "images/tm-bg-slide-3.jpg"
	 			], 	{duration: 3200, fade: 1300});
		});
})</script>
<?php
}
?>
</body>
</html><?php
}
?>