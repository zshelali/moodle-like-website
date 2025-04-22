<?php
$styles = ['admin_users_style'];
$scripts = ['users_script'];
include("PageParts/parts_header.php");

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

<!-- 
                ⛔️⚠️⛔️⚠️⛔️⚠️
                EXTREMELY IMPORTANT : WHEN ADDING OR EDITING A ROLE ALWAYS USE THE FOLLOWING SYNTAX :
                 "Admin,Professor" OR "Student" OR "Professor" OR "Admin" 
                 in order for the javascript to work properly in retrieving the role
                 and inserting it in the modal's radio buttons.
                 ⛔️⚠️⛔️⚠️⛔️⚠️
-->

<h3 class="subtitle">Registered users.</h3>
<div class="user-list-container">
    <div class="user-controls">

        <div class="search-container">
            <input type="text" id="userSearchInput" placeholder="Search for users by name, email, or role. (BETA)">
        </div>

        <button class="buttonlink add-btn">Add a new user</button>
    </div>


    <table id="user-table">
        <tr>
            <th>ID</th>
            <th>Role</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Encrypted Password</th>
            <th>Profile picture</th>
            <th>Assigned UEs</th>
            <th> </th>
        </tr>
        <tr>
            <td>1</td>
            <td>Admin,Professor</td>
            <td>John</td>
            <td>Doe</td>
            <td>john.doe@skooli.com</td>
            <td>29fh29if92f82j</td>
            <td><img class="pfp" src="images/default_pfp.png" alt="default_pfp"></td>
            <td>IT41</td>
            <td>
                <div class="man-del-btn-container">
                    <button class="buttonlink edit-btn"> <img src="images/edit.png" alt="edit" class="edit-img"></button>
                    <button onclick="deleteUserRow()()" class="buttonlink del-btn"><img src="images/delete.png" alt="delete" class="delete-img"></button>
                </div>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Student</td>
            <td>Jean</td>
            <td>Michel</td>
            <td>jeanmichel492@coldmail.uk</td>
            <td>0928jnfd2nf38h</td>
            <td><img class="pfp" src="images/default_pfp.png" alt="default_pfp"></td>
            <td>WE4A,SI40</td>
            <td>
                <div class="man-del-btn-container">
                    <button class="buttonlink edit-btn"> <img src="images/edit.png" alt="edit" class="edit-img"></button>
                    <button onclick="deleteUserRow()()" class="buttonlink del-btn"><img src="images/delete.png" alt="delete" class="delete-img"></button>
                </div>
            </td>
        </tr>
    </table>

    <!-- Modal -->



</div>

<div id="userEditModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 id="user-modal-title"></h3>
        <div class="form-container">
            <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->
                <input type="hidden" id="user-index" name="user_index">

                <label for="user-firstname">First name</label>
                <input type="text" id="user-first-name" name="user_first_name" required>

                <label for="user-last-name">Last name</label>
                <input type="text" id="user-last-name" name="user_last_name" required>

                <label for="user-email">Email</label>
                <input type="email" id="user-email" name="user_email" required>

                <label for="user-password">Password</label>
                <input type="text" id="user-password" name="user_password" required>

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

                <!-- <div class="multiselect-container">
                    <div class="ue-search-container">
                        <input type="text" id="ueSearchInput" placeholder="Search for UEs...">
                    </div>
                    <div class="selected-tags" id="tagBox"></div>
                    <div class="dropdown" id="dropdown">
                        <div data-value="IT41">IT41</div>
                        <div data-value="WE4A">WE4A</div>
                        <div data-value="SI40">SI40</div>
                    </div>
                    <input type="hidden" name="selectedValues" id="selectedValues">
                </div> -->

                <button type="submit" id="user-modal-submit" class="buttonlink">Update</button>
            </form>
        </div>
    </div>
</div>



<?php
include("PageParts/footer.php");
?>

<!--BODY END-->