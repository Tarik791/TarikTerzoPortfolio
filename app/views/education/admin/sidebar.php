
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?=ASSETS . THEME?>admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?= $data['user_data']->name?></h5>
                <h5 class="centered"><?= $data['user_data']->email?></h5>

                

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboar</span>
                      </a>
                     
                  </li>
                    <!---products-->
                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "products") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/products" >
                          <i class="fa fa-barcode"></i>
                          <span>products</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?=ROOT?>admin/products">View products</a></li>
                       
                      </ul>
                  </li>

                <!---categories-->
                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "categories") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/categories" >
                          <i class="fa fa-barcode"></i>
                          <span>categories</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="<?=ROOT?>admin/categories">View Categories</a></li>
                        
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "blogs") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/blogs" >
                          <i class="fa fa-barcode"></i>
                          <span>Blog Posts</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "messages") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/messages" >
                          <i class="fa fa-barcode"></i>
                          <span>Messages</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="<?=ROOT?>admin/messages">View Messages</a></li>
                        
                      </ul>
                  </li>

                  <!---orders--->
                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "settings") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/settings" >
                          <i class="fa fa-barcode"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                        <li><a href="<?=ROOT?>admin/settings/slider_images">Slider Images</a></li>
                      </ul>

                      <ul class="sub">
                        <li><a href="<?=ROOT?>admin/settings/socials">Social links / Contacts</a></li>
                      </ul>
                  </li>

                           <!---orders--->
                           <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "users") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/users" >
                          <i class="fa fa-barcode"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                      <li><a  href="<?=ROOT?>admin/users/customers">Customers</a></li>
                          <li><a  href="<?=ROOT?>admin/users/admins">Admins</a></li>

                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a <?= (isset($current_page) && $current_page == "special_skills") ? 'class="active" ':'' ?> href="<?=ROOT?>admin/special_skills" >
                          <i class="fa fa-barcode"></i>
                          <span>Special Skills</span>
                      </a>
                  </li>
        
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->


        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> <?= $data['page_title']. ' - ' . WEBSITE_TITLE ?> </h3>
          	<div class="row mt">
          		<div class="col-lg-12">