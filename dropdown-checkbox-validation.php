<?php

function validateDropdown($dropdownName) : bool {
return filter_input(INPUT_POST, $dropdownName);
}

function validateCheckbox($checkboxName) : bool {
    return !empty($_POST[$checkboxName]);
}