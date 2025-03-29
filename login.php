<?php
$styles = ['register_login_style'];
include("PageParts/header.php");
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="form-container">
<h3 class="subtitle">Log in</h3>
    <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->

        <label>Email</label>
        <div class="input-wrapper">
            <input type="email" />
            <i class="fas fa-envelope input-icon"></i>
        </div>

        <label>Password</label>
        <div class="input-wrapper">
            <input type="password" />
            <i class="fas fa-lock input-icon"></i>
        </div>



        <button type="submit" class="startnow buttonlink" class="submit-reg">Sign up</button>
    </form>
</div>


<?php
include("PageParts/footer.php");
?>