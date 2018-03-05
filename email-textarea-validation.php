<?php
function validateEmail($emailInput) : bool {
    $emailPattern = "/([A-Za-z0-9_\-.]){1,}@([A-Za-z0-9_\-.]){1,}\.([A-Za-z]){2,4}/";

    return ($emailInput !== "" && preg_match($emailPattern, $emailInput));
}

function checkMinCharacters(string $textInput, int $maxCharCount) : bool {

    return (strlen($textInput) <= $maxCharCount);
}
