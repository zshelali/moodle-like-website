<?php
$styles = ['register_login_style'];
include("PageParts/header.php");
?>

<div class="form-container">
<h3 class="subtitle">Welcome back</h3>
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label>Email :</label>
        <input type="email" required />

        <label>Password :</label>
        <input type="password" required />

        <button type="submit" class="buttonlink submit-reg">Log in</button>
    </form>
</div>


<?php
include("PageParts/footer.php");
?>