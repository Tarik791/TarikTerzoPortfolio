<?php $this->view("header", $data); ?>

<section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="<?= ASSETS . THEME ?>/images/team.png">
                </div>
                <h2>Login to your account!</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi nam? Sit a eaque et inventore quia saepe atque dolores.</p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5><?=Settings::phone_number()?></h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5><?=Settings::email()?></h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Bosnia and Herzegovina, Sarajevo</h5>
                    </li>
                    
                </ul>
                <ul class="contact__socials">
                    <li><a target="_new" href="<?=Settings::facebook_link()?>">
                        <i class="uil uil-facebook-f"></i>
                    </a></li>
                    <li><a target="_new" href="<?=Settings::twitter_link()?>">
                        <i class="uil uil-twitter"></i>
                    </a></li>
                    <li><a target="_new" href="<?=Settings::instagram_link()?>">
                        <i class="uil uil-instagram"></i>
                    </a></li>
                    <li><a target="_new" href="<?=Settings::linkedin_link()?>">
                        <i class="uil uil-linkedin-alt"></i>
                    </a></li>
                </ul>
            </aside>


            <form method="post" class="contact__form">
            <span style="font-size: 18px; color: red;">
                <?php check_error() ?>
                </span>
                <div class="form__name">
                    <input type="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" name="email" placeholder="Enter your Email!" required>
                    <input type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>" name="password" placeholder="Enter your password!">

                </div>
               
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
            <a href="<?=ROOT?>signup">Dont have an account? Signup here</a>    
            </form>
          
        </div>
    </section>

<?php $this->view("footer", $data); ?>
