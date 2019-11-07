        <!-- Recent Blog Begins -->
        <section id="news" class="blog">
            <div class="container blog-inner">
                <!-- Title & Desc Row Begins -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Title -->
                        <div class="title">
                            <h2> <?= $news->black_title ?> <span><?= $news->red_title ?></span></h2>
                        </div>
                        <!-- Description -->
                        <p class="desc"><?= $news->desc_title ?></p>
                    </div>
                </div>
                <!-- Title & Desc Row Ends -->
                <!-- Blog Inner Begins -->
                <div class="blog-scroll-section">
                    <!-- Row 1 Begins -->
                    <div class="row load-more active">
                        <!-- Blog 1 Begins -->
                        <div class="col-md-12 col-sm-12 animated" data-animation="fadeInLeft" data-animation-delay="400">
                            <!-- Blog 1 Box -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 1 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_1 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_1 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 1 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_1 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa  fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_1 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 1 Box Ends -->
                        </div>
                        <!-- Blog 1 Ends -->
                        <!-- Blog 2 Begins -->
                        <div class="col-md-12 col-sm-12 animated" data-animation="fadeInRight" data-animation-delay="400">
                            <!-- Blog 2 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 2 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_2 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_2 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 2 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_2 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa  fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_2 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 2 Box Ends -->
                        </div>
                        <!-- Blog 2 Begins -->
                    </div>
                    <!-- Row 1 Ends -->
                    <!-- Row 2 Begins -->
                    <div class="row load-more">
                        <!-- Blog 3 Begins -->
                        <div class="col-md-12 col-sm-12 animated" data-animation="fadeInLeft" data-animation-delay="400">
                            <!-- Blog 3 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 3 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_3 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_3 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 3 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_3 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa  fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_3 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 3 Box Ends -->
                        </div>
                        <!-- Blog 3 Ends -->
                        <!-- Blog 4 Begins -->
                        <div class="col-md-12 col-sm-12 animated" data-animation="fadeInRight" data-animation-delay="400">
                            <!-- Blog 4 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 4 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_4 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_4 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 4 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_4 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_4 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 4 Box Ends -->
                        </div>
                        <!-- Blog 4 Ends -->
                    </div>
                    <!-- Row 2 Ends -->
                    <!-- Row 3 Begins/ Hidden Blogs -->
                    <div class="row load-more">
                        <!-- Blog 5 Begins -->
                        <div class="col-md-12 col-sm-12">
                            <!-- Blog 5 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 5 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_5 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_5 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 5 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_5 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_5 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 5 Box Ends -->
                        </div>
                        <!-- Blog 5 Ends -->
                        <!-- Blog 6 Begins -->
                        <div class="col-md-12 col-sm-12">
                            <!-- Blog 6 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 6 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_6 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_6 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 6 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_6 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_6 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 6 Box Ends -->
                        </div>
                        <!-- Blog 6 Ends -->
                    </div>
                    <!-- Row 3 Ends / Hidden Blog Ends -->
                    <!-- Row 4 Begins/ Hidden Blogs -->
                    <div class="row load-more">
                        <!-- Blog 5 Begins -->
                        <div class="col-md-12 col-sm-12">
                            <!-- Blog 5 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 5 image -->
                                <!-- Blog 5 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon fa-<?= $news->icon_7 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_7 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 5 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_7 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_7 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 5 Box Ends -->
                        </div>
                        <!-- Blog 5 Ends -->
                        <!-- Blog 6 Begins -->
                        <div class="col-md-12 col-sm-12">
                            <!-- Blog 6 Box Begins -->
                            <div class="blog-box effects clearfix effect6">
                                <!-- Blog 6 image -->
                                <!-- Blog 6 image -->
                                <div class="blog-image img">
                                    <i class="fa img-icon <?= $news->icon_8 ?>"></i>
                                    <!-- Overlay Gallery -->
                                    <div class="overlay">
                                        <a href="<?php echo base_url('assets/') . 'images/news/' . $news->news_image_8 . '' ?>" data-rel="prettyPhoto[gallery1]" class="expand"><i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                                <!-- Blog 6 content -->
                                <div class="blog-content">
                                    <h2><a href="#"><?= $news->news_title_8 ?></a></h2>
                                    <!-- News Info -->
                                    <div class="news-info">
                                        <div class="author"><i class="fa fa-share-square"></i>569 Shares</div>
                                        <div class="date"><i class="fa fa-eye"></i>3,152 Views</div>
                                        <div class="comments"><i class="fa fa-comment"></i>21 Comments</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="post-content">
                                        <p><?= $news->news_desc_8 ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog 6 Box Ends -->
                        </div>
                        <!-- Blog 6 Ends -->
                    </div>
                    <!-- Row 4 Ends / Hidden Blog Ends -->
                    <!-- Load More Post Button -->
                    <div class="col-md-12 load-post text-center">
                        <button class="btn slide-btn load-posts" type="button">Load More Post <i class="flaticon-arrow209"></i></button>
                    </div>
                    <!-- Load More Button Ends -->
                </div>
                <!-- Blog Inner Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- Recent Blog Ends -->