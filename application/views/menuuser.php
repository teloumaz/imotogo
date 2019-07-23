 <nav class="sidebar sidebar-offcanvas  " id="sidebar" style="">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-bullhorn"></i>
              <span class="menu-title">Annonce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" active>
                  <a class="nav-link" href="<?php echo site_url('annonce/annonce/choixagence');?>">Créer Annonce</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('annonce/annonce/mesannonces');?>">Mes annonces</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('annonce/annonce/annonceavalider');?>">Annonces à valider</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('annonce/annonce/annoncepublier');?>">Annonces publiées</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#visite" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi  mdi-bell-outline"></i>
              <span class="menu-title">Demande de visite</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="visite">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('visite/visite/newvisite');?>">Créer demande</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('visite/visite/visiteavalider'); ?>">Visites à valider</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Visites programées</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Vente</span>
            </a>
          </li>

        <!--   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#administration" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-settings"></i>
              <span class="menu-title">Administration</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="administration">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Enrégistrer immobilier</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Enrégistrer propriétaire</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Enrégistrer Acheteur</a>
                </li>
              </ul>
            </div>
          </li> -->

        </ul>

      </nav>