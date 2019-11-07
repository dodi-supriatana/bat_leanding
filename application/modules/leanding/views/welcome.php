        <!-- Welcome Section Begins -->
        <section id="welcome" class="welcome-section">
            <div class="container welcome-inner">
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                            <h2><?= $welcome->black_title ?> <span><?=$welcome->red_title?></span></h2>
                        </div>
                        <!-- Description -->
                        <p class="desc"><?= $welcome->desc ?></p>
                    </div>
                </div>
                <!-- Title & Desc Row Ends -->
                <!-- First Row Begins -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-center">
                        <ul class="unlist">
                            <li class="animated" data-animation="fadeInLeft" data-animation-delay="500">
                                <i class="fa fa-<?= $welcome->icon_1 ?> fa-3x pull-right"></i>
                                <div class="welcome-content">
                                    <h5><?= $welcome->label_title_1 ?></h5>
                                    <p><?= $welcome->label_description_1 ?></p>
                                </div>
                            </li>
                            <li class="animated" data-animation="fadeInLeft" data-animation-delay="700">
                                <i class="fa fa-<?= $welcome->icon_2 ?> fa-3x pull-right"></i>
                                <div class="welcome-content">
                                    <h5><?= $welcome->label_title_2 ?></h5>
                                    <p><?= $welcome->label_description_2 ?></p>
                                </div>
                            </li>
                            <li class="animated" data-animation="fadeInLeft" data-animation-delay="900">
                                <i class="fa fa-<?= $welcome->icon_3 ?>  fa-3x pull-right"></i>
                                <div class="welcome-content">
                                    <h5><?= $welcome->label_title_3 ?></h5>
                                    <p><?= $welcome->label_description_3 ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 text-center animated" data-animation="fadeInUp" data-animation-delay="500">
                        <!-- Welcome Box 1 Begins -->
                        <img src="<?php echo base_url('assets/') . 'images/welcome/'.$welcome->image.'' ?>" alt="" class="img-responsive" />
                    </div>
                    <!-- Welcome Box 1 Ends -->
                </div>
                <!-- First Row Ends -->
            </div>
        </section>
        <!-- Welcome Section Ends -->