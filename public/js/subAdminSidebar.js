// show sidebar
const toggleBtn = document.getElementById('toggle-sidebar');
const toggleBtn2 = document.getElementById('toggle-sidebar2');
const sideBar = document.getElementById('side-bar');
const blockSidebar = document.getElementById('b-sidebar');

toggleBtn.addEventListener('click', () => {
  sideBar.classList.toggle('active');
  blockSidebar.classList.toggle('active');
});

toggleBtn2.addEventListener('click', () => {
  sideBar.classList.toggle('active');
  blockSidebar.classList.toggle('active');
});

// close sidebar
const sbClose = document.getElementById('sb-close');

sbClose.addEventListener('click', () => {
  sideBar.classList.toggle('active');
  blockSidebar.classList.toggle('active');
});

// documents management submenu
const dSubmenuTgl = document.getElementById('d-submenu-toggle');
const dSubmenu = document.getElementById('d-sub-menu');
const dArrow = document.getElementById('d-submenu-arrow');

dSubmenuTgl.addEventListener('click', () => {
  dSubmenu.classList.toggle('d-submenu');
  dArrow.classList.toggle('rotate3');
});

// sidebar active navigation/indicator
// const navigationLists = document.getElementsByClassName('nav-list');

// for(let i = 0; i < navigationLists.length; i++){
//   navigationLists[i].addEventListener('click', () => {
//     if(navigationLists[i].classList.contains('navigate-active')){
//       return;
//     }else{
//       for(let j = 0; j < navigationLists.length; j++) {
//         if(navigationLists[j].classList.contains('navigate-active')){
//           navigationLists[j].classList.remove('navigate-active');
//         }
//       }
//       navigationLists[i].classList.add('navigate-active');
//     }
//   });
// }