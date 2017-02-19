function restoreAndSkipContent() {
  var hidden = document.getElementsByClassName('skip-me')[0];
  hidden.classList.add('unhide');
  window.scroll(0, hidden.offsetHeight);
}
restoreAndSkipContent();