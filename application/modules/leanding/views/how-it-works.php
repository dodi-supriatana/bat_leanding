        <!-- How It Works Begins -->
        <section id="how-it-works" class="how-it-works">
            <div class="container how-it-works-inner">
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                            <h2> <?= $how_it_works->black_title ?> <span><?= $how_it_works->red_title ?></span></h2>
                        </div>
                        <!-- Description -->
                        <p class="desc"><?= $how_it_works->title_description ?></p>
                    </div>
                </div>
                <!-- Title & Desc Row Ends -->
                <!-- How It Works Row Begins -->
                <div class="row">
                    <!-- Left Part Begins -->
                    <div class="col-md-5 text-center">
                        <div class="benefits">
                            <img style="width: 250px; height: 514px;" src="<?= base_url('assets/') . 'images/how_it_works/' .$how_it_works->image_2 ?>" alt="" class="relative animated" data-animation="fadeInLeft" data-animation-delay="500">
                            <img src="<?= base_url('assets/') . 'images/how_it_works/' .$how_it_works->image_1 ?>" alt="" class="phone-image-right relative animated" data-animation="fadeInLeft" data-animation-delay="1200">
                        </div>
                    </div>
                    <!-- Left Part Ends -->
                    <!-- Right Part Begins -->
                    <div class="col-md-7">
                        <div class="about-right text-left">
                            <!-- Desc -->
                            <p><?= $how_it_works->desc ?></p>
                            <!-- Title -->
                            <h3><?= $how_it_works->subtitle ?></h3>
                            <!-- Lists -->
                            <ul>
                                <li>
                                    <!-- Icon -->
                                    <i class="fa fa-<?= $how_it_works->icon_1 ?>-o"></i>
                                    <!-- Text -->
                                    <p><?= $how_it_works->item_description_1 ?></p>
                                </li>
                                <li>
                                    <!-- Icon -->
                                    <i class="fa fa-<?= $how_it_works->icon_2 ?>-o"></i>
                                    <!-- Text -->
                                    <p><?= $how_it_works->item_description_2 ?></p>
                                </li>
                                <li>
                                    <!-- Icon -->
                                    <i class="fa fa-<?= $how_it_works->icon_3 ?>-o"></i>
                                    <!-- Text -->
                                    <p><?= $how_it_works->item_description_3 ?></p>
                                </li>
                                <li>
                                    <!-- Icon -->
                                    <i class="fa  fa-<?= $how_it_works->icon_4 ?>-o"></i>
                                    <!-- Text -->
                                    <p><?= $how_it_works->item_description_4 ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right Part Ends -->
                </div>
                <!-- How It Works Row Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- How It Works Ends -->