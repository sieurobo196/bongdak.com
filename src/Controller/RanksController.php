<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;

class RanksController extends AppController {

    public function index($type) {
        $this->log("view rank $type", "info");
        $this->set("activeMenu", "index");
        $this->set("title", "Bóng đá K");
        $this->set("keys", "bong da, tin bong da,tin nhanh bóng đá, lịch thi đấu, bảng xếp hạng, tin chuyển nhượng, hậu trường cầu thủ, tin tức bóng đá");
        $this->set("des", "BongDaK.com - cập nhật liên tục tin nhanh bóng đá, lịch thi đấu, kết quả, bảng xếp hạng tất cả các giải bóng đá, tin chuyển nhượng, hậu trường cầu thủ.");
        $rank = TableRegistry::get("rank");
        $rankNHA = $rank->find()->where(["country_rank" => $type])->order(["score_rank" => "DESC"]);
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
        $this->log("call edit " . $id, "info");
        $ranks = TableRegistry::get("Rank");
        $match = $this->request->data("match");
        $match_win = $this->request->data("match_win");
        $match_draw = $this->request->data("match_draw");
        $match_lose = $this->request->data("match_lose");
        $goals = $this->request->data("goals");
        $goal_lost = $this->request->data("goals_lost");
        $score = $this->request->data("score");
        $this->log($match, "info");
        $this->log($match_win, "info");
        $this->log($match_draw, "info");
        $this->log($match_lose, "info");
        $this->log($goals, "info");
        $this->log($goal_lost, "info");
        $this->log($score, "info");
        $rank = $ranks->get($id);
        $this->log($rank->match, "info");
        $this->log($rank->match_win, "info");
        $this->log($rank->match_draw, "info");
        $this->log($rank->match_lose, "info");
        $this->log($rank->goals, "info");
        $this->log($rank->goals_lost, "info");
        $this->log($rank->score, "info");
        $rank->match_rank = $match;
        $rank->match_win_rank = $match_win;
        $rank->match_draw_rank = $match_draw;
        $rank->match_lose_rank = $match_lose;
        $rank->goals_rank = $goals;
        $rank->goals_lost_rank = $goal_lost;
        $rank->score_rank = $score;
        if ($ranks->save($rank)) {
            $this->log("udpated " . $rank->country_rank, "info");
        } else {
            $this->log("updated fail " . $rank->country_rank, "error");
        }
        $this->redirect(
                "/rank/" . $rank->country_rank
        );
    }

    public function delete($id) {
       
    }

}

?>