<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;
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
        $this->log("add goal", "info");
        $goals = TableRegistry::get("top_goals");
        $name_player = $this->request->data("name_player");
        $name_club = $this->request->data("name_club");
        $top_goals = $this->request->data("top_goals");
        $country_goal = $this->request->data("country_goal");
        $goal = $goals->newEntity();
        $goal->name_player = $name_player;
        $goal->name_club = $name_club;
        $goal->top_goals = $top_goals;
        $goal->country_goal = $country_goal;

        if ($goals->save($goal)) {
            $this->log("add success " . $goal->country_goal, "info");
        } else {
            $this->log("add fail " . $goal->country_goal, "error");
        }
        $this->redirect(
                "/topgoal/" . $goal->country_goal
        );
    }

    public function edit($id) {
        $this->log("edit goal" . $id, "info");
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