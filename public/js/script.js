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
  
  //find popup container for image slider and X
  popupContainer = document.getElementById('popup-container');
  popupSliderCross = document.getElementById('popup-cross');
  popupSlider = document.getElementById('popup-slider');
  popupSlider.innerHTML = '';

  
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

  //add event listener on every spawned image in gallery
  for (let i = 0; i < spawnedImages.length; i++) {
    spawnedImages[i].addEventListener('click', openSpawnedImg);
  }

  //add event listener on popup window and it's elemts
  popupSliderCross.addEventListener('click', closePopupImage);
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

function openSpawnedImg() {
  let currentImgPath = this.getAttribute('src');
  let currentSliderImg = document.createElement('img');
  let currentImgText = document.createElement('h2');

  currentSliderImg.setAttribute('src', currentImgPath);
  currentSliderImg.setAttribute('class', 'popup__img');

  currentImgText.setAttribute('class', 'taskCard__title');
  currentImgText.innerText = this.nextSibling.innerText;

  popupSlider.appendChild(currentSliderImg);
  popupSlider.appendChild(currentImgText);

  popupContainer.classList.remove('popup_hidden');
}

function closePopupImage() {
  popupContainer.classList.add('popup_hidden');
  popupSlider.innerHTML = '';
}