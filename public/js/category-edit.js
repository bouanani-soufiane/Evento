document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="category-edit"]');
    const modal = document.querySelector("#category-update");
    const category = {
        name: modal.querySelector("#name"),
        description: modal.querySelector("#description"),
    };
    editBtn.forEach((button) => {
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");
            category.name.value = this.getAttribute("data-name");
            category.description.value = this.getAttribute("data-description");
            modal.action = `http://localhost/dashboard/categories/${slug}`
            console.log(modal)
        });
    });
});



