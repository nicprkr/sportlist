// window.addEventListener('scroll', throttle(callback, 500));

// function throttle(fn, wait) {
//     let time = Date.now();
//     return function() {
//       if ((time + wait - Date.now()) < 200) {
//         fn();
//         time = Date.now();
//       }
//     }
//   }
//   function callback() {
//       shrinkHeader();
//   }

//   function shrinkHeader() {
//       let top = window.pageYOffset;
//      let nav =  document.getElementById("masthead");
//      if(top <= 5) {
//          nav.classList.remove("scrollUp");
//      } else {
//         nav.classList.add("scrollUp");
//      }

//   }