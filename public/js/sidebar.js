// show sidebar
const toggleBtn = document.getElementById('toggle-sidebar');
const sideBar = document.getElementById('side-bar');

toggleBtn.addEventListener('click', () => {
  sideBar.classList.toggle('active');
});

// profile submenu
const pSubmenuTgl = document.getElementById('p-submenu-toggle');
const pSubmenu = document.getElementById('p-sub-menu');
const pArrow = document.getElementById('p-submenu-arrow');

pSubmenuTgl.addEventListener('click', () => {
  pSubmenu.classList.toggle('p-submenu');
  pArrow.classList.toggle('rotate1');
});

// users management submenu
const uSubmenuTgl = document.getElementById('u-submenu-toggle');
const uSubmenu = document.getElementById('u-sub-menu');
const uArrow = document.getElementById('u-submenu-arrow');

uSubmenuTgl.addEventListener('click', () => {
  uSubmenu.classList.toggle('u-submenu');
  uArrow.classList.toggle('rotate2');
});

// sidebar active navigation/indicator
const navigationLists = document.getElementsByClassName('nav-list');

for(let i = 0; i < navigationLists.length; i++){
  navigationLists[i].addEventListener('click', () => {
    if(navigationLists[i].classList.contains('navigate-active')){
      return;
    }else{
      for(let j = 0; j < navigationLists.length; j++) {
        if(navigationLists[j].classList.contains('navigate-active')){
          navigationLists[j].classList.remove('navigate-active');
        }
      }
      navigationLists[i].classList.add('navigate-active');
    }
  });
}