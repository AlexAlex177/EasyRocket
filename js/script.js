// let btn = document.querySelector(".toggle");
//     let icon = btn.querySelector(".fa-bars");

//     btn.onclick = function(){
//         if(icon.classList.contains("fa-bars")){
//             icon.classList.replace("fa-bars","fa-close")
//         }
//         else{
//             icon.classList.replace("fa-close","fa-bars")
//         }
//     }


   
    
    // var acc = document.getElementsByClassName("accordion");
    // var i;
    
    // for (i = 0; i < acc.length; i++) {
    //   acc[i].addEventListener("click", function() {
    //     this.classList.toggle("active");
    //     var panel = this.nextElementSibling;
    //     if (panel.style.maxHeight) {
    //       panel.style.maxHeight = null;
    //     } else {
    //       panel.style.maxHeight = panel.scrollHeight + "px";
    //     } 
    //   });

    // }

    const feature  = document.getElementsByClassName("feature_box");
for(i=0 ;i<feature.length;i++){
    feature[i].addEventListener('click',function(){
    this.classList.toggle("active");
 })
}


    // / search-box open close js code
  let navbar = document.querySelector(".navbar");
  // let searchBox = document.querySelector(".search-box .bx-search");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");
  
  // searchBox.addEventListener("click", ()=>{
  //   navbar.classList.toggle("showInput");
  //   if(navbar.classList.contains("showInput")){
  //     searchBox.classList.replace("bx-search" ,"bx-x");
  //   }else {
  //     searchBox.classList.replace("bx-x" ,"bx-search"); 
  //   }
  // });
  
  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .bx-menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  menuOpenBtn.onclick = function() {
  navLinks.style.left = "0";
  }
  menuCloseBtn.onclick = function() {
  navLinks.style.left = "-100%";
  }
  
  
  // sidebar submenu open close js code
  let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  htmlcssArrow.onclick = function() {
   navLinks.classList.toggle("show1");
  }
//   let moreArrow = document.querySelector(".more-arrow");
//   moreArrow.onclick = function() {
//    navLinks.classList.toggle("show2");
//   }
  // let jsArrow = document.querySelector(".js-arrow");
  // jsArrow.onclick = function() {
  //  navLinks.classList.toggle("show2");
  // }   
  

   