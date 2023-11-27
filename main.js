// MENU
// menu show y hidden

const navMenu = document.getElementById("nav-menu"),
  ToggleMenu = document.getElementById("nav-toggles"),
  closeMenu = document.getElementById("nav-close");

function close() {
  navMenu.classList.remove("show-menu");
}

function open() {
  navMenu.classList.add("show-menu");
}

// ===== menu show ======
// validate if const exists
if (ToggleMenu) {
  ToggleMenu.addEventListener("click", open);
}

// ========= menu hidden ===========
// validate if const exists

if (closeMenu) {
  closeMenu.addEventListener("click", close);
}

// ===== remove menu after clicking icon =====
const navLink = document.querySelectorAll(".nav-link");
navLink.forEach((n) => n.addEventListener("click", close));

// SKILLS
// accordion in skills

const skillsContent = document.getElementsByClassName("skills-content"),
  skillsHeader = document.querySelectorAll(".skills-header");

function toggleSkills() {
  let itemClass = this.parentNode.className;

  for (i = 0; i < skillsContent.length; i++) {
    skillsContent[i].className = "skills-content skills-close";
  }

  if (itemClass === "skills-content skills-close") {
    this.parentNode.className = "skills-content skills-open";
  }
}

skillsHeader.forEach((el) => {
  el.addEventListener("click", toggleSkills);
});

// ======= qualification =======

const tabs = document.querySelectorAll("[data-target]"),
  tabContents = document.querySelectorAll("[data-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.target);

    tabContents.forEach((tabContents) => {
      tabContents.classList.remove("qualification-active");
    });

    target.classList.add("qualification-active");

    tab.forEach((tab) => {
      tab.classList.remove("qualification-active");
    });
    tab.classList.add("qualification-active");
  });
});

// portofolio swiper
let swiper = new Swiper(".portofolio-container", {
  cssMode: true,
  loop: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


// scroll section active link

const sections =  document.querySelectorAll('section[id')

function scrollActive(){
  const scrollY =  window.pageYOffset

  sections.forEach(current => {
    const sectionHeight = current.offsetHeight
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute('id')

    if(scrollY > sectionTop && scrollY <= sectionTop +  sectionHeight){
      document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.add('active-link')
    }
    else{
      document.querySelector('.nav-menu a[href*=' + sectionId + ']').classList.remove('active-link')

    }
  })
}

window.addEventListener('scroll', scrollActive)


//change bg header
function scrollHeader(){
  const nav = document.getElementById('header')

  if(this.scrollY >= 80){
    nav.classList.add('scroll-header');
  }
  else{
    nav.classList.remove('scroll-header')
    
  }


}
window.addEventListener('scroll',scrollHeader)




// Show scroll up
function scrollUp(){
  const scrollup = document.getElementById('scroll-up'); 
  if(this.scrollY >= 200){
    scrollup.classList.add('show-scroll');
  }
  else{
    scrollup.classList.remove('show-scroll')
  }

}
window.addEventListener('scroll',scrollUp)


// dark/light theme

const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'uil-sun'

// previously selected topic
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')
// obtain current theme  that the interface has by validating dark theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme)? 'dark':'light'
const getCurrentIcon = () => document.body.classList.contains(iconTheme)? 'uil-moon':'uil-sun'

// validate if user already chose a topic
if(selectedTheme){
  // if validation fulfilled. we need to know what theme was activated
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'uil-moon' ? 'add ' : 'remove'](iconTheme)
}

// activate/deactivate the theme manually using button
themeButton.addEventListener('click', ()=>{
  // add or remove dark/icon theme
  document.body.classList.toggle(darkTheme)
  themeButton.classList.toggle(iconTheme)
  // we save the theme and current icon that user choose
  localStorage.setItem('selected-theme', getCurrentTheme)
  localStorage.setItem('selected-icon', getCurrentIcon)
})