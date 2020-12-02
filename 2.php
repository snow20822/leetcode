<?php
/*
给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。

如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。

您可以假设除了数字 0 之外，这两个数都不会以 0 开头。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/add-two-numbers
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
$l1 = [2,4,3];
$l2 = [5,6,4];
$a = 0;
$b = 0;
$total = 0;
foreach($l1 as $key => $value){
	$plus = 1;
	$num = 0;
	if($key > 0){
		for($i=0;$i<$key;$i++){
			$plus = $plus*10;
		}
	}
	$num = $value*$plus;
	$a += $num;
}
foreach($l2 as $key => $value){
	$plus = 1;
	$num = 0;
	if($key > 0){
		for($i=0;$i<$key;$i++){
			$plus = $plus*10;
		}
	}
	$num = $value*$plus;
	$b += $num;
}
$total = $a + $b;

$ans = [];

while ($total > 10) {
	$push = $total%10;
	array_push($ans, $push);
	$total = $total/10;
}

array_push($ans, $total%10);

print_r($ans);
die();

?>