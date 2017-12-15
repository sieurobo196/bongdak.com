<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Log\Log;
use Cake\I18n\Time;

class ArticlesController extends AppController {

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
        // get all resust
        $resultsAll = $listArticles->find()->order(["createdDate" => "DESC"])->limit(3);
        $this->set("results", $resultsAll);
        // list articles top
        $resultsTop = $listArticles->find()->order(["view" => "DESC"]);
        $this->set("resultsTop", $resultsTop);
        // list articles NHA
        $resultsNHA = $listArticles->find()->where(['type="anh"'])->limit(2);
        $this->set("resultsNHA", $resultsNHA);
        //list articles laliga
        $resultsLALIGA = $listArticles->find()->where(['type="tay-ban-nha"'])->limit(2);
        $this->set("resultsLALIGA", $resultsLALIGA);
        //list articles C1
        $resultsC1 = $listArticles->find()->where(['type="cup-c1"'])->limit(2);
        $this->set("resultsC1", $resultsC1);
        // articles newest
        $articleTop = $listArticles->find()->order(["createdDate" => "DESC"])->first();
        $this->set("articleTop", $articleTop);
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
        $this->set("article", $article);
        $this->set("title", $article->title);
        $this->set("keys", $article->meta_keys);
        $this->set("des", $article->meta_des);
        $this->set("id", $article->id);
        $activeMenu = $type == null ? 'index' : $type;
        $this->set('activeMenu', $activeMenu);
        $rank = TableRegistry::get('rank');
        $topGoals = TableRegistry::get('top_goals');
        $rankNHA = $rank->find()->where(["country" => "anh"])->order(["score" => "DESC"]);
        $this->set("rankNHA", $rankNHA);
        $topGoalsNHA = $topGoals->find()->order(["goals" => "DESC"]);
        $this->set("topGoalsNHA", $topGoalsNHA);
        $resultsTop = $articles->find()->order(["view" => "DESC"]);
        $this->set("resultsTop", $resultsTop);
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
        if ($page == 'anh') {
            
        } else if ($page == 'cup-c1') {
            
        } else if ($page == 'tay-ban-nha') {
            
        } else if ($page == 'italia') {
            
        } else if ($page == 'duc') {
            
        } else if ($page == 'phap') {
            
        }
        $activeMenu = $page == null ? 'index' : $page;
        $this->set('activeMenu', $activeMenu);
        $rank = TableRegistry::get('rank');
        $topGoals = TableRegistry::get('top_goals');
        $rankNHA = $rank->find()->where(["country" => "ANH"])->order(["score" => "DESC"]);
        $this->set("rankNHA", $rankNHA);
        $topGoalsNHA = $topGoals->find()->order(["goals" => "DESC"]);
        $this->set("topGoalsNHA", $topGoalsNHA);
        $listArticles = TableRegistry::get('Articles');
        $resultsNHA = $listArticles->find()->where(['type="NHA"'])->limit(2);
        $this->set("resultsNHA", $resultsNHA);
    }

}

?>