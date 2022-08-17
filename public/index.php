<?php 
session_start();


$path = $_SERVER['REQUEST_SCHEME'] . "://". $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$path = str_replace("index.php", "", $path);

define('ROOT', $path);
define('ASSETS', $path . "assets/");

include "../app/init.php";



$app = new App();

?>


<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REsponsve Multipage Education Website Using HTML, CSS and JavaScript</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="assets/css/style.css">



    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><h4>EGATOR</h4></a>
            <ul class="nav__menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, aspernatur temporibus sunt, id tempore deleniti, similique repellendus doloremque earum ea repellat quasi quia magni ex vitae maxime inventore? Quam, rem?</p>
                <a href="courses.html" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="assets/images/header.svg" alt="">
                </div>
            </div>
        </div>
    </header>

 =======END OF HEADER=======


    ===========CATEGORIES=========
    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">

                <h1>Categories</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga placeat, in illum id incidunt nostrum quaerat optio aperiam, ipsam architecto laboriosam beatae eius harum natus alias. Repellat temporibus voluptatibus blanditiis.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="categories__right">
                <article class="category">
                   <span class="category__icon">
                        <i class="uil uil-bitcoin-circle"></i>
                   </span> 
                   <h5>Blockchain</h5>
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                </article>
                <article class="category">
                    <span class="category__icon">
                         <i class="uil uil-bitcoin-circle"></i>
                    </span> 
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                 </article>
                 <article class="category">
                    <span class="category__icon">
                         <i class="uil uil-bitcoin-circle"></i>
                    </span> 
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                 </article>
                 <article class="category">
                    <span class="category__icon">
                         <i class="uil uil-bitcoin-circle"></i>
                    </span> 
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                 </article>
                 <article class="category">
                    <span class="category__icon">
                         <i class="uil uil-bitcoin-circle"></i>
                    </span> 
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                 </article>
                 <article class="category">
                    <span class="category__icon">
                         <i class="uil uil-bitcoin-circle"></i>
                    </span> 
                    <h5>Blockchain</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quasi.</p>
                 </article>
            </div>
        </div>
    </section>




    <section class="courses">
        <h2>Our Popular Courses</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="assets/images/courses.png" alt="">
                </div>
                <div class="course__info">
                    <h4>Responsive Social Media Website UI Design</h4>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere ad minus maiores nihil quae quas dicta dolorem, quod velit.
                </p>
                <a href="courses.html" class="btn btn-primary">
                    Learn More
                </a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="assets/images/courses.png" alt="">
                </div>
                <div class="course__info">
                    <h4>Responsive Social Media Website UI Design</h4>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere ad minus maiores nihil quae quas dicta dolorem, quod velit.
                </p>
                <a href="courses.html" class="btn btn-primary">
                    Learn More
                </a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="assets/images/courses.png" alt="">
                </div>
                <div class="course__info">
                    <h4>Responsive Social Media Website UI Design</h4>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere ad minus maiores nihil quae quas dicta dolorem, quod velit.
                </p>
                <a href="courses.html" class="btn btn-primary">
                    Learn More
                </a>
                </div>
            </article>
        </div>
    </section>



    

    <section class="faqs">
        <h2>FrequentylY Askeq question</h2>
        <div class="container faqs__container">
        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>           

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>          

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>
        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>          
        
        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>          

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>          

        <article class="faq">
            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4>How do I know the right courses for me?</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda quod rem cumque optio laborum dolore, molestiae sint autem doloribus aliquam cupiditate ad magni. Perferendis ratione labore esse pariatur ducimus?
            </p>
        </div>
        </article>          
        </div>
    </section>




    <section class="container testimonials__container mySwiper">
        <h2>Student Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="assets/images/courses.png" alt="">

                </div>
                <div class="testimonial__info">
                    <h5>Diana Ayi</h5>
                    <small>Student</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, quibusdam?</p>
                </div>
            </article>
            
        </div>
        <div class="swiper-pagination"></div>
    </section>




    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo">
                    <h4>EGATOR</h4>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, distinctio.</p>
            </div>

            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Home</a></li>
                </ul>
            </div>

            <div class="footer__3">
                <h4>Primacy</h4>
                <ul class="privacy">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Home</a></li>
                </ul>
            </div>

            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+01 234 567 8910</p>
                    <p>shakir260@gmail.com</p>
                </div>

                <ul class="footer__socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>

        <div class="footer__copyright">
            <small>copyright &copy; EGATOR YouTube</small>
        </div>
        </div>       
    </footer>




    <script src="./main.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },

          //when window width is >= 600px
          breakpoints: {
              600: {

                slidesPerView: 2

              }
          }
        });
      </script>
</body>
</html>

    ------>