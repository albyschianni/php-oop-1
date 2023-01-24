<?php
class Movie {

    public $name;
    public array $genre;
    public $length;

    public function __construct($name, array $genre, $length) {

        $this -> name = $name;
        $this -> genre = $genre;
        $this -> length = $length;
        
    }

    public function getMovie() {

        $allgenre= implode(", ", $this->genre);

        return "<h1>" . $this -> name . "</h1>" .
                "<h1>" . $allgenre . "</h1>" .
                "<h1>" . $this -> length . "</h1>"
        ; 
    }
    
}

$movies = [ 
    [
        "aaa",
        [
            "fantasy",
            "guerra"
        ],
        "110"
        
    ],
    [
       "aaa",
        [
            "fantasy",
            "guerra"
        ],
        "110" 
    ],
    [
        "aaa",
        [
            "fantasy",
            "guerra"
        ],
        "110" 
    ]
];

    foreach ($movies as $movie) {
        $newMovie = new Movie($movie[0], $movie[1], $movie[2]);
        echo $newMovie -> getMovie();
    }
