// Function to open the drawer with transition
function openDrawer() {
  const drawer = document.getElementById("drawer");
  const drawerContent = drawer.querySelector("div");

  drawer.classList.remove("hidden");
  setTimeout(() => {
    drawerContent.classList.remove("translate-x-full"); // Slide in the drawer from the right
  }, 10);
}

// Function to close the drawer with transition
function closeDrawer() {
  const drawer = document.getElementById("drawer");
  const drawerContent = drawer.querySelector("div");

  drawerContent.classList.add("translate-x-full"); // Slide out the drawer to the right
  setTimeout(() => {
    drawer.classList.add("hidden");
  }, 300); // Wait for transition to complete before hiding the drawer
}
