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
let renderedImages = [];
let curImgIndex = 0;
let renderedImgId = 0;
let clickCounterDOM = null;

//variables for image in popup window
let currentSliderImg = document.createElement('img');
let currentImgText = document.createElement('h2');

currentSliderImg.setAttribute('class', 'popup__img');
currentImgText.setAttribute('class', 'taskCard__title');

//main intialization function on window load
function addItemsListener()
{
  //find all menu items and menu items with submenu
  menuItemsArr = document.querySelectorAll('.navBar__item');
  menuWithSubMenu = document.querySelectorAll('.sub-menu');
  SubMenuArr = document.querySelectorAll('.subMenu');
  subMenuWrapArr = document.querySelectorAll('.subMenu__wrap');

  //find all spawned images and it's information
  renderedImages = document.querySelectorAll('.spawn-image');
  
  //find popup container for image slider and controls
  popupContainer = document.getElementById('popup-container');
  popupSlider = document.getElementById('popup-slider');
  popupSlider.innerHTML = '';
  let popupSliderCross = document.getElementById('popup-cross');
  let popupControlNext = document.getElementById('popup-control-next');
  let popupControlPrev = document.getElementById('popup-control-prev');

  //find DOM elements
  clickCounterDOM = document.getElementById('click-counter');
  
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
  for (let i = 0; i < renderedImages.length; i++) {
    renderedImages[i].addEventListener('click', openRenderedImage);
  }

  //add event listener on popup window and it's elemts
  popupSliderCross.addEventListener('click', closePopupImage);
  popupControlNext.addEventListener('click', slideCurrentImage);
  popupControlPrev.addEventListener('click', slideCurrentImage);
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

function openRenderedImage() {
  let currentImgPath = this.firstChild.getAttribute('src');
  curImgIndex = this.firstChild.getAttribute('alt');
  renderedImgId = this.firstChild.getAttribute('data-number');

  currentSliderImg.setAttribute('src', currentImgPath);  
  currentImgText.innerText = this.lastChild.innerText;

  popupSlider.appendChild(currentSliderImg);
  popupSlider.appendChild(currentImgText);

  popupContainer.classList.remove('popup_hidden');

  countViewsOfImg(renderedImgId);
}

function closePopupImage() {
  popupContainer.classList.add('popup_hidden');
  popupSlider.innerHTML = '';
  window.history.pushState("", "", '/');
}

function slideCurrentImage()
{  
  let newSliderImg = document.createElement('img');
  let newImgText = document.createElement('h2');
  let newImgPath = '';
  let currentDirection = this.getAttribute('id');

  newSliderImg.setAttribute('class', 'popup__img');
  newImgText.setAttribute('class', 'taskCard__title');

  switch (currentDirection) {
    case 'popup-control-next':
      if (curImgIndex == (renderedImages.length - 1)) { curImgIndex = 0; }
      else { curImgIndex++; }
      break;
    case 'popup-control-prev':
      if (curImgIndex == 0) { curImgIndex = (renderedImages.length - 1); }
      else { curImgIndex--; }
      break;
  }
  
  popupSlider.innerHTML = '';
  newImgText.innerText = '';

  newImgPath = renderedImages[curImgIndex].firstChild.getAttribute('src');
  renderedImgId = renderedImages[curImgIndex].firstChild.getAttribute('data-number');

  newSliderImg.setAttribute('src', newImgPath);
  newImgText.innerText = renderedImages[curImgIndex].lastChild.innerText;

  popupSlider.appendChild(newSliderImg);
  popupSlider.appendChild(newImgText);

  countViewsOfImg(renderedImgId);
}

function countViewsOfImg(id)
{
  window.history.pushState("", "", '?img='+id);
  // let phpString = "<?php clickCounter(" + id + ") ?>";

  // clickCounterDOM.innerText = '';
  // clickCounterDOM.innerText = phpString;
}