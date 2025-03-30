<?php
$styles = ['index_style'];
include("PageParts/header.php");
?>

<!--BODY-->
<h3 class="subtitle">Hey, Doe.</h3>
<div class="button-container">
    <div class="button-desc">
        <a href="admin_ue_list.php" class="buttonlink prof-stud-button">UE</a>
        <br />
        <p class="description"> <!-- à changer -->
            See and edit the list of currently existing UEs, add new ones and assign students and professors to them.
        </p>
    </div>
    <div class="button-desc">
        <a href="admin_manage_users.php" class="buttonlink prof-stud-button">Users</a>
        <br />
        <p class="description"> <!-- à changer -->
            See the list of currently registered users, change their name or email address and add new ones.
        </p>
    </div>
</div>

<?php 
include("PageParts/footer.php");
?>

<!--BODY END-->