<?php
$styles = ['register_login_style'];
include("PageParts/header.php");
?>

<div class="form-container">
<h3 class="subtitle">Welcome back.</h3>
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label for="login-email">Email :</label>
        <input id="login-email" type="email" required />

        <label for="login-password">Password :</label>
        <input id="login-password" type="password" required />

        <button type="submit" class="buttonlink submit-reg">Sign in</button>
    </form>
</div>


<?php
include("PageParts/footer.php");
?>
