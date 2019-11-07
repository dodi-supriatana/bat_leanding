        <!-- Demo Video Section -->
        <section id="demo-video">
            <div  class="demo-video">
                <div class="bg-overlay pattern"></div>
                <div class="container demo-video-inner text-center">
                    <!-- Title & Desc Row Begins -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Title --> 
                            <div class="title">
                                <h2> <?php echo $demo_video->white_title ?> <span><?php echo $demo_video->red_title ?></span></h2>
                            </div>
                            <!-- Description --> 
                            <p class="desc white"><?php echo $demo_video->desc_title ?></p>
                        </div>
                    </div>
                    <!-- Title & Desc Row Ends -->
                    <div class="video_bg  animated" data-animated="fadeInUp" data-animation-delay="200">
                        <img src="<?= base_url('assets/') . 'images/demo_video/' .$demo_video->image.'' ?>" width="550" height="310">
                        <!-- <img src="<?php echo base_url('assets/') . 'images/home/'.$home->img_1.'' ?>" alt="" class="img-responsive" /> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Demo Video Section -->