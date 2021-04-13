<?php
/*
==> Function Inside Class = Method
==> Function Outside Class = Function
==> class = Calss keyword
==> new = New Object Keyword
==> Public, Private, Protected = Visibility Markers
==> -> = Object Operator
==> $this = Pseudo Variable (Refer to Object Property)
==> Constant
 > use inside class
 - self::constName
 > use outside class
 - echo className::constName
 -
==> self vs $this
  > self : 
  - Refer to Current Class
  - Access Static Members
==>Encapsulation
>for protect data 
>not anyone can change the value of properties
>Private marker is requered
==>Encrypt 
>sha1()
==>Inheritance
>class newClass extends parentClass
>newClass inherite all properties and methods of parentClass
>Interdit de changer les régles des method qui exist en le classParet dans classChild 
>Override : changer les methods
>Finel method : make a method not authorized for change, and cannot be called
>Final class : make a method not authorized for inherite or extends
==>Abstract class
>rules to go
>Force devolopers to follow your method
>mede for other classes to inherit prop & methods from it    
>obligé de utiliser tous ces method
>cannot create Object from it
>abstract Methods : Contain no body code, but can contain argumets
>obligé de respecter les Visibility Markers
==>Polymorphism 
>declare with keyword : interface nameInterface
>usesed by : class className implements nameInterface
==>Visibility markers
>Security levele : Public < Protected < private
>By default public
>Protected : can only use by origin class or extend class
>Private : can't be accessed by subclass
==>Magic methods start with [__]
>__Construct : declare in class : public function __construct(){}
           : Called when object created 
           : Can be inherited
>__Destruct : called when object is destroyed
==>__Call 
>called when Invoking Function not found or not accessible
>Accept two parameters [$MethodName, $Params]
==>Get, Set
>__Get : Called when getting a property not accessible or not found
     :Accept one parameter [$prop] 
>__Set : Called when getting a value to a property or not found
     :Accept two parameter [$prop, $value] 








*/
// class AppleDvice {
//   //Properties  
//   public $ram = "2GB";
//   public $inch = "4";
//   public $stockage = "32GB";
//   public $color = "silver";
//   public $ownername = "Ossama";
//   private $lock;
//   public $name;
// //   //Constant
// //   const PHONEOWNER = 5;

// //   //Method
// //   public function ownerBehavers(){
// //      if (strlen($this->ownername)<self::PHONEOWNER) {
// //          echo "Your name must be equa : ".self::PHONEOWNER."<br>";
// //      }else {
// //          echo "Welcom <b>".$this->ownername."<b><br>";
// //      }
// //   }
// public function changeSpecs($r,$i,$s,$c,$o){
//     $this->ram = $r;
//     $this->inch = $i;
//     $this->stockage = $s;
//     $this->color = $c;
//     $this->ownername = $o;
// }

// //method Encapsulate for change passeword
// public function changelock($lo){
//   //encrpt password
//   $this->lock = sha1($lo);
// }

// final public function sayHello($n){
//   $this -> name = $n;
//   echo "The phone ".$n;
// }
// }

// class sony extends AppleDvice{
//   public $camera = "25MB";
//   public $ram = "6GB";

  // public function sayHello($n){
  //   $this -> name = $n;
  //   echo "The phone ".$n." has ".$this->ram." Ram";
  // }
// }

// abstract class makeDevice{
     
//   public $ram;
//   public function sayhello(){
//     echo "Say hello";
//   }

//   // abstract public function sayBy($arg);
//   abstract public function saytest();

// }

// class appleD extends makeDevice{
//     public function saytest(){
//       echo "test";
//     }
// }

// //Create new Object from class AppleDvice()
// $iphone6plus = new AppleDvice();
// $iphone6plus -> ram = "4GB";
// $iphone6plus -> inch = "5 inch";
// $iphone6plus -> color = "GOLD";
// $iphone6plus -> stockage = "256GB";
// // echo "<pre>";
// // var_dump($iphone6plus);
// // echo "</pre>";
// // // $iphone6plus -> ownerBehavers();
// // $iphone6plus -> changeSpecs("6GB","6 inch","SILVER","512GB","Ali");

// //Change the value of lock
// // echo $iphone6plus -> $lock = "123456";
// // echo $iphone6plus -> $lock;
// // $iphone6plus -> changelock("gdf1458");
// $iphone6plus -> sayHello("Iphone 6 plus");
// echo "<pre>";print_r($iphone6plus);echo "</pre>"; 

// //Create new Object from class sony()
// $Xperia10 = new sony();
// $Xperia10 -> sayHello("Xperia 10");
// echo "<pre>";print_r($Xperia10);echo "</pre>"; 


  // //Construct 
  // class huawei{
  //   public $name;
  //   public $ram;
  //   public function __construct($na,$ra){
  //     $this -> name = $na;
  //     $this -> ram = $ra;
  //   }
  // }
  // $huaweiMate = new huawei("Mate 10","6GB ram");
  // echo "<pre>"; print_r($huaweiMate) ;echo "</pre>";

// // call 
//   class huawei{
//     public $name;
//     public $ram;
//     public function __call($method,$params){
//       echo "The Method [".$method." ] Not found or not accessible <br>";
//     }
//   }
//   $huaweiMate = new huawei("Mate 10","6GB ram");
//   $huaweiMate -> welcomTohuawei();
//   echo "<pre>"; print_r($huaweiMate) ;echo "</pre>";





















