﻿
<?php 
session_start();

  
?>
<!DOCTYPE html>

<html lang="en">

<head>
<style>
img {
  border-radius: 50%;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Welcome User!</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Search</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Lab</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            
            <li>
              <a href="labreports.php">Lab Reports</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Consult</span>
          </a>
         <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="appointmentreq.php">View Appointment Requests</a>
            </li>
            <li>
              <a href="askreply.php">Reply to Questions</a>
            </li>
            <li>
             
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
	  
	  
	  
	 <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div  align="center" class="card-header"><h2>Update Your Profile</div>
      <div class="card-body">

	  <br>
	  <br>
	  <div align="center">
	  <h1>  Profile</h1>
	  
	  <div style="position: relative; align:center;  ">
	 

<img src="../img.png" alt="Avatar" style="width:200px">

       
       <form method="post" action="editprofileprocess1.php" enctype="multipart/form-data" >
        Select image to upload:<br><br>
        <input type="file" name="image"/><br><br>

		
	 <class="bg-dark">
  
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
               <label for="ln">First name</label>
                <input class="form-control" id="fn" type="text" name="fn" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="ln">Last name</label>
                <input class="form-control" id="ln" type="text" name="ln" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
        
          <div class="form-group">
		    <div class="form-row">
              <div class="col-md-6">
            <label for="email">Email address</label>
            <input class="form-control" id="email" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>

		    <div class="col-md-6">
            <label for="cinfo">Contact Number</label>
            <input class="form-control" id="cn" type="tel" name="cn" aria-describedby="emailHelp" placeholder="Enter phone number">
          </div>
		   </div>
          </div>

           <div class="form-group">
		     <div class="form-row">
              <div class="col-md-6">
            <label for="date">DOB</label>
            <input class="form-control" id="date" type="date" name="date" aria-describedby="emailHelp" placeholder="DOB">
          </div>
		  
		 
		   <div class="col-md-6">
			  
            <label for="uname">UserName</label>
            <input class="form-control" id="uname" type="text" name="uname" aria-describedby="emailHelp" placeholder="UserName">
          </div>
		  </div>
          </div>
		  <BR>
		  
		    <div class="form-group">
			<div class="form-row">
              <div class="col-md-6">
          Gender:
      <div class="radio">
  <input type="radio" value="male" name="gender">Male
</div>

<div class="radio">
  <label><input type="radio" value="female" name="gender">Female</label>
</div><br>
</div>

			          <div class="col-md-6">
			    <label for="speciality">Choose Your Speciality</label><br>
<select name="speciality" id="speciality" required="">
<option value="">Choose Speciality</option>
    
   <option value="Allergy and immunology"> Allergy and immunology </option>
   <option value="Anesthesiology"> Anesthesiology </option>
   <option value="Cardiology (Disease)"> Cardiology (Disease) </option>
    <option value="Cardiology (Interventional)"> Cardiology (Interventional) </option>
	<option value="Child and Adolescent Psychiatry"> Child and Adolescent Psychiatry </option>
    <option value="Chiropractic"> Chiropractic </option>
    <option value="Clinical Cardiac Electrophysiology"> Clinical Cardiac Electrophysiology </option>
    <option value="Colon and Rectal Surgery"> Colon and Rectal Surgery </option>
    <option value="Diagnostic Radiology"> Diagnostic Radiology </option>
    <option value="Dermatology"> Dermatology </option>
    <option value="Emergency Medicine"> Emergency Medicine </option>
    <option value="Endocrinology"> Endocrinology </option>
    <option value="Facial Plastic Surgery"> Facial Plastic Surgery </option>
    <option value="Family Medicine"> Family Medicine </option>
    <option value="Family Medicine"> Family Medicine </option>
	<option value="Gastroenterology"> Gastroenterology </option>
    <option value="General Practice"> General Practice </option>
    <option value="General Surgery"> General Surgery </option>
    <option value="Geriatric Medicine"> Geriatric Medicine </option>
    <option value="Hematology"> Hematology </option>
    <option value="Hepatology"> Hepatology </option>
    <option value="Hospitalist"> Hospitalist </option>    
    <option value="Infectious Disease"> Infectious Disease </option>	
    <option value="Internal Medicine"> Internal Medicine </option>
    <option value="Medical Genetics"> Medical Genetics </option>
    <option value="Naturopathy"> Naturopathy </option>
    <option value="Nephrology"> Nephrology </option>
    <option value="Neurology"> Neurology </option>
    <option value="Neurosurgeon"> Neurosurgeon </option>
    <option value="Nuclear Medicine"> Nuclear Medicine </option>
    <option value="Nutritionist"> Nutritionist </option>
    <option value="Obstetrics / Gynecology (OBGYN)"> Obstetrics / Gynecology (OBGYN) </option>
    <option value="Occupational Medicine"> Occupational Medicine </option>
    <option value="Ophthalmology"> Ophthalmology </option>
    <option value="Optometry"> Optometry </option>
    <option value="Oncology"> Oncology </option>
    <option value="Orthopedic Surgery"> Orthopedic Surgery </option>
    <option value="Osteopathic Medicine"> Osteopathic Medicine </option>
    <option value="Osteopathic Medicine"> Osteopathic Medicine </option>
    <option value="Otolaryngology / ENT"> Otolaryngology / ENT </option>
    <option value="Pain Medicine"> Pain Medicine </option>
    <option value="Pathology (Anatomic/Clinical)"> Pathology (Anatomic/Clinical) </option>
    <option value="Pediatrics"> Pediatrics </option>
    <option value="Physical Medicine and Rehabilitation"> Physical Medicine and Rehabilitation </option>
    <option value="Plastic and Reconstructive Surgery"> Plastic and Reconstructive Surgery </option>
    <option value="Podiatry"> Podiatry </option>
    <option value="Primary Care"> Primary Care </option>
    <option value="Psychiatry"> Psychiatry </option>
    <option value="Psychology"> Psychology </option>
    <option value="Pulmonary Disease"> Pulmonary Disease </option>
    <option value="Radiology"> Radiology </option>
    <option value="Rheumatology"> Rheumatology </option>
    <option value="Thoracic Surgery"> Thoracic Surgery </option>
    <option value="Transplant Surgery"> Transplant Surgery </option>
    



     </select>

			</div>		
			 </div>
          </div>
		  <BR>

           

          <div class="form-group">
            <div class="form-row">
             

                <div class="col-md-12">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" cols="10" rows="10"></textarea>
              </div>
			  </div>
			  </div>
			  <br>
         
          <input class="btn btn-primary btn-block" type="submit" value="Update Profile">
        </form>
    </form>
	</div>  
      
	 </div>
    </div>
	
	
	
    </div>
    <!-- /.container-fluid--><BR><BR>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
  
</body>

</html>
