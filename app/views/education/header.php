<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page_title']?> | Education </title>

    <!--FONT STYLE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/624f7eea21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?=ASSETS . THEME ?>admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS . THEME ?>admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=ASSETS . THEME ?>admin/lineicons/style.css">  
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	 
    <link href="<?=ASSETS . THEME ?>css/templatemo-xtra-blog.css" rel="stylesheet">  

    
    <!-- Custom styles for this template -->
    <link href="<?=ASSETS . THEME ?>admin/css/style.css" rel="stylesheet">
    <link href="<?=ASSETS . THEME ?>admin/css/style-responsive.css" rel="stylesheet">

    

    <!---ICONSCOUT-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/style.css">
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/contact.css">
    <link rel="stylesheet" href="<?= ASSETS . THEME ?>css/login.css">
    <!---SWIPER JS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
 

</head>
<body>
    <!---=========NAVBAR=========-->
    <nav>
        <div class="container nav__container">
            <a href="<?=ROOT?>"><h4>TARIK TERZO</h4></a>
            <?php if(isset($data['user_data'])): ?>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"><?=/*$_SESSION['user_url']*/ $data['user_data']->name?></i></a></li>
            <?php endif; ?>

            <ul class="nav__menu">
                <?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
                <li><a  href="<?=ROOT?>profile" class="<?= $page_title == "Profile" ? "active" : ""; ?>">Profile</a></li>
                <?php endif; ?>
                <li><a class="lang" key="home" href="<?=ROOT?>index" class="<?= $page_title == "Home" ? "active" : ""; ?>">Home</a></li>
                <li><a class="lang" key="about" href="<?=ROOT?>about" class="<?= $page_title == "About" ? "active" : ""; ?>">About</a></li>
                <li><a class="lang" key="projects" href="<?=ROOT?>shop" class="<?= $page_title == "Projects" ? "active" : ""; ?>">Projects</a></li>
                <li><a class="lang" key="blog" href="<?=ROOT?>blog" class="<?= $page_title == "Blog" ? "active" : ""; ?>">Blog</a></li>
                <li><a class="lang" key="contact" href="<?=ROOT?>contact" class="<?= $page_title == "Contact" ? "active" : ""; ?>">Contact</a></li>

              <?php if(isset($show_search)): ?>
              <form method="get">
                  <div class="search_box pull-right">
                    <input name="find" type="text" placeholder="Search project">
                  </div>
              </form>
              <?php endif; ?>

                <?php if(isset($data['user_data'])): ?>
                <li><a class="lang" key="logout" href="<?=ROOT?>logout">Logout</a></li>

                <?php else: ?>
                
                <li><a class="lang" key="login" href="<?=ROOT?>login">Login</a></li>

                

                <?php endif; ?>
          
                  <li><a style="cursor: pointer;" class="translate"  id="en">English</a><br>
                  <a style="cursor:pointer;" class="translate"  id="bs">Bosnian</a>
                </li>
                 

          

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

            
        </div>

        

    </nav>
    <!--////END OF NAVBAR======-->

    <!--========HEADER=========-->
    <header aria-label="Newest Photos">
      <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
        

        <ul data-slides>
        <li class="slide" data-active>
        <div class="container header__container">
            <div class="header__left">
                <h1 class="lang" key="slideh1">Grow your skills to advance your career path</h1>
                <p class="lang" key="slidep">It's me, Tarik! Known as non-award winning developer from Sarajevo, Bosnia and Herzegovina. But hey! No body cares about that!</p>
                <a href="<?=ROOT?>courses" class="btn btn-primary lang" key="getstarted">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="<?= ASSETS . THEME ?>/images/header.svg" alt="">
                </div>
            </div>
            </li>
            <li class="slide">

            <div class="container header__container">
            <div class="header__left">
                <h1 class="lang" key="slideh2">Digital Designer and Web Developer Based in Somewhere</h1>
                <p class="lang" key="slidep2">I am a passionate, friendly, dedicated SEO Specialist. With over 3 years of experience I created original projects and campaigns inside and outside internet.</p>
                <a href="<?=ROOT?>courses" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="<?= ASSETS . THEME ?>/images/education.svg" alt="">
                </div>
            </div>
            </li>
            <li class="slide">

            <div class="container header__container">
            <div class="header__left">
                <h1 class="lang" key="slideh3">Hello, I'm Junio Web Developer / PHP</h1>
                <p class="lang" key="slidep3">I highly motivated person whose attention is most attracted by technology. I started learning two years ago. i started with the basics of information Systems. I know how to work on windows and linux. I also made a templates in HTML5 and stylization with CSS. The database I use are SQL. I am mostly dedicated to the PHP programming language. I know the bascis of the JavaScript programming language. </p>
                <a href="<?=ROOT?>courses" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="<?= ASSETS . THEME ?>/images/graduation.svg" alt="">
                </div>
            </div>
          </div>
          </li>
        </ul>
        </div>

    </header>

    <!--=======END OF HEADER=======-->
<style>
    .product-image{
        cursor: pointer;
        transition: all 1s ease;
    }

    .product-image:hover{
        transform: scale(1.5);
    }

.active{
  color: #a2facf;
  
}



 
.product-card{
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  width: 400px;
  background: #6c63ff;
  padding: 40px;
  margin: 60px;
  text-transform: uppercase;
  border-radius: 20px;
}
.product-card h1{
  font-size: 22px;
  margin-bottom: 4px;
}
.product-card p{
  font-size: 13px;
  color: #bbb;
}
.product-pic{
  width: 100%;
  height: 100px;
  background-size: cover;
  background-position: center;
  transition: .6s linear;
}
.product-colors{
  margin-bottom: 60px;
  display: flex;
  justify-content: center;
}
 
.product-colors span{
  width: 14px;
  height: 14px;
  margin: 0 10px;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
}
.blue{
  background: #7ed6df;
}
.green{
  background: #badc58;
}
.yellow{
  background: #f9ca24;
}
.rose{
  background: #ff7979;
}
 
.product-colors .active:after{
  content: "";
  width: 22px;
  height: 22px;
  border: 2px solid #8888;
  position: absolute;
  border-radius: 50%;
  box-sizing: border-box;
  left: -4px;
  top: -4px;
}
.product-info{
  display: flex;
  align-items: center;
}
.product-price{
  color: #7ed6df;
  font-size: 26px;
}
.product-button{
  margin-left: auto;
  color: #7ed6df;
  text-decoration: none;
  border: 2px solid;
  padding: 8px 24px;
  border-radius: 20px;
  transition: .4s linear;
}
 
.product-button:hover{
  transform: scale(1.06);
}

.product-details-image{
    border-radius: 4px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
}






* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: transparent;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


/* Pagination links */
.pagination a {
  color: white;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  margin: 6px;
}

/* Style the active/current link */
.pagination a.active {
  background-color: #2e3267;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #6c63ff;}




.slide{
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: 200ms opacity ease-in-out;
  transition-delay: 100ms;
}

.slide > img{
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}


.slide[data-active]{
  opacity: 1;
  z-index: 1;
  transition-delay: 0ms;

}

.carousel-button{
  position: absolute;
  z-index: 2;
  font-size: 4em;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, .5);
  cursor: pointer;
  border-radius: .25rem;
  padding: 0 .5rem;
  background-color: rgba(0, 0, 0, .1);
}

.carousel-button:hover, .carousel-button:focus{
  color: white;
  background-color: rgba(0, 0, 0, .2);
}

.carousel-button:focus{
  outline: 1px solid black;
}

.carousel-button.prev{
  left: 1rem;
}

.carousel-button.next{
  right: 1rem;
}











</style>