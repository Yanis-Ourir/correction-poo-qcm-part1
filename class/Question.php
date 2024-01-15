<?php


class Question
{
    private string $title;
    private array $answers = [];
    private string $explanation;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function addAnswer(Answer $answer) : void // On attends un objet de type Answer;
    {
        $this->answers[] = $answer; // On stock l'objet dans le tableau answers[]; donc on aura que des objets de type Answer dans answers[]
    }

    public function setExplanation($explanation) : void
    {
        $this->explanation = $explanation;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getAnswers() : array
    {
        return $this->answers;
    }

    public function getExplanation() : string
    {
        return $this->explanation;
    }
}