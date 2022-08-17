<?php $this->view("header", $data); ?>
<?php if(isset($ROW) && is_object($ROW)): ?>


    <div class="container-fluid">

        <main class="tm-main">
        

            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="row tm-row">

                            <a href="<?=ROOT?>post/<?=$ROW->url_address?>">
                            <img style="cursor: pointer; width: 100%;" src="<?=ROOT . $ROW->image?>" alt="Image" class="img-fluid">   
                            </a>                         
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?=htmlspecialchars($ROW->title)?></h2>
                            <p class="tm-mb-40" style="font-size: 18px;">Admin: <?=$ROW->user_data->name?></p>
                            <p>
                            <?=nl2br(htmlspecialchars($ROW->post))?>...</p>
                            
                            <span class="tm-color-primary"><?=date("h:i a",strtotime($ROW->date))?></span>
                            <span class="tm-color-primary"><?=date("M jS, Y",strtotime($ROW->date))?></span> 
                            <div class="recievedBox">
                            <button type="submit" style="width: 50px; height: 40px; cursor:pointer" class="like">Like <p class="likeNum">0</p> </button>
                            </div>
                        </div>

                      
                
            </div>
        </main>
        <?php else: ?>
            
            <h2 style="text-align: center; color: red;">The selected post was not found</hw>


        <?php endif; ?>

    </div>
    <script src="<?=ASSETS . THEME?>js/like.js"></script>

    <script src="<?=ASSETS . THEME?>js/jquery.min.js"></script>
    <script src="<?=ASSETS . THEME?>js/templatemo-script.js"></script>



<?php $this->view("footer", $data); ?>
