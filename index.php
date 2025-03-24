<?php
$styles = ['index_style'];
include("PageParts/header.php");
?>

<!--BODY-->
<h3 class="subtitle">You are a...</h3>
<div class="button-container">
    <div class="button-desc">
        <a href="professor.php" class="buttonlink prof-stud-button"
        >Professor</a
        >
        <br />
        <p class="description"> <!-- à changer -->
            Interact with your students, grade their work and keep track of their
            evolution in an interactive way to keep your students interested.
        </p>
    </div>
    <div class="button-desc">
        <a href="student.php" class="buttonlink prof-stud-button">Student</a>
        <br />
        <p class="description"> <!-- à changer -->
            Check your grades, upload your work and projects, interact with your
            mates and get many rewards as you progress.
        </p>
    </div>
</div>

<!--BODY END-->

<?php
include("PageParts/footer.php");
?>
