//кнопки показа кода на странице
function showCode(task) {
  let task1_codeBlock = document.getElementById('task1_codeBlock');
  let task1_codeWrap = document.getElementById('task1_codeWrap');

  let task2_codeBlock = document.getElementById('task2_codeBlock');
  let task2_codeWrap = document.getElementById('task2_codeWrap');

  let task3_codeBlock = document.getElementById('task3_codeBlock');
  let task3_codeWrap = document.getElementById('task3_codeWrap');

  let task4_codeBlock = document.getElementById('task4_codeBlock');
  let task4_codeWrap = document.getElementById('task4_codeWrap');

  let task5_codeBlock = document.getElementById('task5_codeBlock');
  let task5_codeWrap = document.getElementById('task5_codeWrap');

  let task6_codeBlock = document.getElementById('task6_codeBlock');
  let task6_codeWrap = document.getElementById('task6_codeWrap');

  let task7_codeBlock = document.getElementById('task7_codeBlock');
  let task7_codeWrap = document.getElementById('task7_codeWrap');

  let task8_codeBlock = document.getElementById('task8_codeBlock');
  let task8_codeWrap = document.getElementById('task8_codeWrap');
  
  switch(task) {
    case 'task1':
      task1_codeBlock.classList.toggle('codeBlock_hidden');
      task1_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task1_location";
      break;
    case 'task2':
      task2_codeBlock.classList.toggle('codeBlock_hidden');
      task2_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task2_location";
      break;
    case 'task3':
      task3_codeBlock.classList.toggle('codeBlock_hidden');
      task3_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task3_location";
      break;
    case 'task4':
      task4_codeBlock.classList.toggle('codeBlock_hidden');
      task4_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task4_location";
      break;
    case 'task5':
      task5_codeBlock.classList.toggle('codeBlock_fewHidden');
      task5_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task5_location";
      break;
    case 'task6':
      task6_codeBlock.classList.toggle('codeBlock_hidden');
      task6_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task6_location";
      break;
    case 'task7':
      task7_codeBlock.classList.toggle('codeBlock_hidden');
      task7_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task7_location";
      break;
    case 'task8':
      task8_codeBlock.classList.toggle('codeBlock_hidden');
      task8_codeWrap.classList.toggle('taskCard__codeWrap_hidden');
      document.location.href = "#task8_location";
      break;
  }
}
