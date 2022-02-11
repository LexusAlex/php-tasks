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
}