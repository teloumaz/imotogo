<!-- Modal -->
  <div class="modal fade" id="creationcompte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLongTitle" style="text-align: center;margin-left: 8%;font-size:24px;font-weight:600;"> CREATION DE COMPTE IMOTOGO</h4>
        </div>

      <div class="modal-body">
        <form class="forms-sample">
          <div class="form-group">
            <a type="button" class="btn btn-lg btn-block btn-danger" href="<?php echo site_url('inscription/inscription');?>?option=particulier">PARTICULIER</a>

          </div>
          <div class="form-group">
            <a type="button" href="<?php echo site_url('inscription/inscription');?>?option=agence" class="btn btn-lg btn-block btn-primary">AGENCE IMMOBILIERE</a>
          </div>
        </form>
      </div>

      </div>
    </div>
  </div>
  <!-- End Modal -->

  <!-- Modal -->
  <div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

      <div class="modal-body content-wrapper d-flex align-items-center auth auth-bg-2 theme-one">

        <div class="col-lg-12">
            <h3 style="text-align: center;">Authentification</h3>
            <form action="<?php echo site_url('admin/accueil/connexion');?>" method="POST">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Nom d'utilisateur" id="pseudo" name="pseudo">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-account-outline mdi-24px"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Mot de passe" id="pass" name="pass">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-lock-outline mdi-24px"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group d-flex justify-content-between">
                <div class="form-check form-check-flat mt-0">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked> Se souvenir de moi
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary submit-btn btn-block"><i class="mdi mdi-login"></i>Se connecter</button>
              </div>
              </form>

        </div>

      </div>

      </div>
    </div>
  </div>
  <!-- End Modal -->



  <!-- Modal -->
  <div class="modal fade" id="apercu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

      <div class="modal-body   bg-warning ">
        <div class="row">
          <div class="col-sm-12 "></div>
        </div>

      </div>

      </div>
    </div>
  </div>
  <!-- End Modal -->
 

  <!-- Modal -->
  <div class="modal fade" id="validannonce" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <form action="<?php echo site_url('annonce/validerannonce') ?>" method="POST" id="accordform" name="accordform">
           <div class="modal-header">
      <h3 class="modal-title">Validation de L'annonce</h3>
      <!-- <button type="button" class="close" data-dismiss="modal">
      <span>&times;</span>
      </button> -->
      </div>

      <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label form-control-label">Votre accord</label>
            <div class="col-sm-12">
             <select class="form-control custom-select" name="accord">
                <option>Votre Accord</option>
                <option>Valider</option>
                <option>Rejeté</option>
              </select>
            </div>
          </div>

        <div class="form-group row">
        <label class="col-sm-12 col-form-label">Si Rejet, Motif ?</label>
        <div class="col-sm-12">
          <textarea class="form-control" rows="4" name="motif" value=""></textarea>
        </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Valider</button>
        <input type="text" name="iden"  id="iden">
      </div>
        </form>
     
      </div>
    </div>
  </div>
  <!-- End Modal -->