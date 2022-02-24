<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertCount;

class ReduceTest extends TestCase
{
    public function testReduce()
    {
        $products = [
            ['value1' => 2, 'value2' => '1', 'value3' => '8'],
            ['value1' => 1, 'value2' => '1', 'value3' => '100'],
            ['value1' => 1, 'value2' => '5', 'value3' => '1'],
            ['value1' => 2, 'value2' => '3', 'value3' => '10'],
            ['value1' => 1, 'value2' => '2', 'value3' => '50'],
            ['value1' => 1, 'value2' => '7', 'value3' => '75'],
        ];

        // группируем массив по определенному полю

        $groupProducts = array_reduce($products, function ($acc, $product) {
            $acc[$product['value1']][] = $product['value3'];
            return $acc;
        }, []);

        assertCount(2, $groupProducts);

        $users = [
            ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
            ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
            ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
            ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
            ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
            ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
            ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
            ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
            ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
            ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
        ];

        $years = array_map(function($user){
            return date('Y', strtotime($user['birthday']));
            }, array_filter($users, function($user) {
                return $user['gender'] === 'male';
            }));

        $reduce = array_reduce($years, function ($acc, $year) {
            (!array_key_exists($year, $acc)) ? $acc[$year] = 1 : $acc[$year] += 1;
            return $acc;
        }, []);

        self::assertEquals(1, $reduce[1999]);
    }
}