<div style="background-color: #3445b4; height:60px;" class="text-white">
    <span style="font-size:30px;cursor:pointer; display: none;" id="open" onclick="openNav()">&#9776;</span>
    <!-- Navbar content -->
    <div class="float-end m-4">
    <?php
        $Id = $_SESSION['loginid'];
        $query= mysqli_query($conn,"SELECT * FROM `login` WHERE `Id`='$Id'");
        while ($fatch=mysqli_fetch_array($query)){
        ?>
        <div class="dropdown float-start">
            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-ellipsis-vertical fs-3"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="adminprofile.php?see=<?php echo $fatch['Id'];?>"><i class="fa-solid fa-user mr-3"></i>Profile</a></li>
                <li><a class="dropdown-item" href="update.php?update=<?php echo $fatch['Id'];?>"><i class="fa-solid fa-gear mr-3"></i></i>Profirle seting</a></li>
                <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket mr-3"></i>Log Out</a></li>
            </ul>
        </div>
        
        <a class="navbar-brand float-end" href="#">
            <img src="../images/<?php echo $fatch['Image']?>" class="rounded-circle" alt="🧑🏻‍💻" width="30" height="30">
        </a>
        <?php }?>
    </div>
</div>
