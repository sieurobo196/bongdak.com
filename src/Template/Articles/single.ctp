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
                                   <?php foreach ($resultsNHA as $row): ?>
                                            <div class="two-grid-left">
                                                <div class="two-grid-info">
                                                    <div class="two-grid-img">
                                                        <a href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->map_url]); ?>"><img class="image-article-detail" src="<?php echo $this->request->webroot . 'uploads/articles/' . $row->image; ?>"/></a>
                                                    </div>
                                                    <div class="two-grid-text">
                                                        <div class="three-grid-text-heading two-grid-text-heading">
                                                            <a class="text" href="<?php echo $this->Url->build(["controller" => "articles", "action" => "view", $row->map_url]); ?>"><?php echo $row->title; ?></a>
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
                                </div>
                                <!-- top-grid-left-right -->
                                <div class="col-md-4 top-grid-left-right s-top-grid-left-right">
                                    <!-- today-match -->
                                    <div class="today-match">
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
    </section>

</body>
</html>