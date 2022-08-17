<article class="course">
                <div class="course__image">
                    <a href="<?=ROOT?>product_details/<?=$data->id?>">
                    <div style="overflow: hidden;"><img class="product-image" src="<?= ROOT . $data->image?>"></div>
                    </a>
                </div>
                <div class="course__info">
                    <h4><?=$data->description?></h4>
                    <p>
                    <?=$data->example?>
                </p>
                <a target="_new" href="<?=$data->link?>" class="btn btn-primary lang" key="learnmore">
                    Learn More
                </a>
                </div>
            </article>