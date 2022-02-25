





<?php
class MovieCard {
    public $poster;
    public $title;
    public $language;
    public $description;
    public $vote;
    
    function __construct(array $_movieArray)

  {
    $this->poster = $_movieArray['moviePoster'];
    $this->title = $_movieArray['movieTitle'];
    $this->language = $_movieArray['movieLanguage'];
    $this->description = $_movieArray['movieDescription'];
    $this->vote = $_movieArray['movieVote'];
  }

    // stamp
    public function stamp() {
        
        return "<div class='cardbox'>". 
                    $this->poster .
                    "<div class='text'>" .
                    "<h3>" . $this->title . "</h3>" . 
                    "<div>" . $this->language . "</div>" .   
                    "<div>" . $this->vote . "</div>".
                    "<div>" . $this->description . "</div>" .
                    "</div>" . 
                "</div>";
    }
}

//  object
$movieCard1 = new MovieCard([
    "moviePoster" => '<img class="poster" src="https://m.media-amazon.com/images/I/71Iq4IF29iL._SL1024_.jpg">',
    "movieTitle" => "Tre uomini e una gamba",
    "movieDescription" => "Lorem ipsum Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa",
    "movieLanguage" => "it",
    "movieVote" => "9.5"
]);

$movieCard2 = new MovieCard([
    "moviePoster" => '<img class="poster" src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/dca160e75b33af7599c1a9e8846b285d234d84f47705f44059ee3a2278b1ddaa._RI_V_TTW_.jpg">',
    "movieTitle" => "Shrek",
    "movieDescription" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa provident animi, a Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa",
    "movieLanguage" => "en",
    "movieVote" => "9"
]);

$movieCard3 = new MovieCard([
    "moviePoster" => '<img class="poster" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIX0zX-QOI-gaC473n51sbXIqobgEGnbL86fCk0JmHkXThrPRX">',
    "movieTitle" => "Titanic",
    "movieDescription" => "Laboriosam repudiandae corrupti obcaecati ipsa provident animi, aut ullam repellendus reiciendis, esse ut quae sapiente, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam repudiandae corrupti obcaecati ipsa",
    "movieLanguage" => "en",
    "movieVote" => "8.5"
]);

$movieList = array($movieCard1, $movieCard2, $movieCard3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>NETFLIX</h1>
    </header>
    <main>
        <div class="container">

                <?php 
                    for($i = 0; $i < count($movieList); $i++) {
                        echo $movieList[$i]->stamp();
                    }
                ?>

        </div>
    </main>    
</body>
</html>