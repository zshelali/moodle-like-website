<?php
$styles = ['index_style'];
include("PageParts/header.php");
?>

<!--BODY-->
<h3 class="subtitle">Hey, admin.</h3>
<div class="button-container">
    <div class="button-desc">
        <a href="admin_ue_list.php" class="buttonlink prof-stud-button">UE</a>
        <br />
        <p class="description"> <!-- à changer -->
            Manage UEs.
        </p>
    </div>
    <div class="button-desc">
        <a href="placeholder.php" class="buttonlink prof-stud-button">Users</a>
        <br />
        <p class="description"> <!-- à changer -->
            Manage users.
        </p>
    </div>
</div>

<?php 
include("PageParts/footer.php");
?>

<!--BODY END-->