# 303. 区域和检索 - 数组不可变
给定一个整数数组  nums，求出数组从索引 i 到 j  (i ≤ j) 范围内元素的总和，包含 i,  j 两点。

示例：

>给定 nums = [-2, 0, 3, -5, 2, -1]，求和函数为 sumRange()
>
>sumRange(0, 2) -> 1  
>sumRange(2, 5) -> -1  
>sumRange(0, 5) -> -3  

说明:
1. 你可以假设数组不可变。
2. 会多次调用 sumRange 方法

这个问题的关键点就在于多次调用，多次调用就意味着重复计算，怎么解决重复计算的问题  

DP概念映射  leetcode-cn 把这个题标签成DP问题

* 子问题   0到各个位置的和  简化成sum     
* 重复子问题     就是重复调用带来的计算子问题    
* 最优子结构      唯一解且是最优解     
* 状态转移方程  

``` 
简化成 sumRange[$i][$j] = sum[$j] - sum[$i-1]
```