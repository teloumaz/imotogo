<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>imotogo</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/iconfonts/font-awesome/css/font-awesome.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />

  <script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

    <script type="text/javascript">
              var titre = "imotogo | plateforme Togolaise d'opération immobilière |";
              function bougerTitre() {
               titre = titre.substring(1, titre.length) + titre.substring(0, 1);
               document.title = titre;
               setTimeout("bougerTitre()", 600);
               }
               bougerTitre();
    </script>

    <style type="text/css">
      input,select,textarea{
        background-color: #E6E5DE !important;
      }
      
    </style>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">
           <img src="<?php echo base_url();?>assets/images/flag-round-250.png" style="width:35%;height: 35px;margin-top:5%;">
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left ">
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">1</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Vous avez des messages
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>

            </div>
          </li>

          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-sm rounded-circle" src="<?php echo base_url()?>assets/images/user.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item mt-2">
                Pseudo: &nbsp;<span style="color:red;"><?php echo $_SESSION['pseudo'] ;?></span> 
              </a>
              <a class="dropdown-item mt-2">
                Gérer compte
              </a>
              <a class="dropdown-item" href="<?php echo site_url('admin/accueil/deconnexion'); ?>">
                Déconnexion
              </a>
            </div>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>

      </div>
    </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

        <!-- partial:partials/_sidebar.html -->
     <?php 
      if ($_SESSION['profil']=='particulier') {
        $this->load->view('menuparticulier.php'); 
      }
      else{
        $this->load->view('menuuser.php'); 
      }
     
     ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
             <div class="col-12 grid-margin">
              <form action="<?php echo site_url('annonce/annonce/valider') ?>" method="POST">
                <div class="card">
                  <div class="card-header bg-primary" style="text-align:center;color:white;font-weight:bold;">
                      VALIDATION DE L'ANNONCE CONCERNANT L'IMMOBILIER <?php echo '  <span style="color:yellow;">  '. $ident.'</span>'; ?>
                  </div>

                  <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label form-control-label">Votre accord</label>
                  <div class="col-sm-12">
                    <select class="form-control custom-select" name="accord" id="accord" onchange="if(document.getElementById('accord').value=='Valider'){document.getElementById('motif').disabled='true';}else{document.getElementById('motif').disabled='';}" required="required">
                      <option></option>
                      <option>Rejeter</option>
                      <option>Valider</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Si Rejet, Motif ?</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" rows="8" id="motif" name="motif" value=""></textarea>
                    </div>
                  </div>
                      
                      <input type="hidden" name="ident" id="ident" value="<?php echo $ident; ?>">


                  </div>

                  <div class="card-footer"> 
                    <div class="form-group row">
                      <button type="submit" class="btn btn-danger btn-block" style="font-weight: bold;">  CONFIRMER PUBLICATION DE L'ANNONCE</button> 
                    </div>
                  </div>
      
                </div>
              </form>
            </div>
                            

        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  </div>
  <!-- partial:partials/_footer.html -->
  <?php $this->load->view('footer.php');?>
  
  <!-- partial -->

  <!-- plugins:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>