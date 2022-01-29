<?php

namespace Test\Tasks\Structures;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Structures\Course;

class SoftwareDesignTest extends TestCase
{
   public function testProcedure()
   {
       // процедура добавления вопроса в курс

       function addQuestion(&$course, $question){
           if (!in_array($question , $course['questions'])) {
               $course['questions'][] = $question;
           }
       }

       $course = [
           'name' => 'test name',
           'questions' => [
               'question1',
               'question2',
               'question3',
           ]
       ];

       addQuestion($course, 'question4');
       addQuestion($course, 'question5');
       addQuestion($course, 'question6');

       self::assertCount(6, $course['questions']);
   }

   public function testFunction()
   {
       function addQuestionF($course, $question){
           if (!in_array($question , $course['questions'])) {
               return [
                   'name' => $course['name'],
                   'questions' => [ ...$course['questions'],  $question ]
               ];
           } else {
               return $course;
           }
       }

       $course = [
           'name' => 'test name',
           'questions' => [
               'question1',
               'question2',
               'question3',
           ]
       ];

       $newStateCourse = addQuestionF($course, 'question4');
       self::assertCount(4, $newStateCourse['questions']);
   }

   public function testStructure()
   {
       $course = new Course('name course',['question1', 'question2', 'question3']);
       $course->addQuestion('question4');
       self::assertCount(4, $course->questions);
   }
}