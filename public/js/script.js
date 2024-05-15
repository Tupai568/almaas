const menu = document.getElementById("menu-icon");
const nav = document.querySelector("nav");
const login = document.querySelector(".login .form");

function active() {
    if (login.classList.contains("active")) {
        login.classList.remove("active");
    } else {
        login.classList.add("active");

        if (nav.classList.contains("slide")) {
            nav.classList.remove("slide");
        }

        if (menu.classList.contains("bx-x")) {
            menu.classList.remove("bx-x");
        }
    }
}

function cancel() {
    login.classList.remove("active");

    if (nav.classList.contains("slide")) {
        nav.classList.remove("slide");
    }

    if (menu.classList.contains("bx-x")) {
        menu.classList.remove("bx-x");
    }
}

menu.addEventListener("click", () => {
    menu.classList.toggle("bx-x");
    nav.classList.toggle("slide");
});

function text(txt, tulisan, mulai, tunggu) {
    const typed = new Typed(txt, {
        strings: tulisan,
        typeSpeed: mulai,
        backSpeed: 100,
        backDelay: tunggu,
        loop: true,
    });
}

text(".text-berjalan", ["Mengaji Qur'an", "Mengaji Iqra", "Tajwid"], 100, 1000);

window.onload = function () {
    var kiri = document.querySelectorAll(".kiri");
    var kanan = document.querySelectorAll(".kanan");

    if (document.querySelector(".kiri") || document.querySelector(".kanan")) {
        if (document.querySelector(".kiri")) {
            document.querySelector(".kiri").scrollIntoView({
                behavior: "smooth", // Animasi gulir yang halus
                block: "center", // Posisikan elemen di tengah layar
            });
        } else {
            document.querySelector(".kanan").scrollIntoView({
                behavior: "smooth", // Animasi gulir yang halus
                block: "center", // Posisikan elemen di tengah layar
            });
        }
    }

    kiri.forEach((element) => {
        if (element) {
            setTimeout(function () {
                // Menghapus elemen span dari DOM
                element.parentNode.removeChild(element);
            }, 10000);
        }
    });

    kanan.forEach((element) => {
        if (element) {
            setTimeout(function () {
                // Menghapus elemen span dari DOM
                element.parentNode.removeChild(element);
            }, 10000);
        }
    });
};
