<!-- today-match -->
<div class="today-match">
    <div class="today-match-heading">
        <h2>Lịch thi đấu và kết quả</h2>
    </div>
    <div class="match-grid">
        <div class="match-info">
            <ul>
                <?php
                foreach ($scheduleNHA as $row):
                    ?>
                    <li><span><?php echo $row->start_time; ?></span>  <?php echo $row->name; ?></li>
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
                            <?php echo $row->name_team_rank ?>
                        </td>
                        <td class="t-points">
                            <?php echo $row->match_rank ?>
                        </td>
                        <td class="t-points p-points">
                            <?php echo $row->score_rank ?>
                        </td>
                        <td class="t-points p-points">
                            <?php echo $row->goals_rank . "-" . $row->goals_lost_rank ?>
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
                                <?php echo $row->top_goals ?>
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