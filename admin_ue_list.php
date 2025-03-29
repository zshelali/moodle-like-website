<?php
$styles = ['admin_ue_style'];
$scripts = ['ue_script'];
include("PageParts/header.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['ue_index'];
    $code = $_POST['ue_code'];
    $name = $_POST['ue_name'];
    $desc = $_POST['ue_description'];

    //TODO: Save the changes to a database or file here

    //Redirect to avoid resubmission on reload
    header("Location: admin_ue_list.php");
    exit();
}

?>

<!--BODY-->
<h3 class="subtitle">Current UEs</h3>
<div class="ue-list-container">
    <table>
        <tr>
            <th>UE Code</th>
            <th>UE Name</th>
            <th>UE Description</th>
            <th>Credits</th>
            <th> </th>
        </tr>
        <tr>
            <td>WE4A</td>
            <td>Technologies et programmation WEB</td>
            <td>Maîtriser les technologies Web permettant de créer des sites Web modernes</td>
            <td>6 ECTS</td>
            <td><button class="buttonlink edit-btn">Settings</button></td>
        </tr>
        <tr>
            <td>IT41</td>
            <td>Classical and Quantum Algorithms</td>
            <td>Aborder du point de vue des mathématiques la notion d'algorithme en étudiant/comparant le calcul classique et le calcul quantique.</td>
            <td>6 ECTS</td>
            <td><button class="buttonlink edit-btn">Settings</button></td>
        </tr>
        <tr>
            <td>SI40</td>
            <td>Systèmes d'information</td>
            <td>Mettre en œuvre des outils de conception de systèmes d¿information permettant la mise en application des méthodes associées</td>
            <td>6 ECTS</td>
            <td><button class="buttonlink edit-btn">Settings</button></td>
        </tr>
        <tr>
            <td>
            <button class="buttonlink add-btn">Add UE</button>
            </td>
        </tr>
    </table>

    <!-- Modal -->
   


</div>

<div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 id="modal-title">UE settings</h3>
            <div class="form-container">
                <form class="reg-log-form" action="?" method="POST"> <!-- action="x.php" method="POST" -->
                    <input type="hidden" id="ue-index" name="ue_index">
                    <label>UE Code</label>
                    <input type="text" id="ue-code" name="ue_code">
                    <label>UE Name</label>
                    <input type="text" id="ue-name" name="ue_name">
                    <label>UE Description</label>
                    <textarea id="ue-description" name="ue_description"></textarea>
                    <button type="submit" id="modal-submit" class="buttonlink">Update</button>
                </form>
            </div>
        </div>
    </div>

<?php 
include("PageParts/footer.php");
?>

<!--BODY END-->