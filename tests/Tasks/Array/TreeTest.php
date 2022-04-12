<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testTree()
    {
        $flatArray = [
            ['id' => 1, 'parentid' => 0, 'name' => 'Направления'],
            ['id' => 3, 'parentid' => 1, 'name' => 'Образовательные услуги'],
            ['id' => 7, 'parentid' => 1, 'name' => 'Охрана труда'],
            ['id' => 8, 'parentid' => 1, 'name' => 'Работы на высоте'],
            ['id' => 9, 'parentid' => 1, 'name' => 'Пожарная безопасность'],
            ['id' => 4, 'parentid' => 1, 'name' => 'Испытательная лаборатория'],
            ['id' => 10, 'parentid' => 4, 'name' => 'Специальная оценка условий труда'],
            ['id' => 11, 'parentid' => 4, 'name' => 'Производственный контроль'],
            ['id' => 5, 'parentid' => 1, 'name' => 'Услуги в области охраны труда'],
            ['id' => 6, 'parentid' => 1, 'name' => 'Независимая оценка квалификации'],
            ['id' => 12, 'parentid' => 6, 'name' => 'Экзаменационный центр оценки квалификации'],
            ['id' => 13, 'parentid' => 12, 'name' => 'Аттестаты соответствия'],
            ['id' => 14, 'parentid' => 12, 'name' => 'Профессиональные стандарты'],
            ['id' => 15, 'parentid' => 14, 'name' => 'Специалист в области охраны труда'],
            ['id' => 16, 'parentid' => 15, 'name' => 'Младший специалист по охране труда'],
            ['id' => 18, 'parentid' => 16, 'name' => 'Уровень квалификации: 6'],
            ['id' => 17, 'parentid' => 15, 'name' => 'Специалист по охране труда'],
        ];

        // Решение 1
        /////////////////////////////////////////////
        function levelsTree(array $array): bool|array
        {
            if(empty($array)){return false;}
            $levels = [];
            foreach ($array as $a){
                if(!array_key_exists('parentid',$a)){return false;}
                $levels[$a['parentid']][] = $a;
            }
            return $levels;
        }

        function createTree(array $list, array $parent){
            $tree = [];
            foreach ($parent as $k=>$l){
                if(isset($list[$l['id']])){
                    $l['children'] = createTree($list, $list[$l['id']]);
                }
                $tree[] = $l;
            }
            return $tree;
        }

        function outputTree(array $list){
            foreach($list as $t){
                echo '<ul>';
                echo '<li>'.$t['name'].'</li>';
                if(array_key_exists('children',$t)){
                    outputTree($t['children']);
                }
                echo '</ul>';
            }
        }

        $tree = createTree(levelsTree ($flatArray), levelsTree ($flatArray)[0]);
       //outputTree($tree);
        //print_r($tree);

        //////////////////////////////////////////////
        //Решение 2
        $combine_array = array_combine(array_column($flatArray, 'id'), array_values($flatArray));

        // меняем исходный массив добавляя дочерние элементы
        foreach ($combine_array as $item => &$value) {
            if (isset($combine_array[$value['parentid']])) {
                $combine_array[$value['parentid']]['children'][$item] = &$value;
            }
        }

        $tree2 = array_filter($combine_array, function($val) {
            return $val['parentid'] == 0;
        });

        //outputTree($tree2);
        /////////////////////////////////////////

        $new = [];

        foreach ($flatArray as $a){
            $new[$a['parentid']][] = $a;
        }

        function flatToTree2(&$list, $parent){
            $tree = [];
            foreach ($parent as $k => $l){
                if(isset($list[$l['id']])){
                    $l['children'] = flatToTree2($list, $list[$l['id']]);
                }
                $tree[] = $l;
            }
            return $tree;
        }
        $tree3 = flatToTree2($new, $new[0]);

        self::assertEquals('Младший специалист по охране труда', $tree[0]['children'][6]['children'][0]['children'][1]['children'][0]['children'][0]['name']);
        self::assertEquals('Младший специалист по охране труда', $tree2[1]['children'][6]['children'][12]['children'][14]['children'][15]['children'][16]['name']);
        self::assertEquals('Младший специалист по охране труда', $tree3[0]['children'][6]['children'][0]['children'][1]['children'][0]['children'][0]['name']);

    }
}