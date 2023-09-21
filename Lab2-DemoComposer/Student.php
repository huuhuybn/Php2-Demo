<?php
namespace demoComposer;
class Student
{
    var $name = "HUY";
    var $mssv = "342";

    function print(){
        echo $this->name . $this->mssv;
    }
}