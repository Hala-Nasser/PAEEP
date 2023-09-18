
/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () =>{
  const header = document.getElementById('navbar')
  // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
  this.scrollY >= 10 ? navbar.classList.add('scroll-nav') 
                     : navbar.classList.remove('scroll-nav')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						          : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


///////////////////////////////////////////////////////////

const btnserach = document.getElementById("search");
const areasearch = document.querySelector(".areasearch");
const searchnon = document.querySelectorAll(".searchnon");

btnserach.addEventListener("click",()=>{
  areasearch.classList.toggle("active");
});

for( let i=0; i<searchnon.length ; i++){
  searchnon[i].addEventListener("click",()=>{
    areasearch.classList.remove("active");
    location.href="index.html";
  });
  
}

  /*=============== SCROLL REVEAL ANIMATION ===============*/
  const sr = ScrollReveal({
    origin:'top',
    distance:'40px',
    duration:2000,
    // delay:10,
  //reset:true,
  })
  
  sr.reveal(`.association_pro ,.news, .count_sec , .comp_section `)
  sr.reveal(`.textheder ,.footer` ,{delay: 100,origin: 'bottom'})
//   sr.reveal(`.numberall`,{delay: 600, duration:2000,origin: 'bottom'})
//   sr.reveal(`.new__card, .brand__img`,{interval:100})
//   sr.reveal({origin:'right',delay: 600,})
//   sr.reveal(`.btn_cours`,{origin:'left',delay: 600,})


  


//////////////////////// 1 /////////////////////////////////


var swiper = new Swiper(".mySwiper", {
  loop: true,
  simulateTouch:false,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  speed: 1300,
    navigation: {
      nextEl: ".prev",
      prevEl: ".next",
    },
  });


  //////////////////////// Swiper2 //////////////////////////////////
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 20,

    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1400: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1600: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },

  });

  //////////////////////// Swiper3 //////////////////////////////////

    var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop:true,
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        breakpoints: {
            "@0.00": {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            570: {
              slidesPerView: 2,
              spaceBetween: 10,
            },
            860: {
              slidesPerView: 3,
              spaceBetween: 10,
            },
            1250: {
              slidesPerView: 4,
              spaceBetween: 10,
            },
            1700: {
              slidesPerView: 5,
              spaceBetween: 10,
            },
            
          },
          navigation: {
            nextEl: ".prevt",
            prevEl: ".nextt",
          },
        });

        /////////////////////////////////

        // jQuery(document).ready(function($) {
        //   $('.counter').counterUp({
        //     delay: 10,
        //     time: 2000,
        //   });
        // });


        const counters = document.querySelectorAll(".counter");

 
        counters.forEach((counter) => {
          counter.innerText ='0';
          document.addEventListener("DOMContentLoaded", () => {
          const updateCoounter = () =>{
            const target = +counter.getAttribute('data-target');
            const c = +counter.innerText;
            const increment = target / 3000;

            if (c < target){
              counter.innerText = `${Math.ceil(c + increment)}`;
              setTimeout(updateCoounter,1);
            }
          };
          updateCoounter();
        });
      });

        /////////////////////////////

