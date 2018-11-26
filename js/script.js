//кнопки показа кода на странице
function showCode(task) {
  let task1_codeBlock = document.getElementById('task1_codeBlock');
  let task1_codeWrap = document.getElementById('task1_codeWrap');
  let task4_codeBlock = document.getElementById('task4_codeBlock');
  let task4_codeWrap = document.getElementById('task4_codeWrap');
  let task5_codeBlock = document.getElementById('task5_codeBlock');
  let task5_codeWrap = document.getElementById('task5_codeWrap');
  
  switch(task) {
    case 'task1':
      task1_codeBlock.classList.toggle('codeBlock_hidden');
      task1_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      break;
    case 'task4':
      task4_codeBlock.classList.toggle('codeBlock_hidden');
      task4_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      break;
    case 'task5':
      task5_codeBlock.classList.toggle('codeBlock_hidden');
      task5_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      break;
  }
}
