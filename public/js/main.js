console.log("test");

const overlay = document.querySelector("#overlay");
const pop = document.querySelector("#popup-window");
const target_button = document.querySelector(".reser-button");
const target = document.querySelector(".close");

target_button.addEventListener("click", () => {
    pop.classList.toggle("hidden");
    overlay.classList.toggle("hidden");
});

document.body.addEventListener("click", (event) => {
    if (
        event.target !== target_button &&
        !target_button.contains(event.target) &&
        event.target !== pop &&
        !pop.contains(event.target) &&
        !pop.classList.contains("hidden")
    ) {
        pop.classList.toggle("hidden");
        overlay.classList.toggle("hidden");
        console.log("test");
    }
});
