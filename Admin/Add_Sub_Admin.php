<?php
session_start();
error_reporting(0);
include '../link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
?>   <script>
location.replace('../logout.php')
</script><?php
  } else{
if(isset($_POST['submit'])){
$Department = $_POST['Department'];
$Name = $_POST['Name'];
$Father_Name = $_POST['Father_Name'];
$Designation=$_POST['Designation'];
$University = $_POST['University'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];
$Phone_Number = $_POST['Phone_Number'];
$Email = $_POST['Email'];
$Designation = $_POST['Designation'];
$Registration_Number=$_POST['Registration_Number'];
// $pass= password_hash($Password, PASSWORD_BCRYPT);
$file = $_FILES['file'];
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0){
    $destfile='../images/'. $filename;
    // echo $destfile;
    move_uploaded_file($filepath,"../$destfile");
}else{
    echo '<script>alert("Image not added");</script>';
}
$dubqury = "SELECT * FROM `login` WHERE Email='$Email'";
$dubcount= mysqli_num_rows(mysqli_query($conn,$dubqury));
if($dubcount){
     ?>
     <script>
         alert("Sorry Email or registration is allrady exset");
     </script>
     <?php
  }
else{
    $iquery = mysqli_query($conn,"INSERT INTO `login`(`Name`, `Father_Name`, `University`, `Registration_Numberv`, `Address`, `Phone_Number`, `Email`, `Password`, `Image`, `Type`, `Designation`, `Status`,`Department`) VALUES ('$Name','$Father_Name','$University','$Registration_Number','$Address','$Phone_Number','$Email','$Password','$filename','Sub_addmin','$Designation', 'Online', '$Department')");
    if($iquery){echo '<script>alert( "Data inserted success fully");</script>';}
    else{echo '<script>alert( "Data Not Inserted");</script>';}
}}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Zoo RND</title>
    <?php include ('../link/links.php')?>
</head>
<body>
    <div class="container-fluid">
        <style>
            #addadmin{
            background-color: #0D1F34;
            color: white;
            }
        </style>
        <?php include ('link/sidbar.php')?>  
        <div id="main">
            <?php include ('link/nav.php')?>
            <!-- Page Content  -->
            <!-- form -->
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row p-5 w-100">
                    <div class="col-md-6 col-sm-12 p-5">
                        <h3 class=" mb-5" style="color: #4835d4;">General Infomation</h3>
                        <div class="row">
                            <div class="col-sm-12 my-3 col-lg-12">
                                <select name="Designation" id="Designation" class="select form-control">
                                    <option disabled selected >Designation</option>
                                    <option value="Director Peshawar Zoo">Director Peshawar Zoo</option>
                                    <option value="Deputy Director Peshawar Zoo">Deputy Director Peshawar Zoo</option>
                                    <option value="Admin Officer Peshawar Zoo">Admin Officer Peshawar Zoo</option>
                                    <option value="Veterinary Officer Peshawar Zoo">Veterinary Officer Peshawar Zoo</option>
                                    <option value="Education officer Peshawar Zoo">Education officer Peshawar Zoo</option>
                                </select>
                                <label class="form-label" for="Designation">Designation</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-12">
                                <input type="text" id="form3Examplev2" name="Department" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplev2">Department</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <input type="text" id="form3Examplev2" name="Name" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplev2">Name</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <input type="text" id="form3Examplev3" name="Father_Name" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplev3">Father name</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                             <input type="file" accept="image/*" name="file" id="file" class="form-control form-control-lg" onchange="loadFile(event)">
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <p><img id="output" width="200" /></p>
                                <script>
                                    var loadFile = function(event) {
                                        var image = document.getElementById('output');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                            </div>
                        </div>
                    </div>
                    <div style="background-color: #3445b4;  border-radius:0 25px 25px 0;" class="text-white col-md-6 col-sm-12 p-5">
                        <h3 class=" mb-5 text-white">Personal information</h3>
                        <div class="row">
                            <div class="col-sm-12 my-3 col-lg-12">
                                <input type="email" id="form3Examplea9" name="Email" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form3Examplea9">Email</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-12">
                                <input type="password" id="form3Examplea7" name="Password" class="form-control form-control-lg" value="Pz@12345"/>
                                <label class="form-label" for="form3Examplea7">Password</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <input type="text" id="form3Examplea8" name="Phone_Number" class="form-control form-control-lg"  />
                                <label class="form-label" for="form3Examplea8">Phone Number</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <input type="text" id="form3Examplea5" name="Address" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplea5">Address</label>
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                            </div>
                            <div class="col-sm-12 my-3 col-lg-6 col-md-6">
                                <button type="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </form>
        </div>
    </div>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/script.js"></script>
</body>

    </html><?php
  }
    ?>