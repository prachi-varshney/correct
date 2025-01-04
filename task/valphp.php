<?php
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = sanitizeInput($_POST['name'] ?? '');
    if(empty($name)){
        $errors['name'] = "Name is required.";
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $errors["name"] = "Invalid format";

    }
    }

?>

