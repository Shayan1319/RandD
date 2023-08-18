<?php
session_start();
error_reporting(0);
include '../link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
?>   <script>
location.replace('../logout.php')
</script><?php
  } else{
    
?>
<!doctype html>
<html lang="en">

<head>
    <title>Zoo RND</title>
    <?php include ('../link/links.php') ?>
</head>
<body>

    <div class="container-fluid">
        <style>
        #editstud{
            background-color: #0D1F34;
            color: white;
        }
        </style>
        <?php include ('link/sidbar.php')?>  
        <div id="main">
            <?php include ('link/nav.php')?> 
            <!-- Page Content  -->
            <!-- table -->
            <div class="container">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>University</th>
                            <th>Name</th>
                            <th>Emale</th>
                            <th>Registration_Number</th>
                            <th>Status</th>
                            <th>Last Seen</th>
                            <th>See More</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table table-striped">
                    <?php  $select = mysqli_query($conn,"select * from login where `Type`='Student'");
                   $aid=1;
                    while($fetchquery = mysqli_fetch_array($select)){
                        if($fetchquery['Status'] == "Offline"){
                            $style="color:#AA1945";                                
                        }else if($fetchquery['Status'] == "Online"){
                            $style="color:#81B622"; 
                        }
                        ?>
                         <tr>
                         <td><?php echo $fetchquery['University'];?></td>
                            <td><?php echo $fetchquery['Name'];?></td>
                            <td><?php echo $fetchquery['Email'];?></td>
                            <td><?php echo $fetchquery['Registration_Numberv'];?></td>
                            <td><li class="fw-bolder" style="<?php echo $style?>"><span class="fw-bolder" ><?php echo $fetchquery['Status'];?></span></li></td>
                            <td><?php echo $fetchquery['LastSeen'];?></td>
                            <td><a href="adminprofile.php?see=<?php echo $fetchquery['Id'];?>"><i class="fa-solid fa-eye"></i></a></td>
                            <td><a href="update.php?updat=<?php echo $fetchquery['Id'];?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="Edit_Student.php?id=<?php echo $fetchquery['Id']?>& delf=delete" onClick="return confirm('Are you sure you want to delete?')" ><i class="fa-solid fa-trash"></i></a></td>
                         </tr>
                        <?php
                        $aid=$aid+1;
                    }if($_GET['delf']){
                        $did=$_GET['id'];
                        mysqli_query($conn,"delete from login where Id ='$did'");
                        echo "<script>alert('Data Deleted');</script>";
                        echo "<script>window.location.href='Edit_Student.php'</script>";
                                  }
                     
                      
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- text- -->
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/java.js"></script>
</body>
</html>
<?php
}
?>