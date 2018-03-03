<?php
include "lab5.html";

$phone = "";
$errPhone = "";

$flag = true;

var_dump($_POST);

if (isset($_POST['submit'])) {

    $phone = $_POST['user_phone'];
    phoneValidation($phone);

    return false;
}

function checkPattern($pattern, $value){
    return preg_match($pattern, $value);
}

function phoneValidation($phoneArg){

    if (isset($_POST['user_phone'])) {

        $phonePattern = "/(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}/";

        if(!checkPattern($phonePattern,$phoneArg))
        {
            return $errPhone = "Please enter a valid Canadian phone number";
        }

    }
}

//if (isset($_POST['user_phone'])) {    // checking if form is submitted
//
//    if (!$flag) {
//        $phone = $_POST['user_phone'];
//
//
//         // checking if phone number is between 10 to 14 digits;
//
//        function phoneValidation(){
//
//        }
//
//
//
//        if (!preg_match($pattern, $phone)) {  // this checks for the pattern. returns true if it matches or else false
//            $errPhone = "Please enter phone with at least 10 digits";
//        }
//
//        if ($message == '' || $message == null) {
//            $errMessage = "Please enter message";
//        } else {
//            $flag = true;
//            $email = "";   // clearing the form
//            $name = "";
//            $phone = "";
//            $message = "";
//            $thanksMsg = "Thank you for submitting the form. We will get back to you within 48 hours";
//        }
//    }
//}
//
//
//$drop_down = ['Call','Email','Text Message'];
//$nav_menu = array('Home','About','Contact Us','Portfolio','Blog');
//$footer_nav_menu = array('Contact','Blog','Copyrights','Policies','Careers');
//
//function displayNavigation($nav_menu_array)    // function that displays navigation menu dynamically
//{
//    echo '<ul>';
//    foreach ($nav_menu_array as $key=>$value) {
//        echo '<li><a href="#">' .$value . '</a></li>';
//    }
//    echo '</ul>';   // instead of echo, use return. Pass navigation links as an argument
//
//}
//
//

