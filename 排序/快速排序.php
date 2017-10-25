<?php
/**
 * 快速排序使用分治策略(Divide and Conquer)来把一个序列分为两个子序列。
 * 步骤为：
 * 从序列中挑出一个元素，作为"基准"(pivot).
 *  把所有比基准值小的元素放在基准前面，
 *  所有比基准值大的元素放在基准的后面（相同的数可以到任一边），这个称为分区(partition)操作。
 *  对每个分区递归地进行步骤1~2，递归的结束条件是序列的大小是0或1，这时整体已经被排好序了
 */

$s = [1, 9, 2, 8, 3, 7, 100, 24, 21];

// 最差时间复杂度 ---- O(n^2)
// 平均时间复杂度为   ---- O(n×logn)

$s = quickSort($s);

function quickSort(&$arr)
{
    if (count($arr) > 1) {
        $k = $arr[0];
        $x = [];
        $y = [];
        $_size = count($arr);
        for ($i = 1; $i < $_size; $i++) {
            if ($arr[$i] <= $k) {
                $x[] = $arr[$i];
            } elseif ($arr[$i] > $k) {
                $y[] = $arr[$i];
            }
        }
        $x = quickSort($x);
        $y = quickSort($y);
        return array_merge($x, [$k], $y);
    } else {
        return $arr;
    }
}

print_r($s);