const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

document.addEventListener("DOMContentLoaded", function() {
    const sidebarItems = document.querySelectorAll('.sidebar-item');

    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            sidebarItems.forEach(innerItem => {
                innerItem.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});
