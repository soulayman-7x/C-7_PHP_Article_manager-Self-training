<?php

// ====================
// 1. The Parent Class
// ====================
class Article {
    protected $title;
    protected $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() {
        return "<div style='background-color: #0d0221;hight: fit-content; border-left: 4px solid #00d4ff; padding: 20px; color: #fff; font-family: sans-serif; box-shadow: 0 0 15px rgba(0, 212, 255, 0.1);'>
                    <h2 style='color: #00d4ff; margin-top: 0; text-transform: uppercase; letter-spacing: 2px;'>" . $this->title . "</h2>
                    <p style='color: #a0aec0; line-height: 1.6;'> " . $this->content . " </p>
                </div>";
    }
}

// ====================
// 2. The Child Class 
// ====================
class BlogArticle extends Article {
    private $author;

    public function __construct($title, $content, $author) {
        parent::__construct($title, $content);
        $this->author = $author;
    }

    public function display() {
        $parent_design = parent::display();

        $author_tag = "<div style='color: #6a0dad; font-weight: bold; margin-top: 20px; border-top: 1px solid rgba(106, 13, 173, 0.3); padding-top: 15px; font-family: sans-serif; text-transform: uppercase; letter-spacing: 1px;'>
                            INITIATED BY COMMANDER: <span style='color: #00d4ff;'>" . $this->author . "</span>
                        </div>";

        return str_replace('</div>', $author_tag . '</div>', $parent_design);
    }
}

// ====================
// 3. The Execution 
// ====================

$article1 = new BlogArticle(
    "IT WAVE 2026 - Tangier",
    "The ultimate technology event is scheduled for April 13 to 17. Prepare for a full deep-dive into the future of Web Development and Cloud Computing.",
    "System Admin"
);

echo $article1->display();


$article2 = new BlogArticle(
    "7X Discipline System",
    "Deep work timer and anti-procrastination protocols have been successfully integrated into the core architecture.",
    "SOULAYMAN 7X"
);

echo $article2->display();
