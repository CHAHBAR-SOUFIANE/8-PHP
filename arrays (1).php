<?php
//// ep 31 ==> 45
////Array Indexed
// $langs = array("France","Span","Ilaly"); 
// $langs[] = "Maroc"; 
// echo $langs[3]."<br>";

// //Array associative
// $langs2 = array(
// "fr" => "French",
// "es" => "Spanish",
// "it" => "Ilalin"
// );
// $langs2["ma"] = "Maroc";
// echo $langs2["it"];

//// Array Multidimensional
///=>Array Indexed
// $diet = array(
//     array("Apple","Banana","Milk"),//Index 0
//     array("Meat","Banana","Egg"),//Index 1
//     array("Bread","Milk"),//Index 2
//     array("Apple","Bread","Milk"),//Index 3
//     array(
//         array("Ahmad","Morad","Spmaya","Maryam"),//Index 0 of Index 4
//         array("Ali","Najwa","Ibtisam")//Index 1 of Index 4
//     )//Index 4
// );
// echo $diet[4][0][0]; 

///=>Array associative
// $diet = array(
//     "Day 1" => array("Meat","Banana","Egg"),
//     "Day 2" => array("Apple","Bread","Milk"),
//     "Day 3" => array("Bread","Milk"),
// );
// echo $diet["Day 2"][1];//Bread
/// Array Methods ==>Ep 36
//in_array
// $langs = array("France","Span","Ilaly"); 
// if (in_array("Span",$langs,true)) {
//     echo "Yes it's exist";
// }
////array_key_exists
// $langs = array(
//   "fr" => "France",
//   "es" => "Span",
//   "it" => "Ilaly",
// ); 
// if (array_key_exists("fr",$langs)) {
//     echo "Yes it's found";
// }

////array_push()/array_unshift()
// $langs = array(
//   "fr" => "France",
//   "es" => "Span",
//   "it" => "Ilaly",
// ); 
// array_push($langs,"Germany","Argentine");
// print_r($langs);

////array_pop()=>remove last item
////array_shift()=>remove first item
////sort()=>order alphabitique //for indexed array
////rsort()=>order reverse de alphabitique //for indexed array
////arsort()/asort()=>Associated array
////ksprt()/krsort()=>sort key Associated array





























