<?php 
class Movie {
    // Properties
    public $title;
    public $director;
    public $language;
    public $duration;

    // Constructor
    public function __construct($_title, $_director, $_language, $_duration) {
        $this->title = $_title;
        $this->director = $_director;
        $this->language = $_language;
        $this->duration = $_duration;
        $this->seatAssign(30);
    }

    // Methods
    private function seatAssign($_max) {
        return $this->randLetter() . rand(1,$_max);
    }
    
    private function randLetter() {
        return chr(rand(65,90));
    }

    public function print() {
        echo "Title: $this->title <br>
            Author: $this->director <br>
            Language: $this->language <br>
            Durata: $this->duration <br>
            Seat: {$this->seatAssign(50)}";
    }
}

// Objject instances
$movie1 = new Movie('Ritorno al futuro', 'Robert Zemeckis', 'en', 116);
$movie2 = new Movie('Ritorno al futuro II', 'Robert Zemeckis', 'en', 108);
