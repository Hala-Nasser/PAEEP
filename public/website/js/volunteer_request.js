const slidePage = document.querySelector(".slidepage"),
      firtNextBtn = document.querySelector(".nextBtn"),
      prevBtnSec = document.querySelector(".prev-1"),
      nextBtnSec = document.querySelector(".next-1"),
      prevBtnThird = document.querySelector(".prev-2"),
      nextBtnThird = document.querySelector(".next-2"),
      prevBtnFourth = document.querySelector(".prev-3"),
      submitBtn = document.querySelector(".submit"),
      progressText = document.querySelectorAll(".step p"),
      progressCheck = document.querySelectorAll(".step .check"),
      bullet = document.querySelectorAll(".step .bullet");

let max = 4;
let current = 1;

firtNextBtn.addEventListener("click", function(){
    slidePage.style.marginRight= "-27%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
});
nextBtnSec.addEventListener("click", function(){
    slidePage.style.marginRight= "-54%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
});
nextBtnThird.addEventListener("click", function(){
    slidePage.style.marginRight= "-81%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
});

submitBtn.addEventListener("click", function(){
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current += 1;
    setTimeout(function(){
        alert("Thanks")
        location.href="index.html";
    },800);
    
});

prevBtnSec.addEventListener("click", function(){
    slidePage.style.marginRight= "-0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnThird.addEventListener("click", function(){
    slidePage.style.marginRight= "-27%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});
prevBtnFourth.addEventListener("click", function(){
    slidePage.style.marginRight= "-54%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -= 1;
});