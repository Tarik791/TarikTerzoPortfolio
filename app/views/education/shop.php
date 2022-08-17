<?php $this->view("header", $data); ?>



    <!--=============COURSES=================-->
    <section class="courses">
        <h2 class="lang" key="shoph1">Our Popular Projects</h2>
        <div class="container courses__container">
            <!---products-->
    <?php if(is_array($ROWS)): ?>
        <?php foreach($ROWS as $row): ?>

            <?php $this->view("product.inc", $row); ?>
            
            <?php endforeach; ?>
    <?php endif; ?>


        </div>
    
        

        <br style="clear:both;">
        <br>

    <div class="pagination" style="display: flex; justify-content: center; align-items:center; text-align:center;">
        <a href="<?=Page::links()->prev?>">&laquo;</a>

        <?php

        $max = Page::links()->current + 4;
        $cur = (Page::links()->current > 4) ? Page::links()->current - 4 : 1;
        


        ?>
        <?php for($i=$cur; $i < $max; $i++): ?>

            <a <?= (Page::links()->current == $i) ? 'class="active"' : ''; ?>  href="<?=Page::generate($i)?>"><?=$i?></a>


        <?php endfor; ?>
        <a href="<?=Page::links()->next?>">&raquo;</a>
    </div>


    </section>
    <!--===========END OF COURSES===========-->

<?php $this->view("footer", $data); ?>
