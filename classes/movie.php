<?php 
class Movie {
    // Properties
    public $title;
    public $director;
    public $language;
    public $duration;

    public function __construct($_title, $_director, $_language, $_duration) {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->duration = $_duration;

    }

    public function seatAssign($_max) {
        return $this->randLetter() . rand(1,$_max);
    }
    
    private function randLetter() {
        return chr(rand(65,90));
    }
}

$movie1 = new Movie('Ritorno al futuro', 'Robert Zemeckis', 'en', 116);
