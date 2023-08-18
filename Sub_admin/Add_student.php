<?php
session_start();
error_reporting(0);
include '../link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
?>   <script>
location.replace('../logout.php')
</script><?php
  } else{;
if(isset($_POST['submit'])){
$Department = mysqli_real_escape_string($conn,$_POST['Department']);
$University = mysqli_real_escape_string($conn,$_POST['University']);
$Name = mysqli_real_escape_string($conn,$_POST['Name']);
$Father_Name = mysqli_real_escape_string($conn,$_POST['Father_Name']);
$Registration_Number = mysqli_real_escape_string($conn,$_POST['Registration_Number']);
$Address = mysqli_real_escape_string($conn,$_POST['Address']);
$Password = mysqli_real_escape_string($conn,$_POST['Password']);
$Phone_Number = mysqli_real_escape_string($conn,$_POST['Phone_Number']);
$Email = mysqli_real_escape_string($conn,$_POST['Email']);
$Designation = $_POST['Designation'];
$file = $_FILES['file'];
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0){
    $destfile='images/'. $filename;
    // echo $destfile;
    move_uploaded_file($filepath,"../$destfile");
}
// $pass= password_hash($Password, PASSWORD_BCRYPT);
$dubqury = "select * from login where Email ='$Email' || Registration_Numberv='$Registration_Number'";
$qury= mysqli_query($conn,$dubqury);
$dubcount= mysqli_num_rows($qury);
if($dubcount){
    ?>  <script>
    alert("Sorry Email or registration is allrady exset");
    </script>
    <?php
    }
    else{
        $iquery = mysqli_query($conn,"INSERT INTO `login`(`Name`, `Father_Name`, `University`, `Registration_Numberv`, `Address`, `Phone_Number`, `Email`, `Password`, `Image`, `Type`, `Designation`, `Status`, `Department`) VALUES ('$Name','$Father_Name','$University','$Registration_Number','$Address','$Phone_Number','$Email','$Password','$filename','Student','$Designation', 'Online', '$Department')");
        if($iquery){echo '<script>alert( "Data inserted success fully");</script>';}
        else{echo '<script>alert( "Data Not Inserted");</script>';}
    }}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Zoo R&D</title>
    <?php include ('../link/links.php')?>
</head>
<body>
    <div class="container-fluid">
        <style>
        #addstude{
            background-color: #0D1F34;
            color: white;
        }
        </style>
        <?php include ('link/sidbar.php')?>  
        <div id="main">
            <?php include ('link/nav.php')?> 
            <!-- Page Content  -->
            <!-- form -->
            <section class="h-100 container h-custom gradient-custom-2">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-6">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
                                                    <div class="mb-4 pb-2 ">
                                                        <input type="text" name="Department" class="form-control form-control-lg" id="Semester">
                                                        <label for="Semester" class="form-label">Department</label>
                                                    </div>
                                                    <div class="mb-4 pb-2 ">
                                                        <input type="text" name="University" class="form-control form-control-lg" id="University">
                                                        <label for="University" class="form-label">University</label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" name="Name" id="form3Examplev2" class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplev2">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-outline">
                                                                <input type="text" name="Father_Name" id="form3Examplev3" class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplev3">Father Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev3" name="Registration_Number" class="form-control form-control-lg" required />
                                                            <label class="form-label" for="form3Examplev3">Registration Number</label>
                                                        </div>
                                                        <div class="col-md-6 mb-4 pb-2">
                                                            <div class="form-ountline"  onchange="loadFile(event)">
                                                            <input type="file" name="file" id="file">
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
                                                </div>
                                            </div>
                                            <div style="background-color: #4835d4; border-radius:0 15px 15px 0;" class="col-lg-6 bg-indigo text-white">
                                                <div class="p-5">
                                                    <h3 class="fw-normal mb-5">Contact Details</h3>
                                                    <div class="row">
                                                        <div class="col-md-5 mb-4 pb-2">
                                                        </div>
                                                        <div class="mb-4">
                                                            <div class="form-outline form-white">
                                                                <input type="text" id="form3Examplea9" name="Email" required class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplea9">Email</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-5 mb-4 pb-2">
                                                            <div class="form-outline form-white">
                                                                <input type="Password" name="Password" value="Pz@12345" id="form3Examplea7" class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplea7">Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 mb-4 pb-2">
                                                            <div class="form-outline form-white">
                                                                <input type="text" name="Phone_Number" id="form3Examplea8" class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplea8">Phone Number</label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 pb-2">
                                                            <div class="form-outline form-white">
                                                                <input type="text" name="Address" id="form3Examplea5" class="form-control form-control-lg" />
                                                                <label class="form-label" for="form3Examplea5">Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
<?php
  }
?>