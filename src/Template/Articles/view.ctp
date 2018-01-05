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
                                            <div class="t-grid top-th-grid">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
                                                    <!--<li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>-->
                                                </ul>
                                            </div>
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
                                                <div><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "edit", $id]); ?>"> 
                                                       edit

                                                    </a></div>
                                                <h2><?php echo $article->title; ?></h2>
                                                <div class="description-article"><?php echo $article->des_article; ?></div>
                                                <div class="image-article-view"><img style="width: 100%;" src="<?php echo $this->request->webroot . "uploads/articles/$article->image" ?>"/></div>
                                                <div class="s-para">
                                                    <?php echo $article->content; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- top-grid-left-right -->
                                <div class="col-md-4 top-grid-left-right s-top-grid-left-right">
                                    <!-- most-view-grids -->
                                    <!-- today-match -->
                                    <!--                                    <div class="today-match">
                                                                            <div class="today-match-heading">
                                                                                <h2>Lịch thi đấu</h2>
                                                                            </div>
                                                                            <div class="match-grid">
                                                                                <div class="match-info">
                                                                                    <ul>
                                                                                        <li><span>16:00</span> Germany <span class="color">Vs</span> England</li>
                                                                                        <li><span>17:30</span> Hungary <span class="color">Vs</span> Croatia</li>
                                                                                        <li><span>18:45</span> Finland <span class="color">Vs</span> Austria</li>
                                                                                        <li><span>19:00</span> Poland <span class="color">Vs</span> Spain</li>
                                                                                        <li><span>20:15</span> Italy <span class="color">Vs</span> France</li>
                                                                                        <li><span>20:45</span> Portugal <span class="color">Vs</span> Netherlands</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                    <!-- //today-match -->

                                    <!-- player-rank -->
                                    <div class="player-rank">
                                        <div class="ranking-heading">
                                            <h3>Bảng xếp hạng</h3>
                                        </div>
                                        <div class="ranking-grids">
                                            <table>
                                                <thead>
                                                <th class="th-rank">
                                                    Hạng
                                                </th>
                                                <th class="th-country">
                                                    Đội bóng
                                                </th>
                                                <th class="th-t-points">
                                                    Trận
                                                </th>
                                                <th class="th-p-points">
                                                    Điểm
                                                </th>
                                                <th class="th-p-points">
                                                    Hiệu số
                                                </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $index = 0;
                                                    foreach ($rankNHA as $row):
                                                        $index++;
                                                        ?>
                                                        <tr class="b-color">
                                                            <td class="rank">
                                                                <?php echo $index; ?>
                                                            </td>
                                                            <td class="country">
                                                                <?php echo $row->name_team ?>
                                                            </td>
                                                            <td class="t-points">
                                                                <?php echo $row->match ?>
                                                            </td>
                                                            <td class="t-points p-points">
                                                                <?php echo $row->score ?>
                                                            </td>
                                                            <td class="t-points p-points">
                                                                <?php echo $row->goals - $row->goals_lost ?>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- //player-rank -->
                                    <!-- ranking -->
                                    <div class="ranking">
                                        <div class="ranking-heading">
                                            <h3>Top ghi bàn</h3>
                                        </div>
                                        <div class="ranking-grids">
                                            <table>
                                                <thead>
                                                <th class="th-rank">
                                                    Hạng
                                                </th>
                                                <th class="th-country">
                                                    Cầu Thủ
                                                </th>
                                                <th class="th-t-points">
                                                    Đội bóng
                                                </th>
                                                <th class="th-p-points">
                                                    Bàn Thắng
                                                </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $index = 0;
                                                    foreach ($topGoalsNHA as $row):
                                                        $index++;
                                                        if ($index < 11) {
                                                            ?>

                                                            <tr class="b-color">
                                                                <td class="rank">
                                                                    <?php echo $index; ?>
                                                                </td>
                                                                <td class="country">
                                                                    <?php echo $row->name_player ?>
                                                                </td>
                                                                <td class="t-points">
                                                                    <?php echo $row->name_club ?>
                                                                </td>
                                                                <td class="t-points p-points">
                                                                    <?php echo $row->goals ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    endforeach;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- //ranking -->
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