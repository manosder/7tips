'use strict';

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach(elm => {
  elm.addEventListener('click', () => {
    elm.previousElementSibling.value = '';
  });
});


document.getElementById('switch_id').addEventListener("change", function(){
    if (this.checked) window.location.href = '/news2';
});
