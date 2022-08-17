<?php $this->view("header", $data); ?>
<center>
<div class="product-card">

<?php if($ROW): ?>
      <h1><?=$ROW->description?></h1>
      <p><?=$ROW->quantity?></p>
      <p><?=$ROW->example?></p>
      <div class="product-pic"></div>
      <div class="product-colors">

    <!-- Slideshow container -->
    <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img class="product-image" style="width: 400px;" src="<?=ROOT . $ROW->image?>" >
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img class="product-image"  src="<?=ROOT . $ROW->image2?>" style="width:400px">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img class="product-image"  src="<?=ROOT . $ROW->image3?>" style="width:400px">
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img class="product-image"  src="<?=ROOT . $ROW->image4?>" style="width:400px">
</div>
<!-- Next and previous buttons -->
<br clear="float">
<a style="float: left; cursor:pointer;" onclick="plusSlides(-1)">&#10094; Previous</a>
<a style="float: right; cursor:pointer;" onclick="plusSlides(1)">Next &#10095;</a>


<a target="_new" href="<?=$ROW->link?>" class="product-button">Go to the link</a>

</div>


    <?php else: ?>
      <div style="padding: 1em; background-color: grey; color:white; margin:1em; text-align:center;"><h2>That product was not found</h2></div>

    <?php endif; ?>
    </div>





<!-- The dots/circles -->

</center>
   


<?php $this->view("footer", $data); ?>
