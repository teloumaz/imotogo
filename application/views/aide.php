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
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />

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

 <?php $this->load->view('modal/modal.php'); ?>

<body>
  <div class="container-scroller">
  <?php $this->load->view('header.php'); ?>

    <div class="container-fluid page-body-wrapper full-page-wrapper">
       <div class="content-wrapper">
        <div class="row w-100">
          <div class="col-lg-12 mx-auto" style="text-align: justify;">
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="row">
                      <div class="col-sm-12 card-body">
                        <a class="btn btn-md btn-block btn-warning " href="<?php echo site_url('inscription/inscription');?>?option=particulier" style="border-radius:10px;font-weight: bold;">COMPTE PARTICULIER</a>

                        <a href="<?php echo site_url('inscription/inscription');?>?option=agence" class="btn btn-md btn-block btn-danger" style="border-radius:10px;font-weight: bold;">COMPTE AGENCE</a>

                        <a class="btn btn-md btn-block btn-primary" data-target="#connexion" data-toggle="modal" style="border-radius:10px;font-weight: bold;color:white;">CONNEXION</a>
                          
                      </div>
                    </div> 
                  </div>
                  
                  <div class="col-sm-1"></div>

                  <div class="col-sm-6 card">
                    <div class="row">
                      <div class="col-sm-12 card-header bg-inverse-dark" style="font-size:18px;font-weight: bold;">PREMIERE VISITE DE NOTRE SITE ? INSCRIVEZ-VOUS!</div>
                      <div class="col-sm-12 card-body">
                        <p style="font-size:16px;"> Si vous êtes nouveau, créez votre compte maintenant.Vous devez vous inscrire pour pouvoir utiliser toutes les fonctions et services disponibles.</p>
                        <p style="font-size:16px;">Après inscription, vous disposez d'un compte personnel sécurisé et accessible par un mot de passe qui vous donne la possibilité de:</p>
                        <ul style="font-size:16px;">
                          <li>Publier vos annonces</li>
                          <li>Répondre aux annonces</li>
                          <li>Effectuer une demande de visite</li>
                          <li>Et plus... sans aucun frais</li>
                        </ul>
                          
                      </div>
                    </div>  

                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
   
  </div>

   <?php $this->load->view('footer.php'); ?>
  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>