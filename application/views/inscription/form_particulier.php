 <div class="container-scroller">

    <br><br>
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-5 mx-auto">
            <form class="forms-sample" action="<?php echo site_url('inscription/inscription/add'); ?>" method="POST">
            <div class="card">
              <div class="card-header bg-primary" style="color: white;text-align: center !important;">
                CREATION D'UN COMPTE PARTICULIER
              </div>
              <div class="card-body">
                

                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" required="required">
                </div>

                <div class="form-group">
                  <label for="prenom">Prénom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" required="required">
                </div>

                <div class="form-group">
                  <label for="genre">Genre</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label class="radio-inline">
                  <input type="radio" name="genre" id="genre" value="M">
                  Masculin
                  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label class="radio-inline">
                  <input type="radio" name="genre" id="genre" value="F">
                  Féminin
                  </label>
                </div>

                <div class="form-group">
                  <label for="adr">Adresse Complète</label>
                  <textarea rows="3" class="form-control" id="adr" name="adr"  required="required"></textarea>
                </div>

                <div class="form-group">
                  <label for="datnais">Date Naissance</label>
                  <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="datnais" name="datnais" value="<?php echo date('Y-M-D');?>" required="required">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" required="required">
                </div>

                <div class="form-group">
                  <label for="pseudo">Nom d'utilisateur</label>
                  <input type="text" class="form-control" id="pseudo" name="pseudo" required="required">
                </div>


                <div class="form-group">
                  <label for="pass">Mot de passe</label>
                  <input type="password" class="form-control" id="pass" name="pass" required="required">
                </div>

                
                <input type="hidden" class="form-control" id="op" name="op" value="particulier">
              
              </div>

              <div class="card-footer" >
                <button type="submit" class="btn btn-danger btn-block">ENREGISTRER</button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>