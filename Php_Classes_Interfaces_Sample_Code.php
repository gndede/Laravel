<?php
//Employee class
class Employee
{ 
	Public $name;
	Public $position;
	function __construct($name,$position)
	{
		// This is initializing the class properties
		$this->name=$name;
		$this->position=$position;
	}	 
	function show_details()
	{
		echo $this->name." : ";
		echo "Your position is ".$this->profile."\n";
	}
}
	
$employee_obj= new Employee("John","Architect");
$employee_obj->show_details();
	
$employee= new Employee("George","Programmer");
$employee->show_details();

?>



<?php
//Tractor Class
class tractor{
//Class Properties
public $tname;
public $tcolor;
public $tcapacity;
public $tweight;

// Class Methods
function setting_the_name($tname) {
$this->tname = $tname;
}

function getting_the_name() {
return $this->tname;
}

function setting_the_color($tcolor) {
$this->tcolor = $tcolor;
}

function getting_the_color() {
return $this->tcolor;
}

function setting_the_capacity($tcapacity) {
$this->tcapacity = $tcapacity;
}

function getting_the_capacity() {
return $this->tcapacity;
}
	
function setting_the_weight($tweight) {
$this->tweight = $tweight;
}

function getting_the_weight() {
return $this->tweight;
	}
}
?>




<?php
//Tractor Interface
interface Tractors {
public function description();
}

class JohnDeerfarm implements Tractors {
public function description() {
echo "My tractor is too powerful for you to handle on the farm. 
Try something else. \n";
	}
}

class BullDozer implements Tractors {
public function description() {
echo "My tractor is too powerful for you to handle on the farm. 
Try something else.\n";
	}
}

class lawnMower implements Tractors {
public function description() {
echo "My tractor is too powerful for you to handle on the farm. 
Try something else.\n";
	}
}

class GardenTractor implements Tractors {
public function description() {
echo "My tractor is too powerful for you to handle on the farm. 
Try something else. \n";
	}
}


$johnDeerfarm = new johnDeerfarm ();
$bullDozer = new bullDozer();
$lawnMower = new lawnMower();
$gardenTractor = new gardenTractor();
$tractors = array($johnDeerfarm, $bullDozer, $lawnMower, $gardenTractor);
foreach($tractors as $tractor) {
$tractor->description();
	}
?>