<?php
    // session_start();

    // $session['name']='suzuki';
    // $session['age']=32;


session_start();

$_SESSION['name'] = 'suzuki';
$_SESSION['age'] = 12;

$sid=session_id();
echo $sid;



