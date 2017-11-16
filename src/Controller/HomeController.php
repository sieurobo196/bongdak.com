<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {

    public function index() {
        
    }

    public function about() {
        
    }

    public function athletics() {
        
    }

    public function baseball() {
        
    }

    public function basketball() {
        
    }

    public function boxing() {
        
    }

    public function club() {
        
    }

    public function contact() {
        
    }

    public function cricket() {
        
    }

    public function golf() {
        
    }

    public function horse_racing() {
        
    }

    public function more() {
        
    }

    public function motor() {
        
    }

    public function privacy() {
        
    }

    public function rugby() {
        
    }

    public function signup() {
        
    }

    public function single() {
        
    }

    public function table_tennis() {
        
    }

    public function tennis() {
        
    }

    public function terms() {
        
    }

    public function v_single() {
        
    }

    public function add() {
        $this->log("start upload file add", 'info');
        $isPost = $this->request->is('post');
        $this->log("request is $isPost", 'info');
        if ($isPost) {
            $this->log("upload file ", "info");
            $title = $this->request->data("title");
            $mapUrl = $this->request->data("mapUrl");
            $description_meta = $this->request->data("metaDes");
            $keywords = $this->request->data("metaKey");
            $description = $this->request->data("description");
            $content_article = $this->request->data("content");
            $file = $this->request->data('file');
            $type = $this->request->data("type");
            $newDate = date("Y-m-d H:i:s");
            $this->log($file["name"], "info");
            $this->log($title, "info");
            $this->log($mapUrl, "info");
            $this->log($description_meta, "info");
            $this->log($keywords, "info");
            $this->log($description, "info");
            $this->log($content_article, "info");
            $this->log($type, "info");
            $this->log($newDate, "info");
//            $this->log($imageName, "info");
//            $pathFile = SITE_ROOT . "/uploads" . DS . $imageName;
//            $isUpload = move_uploaded_file($file["tmp_name"], $pathFile);
//            $this->log("upload $isUpload", "info");
//            if ($isUpload) {
//                $articles_table = TableRegistry::get('Articles');
//                $article = $articles_table->newEntity();
//                $article->title = $title;
//                $article->map_url = $mapUrl;
//                $article->meta_des = $description_meta;
//                $article->meta_keys = $keywords;
//                $article->des_article = $description;
//                $article->image = $imageName;
//                $article->type = $type;
//                $article->content = $content_article;
//                $article->createdDate = $newDate;
//                if ($articles_table->save($article)) {
//                    echo "Article add success";
//                    $this->setAction('index');
//                } else {
//                    echo "Article add fail";
//                }
//            } else {
//                echo "upload file fail";
//            }
        }
    }

}

?>
