<?php 
/*
============================== OOP Class,Object,Method ==========================================
class Oop{
    public $name="Sabbir";
    public function addTo($num1,$num2){
        echo $num1+$num2;
    }
}
 $obj=new Oop();
 $obj->addTo(5,15);
 echo $obj->name;
 */


/*

 ============================== OOP this key word ==========================================
 class Oop{
    public $name="Hello Php Developer";
    public function addTo(){
        echo $this->name; 
    }
}
 $obj=new Oop();
 $obj->addTo();
*/
//============================== OOP Constructor ==========================================
/*
// 2 Type of Peramitter 
 1.. With Peramiter
 2..WithOut Peramiter

// This is without Peramiter..
class Oop{
   function __construct(){
    echo "Hello I am Constructor";
   } 
}
new Oop();

// With Peramiter
class Ostad{
    public function __construct($num1,$num2){
        echo $num1+$num2;

    }
}
new Ostad(2,3);
*/
//==============================Constructor Spectial benefit ==========================================
/*
class Car{
    public $name;
    public $model;
    public $year;

public function __construct($nameValue,$modelValue,$yearValue){
    $this->name=$nameValue;
    $this->model=$modelValue;
    $this->year=$yearValue;
}

    public function myCar(){
        echo "My Car name is $this->name and model is $this->model and year is $this->year";
    }
}
$obj= new Car("Toyota","premeio","2018");
$obj->myCar();


// Practice 

class Laptop{
    public $name;
    public $model;
    public $ram;
    public $rom;

    public function __construct($nameValue,$modelValue,$ramValue,$romValue){
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->ram=$ramValue;
        $this->rom=$romValue;
    }

    function myLaptop(){
        echo "My laptop name : $this->name <br> my laptop model is : $this->model <br> and my laptop ram : $this->ram  <br> and her rom is : $this->rom";
    }
}

$details= new Laptop("Acer","Acer Asper5","8GB","512 SSD");
$details->myLaptop();
*/


// ================================= Inheritance oop =======================================================
/*
class father{
public function print50(){
for($i=0;$i<=50;$i++){
    echo "{$i} <br>";
        }
    }
}
class son extends father{

}
$obj= new son();
$obj->print50();



class father{
public function print50(){
for($i=0;$i<=50;$i++){
    echo "{$i} <br>";
        }
    }
}
class son extends father{
    public function print50(){
        for($i=0;$i<=30;$i++){
            echo "{$i} <br>";
                }
            }
}
$obj= new son();
$obj->print50();


// ============================= Final Keyword===============================================================

 final class father{
   final public function print50(){
    for($i=0;$i<=50;$i++){
        echo "{$i} <br>";
            }
        }
    }
    class son extends father{
        public function print50(){
            for($i=0;$i<=30;$i++){
                echo "{$i} <br>";
                    }
                }
    }
    $obj= new son();
    $obj->print50();


// ============================= Abstract Keyword ===============================================================

  abstract class father{
     public function print50(){
     for($i=0;$i<=50;$i++){
         echo "{$i} <br>";
             }
         }
     }
     class son extends father{
         public function print50(){
             for($i=0;$i<=30;$i++){
                 echo "{$i} <br>";
                     }
                 }
     }
     $obj= new father();
     $obj->print50();

     // ============================= Constructor 1 ====================================
      class Father{
        public function __construct(){
            echo " I am Father Constractor";
        }
      }


      class Son extends Father{
        public function __construct(){
            echo " I am Son Constractor";
            
        }
      }
      new Son();
      
       // ============================= Parent keyword ====================================

       class Father{
        public function __construct(){
            echo " I am Father Constractor";
        }
      }


      class Son extends Father{
        public function __construct(){
            parent::__construct();
            echo " I am Son Constractor";
            
        }
      }
      new Son();
       

// ============================= Static Properties  ======================================================
class Name{
   public static function myName(){
        echo "Hello i am Sabbir";
    }
}
Name::myName();

// ============================= Self Properties  ======================================================

class myclass{
  public static $Hero ="Shakib khan";
  public  static function Cinema(){
    echo  self::$Hero ;
  }
}
$obj= new myclass();
$obj->Cinema();
*/

// ============================= Access Modifiers  ======================================================

// Public 
/*
class Oop{
    public $name="sabbir";
    public $address="Feni";
}
$obj= new Oop();
echo $obj->name;
*/

// protected
/*
class prentchild{
    protected $name='sabbir';
    protected $address='Feni';
    protected function saju(){
        echo "I am a prent Chil";
    }
}

class small extends prentchild {
public function nuzrul(){
    return $this->saju();
}
}
$obj= new small();
$obj->nuzrul();

*/

// private
/*
class prentClass{
   private $name='sabbir';
     private function Func(){
        echo "I am a private Function";
    }
}

class child{
    public function result(){
        return $this->Func();
    }
}

$obg= new prentClass;
$obg->Func();
$obg->name;       // error code because $name and func this is a private method and property..

*/
     ?>