<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name  = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    if (empty($name) || empty($email)) {
        die("All fields are required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    echo "Form Submitted Successfully<br>";
    echo "Name: $name<br>";
    echo "Email: $email";
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Submit</button>
</form>
