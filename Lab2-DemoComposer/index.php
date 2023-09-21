<?php

include 'Student.php';
include 'Teacher.php';


$sv = new \demoComposer\Student();
$gv = new demoComposer\Teacher();

$sv->print();

$gv->print();

