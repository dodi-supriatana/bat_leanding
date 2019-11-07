    <!-- Slider Begins-->
    <div class="container">
    	<div class="row">
    		<div class="col-md-7 intro-text">
    			<!-- TEXT -->
    			<div class="main">
    				<h1><?php echo $home->title_wihite ?> <span class="rotate text-color"><?php echo $home->Title_red ?></span> <?php echo $home->title_wihite_2 ?> </h1>
    			</div>
    			<h2 class="large_white_bold"> <?php echo $home->midle_title ?></h2>
    			<!-- Text -->
    			<p class="medium_white_light"><?php echo $home->desc ?>
    			</p>
    			<!-- Link -->
    			<span class="page-scroll">
    				<a href="#welcome" class="btn slide-btn bg-inverse">Learn More</a>
    			</span>
    			<!-- Link -->
    			<span class="page-scroll">
    				<a href="#download-now" class="btn slide-btn">Download now</a>
    			</span>
    		</div>
    		<div class="col-md-5">
    			<!-- Screenshots List -->
    			<div id="mobileslider">
    				<div class="mobile-img">
    					<img src="<?php echo base_url('assets/') . 'images/home/' . $home->img_1 . '' ?>" alt="" class="img-responsive" />
    				</div>
    				<div class="mobile-img">
    					<img src="<?php echo base_url('assets/') . 'images/home/' . $home->img_2 . '' ?>" alt="" class="img-responsive" />
    				</div>
    				<div class="mobile-img">
    					<img src="<?php echo base_url('assets/') . 'images/home/' . $home->img_3 . '' ?>" alt="" class="img-responsive" />
    				</div>
    			</div>
    			<!-- End Screenshots List-->
    		</div>
    	</div>
    </div>
    <!-- Slider Ends-->
    </header>