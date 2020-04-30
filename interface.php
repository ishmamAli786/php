<?php
// An interface is like a class with nothing but abstract methods
// All methods of an interface must be public.
// it is also possible to declare a constrcutor in an interface.
// it is possible for an interface to have constants (cannot be overriden by a class/interface that inherits them)
// interface keyword are used to create an interface in php
// key point of an interface
// interface don't have instance variable
// all methods of an interface is abstract
// all methods of an interface are automatically (by default) public
// we can not use the private and protected specifier when declaring member of an interface
// we can create object of an interface
// more than one interface can be implemented in a singal class
// a class implement an interface using implements keyword
// if a class is implementing an interface it has to define all the methods given in that interface
// if a class does not implement all the methods declared in the interface, the class must be declared abstract
// the method signature for the method in the class must watch the method signature as it appear in the interface
// any class can use an interface's constant from the name of an interface like Test::roll
// classes that implement an interface can treat the constants as they were inherited
// an interface can extend an interface
//one interface can  inherit another interface using extends keywords
// an interface cannot extends classes
interface Father{
    const a=101;
    public function display();
}
interface Mother{
    const b=103;
    function getValue();
}
interface Son extends Father,Mother{
    const s=103;
    function showValue();
}
// implementing class
// more than one interface can be implemented in a singal class
// a class implement an interface using implements keyword
// if a class is implement an interface it has to define all the methods given in that interface
// if a class does not implement all the methods declared in the interface,the class must be declared abstract
// the method signature for the method in the class must watch the method signature as it appear in the interface

?>