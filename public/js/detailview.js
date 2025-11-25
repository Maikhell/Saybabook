document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById("bookDetailModal");

    //Listen to the modal to be shown
    modalElement.addEventListener("show.bs.modal", function (event) {
        //Button that triggers the modal
        const button = event.relatedTarget;

        //Extract Data Attributes from the button /Letter sense no s in Attribute
        const title = button.getAttribute("data-book-title");
        const author = button.getAttribute("data-book-author");
        const description = button.getAttribute("data-book-description");
        const ownerName = button.getAttribute("data-book-ownerId");
        const genre = button.getAttribute("data-book-genre");
        const category = button.getAttribute("data-book-category");
        const privacy = button.getAttribute("data-book-privacy");
        const date = button.getAttribute("data-book-date");
        const cover = button.getAttribute("data-book-cover");
        const link = button.getAttribute("data-book-online_link");
        const bookId = button.getAttribute("data-book-id");

        const modalTitle = modalElement.querySelector("#modalTitle");
        const modalBody = modalElement.querySelector("#modalBodyContent");

        modalTitle.textContent = title;

        modalBody.innerHTML = `
        <h5>Book ID: ${bookId}</h5>
        <div class="row">
            <div class="col-4">
          <div class = "container">
            <img class="detailImage" src="${cover}" alt="">
            </div>
        </div>
            <div class="col-8">
            <p><strong>Author:</strong> ${author}</p>
            <p><strong>Description:</strong> ${description}</p>
            <p><strong>Book Category:</strong> ${category}</p>
            <p><strong>Book Genre:</strong> ${genre}</p>
            <p><strong>Date Added:</strong> ${date}</p>
            <p><strong>Book Privacy:</strong> ${privacy}</p> 
            <p><strong>Online Link: </strong><a href= "${link}">${link}</a></p>
            <p><strong>Owner Name:</strong> ${ownerName}</p>
             </div>
        </div>
          
            <hr>
            <p>Book ID: ${bookId}</p>
 
        `;
    });
});
