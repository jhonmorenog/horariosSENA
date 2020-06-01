
  var htmlElem = document.querySelector('#table');


  var bgcolorForm = document.getElementById('comsea');


if(!localStorage.getItem('comsea')) {
  populateStorage();
} else {
  setStyles();
}

function populateStorage() {
  localStorage.setItem('comsea', document.getElementById('comsea').value);
setStyles();
}

function setStyles() {
  var currentColor = localStorage.getItem('comsea');


  document.getElementById('comsea').value = currentColor;


  htmlElem.style.backgroundColor = 'blue' + currentColor;
}


bgcolorForm.onchange = populateStorage;