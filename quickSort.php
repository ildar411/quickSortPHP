<?php
    //реализация quicksort на php
    function QuickSort(&$array){
        if(count($array) <= 1){
            return $array;
        };
        $first = $array[0];
        $left = [];
        $right = [];
        for($i = 0; $i < $count; ++$i){
            if($first >= $array[$i]){
                $left[] = $array[$i];
            }
            else{
                $right[] = $array[$i];
            }
        }
    
        $left = QuickSort($left);
        $right = QuickSort($right);
        
        return array_merge($left, array($first), $right);
        //return array_merge_recursive($left, array($first), $right); если нужно в обратном порядкеж
    }
?>