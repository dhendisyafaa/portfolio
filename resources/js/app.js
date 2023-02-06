// window.changeColor = changeColor;

// function changeColor() {

//     setTimeout(function () {
//         const ubahText = document.querySelectorAll(".text-potter");
//         const ubahBg = document.querySelectorAll(".bg-potter");
//         ubahText.forEach((element) => {
//             element.classList.add("text-gryffindor");
//             element.classList.remove("text-potter");
//         });

//         ubahBg.forEach((element) => {
//             element.classList.add("bg-gryffindor");
//             element.classList.remove("bg-potter");
//         });

//         setTimeout(function () {
//             const ubahText = document.querySelectorAll(".text-gryffindor");
//             const ubahBg = document.querySelectorAll(".bg-gryffindor");
//             ubahText.forEach((element) => {
//                 element.classList.add("text-hufflepuff");
//                 element.classList.remove("text-gryffindor");
//             });

//             ubahBg.forEach((element) => {
//                 element.classList.add("bg-hufflepuff");
//                 element.classList.remove("bg-gryffindor");
//             });

//             setTimeout(function () {
//                 const ubahText = document.querySelectorAll(".text-hufflepuff");
//                 const ubahBg = document.querySelectorAll(".bg-hufflepuff");
//                 ubahText.forEach((element) => {
//                     element.classList.add("text-ravenclaw");
//                     element.classList.remove("text-hufflepuff");
//                 });

//                 ubahBg.forEach((element) => {
//                     element.classList.add("bg-ravenclaw");
//                     element.classList.remove("bg-hufflepuff");
//                 });

//                 setTimeout(function () {
//                     const ubahText = document.querySelectorAll(".text-ravenclaw");
//                     const ubahBg = document.querySelectorAll(".bg-ravenclaw");
//                     ubahText.forEach((element) => {
//                         element.classList.add("text-slytherin");
//                         element.classList.remove("text-ravenclaw");
//                     });

//                     ubahBg.forEach((element) => {
//                         element.classList.add("bg-slytherin");
//                         element.classList.remove("bg-ravenclaw");
//                     });

//                     setTimeout(function () {
//                         const ubahText = document.querySelectorAll(".text-slytherin");
//                         const ubahBg = document.querySelectorAll(".bg-slytherin");
//                         ubahText.forEach((element) => {
//                             element.classList.add("text-potter")
//                             element.classList.remove("text-slytherin");
//                         });

//                         ubahBg.forEach((element) => {
//                             element.classList.add("bg-potter");
//                             element.classList.remove("bg-slytherin");
//                         });
//                     }, 1000);
//                 }, 1000);
//             }, 1000);
//         }, 1000);
//     }, 100);

// }

// ------------------------------------------------------------------------------------------------------

// THIS FEATURE SCRIPT IS CREATED BY CHATGPT || OPEN.AI

// the command that I submitted to chatGPT so that he produces the script that I want:

// tolong buatkan script dalam bahasa pemrogramman Javascript agar suatu div ber-id "btnchange" ketika di click mempunyai fungsi sebagai berikut:
// 1. semua element yang mempunyai class text-potter berubah menjadi text-gryffindor dan semua element yang mempunyai class bg-potter berubah menjadi bg-gryffindor.
// 2. Setelah 10 detik, class text-gryffindor tersebut berubah menjadi text-hufflepuff dan class bg-gryffindor pun berubah menjadi bg-hufflepuff. Begitu pun seterusnya.
// 3. Setelah 10 detik, class text-hufflepuff berubah menjadi text-ravenclaw dan class bg-hufflepuff berubah menjadi bg-ravenclaw 
// 4. Setelah 10 detik, class text-ravenclaw berubah menjadi text-slytherin dan class bg-ravenclaw berubah menjadi bg-slytherin 
// 5. Setelah 10 detik, class text-slytherin berubah menjadi text-potter dan class bg-slytherin berubah menjadi bg-potter 
// script ditambah sedikit fungsi, pada bagian looping ...Hover

// the result:

var btnchange = document.querySelector("#btnchange");
btnchange.addEventListener("click", function () {
    // Change to Gryffindor
    var potters = document.querySelectorAll(".text-potter");
    for (var i = 0; i < potters.length; i++) {
        potters[i].classList.remove("text-potter");
        potters[i].classList.add("text-gryffindor");
    }
    var pottersBG = document.querySelectorAll(".bg-potter");
    for (var i = 0; i < pottersBG.length; i++) {
        pottersBG[i].classList.remove("bg-potter");
        pottersBG[i].classList.add("bg-gryffindor");
    }
    var pottersHover = document.querySelectorAll(".hpotter");
    for (var i = 0; i < pottersHover.length; i++) {
        pottersHover[i].classList.remove("hpotter");
        pottersHover[i].classList.add("hgryffindor");
    }
    // Change to Hufflepuff after 10 seconds
    setTimeout(function () {
        var gryffindors = document.querySelectorAll(".text-gryffindor");
        for (var i = 0; i < gryffindors.length; i++) {
            gryffindors[i].classList.remove("text-gryffindor");
            gryffindors[i].classList.add("text-hufflepuff");
        }
        var gryffindorsBG = document.querySelectorAll(".bg-gryffindor");
        for (var i = 0; i < gryffindorsBG.length; i++) {
            gryffindorsBG[i].classList.remove("bg-gryffindor");
            gryffindorsBG[i].classList.add("bg-hufflepuff");
        }
        var gryffindorsHover = document.querySelectorAll(".hgryffindor");
        for (var i = 0; i < gryffindorsHover.length; i++) {
            gryffindorsHover[i].classList.remove("hgryffindor");
            gryffindorsHover[i].classList.add("hhufflepuff");
        }
    }, 10000);
    // Change to Ravenclaw after 20 seconds
    setTimeout(function () {
        var hufflepuffs = document.querySelectorAll(".text-hufflepuff");
        for (var i = 0; i < hufflepuffs.length; i++) {
            hufflepuffs[i].classList.remove("text-hufflepuff");
            hufflepuffs[i].classList.add("text-ravenclaw");
        }
        var hufflepuffsBG = document.querySelectorAll(".bg-hufflepuff");
        for (var i = 0; i < hufflepuffsBG.length; i++) {
            hufflepuffsBG[i].classList.remove("bg-hufflepuff");
            hufflepuffsBG[i].classList.add("bg-ravenclaw");
        }
        var hufflepuffsHover = document.querySelectorAll(".hhufflepuff");
        for (var i = 0; i < hufflepuffsHover.length; i++) {
            hufflepuffsHover[i].classList.remove("hhufflepuff");
            hufflepuffsHover[i].classList.add("hravenclaw");
        }
    }, 20000);
    // Change to Slytherin after 30 seconds
    setTimeout(function () {
        var ravenclaws = document.querySelectorAll(".text-ravenclaw");
        for (var i = 0; i < ravenclaws.length; i++) {
            ravenclaws[i].classList.remove("text-ravenclaw");
            ravenclaws[i].classList.add("text-slytherin");
        }
        var ravenclawsBG = document.querySelectorAll(".bg-ravenclaw");
        for (var i = 0; i < ravenclawsBG.length; i++) {
            ravenclawsBG[i].classList.remove("bg-ravenclaw");
            ravenclawsBG[i].classList.add("bg-slytherin");
        }
        var ravenclawsHover = document.querySelectorAll(".hravenclaw");
        for (var i = 0; i < ravenclawsHover.length; i++) {
            ravenclawsHover[i].classList.remove("hravenclaw");
            ravenclawsHover[i].classList.add("hslytherin");
        }
    }, 30000);
    // Change to Potter after 40 seconds
    setTimeout(function () {
        var slytherins = document.querySelectorAll(".text-slytherin");
        for (var i = 0; i < slytherins.length; i++) {
            slytherins[i].classList.remove("text-slytherin");
            slytherins[i].classList.add("text-potter");
        }
        var slytherinsBG = document.querySelectorAll(".bg-slytherin");
        for (var i = 0; i < slytherinsBG.length; i++) {
            slytherinsBG[i].classList.remove("bg-slytherin");
            slytherinsBG[i].classList.add("bg-potter");
        }
        var slytherinsHover = document.querySelectorAll(".hslytherin");
        for (var i = 0; i < slytherinsHover.length; i++) {
            slytherinsHover[i].classList.remove("hslytherin");
            slytherinsHover[i].classList.add("hpotter");
        }
    }, 40000);
});

// document.getElementsByTagName