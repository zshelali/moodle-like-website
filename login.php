<?php
$styles = ['register_login_style'];
include("PageParts/header.php");
?>

<h3 class="subtitle">Log in</h3>

<div class="form-container">
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label>Email :</label>
        <input type="email" required />

        <label>Password :</label>
        <input type="password" required />

        <div id="loginCaptcha" class="g-recaptcha" data-sitekey="6LfdoPwqAAAAAH57YLU5tNmFlG5J67YWn0CoEgAq"></div>
        <button type="submit" class="startnow buttonlink" class="submit-reg">Sign up</button>
    </form>
</div>


<?php
include("PageParts/footer.php");
?>