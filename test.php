<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Who said meow?</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<h4>
<?php
class Animal {
    private $name_animal;

    public function getName(){
        return $this->name_animal;
    }

    public function __construct($name){
        $this->name_animal = $name;
    }
}

class Cat extends Animal {
    public function meow(){
        $catname = $this->getName();
        return "Cat ". $catname ." is saying meow";
    }
}

$cat = new Cat('Garfield');
echo $cat->getName()."</br>";
echo $cat->meow();
?>
</h4>

</body>
</html>
