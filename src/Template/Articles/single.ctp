<?php echo $this->element("head"); ?> 
<style>
    @media only screen and (max-width: 992px) {
        .top-news.features {
            display: none;
        }
        .col-md-4.top-grid-left-right.s-top-grid-left-right {
            display: none;
        }
    }

</style>
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
                                    <h3>Tin hot</h3>
                                </div>
                                <div class="top-news-grids">
                                    <?php foreach ($resultsTop as $row): ?>
                                        <div class="top-news-grid">
                                            <div class="top-news-grid-heading">
                                                <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title ?> </a>
                                            </div>
                                            <!--                                            <div class="t-grid top-th-grid">
                                                                                            <ul>
                                                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 
                                            <?php
                                            $timeArticle = time() - strtotime($row->createdDate);
                                            if (round($timeArticle / 60) == 0) {
                                                echo "1 phút";
                                            } elseif (round($timeArticle / 60) < 60) {
                                                echo round($timeArticle / 60) . "phút";
                                            } elseif (round(($timeArticle / 60 / 60) == 0)) {
                                                echo "1 giờ";
                                            } elseif (round(($timeArticle / 60 / 60) < 24)) {
                                                echo round($timeArticle / 60 / 60) . " giờ";
                                            } elseif (round(($timeArticle / 60 / 60 / 24) == 0)) {
                                                echo "1 ngày";
                                            }
//                                                            elseif (round(($timeArticle / 60 / 60 / 24) < 365)) {
//                                                                echo round($timeArticle / 60 / 60 / 24) . " ngày";
//                                                            }
                                            else {
                                                echo date("d-m-Y", strtotime($row->createdDate));
                                            }
                                            ?>
                                                                                                    </a></li>
                                                                                                <li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
                                                                                            </ul>
                                                                                        </div>-->
                                        </div>
                                        <?php
                                    endforeach;
                                    ?>

                                </div>
                            </div>
                            <!-- latest -->
                            <!--                            <div class="today-match latest">
                                                            <div class="today-match-heading latest-heading">
                                                                <h3>Latest Headlines</h3>
                                                            </div>
                            
                                                        </div>-->
                            <!-- //latest -->
                        </div>
                        <!-- //top-grid-right -->
                        <!-- top-grid-left -->
                        <div class="col-md-9 top-grid-left basket-top-grid-left">
                            <!-- top-big-grids -->
                            <div class="top-big-grids">
                                <div class="col-md-8 top-grid-left-left s-top-grid-left-left">

                                    <div class="top-grid-left-left-grids">
                                        <?php
                                        $index = 0;
                                        foreach ($resultsNHA as $row):
                                            $index++;
                                            if ($index == 1) {
                                                ?>
                                                <div class="col-md-8 top-grid-left-img">
                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img src="<?php echo $this->request->webroot . "uploads/articles/$row->image" ?>" alt="" ></a>
                                                </div>
                                                <div class="col-md-4 top-grid-left-info">
                                                    <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                    <p><?php echo $row->des_article; ?></p>
                                                    <!--                                                    <div class="t-grid basket-t-grid athlete-t-grid">
                                                                                                            <ul>
                                                                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 
                                                    <?php
                                                    $timeArticle = time() - strtotime($row->createdDate);
                                                    if (round($timeArticle / 60) == 0) {
                                                        echo "1 phút";
                                                    } elseif (round($timeArticle / 60) < 60) {
                                                        echo round($timeArticle / 60) . "phút";
                                                    } elseif (round(($timeArticle / 60 / 60) == 0)) {
                                                        echo "1 giờ";
                                                    } elseif (round(($timeArticle / 60 / 60) < 24)) {
                                                        echo round($timeArticle / 60 / 60) . " giờ";
                                                    } elseif (round(($timeArticle / 60 / 60 / 24) == 0)) {
                                                        echo "1 ngày";
                                                    }
//                                                            elseif (round(($timeArticle / 60 / 60 / 24) < 365)) {
//                                                                echo round($timeArticle / 60 / 60 / 24) . " ngày";
//                                                            }
                                                    else {
                                                        echo date("d-m-Y", strtotime($row->createdDate));
                                                    }
                                                    ?>
                                                                                                                    </a></li>
                                                                                                                <li><a href="#"><i class="fa fa-user"></i> Ornare Congue</a></li>
                                                                                                            </ul>
                                                                                                        </div>-->
                                                </div>
                                            <?php } endforeach; ?>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <!-- three-grids -->
                                    <div class="three-grids">
                                        <?php
                                        $index = 0;
                                        foreach ($resultsNHA as $row):
                                            $index++;
                                            if ($index > 1 && $index < 5) {
                                                ?>
                                                <div class="three-grid">
                                                    <div class="three-grid-info">
                                                        <div class="three-grid-img">
                                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img src="<?php echo $this->request->webroot . "uploads/articles/$row->image" ?>" alt="" /></a>
                                                        </div>
                                                        <div class="three-grid-text">
                                                            <div class="three-grid-text-heading">
                                                                <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                            </div>
                                                            <!--                                                            <div class="t-grid author-grid">
                                                                                                                            <ul>
                                                                                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 
                                                            <?php
                                                            $timeArticle = time() - strtotime($row->createdDate);
                                                            if (round($timeArticle / 60) == 0) {
                                                                echo "1 phút";
                                                            } elseif (round($timeArticle / 60) < 60) {
                                                                echo round($timeArticle / 60) . "phút";
                                                            } elseif (round(($timeArticle / 60 / 60) == 0)) {
                                                                echo "1 giờ";
                                                            } elseif (round(($timeArticle / 60 / 60) < 24)) {
                                                                echo round($timeArticle / 60 / 60) . " giờ";
                                                            } elseif (round(($timeArticle / 60 / 60 / 24) == 0)) {
                                                                echo "1 ngày";
                                                            }
//                                                            elseif (round(($timeArticle / 60 / 60 / 24) < 365)) {
//                                                                echo round($timeArticle / 60 / 60 / 24) . " ngày";
//                                                            }
                                                            else {
                                                                echo date("d-m-Y", strtotime($row->createdDate));
                                                            }
                                                            ?>
                                                                                                                                    </a></li>
                                                                                                                                <li><a href="#"><i class="fa fa-user"></i> Vestibulum</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } endforeach; ?>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!-- //three-grids -->
                                    <div class="two-grids">
                                        <?php
                                        $index = 0;
                                        foreach ($resultsNHA as $row):
                                            $index++;
                                            if ($index >= 5) {
                                                ?>
                                                <div class="col-md-6 two-grid-left">
                                                    <div class="two-grid-info">
                                                        <div class="two-grid-img">
                                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img width="350px" height="200px" src="<?php echo $this->request->webroot . "uploads/articles/$row->image" ?>" alt="" /></a>
                                                        </div>
                                                        <div class="two-grid-text">
                                                            <div class="three-grid-text-heading two-grid-text-heading">
                                                                <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                                <p><?php echo $row->des_article; ?></p>
                                                            </div>
                                                            <!--                                                            <div class="t-grid author-grid two-grid-author">
                                                                                                                            <ul>
                                                                                                                                <li><a href="#"><i class="fa fa-clock-o"></i>  <?php
                                                            $timeArticle = time() - strtotime($row->createdDate);
                                                            if (round($timeArticle / 60) == 0) {
                                                                echo "1 phút";
                                                            } elseif (round($timeArticle / 60) < 60) {
                                                                echo round($timeArticle / 60) . "phút";
                                                            } elseif (round(($timeArticle / 60 / 60) == 0)) {
                                                                echo "1 giờ";
                                                            } elseif (round(($timeArticle / 60 / 60) < 24)) {
                                                                echo round($timeArticle / 60 / 60) . " giờ";
                                                            } elseif (round(($timeArticle / 60 / 60 / 24) == 0)) {
                                                                echo "1 ngày";
                                                            }
//                                                            elseif (round(($timeArticle / 60 / 60 / 24) < 365)) {
//                                                                echo round($timeArticle / 60 / 60 / 24) . " ngày";
//                                                            }
                                                            else {
                                                                echo date("d-m-Y", strtotime($row->createdDate));
                                                            }
                                                            ?></a></li>
                                                                                                                                <li><a href="#"><i class="fa fa-user"></i> Suspendisse</a></li>
                                                                                                                            </ul>
                                                                                                                        </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } endforeach; ?>

                                        <!--<div class="clearfix"> </div>-->
                                        <!--                                        <div class="two-grids">
                                                                                    <ul class="pagination">
                                                                                        <li class="active"><a href="#">1</a></li>
                                                                                        <li><a href="#">2</a></li>
                                                                                        <li><a href="#">3</a></li>
                                                                                        <li><a href="#">4</a></li>
                                                                                        <li><a href="#">5</a></li>
                                                                                    </ul>
                                                                                </div>-->
                                    </div>	

                                </div>
                                <!-- top-grid-left-right -->
                                <div class="col-md-4 top-grid-left-right s-top-grid-left-right">
                                     <?php echo $this->element("rank_schedule"); ?>
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
            
            <!--footer section start-->
            <?php echo $this->element("footer"); ?>
            <!--footer section end-->
        </div>
    </section>

</body>
</html>