<?php

trait message1
{
    public function msg1()
    {
        echo "OOP is fun!";
    }

    public function msg2()
    {
        echo 'Really! OOP is fun';
    }
}

trait message2
{
    public function msg3()
    {
        echo "OOP is fun!";
    }

    public function msg4()
    {
        echo 'Really! OOP is fun';
    }
}

class Welcome
{
    use message1,message2;
}

$obj = new Welcome();
echo $obj->msg3();
echo "<br>";
echo $obj->msg4();
