<?php

class Father
{
    protected static $name = 'Darth Vader';

    public static function getName() 
    {
        return static::$name;
    }
}

class Son extends Father
{
    protected static $name = 'Luke Skywalker';
}

echo Father::getName();
echo Son::getName();

//Normal class

// class Father
// {
// 	protected $name;

// 	public function __construct($name)
// 	{
// 		$this->name = $name;
// 	}
//     public static function getName() 
//     {
//         return $this->name;
//     }
// }

// class Son extends Father{}

// $father = new Father('Darth Vader');
// echo $father->getName();

// $son = new Son('Luke Skywalker');
// echo $son->getName();