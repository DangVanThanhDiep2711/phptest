<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // class Rectangle{
        //     private $length;
        //     private $width;
        //     public function __construct($length, $width){
        //         $this -> length = $length;
        //         $this -> width = $width;
        //     }
            // public function getLength($length){
            //     return $this -> length = $length;
            // }
            // public function setLength(){
            //     return $this -> length;
            // }
            // public function getWitd($width){
            //     return $this -> width = $width;
            // }
        //     public function setWitd(){
        //         return $this -> width;
        //     }
        //     public function getArea(){
        //         return $this->length * $this->width;
        //     }
        //     public function getPrimeter(){
        //         return 2*($this->length + $this->width);
        //     }
        // }
        // class Cride{
        //     private $darius;
        //     private function __construct($darius)
        //     {
        //         $this -> darius = $darius;
        //     }
        //     public function getdarius(){
        //         return $this -> darius;
        //     }
        //     public function AreaDarius(){
        //         return 3.14*$this->darius;
        //     }
        // }
        // $rec = new Rectangle(12,9);
        // $rece = new Cride(10);
        // echo 'dien tich hinh chu nhat: '.$rec -> getArea();
        // echo '<br>';
        // echo 'chu vi hinh chu nhat :'.$rec -> getPrimeter();
        // echo '<br>';
        // echo 'dien tich hinh tron: '.$rece -> AreaDarius();

        class person{
            private $name;
            private $age;
            private $GPI;
            public function __construct($name,$age,$GPI)
            {
                $this -> name = $name;
                $this -> age = $age;
                $this -> GPI = $GPI;
            }
            public function __toString()
            {
                return "name: ".$this->name."<br>"."age: ".$this->age;
            }
        }
        // $person1 = new Person('Truong', 18);
        // echo $person1;

        class Student extends person {
            private $GPI;
            public function getGBI(){
                return $this -> GPI;
            }
            public function setGBI($GPI){
                return $this -> GPI = $GPI;
            }
        }
        class teacher extends person {
            private $number;
            public function getnumber(){
                return $this -> number;
            }
            public function setnumber($number){
                return $this -> number = $number;
            }
        }
        $student = new student("Truong",43,8.5);
        $teacher = new teacher('Hoa',50,10);

        echo $student;
        echo '<br>';
        echo $teacher;
    ?>
</body>
</html>