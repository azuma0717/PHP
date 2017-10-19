<?php

function mid($x , $y , $z){
	if ($x < $y) {
        if ($y < $z){
        	return $y;
        }
        else if ($z < $x){
        	return $x;
        }
        else{
        	return $z;
        }
    }
    else {
        if ($z < $y){
        	return $y;
        }
        else if ($x < $z){
        	return $x;
        }
        else{
        	return $z;
        }
    }
}

function quickSort($numbers , $begin=null , $end=null){

	if($begin !== null && $end !== null && ($end - $begin) <= 1){return $numbers;}

	// 左辺と右辺の開始位置を定義
	$begin = ($begin === null)? 0 : $begin;
	$end    = ($end === null)? count($numbers) -1 : $end;
	$left     = $begin;
	$right   = $end;

	if($begin >= $end){return $numbers;}

	// ピボット(中央の値)
	$pivot = mid($numbers[$left] , $numbers[$left+(int)(($right-$left)/2)] , $numbers[$right]);

	// ソート処理実行（pivotが交差するまで続行）
	while(1){

		// 左辺のpivotよりも大きい値見つける
		while($numbers[$left] < $pivot){$left++;}

		// 右辺のpivotよりも小さい値をみつける
		while($numbers[$right] > $pivot){$right--;}

		//pivotが交差したら終了
		if($left >= $right){break;}

		// 値の入れ替え処理
		$tmp            = $numbers[$left];
		$numbers[$left]   = $numbers[$right];
		$numbers[$right] = $tmp;

		// 繰り返し対応
		$left++;
		$right--;
	}

	// pivotの左辺のソート処理
	$numbers = quickSort($numbers , $begin , $left);

	// pivotの右辺のソート処理
	$numbers = quickSort($numbers , $right , $end);

    return $numbers;
}

$res = quickSort(array(20,10,2,12,7,16,8,13,1) , null , null);
