document.addEventListener("DOMContentLoaded", function () {
    const deleteBtn = document.querySelectorAll('[data-modal-target="category-delete"]');
    const modal = document.querySelector("#category-delete")
    const formDelete = document.querySelector("#formDelete")
    deleteBtn.forEach((button) => {
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");

            formDelete.action = `http://localhost/dashboard/categories/${slug}`
            console.log(formDelete)
        });
    });
});



