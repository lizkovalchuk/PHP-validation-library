<?php

class Validation {

    function validateEmail($emailInput) : bool {
        $emailPattern = "/([A-Za-z0-9_\-.]){1,}@([A-Za-z0-9_\-.]){1,}\.([A-Za-z]){2,4}/";

        return (preg_match($emailPattern, $emailInput));
    }

    function checkMinCharacters(string $textInput, int $maxCharCount) : bool {

        return (strlen($textInput) <= $maxCharCount);
    }

    function validateName($name) : bool {
        $namePattern = '/^[a-zA-Z-\'\s]+$/';

        return (preg_match($namePattern, $name));
    }

    function validateDropdown($dropdownName) : bool {
        return filter_input(INPUT_POST, $dropdownName);
    }

    function validateCheckbox($checkboxName) : bool {
        return !empty($_POST[$checkboxName]);
    }

    function validatePhone($phone) : bool {
        $phonePattern = "/(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}/";

        return (preg_match($phonePattern, $phone));
    }

    function validateRadioButton($radioName) : bool {
        return isset($_POST[$radioName]);
    }

    function validatePassword($passwordInput, $userPassword) : bool {
        if ($passwordInput == $userPassword){
            return true;
        } else{
            return false;
        }
    }

    function validateUsername($usernameInput, $userName) : bool {
        if ($usernameInput == $userName){
            return true;
        } else{
            return false;
        }

    }

}