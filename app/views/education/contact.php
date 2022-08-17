
<?php $this->view("header", $data); ?>

    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92005.47461091852!2d18.3829915!3d43.8937233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758cbb1ed719bd1%3A0x562ecda6de87b33e!2sSarajevo!5e0!3m2!1shr!2sba!4v1654532845914!5m2!1shr!2sba" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <h2 class="lang" key="kontakth1">Contact Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quasi nam? Sit a eaque et inventore quia saepe atque dolores.</p>
                <ul class="contact__details">
                    <li>
                        <i class="uil uil-phone-times"></i>
                        <h5><?=Settings::phone_number()?>"</h5>
                    </li>
                    <li>
                        <i class="uil uil-envelope"></i>
                        <h5><?=Settings::email()?>"</h5>
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

    <!----https://formspree.io/f/xvolwlzr-->
            <form action="" method="POST" class="contact__form">
            <?php if(is_array($errors) && count($errors) > 0): ?>
                <?php foreach($errors as $error): ?>
            <span style="font-size: 18px; color: red;">
                <?=$error?>
           </span>                
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if(isset($_GET['success'])): ?>
                    <span style="font-size: 18px; color: #007bff;">
                    Message sent successfully
                    </span>      
                <?php endif; ?>

                <div class="form__name">
                    <input type="text" name="firstname" placeholder="First Name" required value="<?=isset($_POST['firstname'])? $POST['firstname']: '' ?>">
                    <input type="text" name="subject" placeholder="Subject" required value="<?=isset($_POST['subject'])? $POST['subject']: '' ?>">

                </div>
                <input type="email" name="email" placeholder="Email" value="<?=isset($_POST['email'])? $POST['email']: '' ?>">
                <textarea name="message" rows="7" placeholder="Message" ><?=isset($_POST['message'])? $POST['message']: '' ?></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>







    <?php $this->view("footer", $data); ?>
