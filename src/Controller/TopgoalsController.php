<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;

class TopgoalsController extends AppController {

    public function index($type) {
        $this->log("view rank $type", "info");
        $this->set("activeMenu", "index");
        $this->set("title", "Bóng đá K");
        $this->set("keys", "bong da, tin bong da,tin nhanh bóng đá, lịch thi đấu, bảng xếp hạng, tin chuyển nhượng, hậu trường cầu thủ, tin tức bóng đá");
        $this->set("des", "BongDaK.com - cập nhật liên tục tin nhanh bóng đá, lịch thi đấu, kết quả, bảng xếp hạng tất cả các giải bóng đá, tin chuyển nhượng, hậu trường cầu thủ.");
        $rank = TableRegistry::get("top_goals");
        $rankNHA = $rank->find()->where(["country_goal" => $type])->order(["top_goals" => "DESC"]);
        $count = 0;
        foreach ($rankNHA as $row) {
            $count++;
        }
        $this->set("isRank", $count);
        $this->set("rankNHA", $rankNHA);
    }

    public function add() {
        
    }

    public function edit($id) {
        $this->log("call edit top goal" . $id, "info");
        $goals = TableRegistry::get("top_goals");
        $num_goals = $this->request->data("top_goals");
        $this->log($num_goals, "info");

        $goal = $goals->get($id);
        $goal->top_goals = $num_goals;

        if ($goals->save($goal)) {
            $this->log("udpated " . $goal->country_goal, "info");
        } else {
            $this->log("updated fail " . $goal->country_goal, "error");
        }
        $this->redirect(
                "/topgoal/" . $goal->country_goal
        );
    }

    public function delete($id) {
        
    }

}

?>