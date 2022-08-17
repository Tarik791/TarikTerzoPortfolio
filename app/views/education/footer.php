
    <!--=====================FOOTER======================-->
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo">
                    <h4>TARIK TERZO</h4>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, distinctio.</p>
         
            </div>

            <div class="footer__2">
                <h4 class="lang" key="kontakth1">Contact Us</h4>
                <ul class="permalinks">
                    
                    <li>
                        <a target="_new" href="<?=Settings::instagram_link()?>"><i class="uil uil-instagram-alt">Instagram</i></a>
                    </li>
                    <p><?=Settings::phone_number()?></p>

                </ul>
            </div>

            <div class="footer__3">
             
                <ul class="privacy">
                <li>
                    <a target="_new" href="<?=Settings::facebook_link()?>"><i class="uil uil-facebook-f"></i>Facebook</a>
                    </li>
                    <?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
                    <li><a href="<?=ROOT?>admin">Admin</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="footer__4">
        

                <ul class="footer__socials">
               
                    <li>
                        <a target="_new" href="<?=Settings::twitter_link()?>"><i class="uil uil-twitter"></i>Twitter</a>
                    </li>
                   
                    <li>
                    <a target="_new" href="<?=Settings::linkedin_link()?>"><i class="uil uil-linkedin-alt"></i>Linkedin</a>
                    </li>
                </ul>
            </div>
  

        <div class="footer__copyright">
            <small>copyright &copy; Tarik Terzo</small>
            <div>
                    <p><?=Settings::email()?></p>
                </div>

        </div>
        </div>       
    </footer>




    <script src="<?= ASSETS . THEME?>/main.js"></script>
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



//This is slider for picture of product
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}



      </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="<?=ASSETS . THEME?>/js/language.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?=ASSETS . THEME?>/slider.js"></script>
    <script src="<?=ASSETS . THEME?>/js/jquery.min.js"></script>
    <script src="<?=ASSETS . THEME?>/js/templatemo-script.js"></script>

</body>
</html>