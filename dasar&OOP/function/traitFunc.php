<?php
Namespace TFunc;
trait imput{

    public ?string $name;
    public ?string $name2;
    public function sayHello():void{
    if(!is_null($this->name)){
        echo "hello my name is $this->name";
    }else{
        echo "what is your name?";
    }    
   
    }

    private function sayGoodbye():void{
        if(!is_null($this->name2)){
            echo "goodbye $this->name2";
        }else{
            echo "goodbye bro";
        }
    }
}

trait realimput{
    public function sayHello():void{
        if(!is_null($this->name)){
            echo "hello my rill name is $this->name";
        }else{
            echo "what is your rill name?";
        }    
       
        }

        private function sayGoodbye():void{
            if(!is_null($this->name2)){
                echo "goodbye rill $this->name2";
            }else{
                echo "goodbye rill bro";
            }
        }

}

class person{
    use imput;

    public function __construct(?string $name, ?string $name2){
    $this->name = $name;
    $this->name2 = $name2; 
    }

    
}

class Child extends Person{


    public function sayHello():void{
        if(!is_null($this->name)){
            echo "hello name Child is $this->name";
        }else{
            echo "what is your nem?";
        }    
       
        }
    
        public function sayGoodbye():void{
            if(!is_null($this->name2)){
                echo "goodbai  $this->name2!!";
            }else{
                echo "goodbye Child";
            }
        }
}

class Child2 extends person{
use imput{
    sayGoodbye as private;
}
}

class Person2 {
    use imput{
        sayGoodbye as public;
    }

    public function __construct(?string $name, ?string $name2){
        $this->name = $name;
        $this->name2 = $name2; 
        }

}

trait duo {
    use imput, realimput{
        imput::sayGoodbye as public;
        realimput::sayGoodbye as public;
        realimput::sayHello insteadof imput;
        imput::sayGoodbye insteadof realimput;
    }
}

class DobelTrait{
    use duo;

    public function __construct(?string $name, ?string $name2){
    $this->name = $name;
    $this->name2 = $name2; 
    }

    
}

?>