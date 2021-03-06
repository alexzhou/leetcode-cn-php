<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    //尾插入 然后leetcode 的测试方法里面 并没有上面使用PHP的内置方法快
    function merge(&$nums1, $m, $nums2, $n) {
        $p1 = $m - 1;
        $p2 = $n - 1;
        $p = $m + $n - 1;
        while (($p1 >= 0) && ($p2 >= 0)){
            $nums1[$p--] = ($nums1[$p1] < $nums2[$p2]) ? $nums2[$p2--] : $nums1[$p1--];
        }
        for($i=0;$i<$p2+1;$i++){
            $nums1[$i] = $nums2[$i];
        }
    }
}

$nums1 = [0];$nums2=[1];
$obj = new Solution();
$obj->merge($nums1,1,$nums2,1);
var_dump($nums1);
