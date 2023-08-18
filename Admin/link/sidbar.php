<div id="mySidenav" class="sidebar">
    <a href="javascript:void(0)" style="width: 17px;text-align: center;float: right;" class="closebtn  mx-3" onclick="closeNav()">&times;</a>
    <div class="row">
        <?php
        $Id = $_SESSION['loginid'];
        $query= mysqli_query($conn,"SELECT * FROM `login` WHERE `Id`='$Id'");
        while (mysqli_fetch_array($query)){
        ?>
        <div class="col-sm-12 col-md-12">
            <h1 class="logo">
                <?php echo $fach['Name'];?>
                <br><span><?php echo $fach['Designation'];?></span>
            </h1>
        </div>
        <?php }?>
    </div>
    <ul class="list-unstyled components my-3 px-3">
        <li class="">
            <a class="rounded-pill" id="home" href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li>
            <a class="rounded-pill" id="addadmin" href="Add_Sub_Admin.php"><span class="fa fa-chalkboard-teacher mr-3"></span>Add admin</a>
        </li>
        <li>
            <a class="rounded-pill" id="editadmin" href="Add_Edit_admin.php"><span class="fa fa-chalkboard-teacher mr-3"></span>Edit admin</a>
        </li>
        <li>
            <a class="rounded-pill" id="addfacu" href="Add_Faculies.php"><span class="fa fa-chalkboard-teacher mr-3"></span>Add Faculties</a>
        </li>
        <li>
            <a class="rounded-pill" id="editfacu" href="Edit_faculties.php"><span class="fa fa-reddit-square mr-3"></span> Edit Faculties</a>
        </li>
        <li>
            <a class="rounded-pill" id="addstude" href="Add_student.php"><span class="fa fa-mars-stroke-h mr-3"></span> Add Student</a>
        </li>
        <li>
            <a class="rounded-pill" id="editstud" href="Edit_student.php"><span class="fa fa-file-medical-alt mr-3"></span> Edit Student</a>
        </li>
    </ul>
    <div class="container-fluid ">
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
</div>
