    <!--============FAQS===========-->
    <section class="faqs">
   
        <h2 class="lang" key="specialskillsh1">My Special Skill Field Here.</h2>
       

        <div class="container faqs__container">
        <?php if(isset($ROWS2) && is_array($ROWS2)): ?>
            <?php foreach($ROWS2 as $row2): ?>

        <article class="faq">
                   

            <div class="faq__icon"><i class="uil uil-plus"></i></div>
            <div class="question__answer">
            <h4><?=$row2->skill?></h4>
            <p>
            <?=$row2->message?>
            </p>

        </div>
        </article>           
        <?php endforeach;?>
    <?php endif;?>

        </div>

    </section>