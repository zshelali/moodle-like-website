document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("editModal");
  const closeBtn = document.querySelector(".close");
  const settingsButtons = document.querySelectorAll(".edit-btn");
  const rows = document.querySelectorAll(".ue-list-container table tr");

  settingsButtons.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      const row = rows[i + 1]; // skip header
      const cells = row.querySelectorAll("td");
      document.getElementById("ue-code").value = cells[0].textContent;
      document.getElementById("ue-name").value = cells[1].textContent;
      document.getElementById("ue-description").value = cells[2].textContent;
      document.getElementById("ue-index").value = i; // optional hidden field
      document.getElementById("modal-title").textContent = "UE settings";
      document.getElementById("modal-submit").textContent = "Update";
      modal.style.display = "block";
    });
  });

  const addBtn = document.querySelector(".add-btn");
  if (addBtn) {
    addBtn.addEventListener("click", () => {
      document.getElementById("ue-code").value = '';
      document.getElementById("ue-name").value = '';
      document.getElementById("ue-description").value = '';
      document.getElementById("ue-index").value = -1;
      document.getElementById("modal-title").textContent = "New UE";
      document.getElementById("modal-submit").textContent = "Add";
      modal.style.display = "block";
    });
  }

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
