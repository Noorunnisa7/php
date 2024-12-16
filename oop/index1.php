<?php 

class fileHandler{
    public $file;
    public function __construct($file){
        $this->file =  fopen( $file , 'w');
        echo "File created<br>";
    }
    public function writeData($data){
        fwrite($this->file , $data);
        echo "Data has been written in file";
    }
    public function __destruct(){
        fclose($this->file);
        echo "<br>File Closed";

    }
}


$makeFile = new fileHandler('data.txt');
$makeFile->writeData("Hello World");



// class testingClass{
//     public $text; 

//     public function ShowText(){
//         return $this->text;
//     }
// }
// $obj = new testingClass();
// $obj->text = "This is testing class";
// echo $obj->text;
// echo $obj->ShowText(); 




class testingClass{
    private $text = 'This is private modifiers'; 

    private function ShowText(){
        return $this->text;
    }
    public function revealText(){
        return "Reveal text".$this->ShowText();
    }
}
$obj = new testingClass();
// $obj->text = "This is testing class";  //error
// echo $obj->text;                   //error   
// echo $obj->ShowText();  //error
echo $obj->revealText();










class Example{
    protected $text = "This is protected modifier"; 

    protected function showText(){
        echo $this->text;
    }
}

$myobj = new Example();
// $myobj->text = "hello world"; 
// echo $myobj->text;
// $myobj->showText();












// class animal{
//     protected $text = 'This is animal parent class';
//     private $mytext = '123456';

// }

// class dog extends animal{
//     public function text(){
//        echo $this->text;
//     //    echo $this->mytext;
//     }
// }


// $animals = new dog(); 
// $animals->text();








class animal{
    public function sound(){
        return "Animal Sounds";
    }
}
class dog extends animal{
    public function sound(){
        return "The dog barks";
    }
}
class cat extends animal{
    public function sound(){
        return "The cat meows";
    }
}
class lion extends animal{
    public function sound(){
        return "The lion roars";
    }
}

$animalObj = [new dog(), new cat(),new lion()];
foreach($animalObj as $animal){
    echo $animal->sound();
}
