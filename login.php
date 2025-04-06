<?php
$styles = ['register_login_style'];
$scripts = ['login_script'];
include("PageParts/header.php");
?>

<div class="form-container">
<h3 class="subtitle">Welcome back.</h3>
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label for="login-email">Email :</label>
        <input id="login-email" type="email" required />

        <label for="login-password">Password :</label>
        <input id="login-password" type="password" required />

        <label for="show-password">Show password :</label>
        <input id="show-password" type="checkbox" onclick="toggleShowPassword()">

        <button type="submit" class="buttonlink submit-reg">Sign in</button>
    </form>
</div>


<div class="testing-menu">
    <h3>
        Testing menu
    </h3>
    <a href="student.php" class="buttonlink">student.php</a>
    <a href="professor.php" class="buttonlink">professor.php</a>
</div>

<?php
include("PageParts/footer.php");
?>
