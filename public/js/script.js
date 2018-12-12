//main menu and sub-menu
window.onload = addItemsListener;

let menuItemsArr = [];
let SubMenuArr = [];
let subMenuWrapArr = [];
let menuWithSubMenu = [];

//main intialization function on window load
function addItemsListener()
{
  //find all menu items and menu items with submenu
  menuItemsArr = document.querySelectorAll('.navBar__item');
  menuWithSubMenu = document.querySelectorAll('.sub-menu');
  SubMenuArr = document.querySelectorAll('.subMenu');
  subMenuWrapArr = document.querySelectorAll('.subMenu__wrap');
  
  //add event listeners on sub-menu items on hover
  for (let i = 0; i < menuWithSubMenu.length; i++) {
    menuWithSubMenu[i].addEventListener('mouseover', function() { SubMenuArr[i].classList.remove('subMenu_hidden'); });
    menuWithSubMenu[i].addEventListener('mouseleave', function() { SubMenuArr[i].classList.add('subMenu_hidden'); });
    subMenuWrapArr[i].addEventListener('mouseover', function() { SubMenuArr[i].classList.remove('subMenu_hidden'); });
    subMenuWrapArr[i].addEventListener('mouseleave', function() { SubMenuArr[i].classList.add('subMenu_hidden'); });
  }

  //add event listeners on menu items
  for (let i = 0; i < menuItemsArr.length; i++) {
    menuItemsArr[i].addEventListener('click', switchActiveMenuItem);
  }
}

function switchActiveMenuItem()
{
  for (let i = 0; i < menuItemsArr.length; i++) {
    if (menuItemsArr[i].classList.contains('navBar__item_active')) {
      menuItemsArr[i].classList.remove('navBar__item_active')
    }
  }

  this.classList.add('navBar__item_active');
}