<?php

function validateDropdown($dropdown) : bool {
    if (filter_input(INPUT_POST, $dropdown)){
        return false;
    } else{
        return true;
    }
}

function validateCheckbox($checkbox){
    if($checkbox.is(':checked')){
        return true;
    }
    else{
        return false;
    }
}


