<?php
/**
 * 选择排序也是一种简单直观的排序算法。它的工作原理很容易理解：
 *     1初始时在序列中找到最小（大）元素，放到序列的起始位置作为已排序序列；
 *     2然后，再从剩余未排序元素中继续寻找最小（大）元素，放到已排序序列的末尾。
 *     3以此类推，直到所有元素均排序完毕。
 * 注意选择排序与冒泡排序的区别：
 *     冒泡排序通过依次交换相邻两个顺序不合法的元素位置，从而将当前最小（大）元素放到合适的位置；
 *     而选择排序每遍历一次都记住了当前最小（大）元素的位置，最后仅需一次交换操作即可将其放到合适的位置。
 */

function selection_sort($array)
{
    $count = count($array);
    for ($i = 0; $i < $count - 1; $i++) {
        /*findtheminest*/
        $min = $i;
        echo '$min-->' . $array[$min] . '-->';
        for ($j = $i + 1; $j < $count; $j++) {
            //由小到大排列
            if ($array[$min] > $array[$j]) {
                //表明当前最小的还比当前的元素大
                $min = $j;
                //赋值新的最小的
            }
        }
        echo $array[$min] . 'coco<br/>';
        /*swap$array[$i]and$array[$min]即将当前内循环的最小元素放在$i位置上*/
        if ($min != $i) {
            $temp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $temp;
        }
    }
    return $array;
}

$old_array = [3, 4, 5, 6, 8, 2, 12];
$new_array = selection_sort($old_array);
print_r($new_array);