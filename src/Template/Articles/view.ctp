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
                                        <div class="s-top-grid-left-img">
                                            <div  class="single-img-grid">
                                                <div>
                                                    <?php if ($Auth->user()) { ?>
                                                        <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "edit", $id]); ?>" class="btn btn-primary"> 

                                                            Edit

                                                        </a>

                                                        <a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "delete", $id]); ?>" class="btn btn-primary"> 
                                                            Delete
                                                        </a>
                                                    <?php }
                                                    ?>                                                </div>
                                                <h2><?php echo $article->title; ?></h2>
                                                <div class="description-article"><?php echo $article->des_article; ?></div>
                                                <!--<div class="image-article-view"><img style="width: 100%;" src="<?php echo $this->request->webroot . "uploads/articles/$article->image" ?>"/></div>-->
                                                <div class="s-para">
                                                    <?php echo $article->content; ?>
                                                </div>
                                            </div>
                                        </div>
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
            <!-- Modal -->

            <!--footer section start-->
            <?php echo $this->element("footer"); ?>
            <!--footer section end-->
        </div>
    </section>

</body>
</html>