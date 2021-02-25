
const target = document.querySelector('#button-click');

target.addEventListener('click', (e) => {
  const clicks = ++target.innerText;

  if (clicks == 10) target.previousElementSibling.innerText = 'You have clicked over ten times';
});