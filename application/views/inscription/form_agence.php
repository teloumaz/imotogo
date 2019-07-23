            <div class="card">
              <div class="card-header bg-primary" style="color: white;text-align: center !important;">
                CREATION D'UN COMPTE AGENCE
              </div>
              <div class="card-body">
                
                <form action="<?php echo site_url('inscription/inscription/add'); ?>" method="POST">
                

                <div class="form-group">
                  <label for="numident">Numéro Identification</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="numident" name="numident" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="raisonsoc">Raison Sociale</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="raisonsoc" name="raisonsoc" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label for="adr">Adresse de localisation</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="adr" name="adr" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="pseudo">Nom d'utilisateur</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="pseudo" name="pseudo" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Mot de passe</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required="required">
                  </div>
                </div>
                
                <input type="hidden" class="form-control" id="op" name="op" value="agence" required="required">
              </div>

              <div class="card-footer" >
                <button type="submit" class="btn btn-danger mr-2 btn-block">ENREGISTRER</button>
              </div>
              </form>

            </div>