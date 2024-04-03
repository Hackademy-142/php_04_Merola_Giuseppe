<?php

//! Esercizio 1

// abstract class Bread
// {
//     abstract public function flourType();
// }

// class WhiteBread extends Bread
// {
//     public function flourType()
//     {
//         echo "-Farina: bianca 00 \n";
//     }
// }

// class WholeGrainBread extends Bread
// {
//     public function flourType()
//     {
//         echo "-Farina: integrale \n";
//     }
// }

// class SegaleBread extends Bread
// {
//     public function flourType()
//     {
//         echo "-Farina: segale \n";
//     }
// }

// class GlutenFreeBread extends Bread
// {
//     public function flourType()
//     {
//         echo "-Farina: senza glutina \n";
//     }
// }

// abstract class Protein
// {
//     abstract public function proteinType();
// }

// class Salsiccia extends Protein
// {
//     public function proteinType()
//     {
//         echo "-Proteina:  Salsiccia \n";
//     }
// }

// class Hamburger extends Protein
// {
//     public function proteinType()
//     {
//         echo "-Proteina:  Hamburger \n";
//     }
// }

// class ProsciuttoCrudo extends Protein
// {
//     public function proteinType()
//     {
//         echo "-Proteina: prosciutto crudo \n";
//     }
// }

// abstract class Dressing
// {
//     abstract public function dressingType();
// }

// class Maionese extends Dressing
// {
//     public function dressingType()
//     {
//         echo "-Salsa: maionese \n";
//     }
// }

// class SalsaBurger extends Dressing
// {
//     public function dressingType()
//     {
//         echo "-Salsa: salsa burger \n";
//     }
// }


// class Ketchup extends Dressing
// {
//     public function dressingType()
//     {
//         echo "-Salsa: ketchup \n";
//     }
// }


// class Sandwich
// {
//     public $bread, $protein, $dressing;

//     public function __construct(Bread $pane, Protein $proteina, Dressing $salsa)
//     {
//         $this->bread = $pane;
//         $this->protein =  $proteina;
//         $this->dressing = $salsa;
//     }

//     public function getBread()
//     {
//         $this->bread->flourType();
//     }

//     public function getOrder()
//     {
//         echo "Ordine: \n";
//         $this->bread->flourType();
//         $this->protein->proteinType();
//         $this->dressing->dressingType();
//     }
// }

// $salsa = new Ketchup();

// $sandwich = new Sandwich(new WhiteBread(), new Salsiccia(), new Ketchup());

// $panino = new Sandwich(new SegaleBread(), new ProsciuttoCrudo(), new Maionese());

// $panino->getOrder();
// $sandwich->getOrder();



//! Esercizio 2


// abstract class Marvel
// {
//     abstract public function personaggioType();
// }

// class Avenger extends Marvel 
// {
//     public function personaggioType()
//     {
//         echo "Tutti gli Avengers \n";
//     }
// }

// class Principal extends Avenger
// {
//     public $hero = [];

//     public function __construct($ironman,$cap,$hulk,$thor,$strange,$vedova,$spiderman,$burton,$nickFury)
//     {
//         $this->hero = [$ironman,$cap,$hulk,$thor,$strange,$vedova,$spiderman,$burton,$nickFury];
//         echo "Gli eroi principali della Marvel sono: \n";
//         foreach($this->hero as $eroe){
//             echo "$eroe \n";
//         }
//     }
// }

// $eroiPrincipali = new Principal('Iron Man','Capitan America','Hulk', 'Thor','Dott.Strange','Vedova Nera','Spider Man','Agente Burton','Nick Fury' . "\n");

// class Secondary extends Avenger
// {
//     public $hero2 = [];

//     public function __construct($panther,$visione,$groot,$antMan,$warMachine,$winterSoldier,$gamora,$starlord,$drax,$janeFoster,$rocket,$capMarvel,$pepper,$happy,$philColson)
//     {
//         $this->hero2 = [$panther,$visione,$groot,$antMan,$warMachine,$winterSoldier,$gamora,$starlord,$drax,$janeFoster,$rocket,$capMarvel,$pepper,$happy,$philColson];
//         echo "Gli eroi secondari della Marvel sono: \n";
//         foreach($this->hero2 as $eroe){
//             echo "$eroe \n";
//         }
//     }
// }

// $eroiSecondari = new Secondary('Black Panther','Visione','Groot', 'Ant Man','War Machine','Winter Soldier','Gamora','Starlord','Drax','Jane Foster','Rocket','Captain Marvel','Pepper','Happy','Phil Colson' . "\n");


// class Villain extends Marvel 
// {
//     public function personaggioType()
//     {
//         echo "Tutti i Villains \n";
//     }
// }

// class SuperVillain extends Villain
// {
//     public $villains = [];

//     public function __construct($thanos,$loki,$ultron,$kitauri,$hela,$laufey,$warlock)
//     {
//         $this->villains = [$thanos,$loki,$ultron,$kitauri,$hela,$laufey,$warlock];
//         echo "I supercattivi della Marvel sono: \n";
//         foreach($this->villains as $cattivo){
//             echo "$cattivo \n";
//         }
//     }
// }

// $cattivi = new SuperVillain('Thanos','Loki','Ultron','Kitauri','Hela','Laufey','Warlock' . "\n");



//! Esercizio 3


// trait Calculator 
// {
//     public function sum($a, $b) {
//         return $a + $b;
//       }
//       public function sub($a, $b) {
//         return $a - $b;
//       }
//       public function mul($a, $b) {
//         return $a * $b;
//       }
//       public function div($a, $b) {
//         return $a / $b;
//       }
//       public function sqr($a){
//         return sqrt($a);
//       }
// }

// class Rettangolo 
// {
//     use Calculator;

//     public $b;
//     public $h;

//     public function __construct($a,$b)
//     {
//         $this->b= $a;
//         $this->h= $b;
//     }

//     public function area(){
//         return $this->mul($this->b, $this->h);
//     }
//     public function perimetro(){
//         return $this->sum($this->mul(2, $this->b), $this->mul(2, $this->h));
//     }
//     public function diagonale(){
//         $quadratoBase = $this->mul($this->b, $this->b);
//         $quadratoAltezza = $this->mul($this->h, $this->h);
//         return $this->sqr($this->sum($quadratoBase, $quadratoAltezza));
//     }
// }

// $risultato = new Rettangolo(20,5);

// echo "Area: " . $risultato->area() . "\n";
// echo "Perimetro: " . $risultato->perimetro() . "\n";
// echo "Diagonale: " . $risultato->diagonale() . "\n";


