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

  // Search bar 
  const userSearchInput = document.getElementById("userSearchInput");
  if (userSearchInput) {
    userSearchInput.addEventListener("keyup", function () {
      const value = this.value.toLowerCase();
      const tableRows = document.querySelectorAll("#user-table tr");
      for (let i = 1; i < tableRows.length; i++) {
        const row = tableRows[i];
        const text = row.textContent.toLowerCase();
        if (text.indexOf(value) > -1) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      }
    });
  }
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
    $("#is-admin").prop("disabled", false);
  });

  // clear when clicked on add button 
  $(".add-btn").on("click", () => {
    $("input[name=select_role]").prop("checked", false);
  });
});




// DROPDOWN MENU

// $(document).ready(function () {
//   const tagBox = $('#tagBox');
//   const dropdown = $('#dropdown');
//   const hiddenInput = $('#selectedValues');
//   const ueSearchInput = $('#ueSearchInput');
//   let selected = [];
//   let allOptions = [];
  
//   // Store all dropdown options initially
//   dropdown.find('div').each(function() {
//     allOptions.push({
//       value: $(this).data('value'),
//       element: $(this).clone(true)
//     });
//   });
  
//   tagBox.on('click', function () {
//     dropdown.toggle();
//   });
  
//   // UE search functionality
//   ueSearchInput.on('keyup', function() {
//     const searchValue = $(this).val().toLowerCase();
    
//     // Clear dropdown
//     dropdown.empty();
    
//     // Filter and add matching options
//     allOptions.forEach(function(option) {
//       // Skip if already selected
//       if (selected.includes(option.value)) {
//         return;
//       }
      
//       if (option.value.toLowerCase().includes(searchValue)) {
//         dropdown.append(option.element.clone(true));
//       }
//     });
    
//     // Show dropdown when searching
//     if (searchValue.length > 0) {
//       dropdown.show();
//     }
//   });
  
//   // Prevent tagBox click event when clicking in search input
//   ueSearchInput.on('click', function(e) {
//     dropdown.show();
//     e.stopPropagation();
//   });
  
//   dropdown.on('click', 'div', function () {
//     const value = $(this).data('value');

//     if (!selected.includes(value)) {
//       selected.push(value);

//       // Add tag
//       const tag = $(`<span class="tag" data-value="${value}">${value}<span class="remove">&times;</span></span>`);
      
//       // Tag removal handler
//       tag.find('.remove').on('click', function (e) {
//         e.stopPropagation(); // Prevent opening dropdown when removing tag
//         const tagValue = $(this).parent().data('value');
//         $(this).parent().remove();
//         selected = selected.filter(v => v !== tagValue);
//         hiddenInput.val(selected.join(','));
        
//         // Find and add back the option from allOptions
//         const option = allOptions.find(o => o.value === tagValue);
//         if (option) {
//           dropdown.append(option.element.clone(true));
//         }
//       });

//       tagBox.append(tag);
//       hiddenInput.val(selected.join(','));

//       // Remove from dropdown
//       $(this).remove();
//     }

//     dropdown.hide();
//     ueSearchInput.val(''); // Clear search input after selection
//   });

//   // Hide dropdown when clicking outside
//   $(document).on('click', function (e) {
//     if (!$(e.target).closest('.multiselect-container').length) {
//       dropdown.hide();
//       ueSearchInput.val(''); // Clear search when closing
//     }
//   });
// });
