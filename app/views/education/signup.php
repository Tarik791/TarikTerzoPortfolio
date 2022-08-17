<?php $this->view("header", $data); ?>

<section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="<?= ASSETS . THEME ?>/images/team.png">
                </div>
                <h2>Contacct Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi nam? Sit a eaque et inventore quia saepe atque dolores.</p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5>+38762543765</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5>Support@gmail.com</h5>
                    </li>
                    <li>
                        <i class="uil uil-location-point"></i>
                        <h5>Accra, Ghana</h5>
                    </li>
                    
                </ul>
                <ul class="contact__socials">
                    <li><a href="facebook.com">
                        <i class="uil uil-facebook-f"></i>
                    </a></li>
                    <li><a href="instagram.com">
                        <i class="uil uil-twitter"></i>
                    </a></li>
                    <li><a href="instagram.com">
                        <i class="uil uil-instagram"></i>
                    </a></li>
                    <li><a href="linkedin.com">
                        <i class="uil uil-linkedin-alt"></i>
                    </a></li>
                </ul>
            </aside>


            <form method="post" class="contact__form">
                <span style="font-size: 18px; color: red;">
                <?php check_error() ?>
                </span>
                <div class="form__name">
                    <input type="text" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>" name="name" placeholder="First Name" required>
                    <input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>"  placeholder="Email">


                </div>
                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Retype Password" required>

                <button type="submit" class="btn btn-primary">Signup</button>
                <a href="<?=ROOT?>login">You have account? Login here</a>    

            </form>
        </div>
    </section>

<?php $this->view("footer", $data); ?>
