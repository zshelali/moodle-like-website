<!DOCTYPE html>
<html lang="fr">

<?php
$styles = ['UE_prof'];
include("PageParts/header.php");
?>
<div class="postContainer">
    <h2 class="postTitle">Add a new post</h2>
    <form action="404.php" method="POST" enctype="multipart/form-data" class="postForm">

        <div class="formGroup">
            <label for="title">Title :</label>
            <input type="text" name="title" class="inputField" required>
        </div>

        <div class="formGroup">
            <label for="content">Content :</label>
            <textarea name="content" class="textareaField" required></textarea>
        </div>

        <div class="formGroup">
            <label for="file">Add file (optional) :</label>
            <input type="file" name="file" class="fileInput">
        </div>

        <button type="submit" class="submitButton">Share</button>
    </form>
</div>
