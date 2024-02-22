const cliantForm = document.getElementById("client");
const artisanForm = document.getElementById("artisan");

document.getElementById("client-btn").addEventListener("click", function () {
    cliantForm.classList.remove("hidden");
    artisanForm.classList.add("hidden");
});

document.getElementById("artisan-btn").addEventListener("click", function () {
    cliantForm.classList.add("hidden");
    artisanForm.classList.remove("hidden");
});

//picture change input

var loadFile = function (event) {
    var input = event.target;
    var file = input.files[0];
    var type = file.type;

    var output = document.getElementById("preview_img");

    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src); // free memory
    };
};
