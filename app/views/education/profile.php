<?php $this->view("header", $data); ?>


<?php if(is_object($profile_data)): ?>

<section class="wrapper" >
    <section class="main-content">


<div style="width: 200px; height: 200px; margin-left: auto; margin-right:auto;">
<div class="col-md-4 mb" style="width: 220px;">
<!-- WHITE PANEL - TOP USER -->
<div class="white-panel pn" >
    <div class="white-header">
        <h5>TOP USER</h5>
    </div>
    <p><img style="width: 100px;"  src="<?=ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
    <p><b><?=$profile_data->name?></b></p>
    <div class="row">
        <div class="col-md-6">
            <p class="small mt">MEMBER SINCE</p>
            <p>2012</p>
        </div>
        <div class="col-md-6">
            <p class="small mt">TOTAL SPEND</p>
            <p>$ 47,60</p>
        </div>
    </div>
</div>
</div><!-- /col-md-4 -->
                      	
        </div>
    </section>
</section>

<?php else: ?>
    <h3 style="text-align: center;">Sorry! that profile could not be found</h3>
<?php endif; ?>

<?php $this->view("footer", $data); ?>
