<?php


class Qcm
{

    private array $questions = [];

    public function __construct() {

    }

        public function addQuestion(Question $question) : void // On attends un objet de type Question;
        {
            $this->questions[] = $question; // On stock l'objet dans le tableau questions[]; donc on aura que des objets de type Question dans questions[]
        }
        // generate sert à afficher le QCM en faisant une boucle sur les objets questions dans un premier temps
        // puis sur les objets answer grâce à la propriété answers[] qui stock des objets dans question dans un second temps
         public function generate() : void
         {
             // En bouclant sur des objets nous avons accès à leurs propriétés et méthodes
             foreach ($this->questions as $question) {
                 echo "<p>" . $question->getTitle() . "</p>";
                    foreach ($question->getAnswers() as $answer) {
                        echo "<input type='radio' name='" . $question->getTitle() . "' value='" . $answer->getContent() . "'>";
                        echo "<label for='" . $answer->getContent() . "'>" . $answer->getContent() . "</label>";
                        echo "<br>";
                    }
             }
     }

}