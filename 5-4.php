<?php
class Board{
    public $subject = "hello";
    public $name = "shota";
    public $contents = "nice to meet you!";
    
    public function dispArticle(){
        print "subject :".$this->subject. "</br>";
        print "name :".$this->name. "</br>";
        print "contents :".$this->contents. "</br>";
    }
}
class NewBoard extends Board{
     public $subject = "新しい掲示板です．";
     public function submitArticle(){
     }
     public function editArticle(){
     }
     public function deleteArticle(){
     }
}
?>

