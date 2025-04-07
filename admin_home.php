<?php
$styles = ['index_style'];
$scripts = ['index_home_script'];
include("PageParts/header.php");
?>

<!--BODY-->
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">UE list</a></li>
        <li><a href="#tabs-2">User list</a></li>
    </ul>
    <div id="tabs-1" class="ue-tab">
        <?php
        include("PageParts/admin_ue_list.php")
        ?>
    </div>
    <div id="tabs-2" class="user-tab">
    <?php
        include("PageParts/admin_manage_users.php")
        ?>
    </div>
</div>

<?php
include("PageParts/footer.php");
?>

<!--BODY END-->