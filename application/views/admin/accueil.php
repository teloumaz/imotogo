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

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/wowslider/engine1/style.css" />
  <script type="text/javascript" src="<?php echo base_url();?>assets/wowslider/engine1/jquery.js"></script>

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

    <script type="text/javascript" >
  
         
  </script>

</head>

  <?php $this->load->view('modal/modal.php'); ?>

<body>
  <div class="container-scroller">
    <?php $this->load->view('header.php'); ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      <div class="main-panel" style="width:100%;">
        <div class="content-wrapper">

          <div class="row purchace-popup">
            <div class="col-lg-12">
              <span class="d-block d-md-flex align-items-center">

                 <a class="btn btn-danger btn-block btn-xs" href="<?php echo site_url('admin/accueil/publication_annonce');?>" style="border-radius: 10px;font-weight:bold;">PUBLIER ANNONCE</a>

                  <a class="btn btn-block btn-xs btn-warning" href="#" data-target="#creationcompte" data-toggle="modal"  style="border-radius: 10px;font-weiht:bold;">CREER UN COMPTE</a>  

                  <a class="btn btn-primary btn-block btn-xs" href="#" data-target="#connexion" data-toggle="modal" style="border-radius: 10px;font-weight:bold;">CONNEXION</a>
              </span>
            </div>
          </div>

          <div class="row-fluid">
            <div class="col-lg-12 grid-margin">
              <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
              <div id="wowslider-container1">
              <div class="ws_images"><ul>
                  <li><img src="<?php echo base_url();?>assets/wowslider/data1/images/home_big.png" alt="home_big" id="wows1_0"/></li>
                  <li><img src="<?php echo base_url();?>assets/wowslider/data1/images/im1.jpg" alt="im1" id="wows1_1"/></li>
                  <li><img src="<?php echo base_url();?>assets/wowslider/data1/images/immobilier.jpg" alt="bootstrap image slider" id="wows1_2"/></li>
                  <li><img src="<?php echo base_url();?>assets/wowslider/data1/images/imotogo.jpg" alt="imotogo"  id="wows1_3"/></li>
                </ul></div>
              <div class="ws_shadow"></div>
              </div>  
              <script type="text/javascript" src="<?php echo base_url();?>assets/wowslider/engine1/wowslider.js"></script>
              <script type="text/javascript" src="<?php echo base_url();?>assets/wowslider/engine1/script.js"></script>
              <!-- End WOWSlider.com BODY section -->


            </div>
          </div>
          
          <div class="row purchace-popup">
            <div class="col-lg-12 grid-margin">
              <div class="" style="font-size:25px;text-align: center;">
                <div class="">
                  <h5 style="font-weight: bold;"><label  id="LblClignotant">Bienvenue sur la plateforme Togolaise d'opération immobilière!</label></h5>
                  <div class="fluid-container">

                    <div class="row ticket-card mt-3">
                      <div class="ticket-details col-md-12">

                        <p class="text-gray" style="font-size:12px;color: black;text-align: center;padding-left: 2%;padding-right:2%;">Grâce à un réseau des plus grandes agences immobilières au Togo que réunit la plateforme imotogo, vous disposez d'annonces immobilières à jour dans un dynamisme transactionnel. Sur imotogo, vous pourrez consulter un tas de propriétés sur le marché sans devoir vous déplacer. C'est aussi éviter de suivre des agents inconnus dans des endroits peu recommandables avec tous les risques que cela comporte. 
                        </p>

                      </div>
          
                    </div>

                  </div>
                </div>
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

          <div class="row-fluid">
            <div class="col-lg-12 grid-margin">
              <div class="card" style="background-color: #f2f8f9;">
                <div class="card-header bg-dark" style="color: white;font-weight:bold;">
                  <i class="mdi mdi-view-list"> </i>LES IMMOBILIERS SUR LE MARCHE
                </div>
                <div class="" style="font-size:13px;">
                     <table style="margin-top: 5px;">
                     <?php $td=1;
                    
                      foreach ($result as $row) 
                      {
                       if ($td<=4) 
                       { 

                        if ($td%2!=0) {
                           echo '<tr><td style="width:50%;"><div class="row"><div class="col-sm-4"><img src="'.base_url('assets/apercues_imo/').$row->apercu1.'" style="width:100%;height:125px;border-radius:2px;"></div> <div class="col-sm-8">'.'<span style="font-size:13px;">Mode offre:  </span><span style="font-weight:bold;font-size:13px;color:red;">'.$row->imo_modeofre.'</span><br>'.'<span style="font-size:13px;">Prix:  </span><span style="font-weight:bold;font-size:13px;color:red;">'.$row->imo_prixvente.' FCFA</span><br><span style="font-size:13px;">Localisation:  </span><span style="font-size:13px;font-weight:bold;">'.$row->localisation.'<div><br><a class="details btn btn-info btn-xs btn-rounded"  id="'.$row->annonce_id.'" style="color:white;" data-target="#pageloader1" data-toggle="modal">Plus de détails</a></div></div>   </td>';
                           ?>


                           <?php
                         } 
                         else{
                          echo '<td style="width:50%;padding-left:20px;"><div class="row"><div class="col-sm-4"><img src="'.base_url('assets/apercues_imo/').$row->apercu1.'" style="width:100%;height:125px;border-radius:2px;"></div> <div class="col-sm-8">'.'<span style="font-size:13px;">Mode offre:  </span><span style="font-weight:bold;font-size:13px;color:red;">'.$row->imo_modeofre.'</span><br>'.'<span style="font-size:13px;">Prix:  </span><span style="font-weight:bold;font-size:13px;color:red;">'.$row->imo_prixvente.' FCFA</span><br><span style="font-size:13px;">Localisation:  </span><span style="font-weight:bold;font-size:13px;">'.$row->localisation.' <div><br><a class="details btn btn-info btn-xs btn-rounded" id="'.$row->annonce_id.'" style="color:white;" data-target="#pageloader1" data-toggle="modal"  >Plus de détails</a> </div></div></div>  </td> <tr style="height:30px;"></tr>';
                         }
                         $td++;
                      }
                    }

                    ?>

                  </table>
                </div>
                <div class="card-footer bg-dark" style="color: white;text-align: center;font-size:11px;">
                    <marquee behavior="alternate" width="100%"> >> L'application gratuite pour vendre et accéder aux meilleures affaires près de chez vous et partout en Afrique | Créez votre première annonce et faites de bonnes affaires! << </marquee>
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

<?php $this->load->view('footer');?>

<script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
<script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
<script src="<?php echo base_url();?>assets/js/misc.js"></script>
<script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-3.js"></script>

<!-- Text clignotant: Bienvenue -->
<script type="text/javascript"> 
var signe = -1; 
var clignotementFading = function(){ 
   var obj = document.getElementById('LblClignotant'); 
   if (obj.style.opacity >= 0.96){ 
      signe = -1; 
   } 
   if (obj.style.opacity <= 0.08){ 
      signe = 1; 
   } 
   obj.style.opacity = (obj.style.opacity * 1) + (signe * 0.08); 
}; 

// mise en place de l appel de la fonction toutes les 0.085 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotementFading, 85 ); 
</script>

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

</body>

</html>