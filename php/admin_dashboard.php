<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin_username = "admin";
    $admin_password = "admin123";

    if ($username === $admin_username && $password === $admin_password) {
        echo "<h1>Bun venit, $username!</h1>";
        echo "<p>Ai acces la panoul de administrare.</p>";
    } else {
        echo "<h1>Logare eșuată!</h1>";
        echo "<p>Username sau parola incorecte. Încercați din nou.</p>";
    }
} else {
    echo "<h1>Acces interzis!</h1>";
    echo "<p>Trebuie să te loghezi pentru a accesa această pagină.</p>";
}
?>
