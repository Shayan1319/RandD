<?php
session_start();
error_reporting(0);
include '../link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
?>  <script>
location.replace('../logout.php')
</script><?php
  } else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>R&D</title>
        <?php include ('../link/links.php')?>
    </head>
<body>
        <div class="container-fluid">
            <style>
                #home{
                background-color: #0D1F34;
                color: white;
                }
            </style>
            <?php  include ('link/sidbar.php')?>  
            <div id="main">
                <?php include ('link/nav.php')?>     
                <div class="container my-5">
                    <?php $sql = "select count(*) from research where Department = 'Botany'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <script> var botany=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-bg-primary mb-3" style="max-width: 260px;">
                            <div class="card-header text-center">Botany</div>
                            <div class="card-body text-center">
                                <h1 class="card-text text-center"><?php echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php } $sql = "select count(*) from research where Department = 'Zoology'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <script> var zoology=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-light mb-3" style="max-width: 260px; background-color: rgb(108, 4, 182);">
                            <div class="card-header text-center">Zoology</div>
                            <div class="card-body text-center">
                                <h1 class="card-text"><?php  echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php }$sql = "select count(*) from research where Department = 'Environmental Scieces'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <script> var envsciences=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-bg-success mb-3" style="max-width: 260px;">
                            <div class="card-header text-center">Environmental Sciences</div>
                            <div class="card-body text-center">
                                <h1 class="card-text"><?php echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php }$sql = "select count(*) from research where Department = 'Veterinary Sciences'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <script> var vetsciences=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-bg-danger mb-3" style="max-width: 260px;">
                            <div class="card-header text-center">Veterinary Sciences
                            </div>
                            <div class="card-body text-center">
                                <h1 class="card-text"><?php echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    $sql = "select count(*) from research where Department = 'Forest Institute'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                        ?>
                    <script> var forest=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-bg-warning mb-3" style="max-width: 260px;">
                            <div class="card-header text-center">Forest Institute</div>
                            <div class="card-body text-center">
                                <h1 class="card-text"><?php echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php
                    }$sql = "select count(*) from research where Department = 'Forestry and Wildlife Management'";
                    $result = $conn->query($sql);
                    // Display data on web page
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <script> var wild=<?php echo $row['count(*)']?>;</script>
                    <div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="card text-bg-info mb-3" style="max-width: 260px;">
                            <div class="card-header text-center">Forestry and Wildlife Management</div>
                            <div class="card-body text-center">
                                <h1 class="card-text"><?php echo $row['count(*)']?></h1>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="col-md-12 mb-5 col-lg-12 col-sm-12 m-auto">
                        <canvas id="myChart" style="margin: auto; width:100%;max-width:500px;"></canvas>
                    </div>
                    <div class="col-md-12 mb-5 col-lg-12 col-sm-12 mt-5">
                        <canvas id="myChart1" style="width:100%;max-width:600px; margin: auto;"></canvas>
                    </div>
                    <div class="container mt-5">
                    <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>University Names</th>
                            <th>Department</th>
                            <th>Name</th>
                            <th>Topic</th>
                            <th>Recommend</th>
                            <th>See More</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table table-striped">
                    <?php
                    $select = mysqli_query($conn,"select * from research order by Id desc");
                   $aid=1;
                    while($fetchquery = mysqli_fetch_array($select)){

                    ?>   
                        <tr>
                            <td><?php echo $aid;?></td>
                            <td><?php echo $fetchquery ['University_Name'];?></td>
                            <td><?php echo $fetchquery['Department']?></td>
                            <td><?php echo $fetchquery['Name']?></td>
                            <td><?php echo $fetchquery['Topic']?></td>
                            <td><a href="recom.php?seeid=<?php echo $fetchquery['Id'];?>"><i class="fa-solid fa-comments"></i></a>
                                </td>
                            <td><a href="See.php?seeid=<?php echo $fetchquery['Id'];?>"><i class="fa-solid fa-eye"></i></a></td>
                            <td><?php echo $fetchquery['status']?></td>
                        </tr>
                        <?php
                        $aid=$aid+1;
                        }?>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
  <script>
  var xValues = ["Botany", "Zoology", "Environmental Sciences", "Veterinary Sciences", "Forest Institute", "Forestry and Wildlife Management"];
  var yValues = [botany, zoology, envsciences, vetsciences, forest, wild];
  var barColors = [
            "#0d6efd",
            "rgb(108, 4, 182)",
            "#198754",
            "#dc3545",
            "#ffc107",
            "#0dcaf0"
        ];
        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: ""
                }
            }
        });
        var xValues = ["Botany", "Zoology", "Environmental Sciences", "Veterinary Sciences", "Forest Institute", "Forestry and Wildlife Management"];
        var yValues = [botany, zoology, envsciences, vetsciences, forest, wild];
        var barColors = ["#0d6efd",
            "rgb(108, 4, 182)",
            "#198754",
            "#dc3545",
            "#ffc107",
            "#0dcaf0"
        ];
        new Chart("myChart1", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Research of 2022"
                }
            }
        });
        function chatDisplay() {
            var x = document.getElementById("chat_window_panel");
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
<script src="/js/jquery.min.js"></script> 
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
<?php }?>