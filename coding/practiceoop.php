<?php
function pre(){
    echo "<pre>\n";
}
//Class - A template example Dog
//Method - A defined capablity of a class - ex bark()
//Object or instance - A particular instance of a class - lassie
//One can have an instance of a class or a particular object. The instance is the actual object created at runtime.
// In above example lassie object is the instance of the dog class.
//The set of values of a particular object is called it's state.
//The object consist of a state and the behaviour that is defined in the object class.

//global functionin PHP

//date_default_timezone_set('India/Chennai');

$nextweek = time() + (7*24*60*60);
echo 'Now:   '. date('d-m-y')."\n";
echo "<pre>\n";
echo 'Next Week:   '. date('d-m-y',$nextweek)."\n";
echo "<pre>\n";

echo "Equivalent to ";

echo "<pre>\n";

$now = new DateTime();
$nextweek = new DateTime('today + 1 week');
$nextmonth = new DateTime('today + 1 month');

echo 'Now:   '.$now->format('y-m-d')."\n";
echo "<pre>\n";
echo 'Next Week:   '.$nextweek->format('y-m-d')."\n";
echo "<pre>\n";
echo 'Next Month:   '.$nextmonth->format('y-m-d')."\n";

//Defining class

class person{

    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;
    
    function get_name(){
        if ($this->fullname !==false){ return $this->fullname;}
        if ($this->familyname !== false && $this->givenname !== false){
            return $this->givenname.' '.$this->familyname;
        }
        return false;
    }   
}

$vipul = new person();
$vipul->fullname = "Vipul singh";
$vipul->room = "116";

$prakash = new person();
$prakash-> givenname = "Prakash";
$prakash->familyname = "Maru";
$prakash->room = "117";

echo "<pre>\n";
print $vipul->get_name();
echo "<pre>\n";
print $prakash->get_name();
echo "<pre>\n";

//Access static item in a class
echo DateTime::RFC822."\n"; // '::' is used for accessing static item in a class
//Access item in an object
//echo $z->format('y-m-d')."\n";

$date = new DateTime(); // New construct the object
$date = new DateTime('now');
pre();
print_r($date);
pre();
$date = new DateTime('31-3-2021');
pre();
print_r($date); //Date will be replaced
pre();
$errors = DateTime::getLastErrors(); //will return errors
print_r($errors);
print_r($errors['warning_count']);

// Will See Constructor and Destructor

class partyanimal{
    function __construct(){
        echo("Constructed");
    }
    function something(){
        echo("Something");
    }
    function __destruct(){
        echo ("Destructed\n");
    }
}

pre();
echo("1");
pre();
$one = new partyanimal();
pre();
echo("2");
pre();
$two = new partyanimal();
pre();
$two->something();
pre();
echo("Destruct Objects");
//Objects will be destructed
pre();

// We can create lot's of object in a class. It means it has multiple instances of the same class
// Let's see it in detail

class hello{
    protected $lang; //only accessible in this class
    function __construct($lang){
        $this->lang = $lang;
        return $this;
    }
    function greet(){
       return ($this->lang == 'hindi') ? "Namaste" :  "Hello";
       /* if($this->lang == 'hindi'){
           return 'Namaste';
       } */
    }
    function __destruct(){
        echo ("Destructed\n");
    }
}

pre();
$hindi = new hello('hindi');
echo $hindi->greet();
pre();
$any = new hello("");
echo $any->greet();
pre();

//Inheritance-> property of one class in other

class social extends hello{
    function bye(){
        return ($this->lang == 'hindi') ? "Fir milenge" :  "bye";
    }
}

$hindi = new social('hindi');
$eng = new social('');
pre();
echo $hindi->bye();
pre();
echo $eng->bye();


/* 
Visibilty

public - can be accessible outside the class,inside the class, and in derived classes.
protected - can be accessible inside the class and derived classes.
private - can only be accessed inside the class(i.e. private variables are not visible in derived classess) */


?>