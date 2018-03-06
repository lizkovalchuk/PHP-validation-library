<?php


function phoneValidation($phoneInput): bool {

        $phonePattern = "/(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}/";

        return (preg_match($phonePattern,$phoneInput));
}

function validateRadioButton($radioName): bool {

    return (!isset($_POST[$radioName]));
}
