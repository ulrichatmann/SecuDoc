<?php

?>
 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Gérer les abonnements </span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('AdminController/nouvelAbonnement')?>"><i class='fa fa-link'></i> <span>Nouvel abonnement</span></a></li>
                <li><a href="<?php echo site_url('AdminController/consulterAbonnements')?>"><i class='fa fa-link'></i> <span>Consulter abonnement</span></a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Gérer les entreprises </span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li ><a href="<?php echo site_url('AdminController/consulterEntreprises')?>"><i class='fa fa-link'></i> <span>Consulter les entreprises</span></a></li>
            <li><a href="<?php echo site_url('AdminController/creerCompteEntreprise')?>"><i class='fa fa-link'></i> <span>Créer compte entreprise</span></a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

    


