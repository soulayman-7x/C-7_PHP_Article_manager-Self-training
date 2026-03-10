<?php

class Article {
    public $title;
    public $content;

    public function display() {
        return "<div style='background-color: #0b0e14; border-left: 4px solid #00D4FF; padding: 15px; margin-bottom: 20px; color: white; font-family: sans-serif;'>
                    <h2 style='color: #00D4FF; margin-top: 0;'>" . $this->title . "</h2>
                    <p style='color: #A0AEC0;'>" . $this->content . "</p>
                </div>";
    }
}

$article1 = new Article();

$article1->title = "Welcome to 7x Blog";
$article1->content = "This is the first modular article running on OOP.";


echo $article1->display();

$article2 = new Article();

$article2->title = "Cyber Security Protocols";
$article2->content = "Always validate your data to prevent SQL Injection attacks.";

echo $article2->display();

