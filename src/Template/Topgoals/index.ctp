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

                                <table style="width:100%;">
                                    <thead>
                                    <th class="td-rank">
                                        Rank
                                    </th>
                                    <th class="td-rank">
                                        Cầu Thủ
                                    </th>
                                    <th class="td-rank">
                                        Đội bóng
                                    </th>
                                    <th class="td-rank">
                                        Bàn Thắng
                                    </th>
                                    <th class="td-rank">
                                        Country
                                    </th>
                                    <?php
                                    if ($Auth->user()) {
                                        echo "<th class='td-rank'><th>";
                                    }
                                    ?>
                                    </thead>
                                    <tbody>
                                        <tr id="addGoal">
                                            <?php echo $this->Form->create("Topgoals", array('url' => '/addTopgoal')); ?>
                                            <td class="td-rank">
                                                ADD
                                            </td>
                                            <td class="td-rank">
                                                <input  type="text" name="name_player" id="name_player" >
                                            </td>
                                            <td class="td-rank">
                                                <input  type="text" name="name_club" id="name_club" >

                                            </td>
                                            <td class="td-rank">
                                                <input  type="number" name="top_goals" id="top_goals" >
                                            </td>
                                            <td class="td-rank">
                                                <input  type="text" name="country_goal" id="country_goal">
                                            </td>


                                            <?php
                                            if ($Auth->user()) {
                                                echo "<td class='td-rank'>";
                                                echo "<button type='submit'>Add</button>";
                                                echo "<td>";
                                            }
                                            ?>
                                            <?php echo $this->Form->end(); ?>
                                        </tr>
                                        <?php if ($isRank != 0) { ?>
                                            <?php
                                            $index = 0;
                                            foreach ($rankNHA as $row):
                                                $index++;
                                                ?>
                                                <tr id="<?php echo $row->id; ?>">
                                                    <?php echo $this->Form->create("Topgoals", array('url' => '/editTopgoal/' . $row->id)); ?>
                                                    <td class="td-rank">
                                                        <?php echo $index; ?>
                                                    </td>
                                                    <td class="td-rank">
                                                        <input  type="text" name="name_player" id="name_player" value="<?php echo $row->name_player; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <input  type="text" name="name_club" id="name_club" value="<?php echo $row->name_club; ?>">

                                                    </td>
                                                    <td class="td-rank">
                                                        <input  type="number" name="top_goals" id="top_goals" value="<?php echo $row->top_goals; ?>">
                                                    </td>
                                                    <td class="td-rank">
                                                        <input  type="text" name="country_goal" id="country_goal" value="<?php echo $row->country_goal; ?>">
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
                                        <?php } ?>

                                    </tbody>
                                </table>

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