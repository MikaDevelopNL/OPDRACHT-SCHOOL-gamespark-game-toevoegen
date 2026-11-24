// Dropdown menu

const dropdownBtns = document.querySelectorAll(".dropdown-toggle");

dropdownBtns.forEach((dropdownBtn) => {
  const dropdownId = dropdownBtn.getAttribute("aria-controls");
  const dropdownList = document.getElementById(dropdownId);
  dropdownBtn.addEventListener("click", () => {
    const wasOpen = !dropdownList.hasAttribute("hidden");

    dropdownBtns.forEach((btn) => {
      const id = btn.getAttribute("aria-controls");
      const list = document.getElementById(id);

      list.setAttribute("hidden", "");
      btn.setAttribute("aria-expanded", "false");
    });

    if (!wasOpen) {
      dropdownList.removeAttribute("hidden");
      dropdownBtn.setAttribute("aria-expanded", "true");
    }
  });
});
