<?php
class car{
    //properties 
    public $name;
    public $color;


    //method 
    public function carDetails(){
        echo "My car name is ".$this->name . " and Color is" .$this->color;
    }
    // public function carColor(){
    //     echo "";
    // }
}


$car1 = new car();
// $car1->carDetails();
// echo "<br>";

// $car1->carColor();
// echo "<br>";
//property value 
$car1->name  = "BMW";
$car1->color = 'Black';
$car1->carDetails();
echo "<br>";
$car2 = new car();
$car2->name = 'Audi';
$car2->color = 'White'; 

$car2->carDetails();
echo "<br>";


class  book{
    public $name; 
    public $author; 

    public $year ; 

    public function __construct($name , $author , $year){
        $this->name = $name; 
        $this->author = $author ;
        $this->year  = $year;
    }

    public function bookDetail(){
      return 'This Book name is '.$this->name .' Author is '.$this->author .' Published in '.$this->year;
    }

}

$book1 = new book('PHP' , 'Taylor' , '1998');
$book2 = new book('Js' , 'Taylor' , '2002');
$book3 = new book('HTML5' , 'Taylor' , '2000');
$book4 = new book('CSS' , 'Taylor' , '2007');

echo $book1->bookDetail();
echo $book2->bookDetail();
echo $book3->bookDetail();
echo $book4->bookDetail();

?>