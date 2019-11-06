        <!-- Features Section Begins -->
        <section id="features">
            <div  class="features-section">
                <div class="bg-overlay pattern"></div>
                <div class="container features-inner">
                    <!-- Title & Desc Row Begins -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- Title -->
                            <div class="title">
                                <h2> <?= $features->white_title ?>  <span><?= $features->red_title ?></span></h2>
                            </div>
                            <!-- Description --> 
                            <p class="desc white"><?= $features->description ?></p>
                        </div>
                    </div>
                    <!-- Title & Desc Row Ends -->
                    <div class="row">
                        <!-- FEATURES LEFT -->
                        <div class="col-md-4 col-sm-6">
                            <ul class="features-list features-list-right">
                                <li class="features-list-item animated" data-animation="fadeInLeft" data-animation-delay="500">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_1 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_1 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_1 ?></p>
                                    </div>
                                </li>
                                <li class="features-list-item animated" data-animation="fadeInLeft" data-animation-delay="800">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_2 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_2 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_2 ?></p>
                                    </div>
                                </li>
                                <li class="features-list-item animated" data-animation="fadeInLeft" data-animation-delay="1100">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_3 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_3 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_3 ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- FEATURES RIGHT -->
                        <div class="col-md-4 col-md-push-4 col-sm-6">
                            <ul class="features-list features-list-left">
                                <li class="features-list-item animated" data-animation="fadeInRight" data-animation-delay="500">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_4 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_4 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_4 ?></p>
                                    </div>
                                </li>
                                <li class="features-list-item animated" data-animation="fadeInRight" data-animation-delay="800">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_5 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_5 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_5 ?></p>
                                    </div>
                                </li>
                                <li class="features-list-item animated" data-animation="fadeInRight" data-animation-delay="1100">
									<!-- Icon -->
                                    <i class="fa fa-<?= $features->icon_6 ?> fa-3x"></i>
                                    <div class="features-content">
										<!-- Title -->
                                        <h5><?= $features->label_title_6 ?></h5>
										<!-- Text -->
                                        <p><?= $features->label_description_6 ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- CLOSE UP PHONE IMAGE -->
                        <div class="col-md-4 col-md-pull-4 app-image animated" data-animation="fadeInUp" data-animation-delay="800">
                            <!-- <img src="<?=base_url('assets/images/features/'.$features->image)?>" alt="" > -->
                            <img src="<?php echo base_url('assets/') . 'images/features/'.$features->image.'' ?>" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section Ends -->  