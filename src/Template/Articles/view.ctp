<?php echo $this->element("head"); ?> 
<body class="sticky-header left-side-collapsed">
    <section>
        <!-- left side start-->
        <?php echo $this->element("menu_left"); ?>
        <!-- left side end-->
        <!-- main content start-->
        <div class="main-content">
            <!-- header-starts -->
            <?php echo $this->element("header"); ?>
            <!-- header-ends-->
            <div id="page-wrapper">
                <div class="top-grids">
                    <div class="top-grids-info">
                        <!-- top-grid-right -->
                        <div class="col-md-3 top-grid-right basket-top-grid-right s-top-grid-right">
                            <div class="top-news features">
                                <div class="top-news-heading">
                                    <h3>Top Headlines</h3>
                                </div>
                                <div class="top-news-grids">
                                    <div class="top-news-grid">
                                        <div class="top-news-grid-heading">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum ac nulla</a>
                                        </div>
                                        <div class="t-grid top-th-grid">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="top-news-grid">
                                        <div class="top-news-grid-heading">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
                                        </div>
                                        <div class="t-grid top-th-grid">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="top-news-grid s-top-news-grid">
                                        <div class="top-news-grid-heading">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Sed leo leo, porta vel commodo in, vulputate eu est. In rhoncus tempor dictum. </a>
                                        </div>
                                        <div class="t-grid top-th-grid">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> Aenean rutrum</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="top-news-grid">
                                        <div class="top-news-grid-heading">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
                                        </div>
                                        <div class="t-grid top-th-grid">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="top-news-grid s-top-news-grid-info">
                                        <div class="top-news-grid-heading">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Sed leo leo, porta vel commodo in, vulputate eu est. In rhoncus tempor dictum. </a>
                                        </div>
                                        <div class="t-grid top-th-grid">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
                                                <li><a href="#"><i class="fa fa-user"></i> Aenean rutrum</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- latest -->
                            <div class="today-match latest">
                                <div class="today-match-heading latest-heading">
                                    <h3>Latest Headlines</h3>
                                </div>
                                <div class="match-grid latest-grid">
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Suspendisse ac ligula tempus, pellentesque ante quis</a>
                                        <p>Mar 29, 2016 1:18 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Ut sed leo a diam dignissim euismod. Etiam vestibulum</a>
                                        <p>Mar 28, 2016 9:23 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Suspendisse ac ligula tempus, pellentesque ante quis</a>
                                        <p>Mar 28, 2016 8:19 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Suspendisse ac ligula tempus, pellentesque ante quis</a>
                                        <p>Mar 28, 2016 6:47 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Suspendisse ac ligula tempus, pellentesque ante quis</a>
                                        <p>Mar 28, 2016 3:44 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Vestibulum gravida pellentesque lacus ut maximus</a>
                                        <p>Mar 28, 2016 1:34 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Aliquam feugiat rhoncus ex, quis convallis dui dapibus eget</a>
                                        <p>Mar 28, 2016 12:49 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis posuere risus vel varius ultricies</a>
                                        <p>Mar 28, 2016 12:45 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Donec pretium dictum fermentum</a>
                                        <p>Mar 28, 2016 11:59 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Phasellus nunc dolor, laoreet eu tristique sit amet, bibendum ut orci</a>
                                        <p>Mar 28, 2016 11:58 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nullam pharetra nulla eget nulla tincidunt aliquet</a>
                                        <p>Mar 28, 2016 11:57 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Vestibulum gravida pellentesque lacus ut maximus</a>
                                        <p>Mar 28, 2016 1:34 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Aliquam feugiat rhoncus ex, quis convallis dui dapibus eget</a>
                                        <p>Mar 28, 2016 12:49 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis posuere risus vel varius ultricies</a>
                                        <p>Mar 28, 2016 12:45 PM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Donec pretium dictum fermentum</a>
                                        <p>Mar 28, 2016 11:59 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Phasellus nunc dolor, laoreet eu tristique sit amet, bibendum ut orci</a>
                                        <p>Mar 28, 2016 11:58 AM ET</p>
                                    </div>
                                    <div class="latest-grid-info">
                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nullam pharetra nulla eget nulla tincidunt aliquet</a>
                                        <p>Mar 28, 2016 11:57 AM ET</p>
                                    </div>
                                </div>
                            </div>
                            <!-- //latest -->
                        </div>
                        <!-- //top-grid-right -->
                        <!-- top-grid-left -->
                        <div class="col-md-9 top-grid-left basket-top-grid-left">
                            <!-- top-big-grids -->
                            <div class="top-big-grids">
                                <div class="col-md-8 top-grid-left-left s-top-grid-left-left">
                                    <div class="top-grid-left-left-grids">
                                        <div class="s-top-grid-left-img">
                                            <div  class="single-img-grid">
                                                <h2><?php echo $article->title;?></h2>
                                                <div class="description-article"><?php echo $article->des_article;?></div>
                                                <div><img src="<?php echo $this->request->webroot . "uploads/articles/$article->image" ?>"/></div>
                                                <div class="s-para">
                                                    <?php echo $article->content;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- three-grids -->
                                    <div class="three-grids">
                                        <div class="three-grid">
                                            <div class="three-grid-info">
                                                <div class="three-grid-img">
                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f1.jpg" alt="" /></a>
                                                </div>
                                                <div class="three-grid-text">
                                                    <div class="three-grid-text-heading">
                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Fusce ornare congue ligula vel placerat</a>
                                                    </div>
                                                    <div class="t-grid author-grid">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> Vestibulum</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="three-grid">
                                            <div class="three-grid-info">
                                                <div class="three-grid-img">
                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f2.jpg" alt="" /></a>
                                                </div>
                                                <div class="three-grid-text">
                                                    <div class="three-grid-text-heading">
                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Fusce ornare congue ligula vel placerat</a>
                                                    </div>
                                                    <div class="t-grid author-grid">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 2h</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> Cras pretium </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="three-grid">
                                            <div class="three-grid-info">
                                                <div class="three-grid-img">
                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f3.jpg" alt="" /></a> 
                                                </div>
                                                <div class="three-grid-text">
                                                    <div class="three-grid-text-heading">
                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Fusce ornare congue ligula vel placerat</a>
                                                    </div>
                                                    <div class="t-grid author-grid">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
                                                            <li><a href="#"><i class="fa fa-user"></i> Phasellus</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!-- //three-grids -->
                                    <div class="comments-grid">
                                        <div class="comments-heading">
                                            <h3>Comments</h3>
                                        </div>
                                        <div class="response">
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="<?php echo $this->request->webroot . "img/" ?>images/at1.jpg" alt="">
                                                    </a>
                                                    <h5><a href="#">Admin</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>June 21, 2016</li>
                                                        <li><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Reply</a></li>
                                                    </ul>
                                                    <div class="media response-info">
                                                        <div class="media-left response-text-left">
                                                            <a href="#">
                                                                <img class="media-object" src="<?php echo $this->request->webroot . "img/" ?>images/at2.jpg" alt="">
                                                            </a>
                                                            <h5><a href="#">Admin</a></h5>
                                                        </div>
                                                        <div class="media-body response-text-right">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                            <ul>
                                                                <li>June 21, 2016</li>
                                                                <li><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Reply</a></li>
                                                            </ul>		
                                                        </div>
                                                        <div class="clearfix"> </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="<?php echo $this->request->webroot . "img/" ?>images/at3.jpg" alt="">
                                                    </a>
                                                    <h5><a href="#">Admin</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <ul>
                                                        <li>June 21, 2016</li>
                                                        <li><a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Reply</a></li>
                                                    </ul>		
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="opinion">
                                        <h3>Leave Your Comment</h3>
                                        <form>
                                            <input  type="text" placeholder="Name" required="">
                                            <input type="text" placeholder="Email" required="">
                                            <textarea  placeholder="Message" required=""></textarea>
                                            <input  type="submit" value="SEND">
                                        </form>
                                    </div>
                                </div>
                                <!-- top-grid-left-right -->
                                <div class="col-md-4 top-grid-left-right s-top-grid-left-right">
                                    <!-- most-view-grids -->
                                    <div class="most-view-grids s-most-view-grids">
                                        <div class="most-view-grids-heading">
                                            <h3>Most Viewed</h3>
                                        </div>
                                        <div class="sap_tabs">
                                            <div id="horizontalTab" style="display: block; margin: 0px; width: 100%;">
                                                <ul class="resp-tabs-list">
                                                    <li class="resp-tab-item grid1 resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Today</span></li>
                                                    <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>This Week</span></li>
                                                    <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>This Month</span></li>
                                                    <div class="clearfix"></div>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="resp-tabs-container">
                                                    <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Today</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f7.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Sed neque nibh</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f8.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="#">Nam efficitur</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f10.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Quisque lacinia</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f13.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis accumsan</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f15.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nulla facilisi</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>This Week</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f15.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nulla facilisi</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f7.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Sed neque nibh</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f8.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nam efficitur</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f10.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Quisque lacinia</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f13.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis accumsan</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                    </div>
                                                    <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>This Month</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f13.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Duis accumsan</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f15.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nulla facilisi</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f7.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Sed neque nibh</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f8.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Nam efficitur</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                        <div class="news-right-grids most-view-left">
                                                            <div class="news-right-grids-img most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>"><img src="<?php echo $this->request->webroot . "img/" ?>images/f10.jpg" alt=""></a>
                                                            </div>
                                                            <div class="news-right-grids-info most-view-left-img">
                                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "single"]); ?>">Quisque lacinia</a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //most-view-grids -->
                                </div>
                                <!-- top-grid-left-right -->
                                <div class="clearfix"> </div>
                            </div>
                            <!-- //top-big-grids -->
                        </div>
                        <!-- //top-grid-left -->
                        <div class="clearfix"> </div>
                    </div>                  
                </div>
            </div>
            <!-- Modal -->
         
            <!--footer section start-->
            <?php echo $this->element("footer"); ?>
            <!--footer section end-->
        </div>
    </section>

</body>
</html>