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
                                            <div class="t-grid">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 2h</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i> Tom</a></li>
                                                </ul>
                                            </div>
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
                                                        <div class="t-grid author-grid">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
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
                                                        <div class="t-grid author-grid two-grid-author">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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
                                        <div class="menu-title">C1</div>
                                        <?php foreach ($resultsC1 as $row): ?>
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
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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
                                                                <li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
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

                                            <div class="t-grid right-info-t-grid">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
                                                    <li><a href="#"><i class="fa fa-user"></i> Quisque massa</a></li>
                                                </ul>
                                            </div>
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
                        <!-- today-match -->
                        <div class="today-match">
                            <div class="today-match-heading">
                                <h2>Lịch thi đấu</h2>
                            </div>
                            <div class="match-grid">
                                <div class="match-info">
                                    <ul>
                                        <?php foreach ($scheduleNHA as $row): 
                                            $start_date = date('H:i d/m', strtotime($row->time_start));
                                            ?>
                                            <li><span><?php echo $start_date; ?></span> <?php echo $row->team_home; ?> <span class="color">vs</span> <?php echo $row->team_guest; ?></li>
                                        <?php endforeach;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                        <div class="clearfix"> </div>

                    </div>
                    <!-- //top-grid-right -->
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="login-body">
                            <div class="login-heading">
                                <h3>Login</h3>
                            </div>
                            <div class="login-info">
                                <form>
                                    <input type="text" class="user" name="email" placeholder="Email" required="">
                                    <input type="password" name="password" class="lock" placeholder="Password">
                                    <div class="forgot-top-grids">
                                        <div class="forgot-grid">
                                            <ul>
                                                <li>
                                                    <input type="checkbox" id="brand1" value="">
                                                    <label for="brand1"><span></span>Remember me</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="forgot">
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <input type="submit" name="Sign In" value="Login">
                                    <div class="signup-text">
                                        <a href="signup.html">Don't have an account? Create one now</a>
                                    </div>
                                    <hr>
                                    <h2>or login with</h2>
                                    <div class="login-icons">
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //	Modal -->
        <!--footer section start-->
        <?php echo $this->element("footer"); ?>
        <!--footer section end-->

    </div>


    <!-- main content end-->
</section>


</body>
</html>