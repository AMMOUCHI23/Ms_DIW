<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héritage</title>
</head>
<body>
    <?php
    /*
L'héritage (en anglais inheritance) est un principe propre à la programmation orientée objet, 
permettant de créer une nouvelle classe à partir d'une classe existante. 
Le nom d'"héritage" (pouvant parfois être appelé dérivation de classe) 
provient du fait que la classe dérivée (la classe nouvellement créée) 
contient les attributs et les méthodes de sa superclasse (la classe dont elle dérive).
L'intérêt majeur de l'héritage est de pouvoir définir de nouveaux attributs et de nouvelles méthodes
pour la classe dérivée, qui viennent s'ajouter à ceux et celles héritées.



    */
    class Card
    {  
        /* on peut acceder à l'attribut en mode protected 
        que à l'interieur de la classe mére ou la classe fille
        donc qu'on aura des classes filles et mére il faut mettre les attributs de classe mére 
        en mode protected
        */
        protected $_name;
        protected $_description;
        public function __construct($name, $description)
        {
           $this -> _name=$name;
           $this -> _description=$description;
        }
        public function hello(){
            echo " je suis la carte ". $this->_name." qui veut dire ".  $this->_description;
         }
    }

    //Crée la classe fille TrapCard
    
    class TrapCard extends card{
        public function hello()
        {
            echo "Je suis une TrapCard.<br>";
            echo $this->_name;

        }

    }
    $mycard= new Card("Magitien sombre", "Un magitien aux grands pouvoirs..");
    $mycard-> hello();
     echo"<br>";
    // afficher un objet de la classe fille 
    $mytrapcard=new TrapCard("Fosse", "Une grande fosse qui piege tous les ennemis" );
    $mytrapcard-> hello();
    ?>
</body>
</html>