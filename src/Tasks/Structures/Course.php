<?php

namespace Task\Tasks\Structures;

class Course
{
    public string $name;
    public array $questions;

    public function __construct(string $name, array $questions)
    {
        $this->name = $name;
        $this->questions = $questions;
    }

    public function addQuestion($question){
        if (in_array($question , $this->questions)) {
            throw new \DomainException('Question( already exists in the course');
        }

        $this->questions[] = $question;
    }
}