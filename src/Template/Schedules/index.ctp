<?php echo $this->element("head"); ?>
<style>
     td.td-schedule{
        border: 1px solid #65a530 !important;
    }
    th.td-schedule{
        border: 1px solid #65a530 !important;
    }
    
    td.td-schedule>input {
        width: 100%;
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
            <div id="page-wrapper">
                <div class="top-grids">
                    <div class="top-grids-info">
                        <div class="col-md-9 top-grid-left basket-top-grid-left">
                            <!-- player-rank -->

                            <div class="player-rank">
                                <div class="ranking-heading">
                                    <h3>Lịch thi đấu</h3>
                                </div>
                                <?php if ($isSchedule != 0) { ?>
                                    <table style="width:100%;">
                                        <thead>

                                        <th class="td-schedule" style="width: 5%">
                                            STT
                                        </th>
                                        <th class="td-schedule">
                                            Name
                                        </th>
                                        <th class="td-schedule">
                                            Time
                                        </th>
                                        <th class="td-schedule" style="width: 5%">
                                            Pre
                                        </th>
                                        <th class="td-schedule" style="width: 5%">
                                            Done
                                        </th>
                                        <th class="td-schedule" style="width: 10%">
                                            Country
                                        </th>
                                        <?php
                                        if ($Auth->user()) {
                                            echo "<th class='td-schedule' style='width: 10%'><th>";
                                        }
                                        ?>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <?php echo $this->Form->create("Schedules", array('url' => '/addRecordSchedule/')); ?>
                                                <td class="td-schedule">
                                                    
                                                </td>

                                                <td class="td-schedule">
                                                    <input  type="text" name="name" id="name" placeholder="Insert name">
                                                </td>
                                                <td class="td-schedule">

                                                    <input  type="text" name="start_time" id="start_time" placeholder="Insert start time">
                                                </td>
                                                <td class="td-schedule">

                                                    <input  type="number" name="is_pre_start" id="is_pre_start" value="0">
                                                </td>
                                                <td class="td-schedule">

                                                    <input  type="number" name="is_done" id="is_done" value="0">
                                                </td>
                                                <td class="td-schedule">

                                                    <input  type="text" name="country" id="country" placeholder="Insert coutry">
                                                </td>
                                                <?php
                                                if ($Auth->user()) {
                                                    echo "<td class='td-schedule'>";
                                                    echo "<button type='submit'>Insert</button>";
                                                    echo "<td>";
                                                }
                                                ?>
                                                <?php echo $this->Form->end(); ?>
                                            </tr>
                                            <?php
                                            $index = 0;
                                            foreach ($scheduleNHA as $row):
                                                $index++;
                                                ?>
                                                <tr id="<?php echo $row->id; ?>">
                                                    <?php echo $this->Form->create("Schedules", array('url' => '/editRecordSchedule/' . $row->id)); ?>
                                                    <td class="td-schedule">
                                                        <?php echo $index; ?>
                                                    </td>

                                                    <td class="td-schedule">
                                                        <input  type="text" name="name" id="name" value="<?php echo $row->name; ?>">
                                                    </td>
                                                    <td class="td-schedule">

                                                        <input  type="text" name="start_time" id="start_time" value="<?php echo $row->start_time; ?>">
                                                    </td>
                                                    <td class="td-schedule">

                                                        <input  type="number" name="is_pre_start" id="is_pre_start" value="<?php echo $row->is_pre_start; ?>">
                                                    </td>
                                                    <td class="td-schedule">

                                                        <input  type="number" name="is_done" id="is_done" value="<?php echo $row->is_done; ?>">
                                                    </td>
                                                    <td class="td-schedule">

                                                        <input  type="text" name="country" id="country" value="<?php echo $row->country; ?>">
                                                    </td>
                                                    <?php
                                                    if ($Auth->user()) {
                                                        echo "<td class='td-schedule'>";
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