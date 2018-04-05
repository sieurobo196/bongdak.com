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
            <div id="page-wrapper">
                <div class="top-grids">
                    <div class="top-grids-info">
                        <div class="col-md-9 top-grid-left basket-top-grid-left">
                            <!-- player-rank -->

                            <div class="player-rank">
                                <div class="ranking-heading">
                                    <h3>Bảng xếp hạng</h3>
                                </div>
                                <?php if ($isRank != 0) { ?>
                                    <table style="width:100%;">
                                        <thead>
                                        <th class="td-rank">
                                            H
                                        </th>
                                        <th class="td-rank">
                                            Đội bóng
                                        </th>
                                        <th class="td-rank">
                                            ST
                                        </th>
                                        <th class="td-rank">
                                            T
                                        </th>
                                        <th class="td-rank">
                                            H
                                        </th>
                                        <th class="td-rank">
                                            B
                                        </th>
                                        <th class="td-rank">
                                            TG
                                        </th>
                                        <th class="td-rank">
                                            TH
                                        </th>
                                        <th class="td-rank">
                                            HS
                                        </th>
                                        <th class="td-rank">
                                            Đ
                                        </th>
                                        <?php
                                        if ($Auth->user()) {
                                            echo "<th class='td-rank'><th>";
                                        }
                                        ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $index = 0;
                                            foreach ($rankNHA as $row):
                                                $index++;
                                                ?>
                                                <tr id="<?php echo $row->id; ?>">
                                                    <?php echo $this->Form->create("Ranks", array('url' => '/editRecordRank/'.$row->id)); ?>
                                                    <td class="td-rank">
                                                        <?php echo $index; ?>
                                                    </td>
                                                    <td class="td-rank">
                                                        <?php echo $row->name_team_rank ?>
                                                    </td>
                                                    <td class="td-rank">

                                                        <input  type="number" name="match" id="match" value="<?php echo $row->match_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">

                                                        <input  type="number" name="match_win" id="match_win" value="<?php echo $row->match_win_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <input type="number" name="match_draw" id="match_draw" value="<?php echo $row->match_draw_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">

                                                        <input  type="number" name="match_lose" id="match_lose" value="<?php echo $row->match_lose_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <input type="number" name="goals" id="goals" value="<?php echo $row->goals_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <input type="number" name="goals_lost" id="goals_lost" value="<?php echo $row->goals_lost_rank; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <?php echo $row->goals_rank . "-" . $row->goals_lost_rank ?>
                                                    </td>
                                                    <td class="td-rank">
                                                        <input type="number" name="score" id="score" value="<?php echo $row->score_rank; ?>">

                                                    </td>
                                                    <?php
                                                    if ($Auth->user()) {
                                                        echo "<td class='td-rank'>";
                                                        echo "<button type='submit'>Save</button>";
                                                        echo "<td>";
                                                    }
                                                    ?>
                                                    <?php echo $this->Form->end(); ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                            <!-- //player-rank -->
                        </div>
                        <div class="col-md-3 top-grid-right basket-top-grid-right s-top-grid-right">
                            <div class="player-rank">kkk</div>
                        </div>
                    </div>

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