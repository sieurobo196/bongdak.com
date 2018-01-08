<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;
use Cake\I18n\Time;
use Cake\Event\Event;

class ArticlesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(["index", "view", "single"]);
    }

    public function add() {
        $this->log("start upload file add", 'info');
        $isPost = $this->request->is('post');
        $this->log("request is $isPost", 'info');
        if ($isPost) {
            $this->log("upload file ", "info");
            $title = $this->request->data("Title");
            $mapUrl = $this->request->data("MapUrl");
            $description_meta = $this->request->data("MetaDes");
            $keywords = $this->request->data("MetaKey");
            $description = $this->request->data('Description');
            $content_article = $this->request->data('Content');
            $file = $this->request->data('File');
            $type = $this->request->data('Type');
            $newDate = date("Y-m-d H:i:s");
            $imageName = date("Y-m-d") . $file["name"];
            $this->log($title, "info");
            $this->log($mapUrl, "info");
            $this->log($description_meta, "info");
            $this->log($keywords, "info");
            $this->log($description, "info");
            $this->log($content_article, "info");
            $this->log($type, "info");
            $this->log($newDate, "info");
            $this->log($imageName, "info");
            $pathFile = SITE_ROOT . "/uploads/articles" . DS . $imageName;
            $isUpload = move_uploaded_file($file["tmp_name"], $pathFile);
            $this->log("upload $isUpload", "info");
            if ($isUpload) {
                $articles_table = TableRegistry::get('Articles');
                $article = $articles_table->newEntity();
                $article->title = $title;
                $article->map_url = $mapUrl;
                $article->meta_des = $description_meta;
                $article->meta_keys = $keywords;
                $article->des_article = $description;
                $article->image = $imageName;
                $article->type = $type;
                $article->content = $content_article;
                $article->createdDate = $newDate;
                if ($articles_table->save($article)) {
//                    echo "Article add success";
                    $this->setAction('index');
                } else {
                    echo "Article add fail";
                }
            } else {
                echo "upload file fail";
            }
        }
    }

    public function index() {
        $this->set('activeMenu', 'index');
        $listArticles = TableRegistry::get('Articles');
        $listAllArticle = $listArticles->find()->order(["createdDate" => "DESC"]);
        $threeArticle = array();
        $resultsNHA = array();
        $resultsLALIGA = array();
        $resultsC1 = array();
        $resultsL1 = array();
        $resultsDLA = array();
        $resultsSRA = array();
        $x = 0;
        foreach ($listAllArticle as $value) {
            if ($x == 0) {
                $this->set("articleTop", $value);
            } else if ($x < 4) {
                array_push($threeArticle, $value);
                $this->log(count($threeArticle), "info");
            } else if ($value->type == "anh" && count($resultsNHA) < 2) {
                array_push($resultsNHA, $value);
            } else if ($value->type == "tay-ban-nha" && count($resultsLALIGA) < 2) {
                array_push($resultsLALIGA, $value);
            } else if ($value->type == "cup-c1" && count($resultsC1) < 2) {
                array_push($resultsC1, $value);
            } else if ($value->type == "phap" && count($resultsL1) < 2) {
                array_push($resultsL1, $value);
            } else if ($value->type == "duc" && count($resultsDLA) < 2) {
                array_push($resultsDLA, $value);
            } else if ($value->type == "italia" && count($resultsSRA) < 2) {
                array_push($resultsSRA, $value);
            }

            $x++;
        }

        $this->set("results", $threeArticle);
        // list articles top
        $resultsTop = $listArticles->find()->order(["view" => "DESC"])->limit(10);
        $this->set("resultsTop", $resultsTop);
        // list articles NHA
        $this->set("resultsNHA", $resultsNHA);
        //list articles lalig
        $this->set("resultsLALIGA", $resultsLALIGA);
        //list articles C1
        $this->set("resultsC1", $resultsC1);
        //list articles C1
        $this->set("resultsL1", $resultsL1);
        //list articles C1
        $this->set("resultsDLA", $resultsDLA);
        //list articles C1
        $this->set("resultsSRA", $resultsSRA);
        // articles newest
//        $articleTop = $listArticles->find()->order(["createdDate" => "DESC"])->first();
//        $this->set("articleTop", $articleTop);
        //table rank
        $rank = TableRegistry::get('rank');
        $rankNHA = $rank->find()->where(["country" => "anh"])->order(["score" => "DESC"]);
        $this->set("rankNHA", $rankNHA);
        // top goal
        $topGoals = TableRegistry::get('top_goals');
        $topGoalsNHA = $topGoals->find()->order(["goals" => "DESC"]);
        $this->set("topGoalsNHA", $topGoalsNHA);
        // schedule
        $schedule = TableRegistry::get('schedule');
        $scheduleNHA = $schedule->find();
        $this->set("scheduleNHA", $scheduleNHA);

        $this->set("title", "Bóng đá K");
        $this->set("keys", "bong da, tin bong da,tin nhanh bóng đá, lịch thi đấu, bảng xếp hạng, tin chuyển nhượng, hậu trường cầu thủ, tin tức bóng đá");
        $this->set("des", "BongDaK.com - cập nhật liên tục tin nhanh bóng đá, lịch thi đấu, kết quả, bảng xếp hạng tất cả các giải bóng đá, tin chuyển nhượng, hậu trường cầu thủ.");
    }

    public function view($type, $mapUrl) {
        $this->log("call view $mapUrl", "info");
        $articles = TableRegistry::get('Articles');
        $article = $articles->find()->where(['map_url = "' . $mapUrl . '"'])->first();
        if (empty($article)) {
            $this->redirect(['controller' => 'Articles', 'action' => 'index']);
        } else {
            $this->set("article", $article);
            $this->set("title", $article->title);
            $this->set("keys", $article->meta_keys);
            $this->set("des", $article->meta_des);
            $this->set("id", $article->id);
            $activeMenu = $type == null ? 'index' : $type;
            $this->set('activeMenu', $activeMenu);
            $rank = TableRegistry::get('rank');
            $topGoals = TableRegistry::get('top_goals');
            $rankNHA = $rank->find()->where(["country" => $type])->order(["score" => "DESC"]);
            $count = 0;
            foreach ($rankNHA as $row) {
                $count++;
            }
            $this->set("isRank", $count);
            $this->set("rankNHA", $rankNHA);
            $topGoalsNHA = $topGoals->find()->where(["country" => $type])->order(["goals" => "DESC"]);
            $this->set("topGoalsNHA", $topGoalsNHA);
            $resultsTop = $articles->find()->where(["type" => $type])->order(["view" => "DESC"]);
            $this->set("resultsTop", $resultsTop);
            $view = $article->view;
            $view++;
            $article->view = $view;
            $newDate = date("Y-m-d H:i:s");
            $article->updatedDate = $newDate;
            if ($articles->save($article)) {
                
            } else {
                $this->log("update view fail" + $view, "info");
            }
        }
    }

    public function edit($id) {
        if ($this->request->is('post')) {
            $title = $this->request->data("Title");
            $mapUrl = $this->request->data("MapUrl");
            $description_meta = $this->request->data("MetaDes");
            $keywords = $this->request->data("MetaKey");
            $description = $this->request->data('Description');
            $content_article = $this->request->data('Content');
            $type = $this->request->data('Type');
            $newDate = date("Y-m-d H:i:s");
            $articles = TableRegistry::get('Articles');
            $article = $articles->get($id);
            $article->title = $title;
            $article->map_url = $mapUrl;
            $article->meta_des = $description_meta;
            $article->meta_keys = $keywords;
            $article->des_article = $description;
            $article->content = $content_article;
            $article->type = $type;
            $article->updatedDate = $newDate;

            if ($articles->save($article)) {
                echo "Article is udpated";
            } else {
                echo "Article update failed";
            }
            $this->setAction('index');
        } else {
            $articles = TableRegistry::get('Articles')->find();
            $article = $articles->where(['id' => $id])->first();
            $this->set('title', $article->title);
            $this->set('mapUrl', $article->map_url);
            $this->set('meta_des', $article->meta_des);
            $this->set('meta_keys', $article->meta_keys);
            $this->set('des_article', $article->des_article);
            $this->set('content', $article->content);
            $this->set('type', $article->type);
            $this->set('id', $id);
        }
    }

    public function single($page) {
        $typeRank = $page;
        if ($page == 'anh') {
            $this->set('title', "ANH");
            $this->set('des', "Bóng đá Anh");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá Anh");
        } else if ($page == 'cup-c1') {
//            $typeRank = "anh";
            $this->set('title', "C1");
            $this->set('des', "Bóng đá C1");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá C1");
        } else if ($page == 'tay-ban-nha') {
            $this->set('title', "Tây Ban Nha");
            $this->set('des', "Bóng đá Tây Ban Nha");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá Tây Ban Nha");
        } else if ($page == 'italia') {
            $this->set('title', "Ý");
            $this->set('des', "Bóng đá Ý");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá Ý");
        } else if ($page == 'duc') {
            $this->set('title', "Đức");
            $this->set('des', "Bóng đá Đức");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá Đức");
        } else if ($page == 'phap') {
            $this->set('title', "Pháp");
            $this->set('des', "Bóng đá Pháp");
            $this->set('keys', "Lịch thi đấu, kết quả bóng đá Pháp");
        } else {
            $this->redirect(['controller' => 'Articles', 'action' => 'index']);
        }
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
        $rank = TableRegistry::get('rank');
        $topGoals = TableRegistry::get('top_goals');
        $rankNHA = $rank->find()->where(["country" => $typeRank])->order(["score" => "DESC"]);
        $count = 0;
        foreach ($rankNHA as $row) {
            $count++;
        }
        $this->set("isRank", $count);
        $this->set("rankNHA", $rankNHA);
        $topGoalsNHA = $topGoals->find()->where(["country" => $typeRank])->order(["goals" => "DESC"]);
        $this->set("topGoalsNHA", $topGoalsNHA);
        $listArticles = TableRegistry::get('Articles');
        $resultsNHA = $listArticles->find()->where(["type" => $page])->order(["createdDate" => "DESC"])->limit(10);
//        $resultsNHA = $listArticles->find()->limit(10);
        $this->set("resultsNHA", $resultsNHA);
        $resultsTop = $listArticles->find()->order(["view" => "DESC"])->limit(5);
        $this->set("resultsTop", $resultsTop);
    }

}

?>