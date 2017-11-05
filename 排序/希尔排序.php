<?php
/**
 * 希尔排序是基于插入排序的以下两点性质而提出改进方法的：
 *
 * 插入排序在对几乎已经排好序的数据操作时，效率高，即可以达到线性排序的效率
 * 但插入排序一般来说是低效的，因为插入排序每次只能将数据移动一位
 *
 * 1. 增量选择
 *  一般的初次取序列的一半为增量，以后每次减半，直到增量为1。
 * 2. 不稳定
 * 3.
 *
 *
 *
 */


$arr = [10, 9, 29, 22, 6, 18, 30, 29];

function shell_sort(&$arr)
{
    if (!is_array($arr)) return;
    $n = count($arr);
    for ($gap = floor($n / 2); $gap > 0; $gap = floor($gap /= 2)) {
        for ($i = $gap; $i < $n; ++$i) {
            for ($j = $i - $gap; $j >= 0 && $arr[$j + $gap] < $arr[$j]; $j -= $gap) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + $gap];
                $arr[$j + $gap] = $temp;
            }
        }
    }
}

shell_sort($arr);
print_r($arr);



