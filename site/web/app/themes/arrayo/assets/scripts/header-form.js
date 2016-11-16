function init() {
  for (var i = 0; i < count; i++) {
    var ul = document.querySelector('ul.items'),
        li = document.createElement("li");

    ul.appendChild(li);
  }
  ul.firstChild.classList.add('active');
}

function next(target) {
  var input = target.previousElementSibling;
  
  if (input.value === '') {
    form.classList.add('error');
  } else {
    form.classList.remove('error');
    
    var enable = document.querySelector('.header-form fieldset.enable'),
        nextEnable = enable.nextElementSibling;
    enable.classList.remove('enable');
    enable.classList.add('disable');
    nextEnable.classList.add('enable');
    
    var active = document.querySelector('ul.items li.active'),
        nextActive = active.nextElementSibling;
    active.classList.remove('active');
    nextActive.classList.add('active');
  }
}

function keyDown(event) {
  var key = event.keyCode,
      target = document.querySelector('fieldset.enable .button');
  if (key == 13 || key == 9) next(target);
}


var    form = document.querySelector('.header-form'),
    count = form.querySelectorAll('fieldset').length;

window.onload = init;
document.onmouseup = function (event) {
    var target = event.target || event.toElement;
    if (target.classList.contains("button")) next(target);
};
document.addEventListener("keydown", keyDown, false);