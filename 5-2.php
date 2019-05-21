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
$board = new Board;
$board->dispArticle();
?>

