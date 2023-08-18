<?php
session_start();
include 'link/conn.php';
if(isset($_POST['submit'])){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $query=mysqli_query($conn,"select * from login where `Email`='$Email' && `Password`='$Password'");
    $row=mysqli_fetch_array($query);
    if($row["Type"]=="Admin"){
        $updateQuery = "UPDATE `login` SET `status` = 'Online' WHERE `Email` = '$Email'";
        $conn->query($updateQuery);
        $_SESSION['loginid']=$row['Id'];
            ?>
            <script>
                location.replace('Admin/index.php')
            </script>
            <?php
    }elseif($row["Type"]=="Sub_addmin"){
        $updateQuery = "UPDATE `login` SET `status` = 'Online' WHERE `Email` = '$Email'";
        $conn->query($updateQuery);
        $_SESSION['loginid']=$row['Id'];
        ?>
        <script>
            location.replace('Sub_admin/index.php')
        </script>
        <?php
    }elseif($row["Type"]=="Faculties"){
        $updateQuery = "UPDATE `login` SET `status` = 'Online' WHERE `Email` = '$Email'";
        $conn->query($updateQuery);
        $_SESSION['loginid']=$row['Id'];
        ?>
        <script>
            location.replace('Add_facilities/index.php')
        </script>
        <?php
    }elseif($row["Type"]=="Student"){
        $updateQuery = "UPDATE `login` SET `status` = 'Online' WHERE `Email` = '$Email'";
        $conn->query($updateQuery);
        $_SESSION['loginid']=$row['Id'];
        ?>
        <script>
            location.replace('profile.php')
        </script>
        <?php
    }else{
        ?>
        <script>
             alert("Sorry sir email or password are wrong");
             
        </script>
         <script>
            location.replace('index.php')
        </script>
        <?php
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 01</title>
    <?php include ('link/links.php')?>
</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section bg-indigo text-light">Login </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                    <form action="" method="Post">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Sign In</h3>
                        <form action="#" class="login-form">
                            <div class="form-group">
                                <input type="email" name="Email" class="form-control rounded-left" placeholder="Username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="Password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                            <div class="form-group text-center d-md-flex">
                                <div class="w-100 text-center">
                                    <a href="forgit.php">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid my-5">

    <section class="">
        <!-- Footer -->
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgb(0 0 0 / 70%);">
            © 2020 Copyright:
            <a class="text-white" href="https://peshawarzoo.gkp.pk/">Peshawar Zoo</a> || Created by @Kurtlar Developer of <a href="https://www.suit.edu.pk/">Suit Peshawar</a>
        </div>
        <!-- Copyright -->
    <!-- Footer -->
    </section>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>