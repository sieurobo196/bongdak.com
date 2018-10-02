<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;

class SchedulesController extends AppController {

    public function index($type) {
        $this->log("view schedule $type", "info");
        $this->set("activeMenu", "index");
        $this->set("title", "Bóng đá K");
        $this->set("keys", "bong da, tin bong da,tin nhanh bóng đá, lịch thi đấu, bảng xếp hạng, tin chuyển nhượng, hậu trường cầu thủ, tin tức bóng đá");
        $this->set("des", "BongDaK.com - cập nhật liên tục tin nhanh bóng đá, lịch thi đấu, kết quả, bảng xếp hạng tất cả các giải bóng đá, tin chuyển nhượng, hậu trường cầu thủ.");
        $schedules = TableRegistry::get("schedules");
        $schedule = $schedules->find()->where(["country" => $type])->order(["id" => "DESC"]);
        $count = 0;
        foreach ($schedule as $row) {
            $count++;
        }
        $this->set("isSchedule", $count);
        $this->set("scheduleNHA", $schedule);
    }

    public function add() {
        $this->log("add schedule ", "info");
        $schedules = TableRegistry::get("Schedules");
        $name = $this->request->data("name");
        $start_time = $this->request->data("start_time");
        $is_pre_start = $this->request->data("is_pre_start");
        $is_done = $this->request->data("is_done");
        $country = $this->request->data("country");

        $schedule = $schedules->newEntity();
        $schedule->name = $name;
        $schedule->start_time = $start_time;
        $schedule->is_pre_start = $is_pre_start;
        $schedule->is_done = $is_done;
        $schedule->country = $country;
        if ($schedules->save($schedule)) {
            $this->log("added success " . $schedule->country, "info");
        } else {
            $this->log("added fail " . $schedule->country, "error");
        }
        $this->redirect(
                "/schedule/" . $schedule->country
        );
    }

    public function edit($id) {
        $this->log("edit schedule " . $id, "info");
        $schedules = TableRegistry::get("Schedules");
        $name = $this->request->data("name");
        $start_time = $this->request->data("start_time");
        $is_pre_start = $this->request->data("is_pre_start");
        $is_done = $this->request->data("is_done");
        $country = $this->request->data("country");
        $schedule = $schedules->get($id);
        $schedule->name = $name;
        $schedule->start_time = $start_time;
        $schedule->is_pre_start = $is_pre_start;
        $schedule->is_done = $is_done;
        $schedule->country = $country;
        if ($schedules->save($schedule)) {
            $this->log("udpated success " . $schedule->country, "info");
        } else {
            $this->log("updated fail " . $schedule->country, "error");
        }
        $this->redirect(
                "/schedule/" . $schedule->country
        );
    }

    public function delete($id) {
        
    }

}

?>