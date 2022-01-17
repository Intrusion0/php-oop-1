<?php
    /** GOAL
    
    *  DEFINIRE CLASSE Film:
    *      Attributi:
    *      - titolo
    *      - sottotiolo
    *      - regista
    * 
    *      Metodi:
    *      - costruttore che accetta titolo
    *      - getFullTitle: 
    *          Se sottotitolo presente:
    *            restituisce "titolo: sottotitolo" 
    *          Se sottotiolo assente:
    *            restituisce "titolo"   
    *      - __toString: 
    *          Se regista presente:
    *            restituisce "fullTitle | regista"
    *          Se regista assente:
    *            restituisce "fullTitle | ???"
    * 
    * UTILIZZO OGGETTI Film:
    * 
    *      Generare 3 istanze della classe Film:
    *      - uno con solo il titolo
    *      - uno con titolo e sottotitolo
    *      - uno con titolo, sottotiolo e regista
    * 
    *      Stampare tutti gli oggetti tramite toString (implicito)
    * 
    *  RISULTATO ATTESO:
    * 
    *      Matrix | ???
    *      Fantozzi 2: il ritorno di fantozzi | ???
    *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
    */

    class Film {

        public $title;
        public $subtitle;
        public $movieDirector;

        public function __construct($title) {
            return $this -> title = $title;
        }

        public function getFullTitle() {
            if ($this -> subtitle) {
                return $this -> title . ": " . $this -> subtitle;
            } else {
                return $this -> title;
            }
        }

        public function __toString() {
            if ($this -> movieDirector) {
                return $this -> getFullTitle() . " | " . $this -> movieDirector;
            } else {
                return $this -> getFullTitle() . " | " . "???";
            }
        }
    }

    // Istanze Film n° 1 - 2 - 3
    $f1 = new Film("Matrix");
    $f2 = new Film("Fantozzi 2");
    $f3 = new Film("Peter Pan");

    // Film n°2
    $f2 -> subtitle = "il ritorno di fantozzi";

    // Film n°3
    $f3 -> subtitle = "il ritorno all'isola che non c'e'";
    $f3 -> movieDirector = "Robin Budd";

    echo $f1 . '<br>' . $f2 . '<br>' . $f3;
?>