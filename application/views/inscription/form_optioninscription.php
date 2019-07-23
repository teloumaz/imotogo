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
                          <button type="button" class="btn btn-lg btn-block btn-danger">PARTICULIER</button>
                        </div>
                        <div class="form-group">
                          <a type="button" href="<?php echo site_url('inscription/inscription');?>" class="btn btn-lg btn-block btn-primary">AGENCE IMMOBILIERE</a>
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