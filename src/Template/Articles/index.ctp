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
                        <!-- top-grid-left -->
                        <div class="col-md-9 top-grid-left">
                            <!-- top-big-grids -->
                            <div class="top-big-grids">
                                <div class="col-md-8 top-grid-left-left">
                                    <!--<h1>Tin mới</h1>-->
                                    <!-- article top -->
                                    <div class="top-grid-left-left-grids">
                                        <div class="col-md-8 top-grid-left-img">
                                            <div data-video="Bzt6h5uFWOU" id="video"> 
                                                <img src="<?php echo $this->request->webroot . "uploads/articles/$articleTop->image" ?>" alt="Use your own screenshot."> 
                                            </div>
                                        </div>
                                        <div class="col-md-4 top-grid-left-info">
                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $articleTop->type, $articleTop->map_url]); ?>"><?php echo "$articleTop->title"; ?></a>
                                            <p><?php echo "$articleTop->des_article"; ?></p>
                                            <!--                                            <div class="t-grid">
                                                                                            <ul>
                                                                                                <li><a href="#"><i class="fa fa-clock-o"></i> <?php
                                            $timeArticle = time() - strtotime($articleTop->createdDate);
//                                                            echo $timeArticle;
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
                                            } elseif (round(($timeArticle / 60 / 60 / 24) < 365)) {
                                                echo round($timeArticle / 60 / 60 / 24) . " ngày";
                                            } else {
                                                echo date("d-m-Y", strtotime($articleTop->createdDate));
                                            }
                                            ?></a></li>
                                                                                                <li><a href="#"><i class="fa fa-user"></i> Tom</a></li>
                                                                                            </ul>
                                                                                        </div>-->
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!--tin moi 3 tin-->
                                    <!-- three-grids -->
                                    <div class="three-grids">
                                        <?php foreach ($results as $row): ?>
                                            <div class="three-grid">
                                                <div class="three-grid-info">
                                                    <div class="three-grid-img">
                                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-list-new" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                    </div>
                                                    <div class="three-grid-text">
                                                        <div class="three-grid-text-heading">
                                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                        </div>
                                                        <!--                                                        <div class="t-grid author-grid">
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
                                                                                                                    </ul>
                                                                                                                </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!-- //three-grids -->
                                    <!-- two-grids NHA -->
                                    <div class="two-grids">
                                        <div class="menu-title">NGOẠI HẠNG ANH</div>
                                        <?php foreach ($resultsNHA as $row): ?>
                                            <div class="col-md-6 two-grid-left">
                                                <div class="two-grid-info">
                                                    <div class="two-grid-img">
                                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                    </div>
                                                    <div class="two-grid-text">
                                                        <div class="three-grid-text-heading two-grid-text-heading">
                                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                            <p><?php echo $row->des_article ?> </p>
                                                        </div>
                                                        <!--                                                        <div class="t-grid author-grid two-grid-author">
                                                                                                                    <ul>
                                                                                                                        <li><a href="#"><i class="fa fa-clock-o"></i> <?php
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
                                                                                                                    </ul>
                                                                                                                </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                        <div class="clearfix"> </div>
                                    </div>	
                                    <div class="two-grids">
                                        <div class="menu-title">Các giải đấu khác</div>
                                        <?php foreach ($resultsOther as $row): ?>
                                            <div class="col-md-6 two-grid-left">
                                                <div class="two-grid-info">
                                                    <div class="two-grid-img">
                                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                    </div>
                                                    <div class="two-grid-text">
                                                        <div class="three-grid-text-heading two-grid-text-heading">
                                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                            <p><?php echo $row->des_article; ?> </p>
                                                        </div>
                                                        <!--                                                        <div class="t-grid author-grid two-grid-author">
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
                                                                                                                    </ul>
                                                                                                                </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <!--                                    <div class="two-grids">
                                                                            <div class="menu-title">LALIGA</div>
                                    <?php foreach ($resultsLALIGA as $row): ?>
                                                                                        <div class="col-md-6 two-grid-left">
                                                                                            <div class="two-grid-info">
                                                                                                <div class="two-grid-img">
                                                                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                                                                </div>
                                                                                                <div class="two-grid-text">
                                                                                                    <div class="three-grid-text-heading two-grid-text-heading">
                                                                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                                                                        <p><?php echo $row->des_article; ?> </p>
                                                                                                    </div>
                                                                                                    <div class="t-grid author-grid two-grid-author">
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
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                                                            <div class="clearfix"> </div>
                                                                        </div>
                                                                        <div class="two-grids">
                                                                            <div class="menu-title">BUNDESLIGA</div>
                                    <?php foreach ($resultsDLA as $row): ?>
                                                                                        <div class="col-md-6 two-grid-left">
                                                                                            <div class="two-grid-info">
                                                                                                <div class="two-grid-img">
                                                                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                                                                </div>
                                                                                                <div class="two-grid-text">
                                                                                                    <div class="three-grid-text-heading two-grid-text-heading">
                                                                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                                                                        <p><?php echo $row->des_article; ?> </p>
                                                                                                    </div>
                                                                                                    <div class="t-grid author-grid two-grid-author">
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
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                                                            <div class="clearfix"> </div>
                                                                        </div>
                                                                        <div class="two-grids">
                                                                            <div class="menu-title">SERIA</div>
                                    <?php foreach ($resultsSRA as $row): ?>
                                                                                        <div class="col-md-6 two-grid-left">
                                                                                            <div class="two-grid-info">
                                                                                                <div class="two-grid-img">
                                                                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                                                                </div>
                                                                                                <div class="two-grid-text">
                                                                                                    <div class="three-grid-text-heading two-grid-text-heading">
                                                                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                                                                        <p><?php echo $row->des_article; ?> </p>
                                                                                                    </div>
                                                                                                    <div class="t-grid author-grid two-grid-author">
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
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                                                            <div class="clearfix"> </div>
                                                                        </div>
                                                                        <div class="two-grids">
                                                                            <div class="menu-title">LIGUE 1</div>
                                    <?php foreach ($resultsL1 as $row): ?>
                                                                                        <div class="col-md-6 two-grid-left">
                                                                                            <div class="two-grid-info">
                                                                                                <div class="two-grid-img">
                                                                                                    <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                                                                </div>
                                                                                                <div class="two-grid-text">
                                                                                                    <div class="three-grid-text-heading two-grid-text-heading">
                                                                                                        <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?></a>
                                                                                                        <p><?php echo $row->des_article; ?> </p>
                                                                                                    </div>
                                                                                                    <div class="t-grid author-grid two-grid-author">
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
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                        <?php
                                    endforeach;
                                    ?>
                                                                            <div class="clearfix"> </div>
                                                                        </div>-->


                                </div>
                            </div>
                            <!-- top-grid-left-right -->

                            <div class="col-md-4 top-grid-left-right">
                                <?php foreach ($resultsTop as $row): ?>
                                    <div class="top-grid-left-right-grid">
                                        <div class="top-grid-left-right-img">
                                            <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><img src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>" alt="" /></a>
                                        </div>
                                        <div class="top-grid-left-right-info">
                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->type, $row->map_url]); ?>"><?php echo $row->title; ?> </a>

                                            <!--                                            <div class="t-grid right-info-t-grid">
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
                                                                                                <li><a href="#"><i class="fa fa-user"></i> Quisque massa</a></li>
                                                                                            </ul>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                                ?>

                            </div>
                            <!-- top-grid-left-right -->
                            <div class="clearfix"> </div>
                        </div>
                        <!-- //top-big-grids -->
                    </div>
                    <!-- //top-grid-left -->
                    <!-- top-grid-right -->
                    <div class="col-md-3 top-grid-right">
                        <?php echo $this->element("rank_schedule"); ?>
                    </div>
                    <!-- //top-grid-right -->
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>

        <!--footer section start-->
        <?php echo $this->element("footer"); ?>
        <!--footer section end-->

    </div>


    <!-- main content end-->
</section>


</body>
</html>