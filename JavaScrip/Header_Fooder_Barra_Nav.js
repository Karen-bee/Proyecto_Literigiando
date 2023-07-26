document.getElementById('check').addEventListener('change', function() {
  var menu = document.querySelector('.menu');
  if (this.checked) {
    menu.classList.add('active');
  } else {
    menu.classList.remove('active');
  }
});
