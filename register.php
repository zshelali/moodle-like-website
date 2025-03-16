<?php
$styles = ['register_style'];
include("PageParts/header.php");
?>

<h3 class="subtitle">Create your account</h3>

<form id="register-form"> <!-- action="x.php" method="POST" -->
    <label>First name</label>
    <input type="text" required />

    <label>Last name</label>
    <input type="text" required />

    <label>Email :</label>
    <input type="email" required />

    <label>Password :</label>
    <input type="password" required />

    <label>Confirm Password :</label>
    <input type="password" required />

    <label>Phone number :</label>
    <input type="tel" />

    <button type="submit" class="startnow buttonlink" id="submit-reg">Sign up</button>
</form>


<?php
include("PageParts/footer.php");
?>