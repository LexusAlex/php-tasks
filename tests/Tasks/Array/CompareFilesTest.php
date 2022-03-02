<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;


class CompareFilesTest extends TestCase
{
    public function testCompare()
    {
        $data1 = file(__DIR__ . '/../files/file1.txt');
        $data2 = file(__DIR__ . '/../files/file2.txt');

        foreach ($data1 as &$value1) {
            $value1 = trim($value1);
        }

        foreach ($data2 as &$value2) {
            $value2 = trim($value2);
        }

        $diff = [];
        $question_diff = [];
        foreach ($data1 as $key => $val) {
            $diff[$val][($key+1)] = $val;
            if(count($diff[$val]) > 1) {
               $question_diff = $diff[$val];
            }
        }

        //[39] => Какая из приведенных газоопасных работ выполняется по специальному плану, утвержденному техническим руководителем газораспределительной организации?
        //[77] => Какая из приведенных газоопасных работ выполняется по специальному плану, утвержденному техническим руководителем газораспределительной организации?

        self::assertEquals(77,array_key_last($question_diff));
    }

    public function testCompareDiff()
    {
        $data1 = file(__DIR__ . '/../files/fileDiff1.txt');
        $data2 = file(__DIR__ . '/../files/fileDiff2.txt');
        // Файлы fileDiff3 и fileDiff4 тоже можно сравнить и найти недостающие вопросы
        $file1 = [];
        $file2 = [];

        foreach ($data1 as &$value1) {
            $file1[] = strip_tags(trim($value1));
        }

        foreach ($data2 as &$value2) {
            $file2[] = strip_tags(trim($value2));
        }

        $not_quest = [];
        // какого вопроса нет
        foreach ($file2 as $value) {
            if (!in_array($value, $file1)) {
                $not_quest[] = $value;
            }
        }

        self::assertEquals("Что включает в себя проверка состояния рельсового пути, находящегося в эксплуатации? Укажите все правильные ответы.", $not_quest[0]);
    }
}