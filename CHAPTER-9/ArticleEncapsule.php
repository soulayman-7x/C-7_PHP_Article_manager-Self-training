<?php

class Article {
    private $title;
    private $content;

    public function setTitle($title) {
        if (!empty($title) && strlen($title) > 3) {
            $this->title = $title;
        } else {
            echo "ALERT!: Invalid Title";
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setContent($content) {
        $this->content = htmlspecialchars($content); 
    }

    public function getContent() {
        return $this->content;
    }

    public function display() {
        return "Title : {$this->title} <br> Content : {$this->content}";
    }
}

$article = new Article();
$article->setTitle("Security System");
$article->setContent("<script>alert('system hacked!');</script> All protocols are running safely.");

echo $article->display();
