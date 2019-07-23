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

  <link rel="stylesheet" href="<?php echo base_url();?>assets/select2/dist/css/select2.min.css">

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
        <a href="<?php echo site_url('admin/accueil/accueilclient'); ?>">
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
              
              <form action="<?= site_url('annonce/annonce/add');?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
              <div class="card">
                <div class="row">
                  <div class="col-sm-12">
                    <h3 style="text-align:center;font-weight:bold;font-family: century Gothic;margin-bottom: 2%;text-decoration: underline"><?php echo $agence_numident; ?>: REDIGEZ VOTRE ANNONCE</h3>
                  </div>
                </div>

              <!--   Ajout de quelques apercues du bien -->
                <div class="card-header bg-primary" style="color:white;">Ajoutez des photos</div>

                <div class="card-body">
                  <p>Ajouter au moins une photo pour augmenter vos chances d'être contacté</p>
                  <div class="row">
                    <div class="col-sm-4">
                      <input type="file" class="form-control"  name="apercu1" value="" required="required" />
                    </div>
                    <div class="col-sm-4">
                      <input type="file" class="form-control"  name="apercu2" value="" />
                    </div>
                    <div class="col-sm-4">
                      <input type="file" class="form-control"  name="apercu3" value="" />
                    </div>
                  </div>
                </div>

               <!--  Description du bien en question -->
                <div class="card-header bg-primary" style="color:white;">Décrivez votre bien immobilier</div>
                <div class="card-body">
                  <p>Décrivez votre annonce avec le plus de détails possibles pour lui donner une meilleure visibilité</p>
                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Catégorie</label>
                    <div class="col-sm-9">
                      <select class="form-control select2" name="categ" required="required">
                        <option selected="selected">Terrain</option>
                        <option>Maison</option>
                        <option>Villa</option>
                        <option>Appartement</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type d'offre</label>
                    <div class="col-sm-9">
                      <select class="form-control select2" name="modofr" required="required">
                        <option>Vente</option>
                        <option>Location</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Surface</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="superficie" required="required"/>
                    </div>
                  </div>

                </div>

                  <div class="col-sm-6">

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Responsable</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="resp" required="required"/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Prix</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="prix" name="prix" required="required"/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Unité de surface</label>
                    <div class="col-sm-9">
                      <select class="form-control select2" name="area" required="required">
                        <option>M<sup>2</sup></option>
                        <option>Lot</option>
                        <option>Ha</option>
                      </select>
                    </div>
                  </div>

                  </div>

                  <div class="col-sm-12">

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label form-control-label">Localisation</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" name="localisation" required="required" />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Description détaillée du bien</label>
                      <div class="col-sm-12">
                        <textarea class="form-control" rows="10" name="otr"></textarea>
                      </div>
                    </div>
                  </div>

                </div>

                </div>

                <!-- Les contactes de la personne en charge de la vente/ou location du bien
 -->
                <div class="card-header bg-primary" style="color:white;">Contact</div>
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Propriétaire ou Responsable</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control"  name="propietaire" style="font-size:18px;font-weight:bold;" value="<?php echo $proprietaire; ?>" />

                      <input type="hidden" class="form-control"  name="annonceur" value="<?php echo $proprietaire; ?>" /> 

                       <input type="hidden" class="form-control"  name="agence_id" value="<?php echo $agence_id; ?>" />

                       <input type="hidden" class="form-control"  name="agence_numident" value="<?php echo $agence_numident; ?>" />


                    </div>
                  </div>
                </div>

                <div class="card-footer">
                  <div class="form-group row">
                      <button type="submit" class="btn btn-danger btn-block">SAUVEGARDER ANNONCE</button> 
                  </div>
                </div>
            </div>

            </form>

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