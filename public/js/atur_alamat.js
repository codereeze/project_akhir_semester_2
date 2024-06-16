// JavaScript untuk halaman atur alamat

let slide1 = document.getElementById('slide1');
let slide2 = document.getElementById('slide2');
let slideDisplay1 = document.getElementById('slide-display1');
let slideDisplay2 = document.getElementById('slide-display2');

slide1.addEventListener("click", function () {
    slide1.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slide2.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay2.classList.add("hidden");
    slideDisplay1.classList.remove("hidden");
});
  
slide2.addEventListener("click", function () {
    slide2.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slide1.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay1.classList.add("hidden");
    slideDisplay2.classList.remove("hidden");
});
