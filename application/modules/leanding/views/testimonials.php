        <!-- Testimonials Section Begins -->
        <section class="testimonials">
            <div class="container testimonials-inner">
                <div id="feedback">
                    <!-- Testionial 1 -->
                    <div class="row">
                        <div class="col-md-9 animated" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="feedback">
                                <div class="bg-text" data-bg-text="Happy Clients">
                                    <p><?= $testimonials->testimoni_1 ?></p>
                                </div>
                                <!-- Name -->
                                <h5 class="italic"> - <?= $testimonials->name_1 ?></h5>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <!-- Image -->
                            <img src="<?= base_url('assets/'). 'images/testimonials/'. $testimonials->image_1 . '' ?>" alt="" />
                        </div>
                    </div>
                    <!-- End Testionial 1 -->
                    <!-- Testionial 2 -->
                    <div class="row">
                        <div class="col-md-9 animated" data-animation="fadeInLeft" data-animation-delay="100">
                            <div class="feedback">
                                <div class="bg-text" data-bg-text="Happy Clients">
                                    <p><?= $testimonials->testimoni_2 ?></p>
                                </div>
                                <!-- Name -->
                                <h5 class="italic"> - <?= $testimonials->name_2 ?></h5>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <!-- Image -->
                            <img src="<?= base_url('assets/'). 'images/testimonials/'. $testimonials->image_2 . '' ?>" alt="" />
                        </div>
                    </div>
                    <!-- End Testionial 2 -->
                    <!-- Testionial 3 -->
                    <div class="row">
                        <div class="col-md-9 animated" data-animation="fadeInLeft" data-animation-delay="100">
                            <div class="feedback">
                                <div class="bg-text" data-bg-text="Happy Clients">
                                    <p><?= $testimonials->testimoni_3 ?></p>
                                </div>
                                <!-- Name -->
                                <h5 class="italic"> - <?= $testimonials->name_3 ?> </h5>
                            </div>
                        </div>
                        <div class="col-md-3 text-center ">
                            <!-- Image -->
                            <img src="<?= base_url('assets/'). 'images/testimonials/'. $testimonials->image_3 . '' ?>" alt="" />
                        </div>
                    </div>
                    <!-- End Testionial 3 -->
                </div>
                <!-- End Testimonials List-->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Testimonials Section Ends -->