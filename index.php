<?php

// class Test {


//     public $parameter1;
//     public $parameter2;

//     public function __construct($number1, $number2)
//     {
//         $this->parameter1 = $number1;
//         $this->parameter2 = $number2;
//     }

//     public function sum()
//     {
//         $result = $this->parameter1+$this->parameter2;
//         return $result;
//     }

//     public function sub()
//     {
//         $result = $this->parameter1-$this->parameter2;
//         return $result;
//     }

//     public function multi()
//     {
//         $result = $this->parameter1*$this->parameter2;
//         return $result;
//     }

//     public function division()
//     {
//         $result = $this->parameter1/$this->parameter2;
//         return $result;
//     }


//     public function show()
//     {
//         echo "Good morning <br>";
//     }

//     public function message()
//     {
//         echo "Hello world <br>";
//     }

//     public function __destruct()
//     {
//          $this->parameter1 = 0;
//          $this->parameter2 = 0;
//     }
// }

// $test = new Test(50, 30);
// echo $test->sum()."<br>";
// echo $test->sub()."<br>";
// echo $test->multi()."<br>";
// echo $test->division()."<br>";

// $test = new Test(90, 20);
// echo $test->sum()."<br>";
// echo $test->sub()."<br>";
// echo $test->multi()."<br>";
// echo $test->division()."<br>";




class Test {
    public function flat()
    {
        echo "2BHK flat <br>";
    }

    public function car()
    {
        echo "premio <br>";
    }


}


class Test2 extends Test{

    public function bike()
    {
        echo "Royel Enfield <br>";

    }
}

$test = new test2();

$test->bike();
$test->car();
$test->flat();

?>