<?php
$styles = ['register_login_style'];
include("PageParts/header.php");
?>

<div class="form-container">
<h3 class="subtitle">Log in</h3>
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label>Email :</label>
        <input type="email" required />

        <label>Password :</label>
        <input type="password" required />

        <button type="submit" class="startnow buttonlink" class="submit-reg">Sign up</button>
    </form>
</div>


<?php
include("PageParts/footer.php");
?>