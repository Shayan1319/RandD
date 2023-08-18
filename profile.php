<?php
session_start();
error_reporting(0);
include('link/conn.php');
if (strlen($_SESSION['loginid']==0)) {
?>   <script>
location.replace('logout.php')
</script><?php
  } else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zoo R&D</title>
    <?php include ('link/links.php')?>
</head>
<body data-spy="scroll" data-target=".navbar-collapse">
    <!-- preloader section -->
    <?php
    include ('link/nav.php');
    $Id = $_SESSION['loginid'];
    $query= mysqli_query($conn,"SELECT * FROM `login` WHERE `Id`='$Id'");
    while ($fach=mysqli_fetch_array($query)){
    ?>
    <!-- header section -->
    <header class="header text-center my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <img src="images/<?php echo $fach['Image'];?>" class="img-responsive img-circle tm-border" style="width: auto;" alt="🧑🏻‍💻">
                    <hr>
                    <h1 class="tm-title bold shadow">Hi, I am <?php  echo $fach['Name'];?></h1>
                    <h1 class="white ts-title bold shadow">Designation <?php  echo $fach['Type'];?></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- about and skills section -->
    <div class="container my-5">
        <div class="row">
            <div  class="col-md-6 col-sm-12 ">
                <div class="about text-white fs-1 m-5 p-5 rounded-5">
                    <h1 class="accent">Easy Profile</h1>
                    <br>
                    <h2>Name   :   <?php  echo $fach['Name'];?></h2>
                    <h2>Father Name   :   <?php  echo $fach['Father_Name'];?></h2>
                    <h2>Department   :   <?php  echo $fach['Department'];?></h2>
                  </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="skills fs-1 m-5 p-5 rounded-5">
                    <h1 class="white">Contact Details</h1>
                    <br>
                    <h2>Address   :   <?php  echo $fach['Address'];?></h2>
                    <h2>Phone Number   :   <?php  echo $fach['Phone_Number'];?></h2>
                    <h2>Email    :   <?php  echo $fach['Email'];?></h2>
                </div>
            </div>
            <div  class="col-md-6 m-auto col-sm-12 ">
                <div class="about text-white fs-1 m-5 p-5 rounded-5">
                    <h1 class="accent">Easy Profile</h1>
                    <br>
                    <h2>University  :   <?php  echo $fach['University'];?></h2>
                    <h2>Registration Number  :   <?php  echo $fach['Registration_Numberv'];?></h2>
                    <h2>Phone Number   :   <?php  echo $fach['Phone_Number'];?></h2>
                  </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="about text-white fs-4 m-5 p-5 rounded-5">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>University Names</th>
                                <th>Department</th>
                                <th>Name</th>
                                <th>Topic</th>
                                <th>See More</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table table-striped">
                            <?php  $reg = $fach['Registration_Numberv'];
                            //  echo $reg;
                            $selquery= mysqli_query($conn,"select * from research where `Registration_Number`='$reg'");
                            while ($fachform=mysqli_fetch_array($selquery)){
                            ?>
                            <tr>
                                <td><?php echo $fachform['University_Name']?></td>
                                <td><?php echo $fachform['Department']?></td>
                                <td><?php echo $fachform['Name']?></td>
                                <td><?php echo $fachform['Registration_Number']?></td>
                                <td><a href="See.php?seeid=<?php echo $fachform['Id'];?>"><i class="fa-solid fa-eye"></i></a></td>
                                <td><?php echo $fachform['status']?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <a href="form.php" class="btn btn-success text-center m-3">Start a new research</a>
                </div>
            </div>
        </div>
    </div>    
    <!-- contact and experience -->
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
        })
    </script>
<?php
}
?>
</body>
</html><?php
}
?>