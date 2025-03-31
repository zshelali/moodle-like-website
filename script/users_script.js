// For USER settings
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("editModal");
  const closeBtn = document.querySelector(".close");
  var roles = [];
  var roleString = "";
  var counter = 0;

  // editing a user 
  $('.edit-btn').each(function () {
    $(this).on("click", function () {
      const row = $(this).closest("tr");
      const cells = row.find("td");

      document.getElementById("user-first-name").value = cells.eq(2).text().trim();
      document.getElementById("user-last-name").value = cells.eq(3).text().trim();
      document.getElementById("user-email").value = cells.eq(4).text().trim();

      // reset and extract role 
      roles = [];
      roleString = "";
      counter = 0;
      const roleText = cells.eq(1).text().trim();

      for (const char of roleText) {
        roleString += char;
        counter++;
        if (char === ',' || counter === roleText.length) {
          roles.push(roleString.replace(',', '').trim());
          roleString = "";
        }
      }

      for (const role of roles) {
        switch (role) {
          case "Professor":
            $('#select-role-prof').prop('checked', true);
            break;
          case "Student":
            $('#select-role-student').prop('checked', true);
            break;
          case "Admin":
            $('#is-admin').prop('checked', true);
            break;
          default:
            console.log("No role could be read.")
        }
      }

      document.getElementById("modal-title").textContent = "Edit user";
      document.getElementById("modal-submit").textContent = "Confirm update";
      modal.style.display = "block";
    });
  });

  // adding a user modal
  const addBtn = document.querySelector(".add-btn");
  if (addBtn) {
    addBtn.addEventListener("click", () => {
      document.getElementById("user-first-name").value = "";
      document.getElementById("user-last-name").value = "";
      document.getElementById("user-email").value = "";
      document.getElementById("modal-title").textContent = "Add a new user";
      document.getElementById("modal-submit").textContent = "Add user";
      modal.style.display = "block";
    });
  }

  // Close button script
  if (closeBtn) {
    closeBtn.onclick = () => {
      modal.style.display = "none";
    };
  }
  window.onclick = (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  };
});

// clear button & ensures student and admin can't be checked at the same time (just trying a bit of jquery 😎)

$(document).ready(() => {
  $("#select-role-student, #select-role-prof").on("change", () => {
    if ($("#select-role-student").is(":checked")) {
      $("#is-admin").prop("disabled", true);
      $("input[id=is-admin]").prop("checked", false);
    }
    else {
      $("#is-admin").prop("disabled", false);
    }
  });

  // clear button
  $("#clear-btn").on("click", () => {
    $("input[name=select_role]").prop("checked", false);
  });

  // clear when clicked on add button 
  $(".add-btn").on("click", () => {
    $("input[name=select_role]").prop("checked", false);
  });
});
