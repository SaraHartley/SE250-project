<?php
function check_cc();
{
// The check cc digit function.

// get 16 digit num
$user_cc; // = ?
$cc_nums = false;
$cc_len = 0;
// get cvv
$cvv; // = ?
$cvv_nums = false;
$cvv_len = 0;

//make sure they are all nums
cc_nums = isnumeric($user_cc);
cvv_nums = isnumeric($cvv);

//check corresponding lens
//cc_len = ;
//cvv_len = ;

if(cc_nums && cvv_nums && cc_len == 16 && cvv_len == 3)
{return true;}
else
{return false;} // call error too?

}
//Call it
check_cc();
?>