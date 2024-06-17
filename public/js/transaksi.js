// JavaScript untuk halaman atur alamat

let queue = document.getElementById('queue');
let send = document.getElementById('send');
let finish = document.getElementById('finish');
let comment = document.getElementById('comment')
let slideDisplay1 = document.getElementById('slide-display1');
let slideDisplay2 = document.getElementById('slide-display2');
let slideDisplay3 = document.getElementById('slide-display3');
let slideDisplay4 = document.getElementById('slide-display4');

queue.addEventListener("click", function () {
    queue.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    send.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    finish.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    comment.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay2.classList.add("hidden");
    slideDisplay3.classList.add("hidden");
    slideDisplay4.classList.add("hidden");
    slideDisplay1.classList.remove("hidden");
});
  
send.addEventListener("click", function () {
    send.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    queue.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    finish.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    comment.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay1.classList.add("hidden");
    slideDisplay3.classList.add("hidden");
    slideDisplay4.classList.add("hidden");
    slideDisplay2.classList.remove("hidden");
});

finish.addEventListener("click", function () {
    finish.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    queue.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    send.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    comment.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay1.classList.add("hidden");
    slideDisplay2.classList.add("hidden");
    slideDisplay4.classList.add("hidden");
    slideDisplay3.classList.remove("hidden");
});

comment.addEventListener("click", function () {
    comment.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    queue.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    send.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );

    finish.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay1.classList.add("hidden");
    slideDisplay2.classList.add("hidden");
    slideDisplay3.classList.add("hidden");
    slideDisplay4.classList.remove("hidden");
});
