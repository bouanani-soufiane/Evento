let mainContainer = document.querySelector("#mainContainer");
let searchBox = document.querySelector("#searchBox");
let searchRoute = searchBox.dataset.searchRoute; // Retrieve the route name
let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

let oldContent = mainContainer.innerHTML;

searchBox.addEventListener("input", (event) => {
    if (searchBox.value !== "") {
        let value = searchBox.value;
        mainContainer.innerHTML = "";
        fetchData(value);
    } else {
        mainContainer.innerHTML = oldContent;
    }
})

function fetchData(value) {
    const options = {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken

        },
    };
    fetch(`/event/search?search=${value}`, options)
        .then(handleResponse)
        .then(displayResponse)
        .catch((error) => {
            console.log(error);
        });
}


function displayResponse(data) {
    console.log(data);
    let events = data.events; // Access the data array
    if (events.length >  0) {
        events.forEach((item) => {
            mainContainer.innerHTML += `
                    <div tabindex="0" id="mainContainer"
             class="relative rounded-xl shadow-2xl focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
            <div class="rounded">
                <img alt="person capturing an image"
                     src="storage/${item.image.path} " tabindex="0"
                     class="rounded-xl focus:outline-none w-full h-44"
                     style="height: 200px"
                />
            </div>
            <div class=" bg-white rounded-2xl ">
                <div class="flex items-center justify-between px-4 pt-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" tabindex="0"
                             class="focus:outline-none" width="20" height="20"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                        </svg>
                    </div>
                    <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                        <p tabindex="0"
                           class="focus:outline-none text-xs text-yellow-700">${item.category.name}</p>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center">
                        <h2 tabindex="0"
                            class="focus:outline-none text-lg font-semibold">${item.title}</h2>
                    </div>
                    <p tabindex="0"
                       class="focus:outline-none text-xs text-gray-600 mt-2">${item.description}
                       </p>

                    <div class="flex py-4  text-sm text-gray-500">
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="">${item.localisation}</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="">${item.date}</p>
                        </div>
                    </div>
                    <a href="/events/${item.slug}" class="bottom-3 right-2 flex align-items-end">
                        <span class="title-font font-medium text-2xl text-gray-900">${item.price}DH</span>
                        <button
                            class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">
                            Réservez
                        </button>

                    </a>
                </div>
            </div>
        </div>
            `;
        });
    }

}

function handleResponse(response) {
    if (!response.ok) {
        throw new Error(`sending request error! Status: ${response.status}`);
    }
    return response.json();
}