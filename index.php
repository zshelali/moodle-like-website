<?php
$styles = ['index_style'];
include("PageParts/header.php");
?>

<!--BODY-->
<h3 class="subtitle">Placeholder page.</h3>
<div class="button-container">
    <div class="button-desc">
        <a href="professor.php" class="buttonlink prof-stud-button"
        >Professor</a
        >
        <br />
        <p class="description"> <!-- à changer -->
            Quick access to professor.php for debugging.
        </p>
    </div>
    <div class="button-desc">
        <a href="student.php" class="buttonlink prof-stud-button">Student</a>
        <br />
        <p class="description"> <!-- à changer -->
            Quick access to student.php for debugging.
        </p>
    </div>
</div>

<!--BODY END-->

<?php
include("PageParts/footer.php");
?>
