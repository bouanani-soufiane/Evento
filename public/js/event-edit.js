document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.querySelectorAll('[data-modal-target="event-update"]');
    const modal = document.querySelector("#event-edit");
    const event = {
        title: modal.querySelector("#title"),
        description: modal.querySelector("#description"),
        date: modal.querySelector("#date"),
        numberOfSeats: modal.querySelector("#totalPlace"),
        price: modal.querySelector("#price"),
        categoryId: modal.querySelector("#category_id"),
        bookingType: modal.querySelector("#reservationType"),
        location: modal.querySelector("#localisation"),

    };
    editBtn.forEach((button) => {
        button.addEventListener("click", function () {

            console.log(event.bookingType.value);
            let slug = this.getAttribute("data-slug");
            event.location.value = this.getAttribute("data-localisation");
            event.title.value = this.getAttribute("data-title");
            event.description.value = this.getAttribute("data-description");
            event.date.value = this.getAttribute("data-date");
            event.numberOfSeats.value = this.getAttribute("data-numberOfSeats");
            event.price.value = this.getAttribute("data-price");
            event.categoryId.value = this.getAttribute("data-categoryId");

            event.bookingType.value = this.getAttribute("data-bookingType");
            modal.action = `http://localhost/dashboard/events/${slug}`;
        });
    });
});
