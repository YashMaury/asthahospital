<?php include "include/header.php";?>
            
            
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<!-- BREADCRUMBS -->

<div class="bread-crumb-wrap ibc-wrap-2">
    <div class="container padding_remove">
        <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            <div class="bread-heading">
                <h3>Gallery</h3>
            </div>
            <div class="bread-crumb pull-right">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid managment_contents">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12  padding_remove padding_btm">
               <div class="bhoechie-tab-container departments">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bhoechie-tab-menu">
                   
                       
                            <div class="list-group">
                                <a href="Press_Release.php" class="list-group-item">
                            <h4 class="fa fa-user fontawsme"></h4><span>Press Release</span>
                        </a>
                                <a href="Social_Media_Coverage.php" class="list-group-item">
                            <h4 class="fa fa-user fontawsme"></h4><span>Social Media Coverage</span>
                        </a>
                                <a href="health_checkup_packages.php" class="list-group-item">
                            <h4 class="fa fa-h-square fontawsme"></h4><span>Health Checkup Packages</span>
                        </a>
                                <a href="Gallery.php" class="list-group-item active">
                            <h4 class="fa fa-plus-square fontawsme"></h4><span>Gallery</span>
                        </a>
                                <!-- <a href="#Health_Tips.php" class="list-group-item">
                            <h4 class="fa fa-plus-square fontawsme"></h4><span>Health Tips</span>
                        </a>
                                <a href="#Events_Free_Check_Ups.php" class="list-group-item">
                            <h4 class="fa fa-plus-square fontawsme"></h4><span>Events and Free Check Ups</span>
                        </a>
                    
                                <a href="#Testimonials.php" class="list-group-item">
                            <h4 class="fa fa-eye fontawsme"></h4><span>Testimonials</span>
                        </a> -->
<!--                                <a href="News_Letters.php" class="list-group-item">
                            <h4 class="fa fa-h-square fontawsme"></h4><span>News Letters</span>
                        </a>-->
                       
                      
                      
                    </div> 
                       
                   
                </div>
                      </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 bhoechie-tab">
                    <div class="row gallery clearfix">
                        
                        <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>
                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12" style="margin-bottom: 15px;">
                            <a href="images/Gallery2/gallery_logo.png" rel="prettyPhoto[gallery1]" title="Click Here">
                                <img src="images/Gallery2/gallery_logo.png" style="width:100%;height:150px;" alt="Astha Hospital Pathology Center" />
                            </a>
                        </div>                     

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $("area[rel^='prettyPhoto']").prettyPhoto();

        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});

        $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
            custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
            changepicturecallback: function () {
                initialize();
            }
        });

        $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
            custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
            changepicturecallback: function () {
                _bsap.exec();
            }
        });
    });
</script> 


<?php
 include 'include/footer.php';
 
 
 ?>