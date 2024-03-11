document.addEventListener("DOMContentLoaded", function () {
    const deleteBtn = document.querySelectorAll('[data-modal-target="event-delete"]');
    const modal = document.querySelector("#event-delete")
    const formDelete = document.querySelector("#formDelete")
    deleteBtn.forEach((button) => {
        button.addEventListener("click", function () {
            let slug = this.getAttribute("data-slug");

            formDelete.action = `http://localhost/dashboard/events/${slug}`
            console.log(formDelete)
        });
    });
});



