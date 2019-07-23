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

  <!-- Modal -->
  <div class="modal fade" id="creationcompte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle" style="text-align: center;margin-left: 8%;font-size:24px;font-weight:600;"> CREATION DE COMPTE IMOTOGO</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <div class="modal-body">
        <form class="forms-sample">
          <div class="form-group">
            <a type="button" class="btn btn-lg btn-xs btn-danger" href="<?php echo site_url('inscription/inscription');?>?option=particulier">PARTICULIER</a>

          </div>
          <div class="form-group">
            <a type="button" href="<?php echo site_url('inscription/inscription');?>?option=agence" class="btn btn-lg btn-block btn-primary">AGENCE IMMOBILIERE</a>
          </div>
        </form>
      </div>

        <div class="modal-footer" >
          <div class="text-block" >
            <span class="text-small font-weight-semibold">Vous avez déja un compte imotogo ?</span>
            <a href="<?php echo site_url('admin/connexion');?>" class="text-black text-small" style="color:#308ee0;">Connexion</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

      <div class="modal-body content-wrapper d-flex align-items-center auth auth-bg-2 theme-one">

        <div class="col-lg-12">
            <h3 style="text-align: center;">CONNECTEZ-VOUS</h3>
            <form action="#">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Nom d\'utilisateur">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-account-outline mdi-18px"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Mot de passe">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-lock-outline mdi-18px"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary submit-btn btn-block">Connexion</button>
              </div>
              <div class="form-group d-flex justify-content-between">
                <div class="form-check form-check-flat mt-0">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Se souvenir de moi
                  </label>
                </div>
                <a href="#" class="text-small forgot-password text-black">Mot de passe oublier</a>
              </div>

              <div class="text-block text-center my-3">
                <span class="text-small font-weight-semibold">Vous êtes nouvau ?</span>
                <a href="<?php echo site_url('admin/accueil');?>" class="text-black text-small">Créer un compte</a>
              </div>
            </form>

        </div>

      </div>

      </div>
    </div>
  </div>
  <!-- End Modal -->


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
              <span class="count">1</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
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
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
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
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
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
             <div class="col-12 grid-margin">
              <form>
                <div class="card">

                  <div class="card-header bg-primary" style="text-align:center;color:white;font-weight:bold;">
                    EFFECTUER UNE DEMANDE DE VISITE D'UN IMMOBILIER
                  </div>

                  <div class="card-body">
                    <div class="row">
                       <div class="col-sm-6">

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label form-control-label">Date Voulue</label>
                            <div class="col-sm-12">
                              <input type="date" class="form-control" name="date"/>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-12 col-form-label form-control-label">Référence de l'immobilier</label>
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="imoref"/>
                            </div>
                          </div>

                       </div>

                       <div class="col-sm-6">
                         <div class="form-group row">
                            <label class="col-sm-12 col-form-label form-control-label">Heure Voulue</label>
                            <div class="col-sm-12">
                              <input type="time" class="form-control" name="heure"/>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-12 col-form-label form-control-label">Mode Paiement</label>
                            <div class="col-sm-12">
                              <select class="form-control" name="paiement" required="required">
                                <option selected="selected">Terrain</option>
                                <option>Flooz</option>
                                <option>Tmoney</option>
                                <option>Virement bancaire</option>
                              </select>
                            </div>
                        </div>

                       </div>


                    </div>

                  </div>

                  <div class="card-footer">
                    <div class="form-group row">
                      <button type="submit" class="btn btn-danger btn-block" style="font-weight: bold;"> <i class="mdi  mdi-content-save"></i>SAUVEGARGER ET ENVOYER LA DEMANDE</button> 
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
  <script src="<?php echo base_url();?>assets/js/jquery-3.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>

</html>