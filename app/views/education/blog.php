<?php $this->view("header", $data); ?>


    <div class="container-fluid">
        <main class="tm-main">
           
            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                        
                    
                    <?php if(isset($ROWS) && is_array($ROWS)): ?>

                        <?php foreach($ROWS as $row): ?>

                    <!---single-blog-post-->
                            <a href="<?=ROOT?>post/<?=$row->url_address?>">
                            <img style="cursor: pointer;" src="<?=ROOT . $row->image?>" alt="Image" class="img-fluid">   
                            </a>                         
                        <span class="position-absolute tm-new-badge lang" key="blognew">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?=htmlspecialchars($row->title)?></h2>
                    </a>                    
                    <p class="tm-pt-30">
                    <?=nl2br(htmlspecialchars(substr($row->post, 0,300)))?>...
                    </p>
                    <br>
                    <a class="btn btn-primary lang" key="blogreadmore" href="<?=ROOT?>post/<?=$row->url_address?>">Read More</a>
                    <div  class="d-flex justify-content-between tm-pt-45">
                    <p class="tm-mb-40" style="font-size: 18px;">Admin: <?=$row->user_data->name?></p>

                        <span class="tm-color-primary"><?=date("H:i a",strtotime($row->date))?></span>
                        <span class="tm-color-primary"><?=date("M, Y",strtotime($row->date))?></span>

                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                
                    </div>
                </article>

                

                <!---end of single-blog-post-->
                    <?php endforeach; ?>

                <?php endif; ?>

                

                    <?php if(is_array($errors) && count($errors) > 0): ?>
                        <?php foreach($errors as $error): ?>
                        <div style="color: red; font-size: 18px;"><?=$error?></div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <h2 style="text-align: center;" class="tm-color-primary tm-post-title mb-4 lang" key="blogcomment">Comment your favorite project! </h2>

                    <form method="post" class="mb-5 tm-comment-form">
                        <br>
                    <h2 class="tm-color-primary tm-post-title mb-4 lang" key="blogname">Your name</h2>
                        <div class="mb-4">
                            <input class="form-control" name="name" type="text">

                        </div>

                        <h2 class="tm-color-primary tm-post-title mb-4 lang" key="blogcomment2">Your comment</h2>


                        <div class="mb-4">
                            <textarea class="form-control" name="message" rows="6"></textarea>
                        </div>
                        <div class="text-right">

                            <button class="tm-btn tm-btn-primary tm-btn-small ">Submit</button>         
                        </div>                                
                    </form>       
                    
                    <?php if(isset($comments) && is_array($comments)): ?>
                            <?php foreach($comments as $comment): ?>
                        <div>
                            <hr class="tm-hr-primary tm-mb-45">
                    
                                    <figcaption class="tm-color-primary text-center"><?=$comment->name?></figcaption>
                             
                                <div>
                                    <p>
                                       <?=$comment->message?>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="tm-color-primary"><?=$comment->date?></span>
                                    </div>                                             
                                </div>                                
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        
                 
                        </div>
            </div>
        
            
        </main>
     

    <script src="<?=ASSETS . THEME?>js/jquery.min.js"></script>
    <script src="<?=ASSETS . THEME?>js/templatemo-script.js"></script>
</body>
</html>


<?php $this->view("footer", $data); ?>
