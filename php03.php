<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($number){
 $result = 2* $number ;
 return $result;
}
echo nibai(3); " \n " ;

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function tashizan($a,$b){
    $result = $a + $b ;
    return $result;
}
echo tashizan(144,169);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function kakezan($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo kakezan(array(1, 3, 5 ,7, 9));" \n " ;



//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a)
         $max_number = $a;
     }
     return $max_number;
    }
    echo max_array(array(1,3,5,7,9)). "\n";
    

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください
//strip_tags
$str = "<p><?php var_dump('string'); ?>あるふぁ<br>べーた</p>";

echo strip_tags( $str, '<h1><br>');
echo "\n";
//array_push
$stack = array("鯖", "鮭");
array_push($stack, "鮪", "鮃");
print_r($stack);

//array_merge
$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//time, mktime
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:' .date('Y-m-d')."\n";
echo 'Now Week:' .date('Y-m-d', $nextWeek)."\n";

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a" .date("l", mktime(0, 0, 0, 7, 1, 2000));

//date
    


?>