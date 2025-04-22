<?php
$styles = ['index_style'];
include("PageParts/header.php");
?>

<h1>!!!This page is a prototype for illustration purposes only and it will be completely remade!!!</h1>

<table>
 <tr>
 <th>UEs</th>
 <th>Inscriptions for Joe</th>
 </tr>
 <tr>
 <td>
 <table id="available-courses">
 <tr><td onclick="selectCourse(this)">IT41</td></tr>
 <tr><td onclick="selectCourse(this)">WE4A</td></tr>
 <tr><td onclick="selectCourse(this)">IT44</td></tr>
 <tr><td onclick="selectCourse(this)">LC00</td></tr>
 <tr><td onclick="selectCourse(this)">SI40</td></tr>
 </table>
 </td>
 <td>
 <table id="registered-courses">
 <tr><td onclick="selectCourse(this)">SO04</td></tr>
 </table>
 </td>
 </tr>
 <tr>
 <td>
 <button onclick="addCourse()">+ Add</button>
 <button onclick="removeCourse()">− Remove</button>
 </td>
 <td></td>
 </tr>
</table>

<h3>Inspired by ip.utbm.fr :)</h3>

<script>
let selectedCourse = null;

// Function to select a course
function selectCourse(element) {
    // Remove highlight from previously selected course
    if (selectedCourse) {
        selectedCourse.style.backgroundColor = "";
    }
    
    // Highlight the selected course
    element.style.backgroundColor = "#ddd";
    selectedCourse = element;
}

// Function to add a course to inscriptions
function addCourse() {
    if (!selectedCourse || selectedCourse.parentNode.parentNode.id === "registered-courses") {
        return; // Do nothing if no course is selected or it's already in registrations
    }
    
    // Create a new row for the registered courses table
    const newRow = document.createElement("tr");
    const newCell = document.createElement("td");
    newCell.textContent = selectedCourse.textContent;
    newCell.onclick = function() { selectCourse(this); };
    newRow.appendChild(newCell);
    
    // Add to registered courses
    document.getElementById("registered-courses").appendChild(newRow);
    
    // Remove from available courses
    selectedCourse.parentNode.remove();
    
    // Reset selection
    selectedCourse = null;
}

// Function to remove a course from inscriptions
function removeCourse() {
    if (!selectedCourse || selectedCourse.parentNode.parentNode.id === "available-courses") {
        return; // Do nothing if no course is selected or it's already in available courses
    }
    
    // Create a new row for the available courses table
    const newRow = document.createElement("tr");
    const newCell = document.createElement("td");
    newCell.textContent = selectedCourse.textContent;
    newCell.onclick = function() { selectCourse(this); };
    newRow.appendChild(newCell);
    
    // Add to available courses
    document.getElementById("available-courses").appendChild(newRow);
    
    // Remove from registered courses
    selectedCourse.parentNode.remove();
    
    // Reset selection
    selectedCourse = null;
}
</script>

<?php
include("PageParts/footer.php");
?>