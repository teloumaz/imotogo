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

</head>

<?php $this->load->view('modal/modal.php');?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">
        <a href="<?php echo site_url('admin/accueil/accueilclient') ?>">
           <img src="<?php echo base_url();?>assets/images/flag-round-250.png" style="width:35%;height: 35px;margin-top:5%;">
        </a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left ">

        </ul>

        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-bell-ring-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>

          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-sm rounded-circle" src="<?php echo base_url()?>assets/images/user.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item mt-2">
                Pseudo: &nbsp;<span style="color:red;"><?php echo $pseudo ;?></span> 
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
          <div class="row">
            <div class="col-sm-6 grid-margin">
              <div class="card" style="border-radius: 10px;">
                <div class="card-header bg-primary" style="color:white;border-radius: 10px 10px 0px 0px;"><h4>PUBLIER GRATUITEMENT DES ANNONCES</h4></div>
                <div class="card-body">
                  <h5>Créez votre première annonce et faites de bonnes affaires !</h5>
                </div>
                <div class="card-footer" style=""></div>
              </div>
            </div>

            <div class="col-sm-6 grid-margin">
              <div class="card">
                <div class="card-header bg-primary" style="color:white;border-radius: 10px 10px 0px 0px;"><h4>EFFECTUEZ UNE DEMANDE DE VISITE D'UN BIEN</h4></div>
                <div class="card-body">
                   <h6>Contactez directement l'agence démarcheur du bien qui vous intérresse</h6>
                </div>
                <div class="card-footer" style=""></div>
              </div>
            </div>
          </div>

          <!-- Modal pour afficher les détailles d'une annonce  -->
          <div id="pageloader1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" aria-modal="true">
                <div class="modal-dialog  modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-dark offset-1 col-sm-10" >
                      <h2 style="color:white;text-decoration: underline;text-align:center;">FICHE TECHNIQUE DE VENTE/LOCATION D'UN IMMOBILIER SUR IMOTOGO</h2>
                    </div>

                    <div class="modal-body" id="pageloader">

                    </div>

                  </div>
                </div>
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
<?php $this->load->view('footer'); ?>

  <!-- plugins:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/misc.js"></script>
  <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
  <script type="text/javascript">
    /*function detaille(id){
      alert ('OK '+id);
    var mavariable1=id;
      alert(mavariable1);
    }*/
    $(function(){
      var host = window.location.hostname;
      $('.details').click(function(){
        var id = $(this).attr('id');
        var p = {};
        p['annonce_id']    = id;
        $('#pageloader').load('http://'+host+'/imotogo/annonce/annonce/detail', p);
      });
    })
</script>
  <!-- End custom js for this page-->
</body>

</html>