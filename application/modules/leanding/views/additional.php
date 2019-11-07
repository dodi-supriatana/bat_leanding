        <!-- Additional features Section Begins -->
        <section id="additional">
            <div class="additional-section">
                <div class="bg-overlay pattern"></div>
                <div class="container additional-inner">
                    <!-- Title & Desc Row Begins -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Title --> 
                            <div class="title">
                                <h2> <?= $additional->white_title ?> <span><?= $additional->red_title ?></span></h2>
                            </div>
                            <!-- Description --> 
                            <p class="desc white"><?= $additional->desc_title ?></p>
                        </div>
                    </div>
                    <!-- Title & Desc Row Ends -->
                    <!-- Additional features Begins -->
                    <div class="row features-border-top">
                        <div class="col-md-3">
                            <div class="additional-features animated" data-animation="fadeInLeft" data-animation-delay="300">
                                <!-- Icon --> 
                                <i class="fa fa-<?= $additional->icon_1 ?>"></i>
                                <!-- Content --> 
                                <div class="additional-content">
                                    <h5><?= $additional->label_1 ?></h5>
                                    <p><?= $additional->label_desc_1 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="additional-features animated" data-animation="fadeInUp" data-animation-delay="200">
                                <!-- Icon --> 
                                <i class="fa fa-<?= $additional->icon_2 ?>"></i>
                                <!-- Content --> 
                                <div class="additional-content">
                                    <h5><?= $additional->label_2 ?></h5>
                                    <p><?= $additional->label_desc_2 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="additional-features animated" data-animation="fadeInRight" data-animation-delay="300">
                                <!-- Icon --> 
                                <i class="fa fa-<?= $additional->icon_3 ?>"></i>
                                <!-- Content --> 
                                <div class="additional-content">
                                    <h5><?= $additional->label_3 ?></h5>
                                    <p><?= $additional->label_desc_3 ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 right-border">
                            <div class="additional-features animated" data-animation="fadeInRight" data-animation-delay="400">
                                <!-- Icon --> 
                                <i class="fa fa-<?= $additional->icon_4 ?>"></i>
                                <!-- Content --> 
                                <div class="additional-content">
                                    <h5><?= $additional->label_4 ?></h5>
                                    <p><?= $additional->label_desc_4 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 additional-feature-image animated" data-animation="fadeInUp" data-animation-delay="600">
                            <img src="<?= base_url('assets/' . 'images/additional/'.$additional->image )?>" alt="" >
                        </div>
                    </div>
                    <!-- Additional features Row Ends -->
                </div>
            </div>
        </section>
        <!-- Additional features Section Ends -->