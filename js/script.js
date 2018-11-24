//кнопки показа кода на странице
function showCode(task) {
  let task1_codeBlock = document.getElementById('task4_codeBlock');
  let task1_codeWrap = document.getElementById('task4_codeWrap');
  let task2_codeBlock = document.getElementById('task5_codeBlock');
  let task2_codeWrap = document.getElementById('task5_codeWrap');
  
  switch(task) {
    case 'task4':
      task1_codeBlock.classList.toggle('codeBlock_hidden');
      task1_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      break;
    case 'task5':
      task2_codeBlock.classList.toggle('codeBlock_hidden');
      task2_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      break;
  }
}
