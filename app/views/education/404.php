<?php $this->view("header", $data); ?>
<br>
<br>
<br>
<center>
<div class="container_text-center">
    <div class="content-404">
        <img src="<?=ASSETS . THEME?>images/404.svg" class="img-responsive" alt="" style="max-width:200px;">
        <h1><b>OPPS!</b>We Couldn't Find this Page</h1>
        <p>Uh.. So it looks like you brock something. The page you are lookig for has no resposible</p>
        <h2><a href="<?=ROOT?>">Bring me back Home</a></h2>
    </div>
</div>
</center>
<br>
<br>
<br>
<?php $this->view("footer", $data); ?>
