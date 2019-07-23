    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center " style="background: linear-gradient(100deg,#3d7131,#3d7131) !important;">
        <a href="<?php echo site_url('admin/accueil/') ?>">
           <img src="<?php echo base_url();?>assets/images/flag-round-250.png" style="width:100%;height: 40px;margin-top:30%;">
        </a>
           
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left " style="font-weight: bold;">

        </ul> 

        <ul class="navbar-nav navbar-nav-right header-links d-none d-md-flex" >
          <li class="nav-item ">
             <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo site_url('admin/accueil/publication_annonce');?>"  style="font-weight: bold;"><i class="mdi  mdi-bullhorn" ></i>PUBLIER ANNONCE</a>
          </li>

          <li class="nav-item ">
            <a href="" class="nav-link" data-target="#creationcompte" data-toggle="modal">
              <i class="mdi   mdi-pen"></i>M'inscire
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link" data-target="#connexion" data-toggle="modal">
              <i class="mdi  mdi-lock-outline"></i>Connexion</a>
          </li>
          
        </ul>

      </div>
    </nav>