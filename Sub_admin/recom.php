<?php
session_start();
error_reporting(0);
include '../link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
    ?>   <script>
    location.replace('logout.php')
    </script><?php
      } else{

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zoo RND</title>
        <?php include ('../link/links.php')?>
    </head>
        <body>
                 <?php
                 $Id = $_SESSION['loginid'];
                 $query= mysqli_query($conn,"select * from login where `Id`='$Id'");

                     while ($fach=mysqli_fetch_array($query)){
                 ?>
                 <nav style="background-color: #3445b4;" class="navbar text-white fixed-top">
                     <!-- Navbar content -->
                     <div class="container-fluid">
                     <a href="index.php" class="navbar-brand text-white fs-1"><i class="fa-solid fa-tent-arrow-turn-left"></i></a>
                     <a class="navbar-brand text-white fs-3">Proposal Submission Form for Bachelor's Final Year Project (FYP)</a>
                         <div class="dropdown float-start">
                             <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="fa-solid fa-ellipsis-vertical fs-3"></i>
                             </button>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                 <li><a class="dropdown-item" href="profile.php"><i class="fa-solid fa-user mr-3"></i>Profile</a></li>
                                 <li><a class="dropdown-item" href="update.php?update=<?php echo $fatch['Id'];?>"><i class="fa-solid fa-gear mr-3"></i></i>Profirle seting</a></li>
                                 <li><a class="dropdown-item" href="../logout.php"><i class="fa-solid fa-right-from-bracket mr-3"></i>Log Out</a></li>
                             </ul>
                         </div>
                         <a class="navbar-brand" href="#">
                             <img src="images/<?php  echo $fach['Image'];?>" class="rounded-circle" alt="" width="30" height="30">
                         </a>
                     </div>
                 </nav>
                 <br>
                 <br>
                 <div class="container mt-5">
                    <?php 
                    $id = $_GET['seeid'];
                    $queryS= mysqli_query($conn,"SELECT * FROM `research` WHERE `Id`='$id'");   
                        while ($fachR=mysqli_fetch_array($queryS)){
                    ?>
                     <fieldset class="my-5 field p-5 border border-secondary">
                         <legend>Personal Information.</legend>
                         <div class="row mt-5">
                             <div class="col-md-12 col-sm-12 item">
                                 <label for="Version">Version <span>*</span></label>
                                 <h3><?php echo $fachR['Version']?></h3>
                                 
                             </div>
                             <div class="col-md-12 col-sm-12 item">
                                 <label for="uniName">University Name<span>*</span></label>
                                 <h3><?php echo $fachR['University_Name']?></h3>
                             </div>
                             <div class="col-md-12 col-sm-12 item">
                                 <label for="name">Department<span>*</span></label>
                                 <h3><?php echo $fachR['Department']?></h3>
                             </div>
                             <div class="col-md-12 col-sm-12 item">
                                 <label for="address">Name<span>*</span></label>
                                 <h3><?php echo $fachR['Name']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="Registration_Number">Registration Number<span>*</span></label>
                                 <h3><?php echo $fachR['Registration_Number']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="Supervisor_Name">Supervisor Name<span>*</span></label>
                                 <h3><?php echo $fachR['Supervisor_Name']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="Co-Supervisor_Name">Co-Supervisor_Name<span>*</span></label>
                                 <h3><?php echo $fachR['CoSupervisor_Name']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="name">Topic<span>*</span></label>
                                 <h3><?php echo $fachR['Topic']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="name">Type of sample from Peshawar Zoo<span>*</span></label>
                                 <h3><?php echo $fachR['Type_of_sample_required_from_Peshawar_Zoo']?></h3>
                             </div>
                         </div>
                     </fieldset>
                     <fieldset class="my-5 field p-5 border border-secondary">
                         <legend>Research Information.</legend>
                         <div class="row">
                             <div class="col-md-12 col-sm-12 item">
                                 <label for="Project_Title">Project Title<span>*</span></label>
                                 <h3><?php echo $fachR['Project_Title']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="Start_date">Starting_date of project<span>*</span></label>
                                 <h3><?php echo $fachR['Starting_date_of_porject']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="End_date">End_date of project<span>*</span></label>
                                 <h3><?php echo $fachR['End_date_of_project']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="App_Date">Application Submission Date<span>*</span></label>
                                 <h3><?php echo $fachR['Application_Submission_Date']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item ">
                                 <label for="Cv">Principal Investigator (Attach CV)<span>*</span></label>
                                 <h3><?php echo $fachR['file']?></h3>
                             </div>
                             <div class="col-md-6 col-sm-12 item">
                                 <label for="Title">Title</label>
                                 <h3><?php echo $fachR['Title1']?></h3>
                             </div>
                             <div class=" col-sm-12 item col-md-6">
                                 <label for="Institutional_Affiliation">Institutional Affiliation<span>*</span></label>
                                 <h3><?php echo $fachR['Institutional_Affiliation']?></h3>
                             </div>
                             <div class=" col-md-6 col-sm-12 item">
                                 <label for="Phone">Phone<span>*</span></label>
                                 <h3><?php echo $fachR['Phone']?></h3>
                             </div>
                             <div class="col-md-12 col-sm-12 item ">
                                 <label for="Email">Email</label>
                                 <h3><?php echo $fachR['Email']?></h3>
                             </div>
                             <div class=" col-sm-12 item col-md-12 ">
                                 <h5>Co-Invertigators (If more then 3 Co-investigators,).</h5>
                                 <div class="row">
                                     <div class="col-md-4 col-sm-12 item">
                                         <label for="Co_Supervisor_Name">
                                             Co_Supervisor_Name
                                         </label>
                                         <h3><?php echo $fachR['Co_Supervisor_Name']?></h3>
                                     </div>
                                     <div class="col-sm-12 item col-md-4">
                                         <label for="Instieution">Institutional</label>
                                         <h3><?php echo $fachR['Institutional']?></h3>
                                     </div>
                                     <div class="col-sm-12 item col-md-4">
                                         <label for="Title">Title</label>
                                         <h3><?php echo $fachR['Title']?></h3>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-12 col-sm-12 item">
                                 <h5>Does the study involve human subject?</h5>
                                 <div class="form-check">
                                     <input class="form-check-input" onclick="myFunction()" type="radio" id="Q1">
                                     <label class="form-check-label" for="Q1">
                                         Yes
                                     </label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="radio" onclick="myFunction1()" id="Q1.2" checked>
                                     <label class="form-check-label" for="Q1.2">
                                         No
                                     </label>
                                 </div>
                                 <div id="panel">
                                     <h4>What type of human Subject are involved?</h4>
                                     <h3><?php echo $fachR['Qa']?></h3>
                                 </div>
                             </div>
                             <div class="col-md-12 col-sm-12 item">
                                 <h5>Does the study involve animal subjects?</h5>
                                 <div id="panel1">
                                     <h4>Animal subjects questions:</h4>
                                     <h4>Please list the common name and full scientific name of each species:</h4>
                                     <div class="item">
                                         <label for="student">Answer<span>*</span></label>
                                         <?php echo $fachR['Qa_a']?>
                                     </div>
                                     <div class="item col-md-12 col-sm-12">
                                         <h4>Does the study involve manipulation of live animals or modification of husbandry protocols?</h4>
                                         <div class="item">
                                             <label for="name">Select Answer<span>*</span></label>
                                             <h3><?php echo $fachR['Qa_b']?></h3>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </fieldset>
                     <fieldset class="my-5 field p-5 border border-secondary">
                         <legend>Research Information</legend>
                         <div class="item">
                             <label for="description">Please provide a brief summary of the project (limit to 1500 characters):<span>*</span></label>
                             <?php echo $fachR['Qb']?>
                         </div>
                         <div class="item">
                             <label for="student">Please summarize how this project will contribute to the mission of  Peshawar Zoo (limit to 1500 characters):<span>*</span></label>
                             <?php echo $fachR['Qc']?>
                         </div>
                         <div class="item">
                             <h4>(A) Provide a Brief Project Description:</h4>
                             <label for="student">1. Research Topic<span>*</span></label>
                             <h3><?php echo $fachR['Qd']?></h3>
                             <label for="student">2. Introduction<span>*</span></label>
                             <?php echo $fachR['Qe']?>
                             <label for="student">3. Research Objectives<span>*</span></label>
                             <?php echo $fachR['Qf']?>
                             <label for="student">4. Research Questions/ Hypothesis <span>*</span></label>
                             <?php echo $fachR['Qg']?>
                             <h4>(B) Study Subjects (include sample size and justification for using these participants):</h4>
                             <?php echo $fachR['Qh']?>
                             <h4>(C) Methodology </h4>
                             <?php echo $fachR['Qi']?>
                             <h4>(D) Health, Safety and Welfare considerations:</h4>
                             <label for="student">(i) Please describe the potential health/safety/psychological risks for animals or humans involved in the study:<span>*</span></label>
                             <?php echo $fachR['Qj']?>
                             <label for="student">(ii) For human studies, what conditions and limitations are of your study?<span>*</span></label>
                             <?php echo $fachR['Qk']?>
                             <label for="student">(ii) For animal studies, what conditions and limitations are of your study?<span>*</span></label>
                             <?php echo $fachR['Ql']?>
                         </div>
                         <div class="item">
                             <h4>(E) Dissemination of results (check any/all that apply):</h4>
                             <label for="Undergraduate_thesis">Undergraduate thesis</label>
                             <h3><?php echo $fachR['Qm']?></h3>
                         </div>
                         <div class="item">
                            <h4>Studies Involving Humans As Subjects</h4>
                            <h4>Is this project an evaluation of existing zoo education programs?</h4>
                            <div class="form-check">
                                 <h3><?php echo $fachR['Qn']?></h3>
                            </div>
                         </div>
                         <div class="item ">
                             <h4>(A) Identify what zoo time and effort is needed to assist with your project completion:</h4>
                             <?php echo $fachR['Qo']?>
                         </div>
                         <div class="item">
                             <div class="form-check">
                                 <h5>(B) Role of zoo staff in the project:</h5>
                                 <h5>Is the project purely observational?</h5>
                                     <h3><?php echo $fachR['Qp']?></h3>
                             </div>
                         </div>
                         <div class="item">
                             <div class="form-check">
                                <h5>Can the study be conducted from public areas?</h5>
                                <h3><?php echo $fachR['Qq']?></h3>
                             </div>
                         </div>
                         <div class="item">
                             <div class="form-check">
                                 <h5>Can the study be conducted during operating hours?</h5>
                                 <h3><?php echo $fachR['Qr']?></h3>
                             </div>
                         </div>
                         <div class="item">
                             <div class="form-check">
                                 <h5>Can the study be conducted without assistance from zoo/aquarium personnel?</h5>
                                 <h3><?php echo $fachR['Qs']?></h3>
                             </div>
                         </div>
                         <div class="item ">
                             <h4>If you answered no to any of the questions above, please describe what is requested of the hosting institution:</h4>
                             <?php echo $fachR['Qt']?>
                         </div>
                         <div class="item ">
                             <h4>(C) Describe any records /materials that would be from the institution to support thestudy:</h4>
                             <?php echo $fachR['Qu']?>
                         </div>
                         <div class="item ">
                             <h4>(D) How will the zoo and staff be acknowledged in dissemination of results?</h4>
                             <?php echo $fachR['Qv']?>
                         </div>
                         <div class="item">
                             <h5>Does this project require collection of biomaterials?</h5>
                             <div>
                                 <table class="table table-bordered">
                                     <thead>
                                         <tr>
                                             <th scope="col">#</th>
                                             <th scope="col">Species </th>
                                             <th scope="col">Sex</th>
                                             <th scope="col"># of Individuals</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <th scope="row">1</th>
                                             <td><?php echo $fachR['Qw']?></td>
                                             <td><?php echo $fachR['Qx']?></td>
                                             <td><?php echo $fachR['Qy']?></td>
                                         </tr>
                                         <tr>
                                             <th scope="row">2</th>
                                             <td><?php echo $fachR['Qz']?></td>
                                             <td><?php echo $fachR['Qaa']?></td>
                                             <td><?php echo $fachR['Qab']?></td>
                                         </tr>
                                         <tr>
                                             <th scope="row">3</th>
                                             <td><?php echo $fachR['Qac']?></td>
                                             <td><?php echo $fachR['Qad']?></td>
                                             <td><?php echo $fachR['Qae']?></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <!--  2nd table -->
                         <div class="item">
                             <h4>(B) Detailed collection protocol</h4>
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th scope="col">Select</th>
                                         <th scope="col">Sample Type </th>
                                         <th scope="col">Volume </th>
                                         <th scope="col"># of samples/ animal</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <th scope="row"><?php echo $fachR['Qaf']?></th>
                                         <td>Serum</td>
                                         <td><?php echo $fachR['Qag']?></td>
                                         <td><?php echo $fachR['Qah']?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><?php echo $fachR['Qai']?></th>
                                         <td>Plasma</td>
                                         <td><?php echo $fachR['Qaj']?></td>
                                         <td><?php echo $fachR['Qak']?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><?php echo $fachR['Qal']?></th>
                                         <td>Whole Blood
                                             <td><?php echo $fachR['Qam']?></td>
                                             <td><?php echo $fachR['Qan']?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><?php echo $fachR['Qao']?></th>
                                         <td>Feces</td>
                                         <td><?php echo $fachR['Qap']?></td>
                                         <td><?php echo $fachR['Qaq']?></td>
                                     </tr>
                                     <tr>
                                         <th scope="row"><?php echo $fachR['Qar']?></th>
                                         <td>Urine</td>
                                         <td><?php echo $fachR['Qas']?></td>
                                         <td><?php echo $fachR['Qat']?></td>
                                     </tr>
                                     <tr>
                                     <th scope="row"><?php echo $fachR['Qau']?></th>
                                         <td>Other:</td>
                                         <td><?php echo $fachR['Qav']?></td>
                                         <td><?php echo $fachR['Qaw']?></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div class="item ">
                             <h4>Methods for lab processing and storage</h4>
                             <?php echo $fachR['Qax']?>
                         </div>
                         <?php 
                         $Id = $_SESSION['loginid'];
                         $query= mysqli_query($conn,"SELECT * FROM `login` WHERE `Id`='$Id'");
                                while ($fach=mysqli_fetch_array($query)){
                            if(isset($_POST['submit'])){
                                $name = $fach['Name'];
                                $email = $fach['Email'];
                                $Recommend = $_POST['Recommend'];
                                $Recommendid = $fachR['Id']; 
                                
                                $insert=mysqli_query($conn,"INSERT INTO `recommend`( `Name`, `Email`, `Recommend`, `Recommendid`) VALUES ('$name','$email','$Recommend','$Recommendid')");
                                if($insert){echo '<script>alert( "Data Inserted");</script>'; 
                                }else{echo '<script>alert( "Data Not Inserted");</script>';} 
                                            }}
                            ?>
                            <form action="" method="POST" enctype="multipart/form-data" >
                                <div class="item my-4">
                               <label for="Recommend"> Recommend</label>
                                <textarea name="Recommend" id="Recommend" cols="30" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('Recommend');
                                </script>
                                </div>
                                
                                <div class="item">
                                    <button name="submit" class="p-3 btn m-5 text-white fw-bolder" style="background-color: #0D1F34;" type="submit">Recommend</button>
                                </div>
                            </form>
                     </fieldset>
                     <?php }?>
                 </div>
                 
                 <?php }?>
             
             <div class="container-fluid">
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
        </body>
</html>
<?php }?>