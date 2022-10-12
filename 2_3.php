<?php


/// Define a class

class User
{
    //Properties (attributes)
    // public $name = 'Brad';
    public $name;

    //Methods (functions)
    public function sayHello()
    {
        // return 'Hello';
        //// accessing a propertie with in a class is $this->
        return $this->name . 'Says Hello';
    }
}

// Instantiate a user object from the use class
$user1 = new User();
$user1->name = 'Brad';
echo $user1->name;
echo "<br>";
echo $user1->sayHello();
echo '<br>';
echo '<br>';

// Create a new user 
$user2 = new User();
$user2->name = 'Wilfred';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
