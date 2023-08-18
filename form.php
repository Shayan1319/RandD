<?php
session_start();
error_reporting(0);
include 'link/conn.php';
if (strlen($_SESSION['loginid']==0)) {
    ?>   <script>
    location.replace('logout.php')
    </script><?php
      } else{
if(isset($_POST['submit']))
{
    $Version= mysqli_real_escape_string($conn,$_POST['Version']);
    $University_Name= mysqli_real_escape_string($conn,$_POST['University_Name']);
    $Department= mysqli_real_escape_string($conn,$_POST['Department']);
    $Name= mysqli_real_escape_string($conn,$_POST['Name']);
    $Registration_Number=mysqli_real_escape_string($conn,$_POST['Registration_Number']);
    $Supervisor_Name= mysqli_real_escape_string($conn,$_POST['Supervisor_Name']);
    $CoSupervisor_Name= mysqli_real_escape_string($conn,$_POST['CoSupervisor_Name']);
    $Topic= mysqli_real_escape_string($conn,$_POST['Topic']);
    $Type_of_sample_required_from_Peshawar_Zoo= mysqli_real_escape_string($conn,$_POST['Type_of_sample_required_from_Peshawar_Zoo']);	
    $Project_Title= mysqli_real_escape_string($conn,$_POST['Project_Title']);
    $Starting_date_of_porject= mysqli_real_escape_string($conn,$_POST['Starting_date_of_porject']);
    $End_date_of_project= mysqli_real_escape_string($conn,$_POST['End_date_of_project']);
    $Application_Submission_Date=  mysqli_real_escape_string($conn,$_POST['Application_Submission_Date']);   
    $Title1= mysqli_real_escape_string($conn,$_POST['Title1']);
    $Institutional_Affiliation= mysqli_real_escape_string($conn,$_POST['Institutional_Affiliation']);
    $Phone= mysqli_real_escape_string($conn,$_POST['Phone']);
    $Email= mysqli_real_escape_string($conn,$_POST['Email']);
    $Co_Supervisor_Name= mysqli_real_escape_string($conn,$_POST['Co_Supervisor_Name']);
    $Institutional= mysqli_real_escape_string($conn,$_POST['Institutional']);
    $Title= mysqli_real_escape_string($conn,$_POST['Title']);
    $CheckA=$_POST['Qa'];
    $Qa=implode(",",$CheckA);
    $Qa_a= $_POST['Qa_a'];
    $Qa_b= $_POST['Qa_b'];
    $Qb= $_POST['Qb'];
    $Qc= $_POST['Qc'];
    $Qd= $_POST['Qd'];
    $Qe= $_POST['Qe'];
    $Qf= $_POST['Qf'];
    $Qg= $_POST['Qg'];
    $Qh= $_POST['Qh'];
    $Qi= $_POST['Qi'];
    $Qj= $_POST['Qj'];
    $Qk= $_POST['Qk'];
    $Ql= $_POST['Ql'];
    $checkbox= $_POST['Qm'];
    $Qm=implode(",",$checkbox);
    $Qn= $_POST['Qn'];
    $Qo= $_POST['Qo'];
    $Qp= $_POST['Qp'];
    $Qq= $_POST['Qq'];
    $Qr= $_POST['Qr'];
    $Qs= $_POST['Qs'];
    $Qt= $_POST['Qt'];
    $Qu= $_POST['Qu'];
    $Qv= $_POST['Qv'];
    $Qw= $_POST['Qw'];
    $Qx= $_POST['Qx'];
    $Qy= $_POST['Qy'];
    $Qz= $_POST['Qz'];
    $Qaa= $_POST['Qaa'];
    $Qab= $_POST['Qab'];
    $Qac= $_POST['Qac'];
    $Qad= $_POST['Qad'];
    $Qae= $_POST['Qae'];
    $Qaf= $_POST['Qaf'];
    $Qag= $_POST['Qag'];
    $Qah= $_POST['Qah'];
    $Qai= $_POST['Qai'];
    $Qaj= $_POST['Qaj'];
    $Qak= $_POST['Qak'];
    $Qal= $_POST['Qal'];
    $Qam= $_POST['Qam'];
    $Qan= $_POST['Qan'];
    $Qao= $_POST['Qao'];
    $Qap= $_POST['Qap'];
    $Qaq= $_POST['Qaq'];
    $Qar= $_POST['Qar'];
    $Qas= $_POST['Qas'];
    $Qat= $_POST['Qat'];
    $Qau= $_POST['Qau'];
    $Qav= $_POST['Qav'];
    $Qaw= $_POST['Qaw'];
    $Qax= $_POST['Qax'];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0){
      $destfile='Cv/'. $filename;
    //   echo"$destfile";
      move_uploaded_file($filepath,$destfile);
      // insert query
    }
$insertquery= mysqli_query($conn,"INSERT INTO `research`(`Version`, `University_Name`, `Department`, `Name`, `Registration_Number`, `Supervisor_Name`, `CoSupervisor_Name`, `Topic`, `Type_of_sample_required_from_Peshawar_Zoo`, `Project_Title`, `Starting_date_of_porject`, `End_date_of_project`, `Application_Submission_Date`, `file`, `Title1`, `Institutional_Affiliation`, `Phone`, `Email`, `Co_Supervisor_Name`, `Institutional`, `Title`, `Qa`, `Qa_a`, `Qa_b`, `Qb`, `Qc`, `Qd`, `Qe`, `Qf`, `Qg`, `Qh`, `Qi`, `Qj`, `Qk`, `Ql`, `Qm`, `Qn`, `Qo`, `Qp`, `Qq`, `Qr`, `Qs`, `Qt`, `Qu`, `Qv`, `Qw`, `Qx`, `Qy`, `Qz`, `Qaa`, `Qab`, `Qac`, `Qad`, `Qae`, `Qaf`, `Qag`, `Qah`, `Qai`, `Qaj`, `Qak`, `Qal`, `Qam`, `Qan`, `Qao`, `Qap`, `Qaq`, `Qar`, `Qas`, `Qat`, `Qau`, `Qav`, `Qaw`, `Qax`, `status`) VALUES ('$Version','$University_Name', '$Department', '$Name', '$Registration_Number', '$Supervisor_Name', '$CoSupervisor_Name', '$Topic', '$Type_of_sample_required_from_Peshawar_Zoo', '$Project_Title', '$Starting_date_of_porject', '$End_date_of_project', '$Application_Submission_Date', '$filename', '$Title1', '$Institutional_Affiliation', '$Phone', '$Email', '$Co_Supervisor_Name', '$Institutional', '$Title', '$Qa', '$Qa_a', '$Qa_b', '$Qb', '$Qc', '$Qd', '$Qe', '$Qf', '$Qg', '$Qh', '$Qi', '$Qj', '$Qk', '$Ql', '$Qm', '$Qn', '$Qo', '$Qp', '$Qq', '$Qr', '$Qs', '$Qt', '$Qu', '$Qv', '$Qw', '$Qx', '$Qy', '$Qz', '$Qaa', '$Qab', '$Qac', '$Qad', '$Qae', '$Qaf', '$Qag', '$Qah', '$Qai', '$Qaj', '$Qak', '$Qal', '$Qam', '$Qan', '$Qao', '$Qap', '$Qaq', '$Qar', '$Qas', '$Qat', '$Qau', '$Qav', '$Qaw', '$Qax','Pending')");
if($insertquery){
    echo '<script>alert( "Data inserted success fully");</script>';
    ?>
    <script>
        location.replace('profile.php')
    </script>
    <?php
}
else{echo '<script>alert( "Data Not Inserted");</script>';}
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zoo RND</title>
        <?php include ('link/links.php')?>
    </head>
        <body>
                <form action="" method="post">
                    <?php
                    $Id = $_SESSION['loginid'];
                    $query= mysqli_query($conn,"select * from login where `Id`='$Id'");

                        while ($fach=mysqli_fetch_array($query)){
                    ?>
                    <nav style="background-color: #3445b4;" class="navbar text-white fixed-top">
                        <!-- Navbar content -->
                        <div class="container-fluid">
                        <a href="profile.php" class="navbar-brand text-white fs-1"><i class="fa-solid fa-tent-arrow-turn-left"></i></a>
                        <a class="navbar-brand text-white fs-3">Proposal Submission Form for Bachelor's Final Year Project (FYP)</a>
                            <button class="btn text-white px-4" type="submit" name="submit" style="background-color: #23445B;">APPLY</button>
                            <div class="dropdown float-start">
                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical fs-3"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="adminprofile.php?see=<?php echo $fatch['Id'];?>"><i class="fa-solid fa-user mr-3"></i>Profile</a></li>
                                    <li><a class="dropdown-item" href="update.php?update=<?php echo $fatch['Id'];?>"><i class="fa-solid fa-gear mr-3"></i></i>Profirle seting</a></li>
                                    <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket mr-3"></i>Log Out</a></li>
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
                        <fieldset class="my-5 p-5 border border-secondary">
                            <legend>Personal Information.</legend>
                            <div class="row mt-5">
                                <div class="col-md-12 col-sm-12 item">
                                    <label for="Version">Version <span>*</span></label>
                                    <input type="text" class="form-control my-3" name="Version" id="Version" placeholder="Version" required/>
                                </div>
                                <div class="col-md-12 col-sm-12 item">
                                    <label for="uniName">University Name<span>*</span></label>
                                    <input type="text" value="<?php  echo $fach['University'];?>" class="form-control my-3" name="University_Name" id="uniName" placeholder="University Name" required/>
                                </div>
                                <div class="col-md-12 col-sm-12 item">
                                    <label for="name">Department<span>*</span></label>
                                    <input type="text" value="<?php  echo $fach['Department'];?>" class="form-control my-3" name="Department Name" id="uniName" placeholder="Department Name" required/>
                                </div>
                                <div class="col-md-12 col-sm-12 item">
                                    <label for="address">Name<span>*</span></label>
                                    <input id="address" value="<?php  echo $fach['Name'];?>" type="text" class="form-control my-3" name="Name" placeholder="Name" required/>
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="Registration_Number">Registration Number<span>*</span></label>
                                    <input type="text" value="<?php echo $fach['Registration_Numberv'];?>" class="form-control my-3" id="Registration_Number" name="Registration_Number" placeholder="Registration Number" required/>
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="Supervisor_Name">Supervisor Name<span>*</span></label>
                                    <input type="text" class="form-control my-3" id="Supervisor_Name" name="Supervisor_Name" placeholder="Supervisor_Name" />
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="Co-Supervisor_Name">Co-Supervisor_Name<span>*</span></label>
                                    <input type="text" class="form-control my-3" name="CoSupervisor_Name" id="Co-Supervisor_Name" placeholder="Co-Supervisor_Name">
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="name">Topic<span>*</span></label>
                                    <input type="text" class="form-control my-3" name="Topic" placeholder="Topic" />
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="name">Type of sample from Peshawar Zoo<span>*</span></label>
                                    <input class="form-control my-3" type="text" name="Type_of_sample_required_from_Peshawar_Zoo" placeholder="Type of sample from zoo">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="my-5 p-5 border border-secondary">
                            <legend>Research Information.</legend>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 item">
                                    <label for="Project_Title">Project Title<span>*</span></label>
                                    <input type="text" class="form-control my-3" name="Project_Title" placeholder="Project Title:">
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="Start_date">Starting_date of project<span>*</span></label>
                                    <input type="date" class="form-control my-3" id="Starting_date_of_porject" name="Starting_date_of_porject" placeholder="Start_date" />
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="End_date">End_date of project<span>*</span></label>
                                    <input type="date" class="form-control my-3" name="End_date_of_project" id="End_date" placeholder="End_date">
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="App_Date">Application Submission Date<span>*</span></label>
                                    <input type="date" class="form-control my-3" name="Application_Submission_Date" id="App_Date">
                                </div>
                                <div class="col-md-6 col-sm-12 item ">
                                    <label for="Cv">Principal Investigator (Attach CV)<span>*</span></label>
                                    <input class="form-control my-3" type="file" name="file" id="file">
                                </div>
                                <div class="col-md-6 col-sm-12 item">
                                    <label for="Title">Title</label>
                                    <input type="text" name="Title1" placeholder="Title" class="form-control my-3" id="Title">
                                </div>
                                <div class=" col-sm-12 item col-md-6">
                                    <label for="Institutional_Affiliation">Institutional Affiliation<span>*</span></label>
                                    <input type="text" class="form-control my-3" id="Institutional_Affiliation" name="Institutional_Affiliation" placeholder="Institutional Affiliation">
                                </div>
                                <div class=" col-md-6 col-sm-12 item">
                                    <label for="Phone">Phone<span>*</span></label>
                                    <input type="text" value="<?php  echo $fach['Phone_Number'];?>" placeholder="Phone" name="Phone" id="Phone" class="form-control my-3">
                                </div>
                                <div class="col-md-12 col-sm-12 item ">
                                    <label for="Email">Email</label>
                                    <input type="email" value="<?php  echo $fach['Email'];?>" name="Email" id="Email" class="form-control my-3"required >
                                </div>
                                <div class=" col-sm-12 item col-md-12 ">
                                    <h5>Co-Invertigators (If more then 3 Co-investigators,).</h5>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 item">
                                            <label for="Co_Supervisor_Name">
                                                Co_Supervisor_Name
                                            </label> <br>
                                            <textarea class="form-control" name="Co_Supervisor_Name" id="Co_Supervisor_Name" cols="50" rows="6"></textarea>
                                        </div>
                                        <div class="col-sm-12 item col-md-4">
                                            <label for="Instieution">Institutional</label>
                                            <br>
                                            <textarea class="form-control" name="Institutional" id="Instieution" cols="50" rows="6"></textarea>
                                        </div>
                                        <div class="col-sm-12 item col-md-4">
                                            <label for="Title">Title</label>
                                            <br>
                                            <textarea class="form-control" name="Title" id="Title" cols="50" rows="6"></textarea>
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
                                    <div id="panel" style="display: none;">
                                        <h4>What type of human Subject are involved?</h4>
                                        <label for="Vistors">Vistors</label>
                                        <input class="mb-3" type="checkbox" name="Qa[]" value="Vistor" id="Vistors">
                                        <br>
                                        <label for="Member">Member</label>
                                        <input type="checkbox" name="Qa[]" value="Member" id="Member">
                                        <br>
                                        <label for="Staff">Staff</label>
                                        <input type="checkbox" name="Qa[]" value="Staff" id="Staff">
                                        <br>
                                        <label for="Volunteers">Volunteers</label>
                                        <input type="checkbox" name="Qa[]" value="Volunteers" id="Volunteers">
                                        <br>
                                        <label for="youth_under">Youth Under 18</label>
                                        <input type="checkbox" name="Qa[]" value="Youth Under 18" id="+18">
                                        <br>
                                        <label for="other">Other</label>
                                        <input type="text" name="Qa[]" id="other">
                                        <br>
                                    </div>
                                    <script>
                                        function myFunction() {
                                            document.getElementById("panel").style.display = "block";
                                        }
                                        function myFunction1() {
                                            document.getElementById("panel").style.display = "none";
                                        }
                                    </script>
                                </div>
                                <div class="col-md-12 col-sm-12 item">
                                    <h5>Does the study involve animal subjects?</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" onclick="myFunction2()" type="radio" id="Q9.1">
                                        <label class="form-check-label" for="Q9.1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" onclick="myFunction3()" id="Q9.2" checked>
                                        <label class="form-check-label" for="Q9.2">
                                            No
                                        </label>
                                    </div>
                                    <div id="panel1" style="display: none;">
                                        <h4>Animal subjects questions:</h4>
                                        <h4>Please list the common name and full scientific name of each species:</h4>
                                        <div class="item">
                                            <label for="student">Answer<span>*</span></label>
                                            <textarea name="Qa_a" id="description"></textarea>
                                            <script>
                                                CKEDITOR.replace('Qa_a');
                                            </script>
                                        </div>
                                        <div class="item col-md-12 col-sm-12">
                                            <h4>Does the study involve manipulation of live animals or modification of husbandry protocols?</h4>
                                            <div class="item">
                                                <label for="name">Select Answer<span>*</span></label>
                                                <select name="Qa_b" class="form-control my-3" aria-label=".form-select-lg example">
                                                    <option value="Yes">Yes</option>
                                                    <option selected value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function myFunction2() {
                                            document.getElementById("panel1").style.display = "block";
                                        }
                                        function myFunction3() {
                                            document.getElementById("panel1").style.display = "none";
                                        }
                                    </script>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="my-5 p-5 border border-secondary">
                            <legend>Research Information</legend>
                            <div class="item">
                                <label for="description">Please provide a brief summary of the project (limit to 1500 characters):<span>*</span></label>
                                <textarea class="form-control my-5" name="Qb" id="Qb"></textarea>
                                <script>
                                    CKEDITOR.replace('Qb');
                                </script>
                            </div>
                            <div class="item">
                                <label for="student">Please summarize how this project will contribute to the mission of  Peshawar Zoo (limit to 1500 characters):<span>*</span></label>
                                <textarea class="form-control my-5" name="Qc" id="Qc"></textarea>
                                <script>
                                    CKEDITOR.replace('Qc');
                                </script>
                            </div>
                            <div class="item">
                                <h4>(A) Provide a Brief Project Description:</h4>
                                <label for="student">1. Research Topic<span>*</span></label>
                                <textarea class="form-control my-5" name="Qd" id="Qd"></textarea>
                                <script>
                                    CKEDITOR.replace('Qd');
                                </script>

                                <label for="student">2. Introduction<span>*</span></label>
                                <textarea class="form-control my-5" name="Qe" id="Qe"></textarea>
                                <script>
                                    CKEDITOR.replace('Qe');
                                </script>
                                <label for="student">3. Research Objectives<span>*</span></label>
                                <textarea class="form-control my-5" name="Qf" id="Qf"></textarea>
                                <script>
                                    CKEDITOR.replace('Qf');
                                </script>
                                <label for="student">4. Research Questions/ Hypothesis <span>*</span></label>
                                <textarea class="form-control my-5" name="Qg" id="Qg"></textarea>
                                <script>
                                    CKEDITOR.replace('Qg');
                                </script>
                                <h4>(B) Study Subjects (include sample size and justification for using these participants):</h4>
                                <textarea class="form-control my-5" name="Qh" id="Qh"></textarea>
                                <script>
                                    CKEDITOR.replace('Qh');
                                </script>
                                <h4>(C) Methodology </h4>
                                <textarea class="form-control my-5" name="Qi" id="Qi"></textarea>
                                <script>
                                    CKEDITOR.replace('Qi');
                                </script>
                                <h4>(D) Health, Safety and Welfare considerations:</h4>
                                <label for="student">(i) Please describe the potential health/safety/psychological risks for animals or humans involved in the study:<span>*</span></label>
                                <textarea class="form-control my-5" name="Qj" id="Qj"></textarea>
                                <script>
                                    CKEDITOR.replace('Qj');
                                </script>

                                <label for="student">(ii) For human studies, what conditions and limitations are of your study?<span>*</span></label>
                                <textarea class="form-control my-5" name="Qk" id="Qk"></textarea>
                                <script>
                                    CKEDITOR.replace('Qk');
                                </script>
                                <label for="student">(ii) For animal studies, what conditions and limitations are of your study?<span>*</span></label>
                                <textarea class="form-control my-5" name="Ql" id="Ql"></textarea>
                                <script>
                                    CKEDITOR.replace('Ql');
                                </script>
                            </div>
                            <div class="item">
                                <h4>(E) Dissemination of results (check any/all that apply):</h4>
                                <label for="Undergraduate_thesis">Undergraduate thesis</label>
                                <input class="mb-3" type="checkbox" name="Qm[]" value="Undergraduate_thesis" id="Undergraduate_thesis">
                                <br>
                                <label for="Non_peer_reviewed_publication">Non-peer reviewed publication</label>
                                <input type="checkbox" name="Qm[]" value="Non_peer_reviewed_publication" id="Non_peer_reviewed_publication">
                                <br>
                                <label for="Graduate_thesis_or_dissertation">Graduate thesis or dissertation</label>
                                <input type="checkbox" name="Qm[]" value="Graduate_thesis_or_dissertation" id="Graduate_thesis_or_dissertation">
                                <br>
                                <label for="Peer_reviewed_publication">Peer reviewed publication</label>
                                <input type="checkbox" name="Qm[]" value="Peer_reviewed_publication" id="Peer_reviewed_publication">
                                <br>
                                <label for="Scientific_meeting_presentation">Scientific meeting presentation</label>
                                <input type="checkbox" name="Qm[]" value="Scientific_meeting_presentation" id="Scientific_meeting_presentation">
                                <br>
                                <label for="Website">Website</label>
                                <input type="checkbox" name="Qm[]" value="Website" id="Website">
                                <br>
                                <label for="HEC_Recognized_Journals">HEC Recognized Journals</label>
                                <input type="checkbox" name="Qm[]" value="HEC_Recognized_Journals" id="HEC_Recognized_Journals">
                                <br>
                                <label for="OtherQE">Other</label>
                                <input type="text" name="Qm[]" id="OtherQE" placeholder="Other" class="form-control my-3">
                            </div>
                            <div class="item">
                                <h4>Studies Involving Humans As Subjects</h4>
                                <h4>Is this project an evaluation of existing zoo education programs?</h4>
                                <div class="form-check">
                                <label for="name">Select Answer<span>*</span></label>
                                     <select name="Qn" class="form-control my-3" aria-label=".form-select-lg example">
                                    <option value="Yes">Yes</option>
                                    <option selected value="No">No</option></select>
                                </div>
                            </div>
                            <div class="item ">
                                <h4>(A) Identify what zoo time and effort is needed to assist with your project completion:</h4>
                                <textarea class="form-control my-5" name="Qo" id="Qo"></textarea>
                                <script>
                                    CKEDITOR.replace('Qo');
                                </script>
                            </div>
                            <div class="item">
                                <div class="form-check">
                                    <h5>(B) Role of zoo staff in the project:</h5>
                                    <h5>Is the project purely observational?</h5>
                                        <label for="name">Select Answer<span>*</span></label>
                                        <select name="Qp" class="form-control my-3" aria-label=".form-select-lg example">
                                            <option value="Yes">Yes</option>
                                            <option selected value="No">No</option>
                                        </select>                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-check">
                                     <h5>Can the study be conducted from public areas?</h5>
                                    <label for="name">Select Answer<span>*</span></label>
                                    <select name="Qq" class="form-control my-3" aria-label=".form-select-lg example">
                                        <option value="Yes">Yes</option>
                                        <option selected value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-check">
                                    <h5>Can the study be conducted during operating hours?</h5>
                                    <label for="name">Select Answer<span>*</span></label>
                                    <select name="Qr" class="form-control my-3" aria-label=".form-select-lg example">
                                       <option value="Yes">Yes</option>
                                       <option selected value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <div class="form-check">
                                    <h5>Can the study be conducted without assistance from zoo/aquarium personnel?</h5>
                                    <label for="name">Select Answer<span>*</span></label>
                                    <select name="Qs" class="form-control my-3" aria-label=".form-select-lg example">
                                       <option value="Yes">Yes</option>
                                       <option selected value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item ">
                                <h4>If you answered no to any of the questions above, please describe what is requested of the hosting institution:</h4>
                                <textarea name="Qt" id="Qt"></textarea>
                                <script>
                                    CKEDITOR.replace('Qt');
                                </script>
                            </div>
                            <div class="item ">
                                <h4>(C) Describe any records /materials that would be from the institution to support thestudy:</h4>
                                <textarea name="Qu" id="Qu"></textarea>
                                <script>
                                CKEDITOR.replace('Qu');
                                </script>
                            </div>
                            <div class="item ">
                                <h4>(D) How will the zoo and staff be acknowledged in dissemination of results?</h4>
                                <textarea name="Qv" id="Qv"></textarea>
                                <script>
                                CKEDITOR.replace('Qv');
                                </script>
                            </div>
                            <div class="item">
                                <h5>Does this project require collection of biomaterials?</h5>
                                <div class="form-check">
                                    <input class="form-check-input" onclick="myFunction11()" type="radio" value="Yes" >
                                    <label class="form-check-label" for="">
                                        Yes
                                        </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onclick="myFunction12()" value="No">
                                    <label class="form-check-label" >
                                            No
                                    </label>
                                </div>
                                <!-- Table  -->
                                <div id="req" style="display: none;">
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
                                                <td><input type="text" name="Qw" id=""></td>
                                                <td><input type="text" name="Qx" id=""></td>
                                                <td><input type="text" name="Qy" id=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td><input type="text" name="Qz" id=""></td>
                                                <td><input type="text" name="Qaa" id=""></td>
                                                <td><input type="text" name="Qab" id=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td><input type="text" name="Qac" id=""></td>
                                                <td><input type="text" name="Qad" id=""></td>
                                                <td><input type="text" name="Qae" id=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <script>
                                    function myFunction11() {
                                        document.getElementById("req").style.display = "block";
                                    }
                                    function myFunction12() {
                                        document.getElementById("req").style.display = "none";
                                    }
                                </script>
                            </div>
                            <!--  2nd table -->
                            <div class="item ">
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
                                            <th scope="row"><input type="text" name="Qaf" id=""></th>
                                            <td>Serum</td>
                                            <td><input type="text" name="Qag" id=""></td>
                                            <td><input type="text" name="Qah" id=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="text" name="Qai" id=""></th>
                                            <td>Plasma</td>
                                            <td><input type="text" name="Qaj" id=""></td>
                                            <td><input type="text" name="Qak" id=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="text" name="Qal" id=""></th>
                                            <td>Whole Blood
                                                <td><input type="text" name="Qam" id=""></td>
                                                <td><input type="text" name="Qan" id=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="text" name="Qao" id=""></th>
                                            <td>Feces</td>
                                            <td><input type="text" name="Qap" id=""></td>
                                            <td><input type="text" name="Qaq" id=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input type="text" name="Qar" id=""></th>
                                            <td>Urine</td>
                                            <td><input type="text" name="Qas" id=""></td>
                                            <td><input type="text" name="Qat" id=""></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><input type="text" name="Qau" id=""></th>
                                            <td>Other:</td>
                                            <td><input type="text" name="Qav" id=""></td>
                                            <td><input type="text" name="Qaw" id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="item ">
                                <h4>Methods for lab processing and storage</h4>
                                <textarea name="Qax" id="Qax"></textarea>
                                <script>
                                    CKEDITOR.replace('Qax');
                                </script>
                            </div>
                        </fieldset>
                    </div>
                    <?php }?>
                </form>
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