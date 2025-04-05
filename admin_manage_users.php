<?php
$styles = ['admin_users_style'];
$scripts = ['users_script'];
include("PageParts/header.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['user_id'];
    $first_name = $_POST['user_first_name'];
    $last_name = $_POST['user_last_name'];
    $email = $_POST['user_email'];

    //     //TODO: Save the changes to a database or file here

    //     //Redirect to avoid resubmission on reload
    header("Location: admin_manage_users.php");
    exit();
}

?>

<!--BODY-->
<h3 class="subtitle">Registered users.</h3>
<div class="user-list-container">
    <table id="user-table">
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Profile picture</th>
            <th> </th>
        </tr>
        <tr>
            <td>1</td>
            <td>Admin,Professor</td>
            <td>John</td>
            <td>Doe</td>
            <td>john.doe@skooli.com</td>
            <td><img class="pfp" src="images/default_pfp.png" alt="default_pfp"></td>
            <td><button class="buttonlink edit-btn">Manage user</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Student</td>
            <td>Jean</td>
            <td>Michel</td>
            <td>jeanmichel492@coldmail.uk</td>
            <td><img class="pfp" src="images/default_pfp.png" alt="default_pfp"></td>
            <td><button class="buttonlink edit-btn">Manage user</button></td>
        </tr>
        <tr>
            <td>
                <button class="buttonlink add-btn">Add a new user</button>
            </td>
        </tr>
    </table>

    <!-- Modal -->



</div>

<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 id="modal-title"></h3>
        <div class="form-container">
            <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->
                <input type="hidden" id="user-index" name="user_index">

                <label for="user-firstname">First name</label>
                <input type="text" id="user-first-name" name="user_first_name">

                <label for="user-last-name">Last name</label>
                <input type="text" id="user-last-name" name="user_last_name">

                <label for="user-email">Email</label>
                <input type="email" id="user-email" name="user_email">

                <label>Assign a role</label>
                <button type="button" id="clear-btn" class="buttonlink">Clear choice</button>
                <div id="radio-select-container">

                    <div class="role-option">
                        <label for="select-role-prof">Professor</label>
                        <input type="radio" id="select-role-prof" name="select_role" value="Professor" class="radio-button">
                    </div>

                    <div class="role-option">
                        <label for="select-role-student">Student</label>
                        <input type="radio" id="select-role-student" name="select_role" value="Student" class="radio-button">
                    </div>

                    <div class="role-option">
                        <label for="is-admin">Admin</label>
                        <input type="checkbox" id="is-admin" value="Admin" name="select_role" class="radio-button">
                    </div>


                </div>

                <button type="submit" id="modal-submit" class="buttonlink">Update</button>
            </form>
        </div>
    </div>
</div>



<?php
include("PageParts/footer.php");
?>

<!--BODY END-->