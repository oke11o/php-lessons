//кнопки показа кода на странице
function showCode(task) {
  let task1_codeBlock = document.getElementById('task1_codeBlock');
  let task1_codeWrap = document.getElementById('task1_codeWrap');
  
  switch(task) {
    case 'task1':
      task1_codeBlock.classList.toggle('codeBlock_hidden');
      task1_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task1_location";
      break;
  }
}

//main menu and sub-menu
window.onload = addItemsListener;

let menuItemsArr = [];
let SubMenuArr = [];
let subMenuWrapArr = [];
let menuWithSubMenu = [];
let spawnedImages = [];

function addItemsListener()
{
  //find all menu items and menu items with submenu
  menuItemsArr = document.querySelectorAll('.navBar__item');
  menuWithSubMenu = document.querySelectorAll('.sub-menu');
  SubMenuArr = document.querySelectorAll('.subMenu');
  subMenuWrapArr = document.querySelectorAll('.subMenu__wrap');
  //find all spawned images
  spawnedImages = document.querySelectorAll('.spawn-image');
  console.log(spawnedImages);
  
  for (let i = 0; i < menuWithSubMenu.length; i++) {
    menuWithSubMenu[i].addEventListener('mouseover', function() { SubMenuArr[i].classList.remove('subMenu_hidden'); });
    menuWithSubMenu[i].addEventListener('mouseleave', function() { SubMenuArr[i].classList.add('subMenu_hidden'); });
    subMenuWrapArr[i].addEventListener('mouseover', function() { SubMenuArr[i].classList.remove('subMenu_hidden'); });
    subMenuWrapArr[i].addEventListener('mouseleave', function() { SubMenuArr[i].classList.add('subMenu_hidden'); });
  }

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