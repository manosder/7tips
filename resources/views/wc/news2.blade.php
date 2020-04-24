<link rel="stylesheet" href="css/style-news.css">
<style>
.flex {
  margin-top: 150px;
  min-height: 700px;
  display: flex;
  align-items:  flex-start;
  justify-content:  flex-start;
}
@media all and (max-width:700px){
    .band {
      display: grid !important;
    }
    .card {
      max-width: 100%;
    }
}


.search-box {
  position: absolute;
    margin: auto;
    top: 70px;
    left: 0;
    right: 0;
    width: 300px;
    height: 100px;
}
.search-box .search {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 80px;
  height: 80px;
  background: crimson;
  border-radius: 50%;
  transition: all 1s;
  z-index: 4;
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
}
.search-box .search:hover {
  cursor: pointer;
}
.search-box .search::before {
  content: "";
  position: absolute;
  margin: auto;
  top: 22px;
  right: 0;
  bottom: 0;
  left: 22px;
  width: 12px;
  height: 2px;
  background: white;
  transform: rotate(45deg);
  transition: all .5s;
}
.search-box .search::after {
  content: "";
  position: absolute;
  margin: auto;
  top: -5px;
  right: 0;
  bottom: 0;
  left: -5px;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 2px solid white;
  transition: all .5s;
}
.search-box input {
  font-family: 'Inconsolata', monospace;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 50px;
  outline: none;
  border: none;
  background: crimson;
  color: white;
  text-shadow: 0 0 10px crimson;
  padding: 0 80px 0 20px;
  border-radius: 30px;
  box-shadow: 0 0 25px 0 crimson, 0 20px 25px 0 rgba(0, 0, 0, 0.2);
  transition: all 1s;
  opacity: 0;
  z-index: 5;
  font-weight: bolder;
  letter-spacing: 0.1em;
}
.search-box input:hover {
  cursor: pointer;
}
.search-box input:focus {
  width: 300px;
  opacity: 1;
  cursor: text;
}
.search-box input:focus ~ .search {
  right: -250px;
  background: #151515;
  z-index: 6;
}
.search-box input:focus ~ .search::before {
  top: 0;
  left: 0;
  width: 25px;
}
.search-box input:focus ~ .search::after {
  top: 0;
  left: 0;
  width: 25px;
  height: 2px;
  border: none;
  background: white;
  border-radius: 0%;
  transform: rotate(-45deg);
}
.search-box input::placeholder {
  color: white;
  opacity: 0.5;
  font-weight: bolder;
}
img {
  border-radius: 50%;
}
.filterSection li {
    list-style: none;
    margin: 0px;
    padding: 5px;


}
.filterSection {
    margin-top: 120px;
    padding: 0px;
    background-color: #EEEEEE;
}
#itemsToFilter li {
    list-style: none;
    background-position: 0 3px;
    background-repeat: no-repeat;
    margin: 15px;
    padding-left: 40px;
    font-size: 15pt;
    color: #666;
}
.showItem {
    display: list-item;
}
.hideItem {
    display: none;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.filtered {
  top:-500px !important;
}
div.topleft {
  position: absolute;
  top: 80px;
}
div.filterbox{
  position: absolute;
  top: -50px;
  right: 0;
  
}
</style>
<div class="topleft">
  <label class="switch">
    <input id="switch_id" type="checkbox" checked>
    <span class="slider round"><a href="/news2"></a></span>
  </label>
</div>
<div class=" filterbox">
  <ul class="filterSection">
    <li>
      <strong>Filter by Category:</strong><br>
      <input checked="true" type="checkbox" value="1"/>
      <label>Espa</label>
    </li>
    <li>
      <input checked="true" type="checkbox" value="2"/>
      <label>Drasi</label>
    </li>
    <li>
      <input checked="true" type="checkbox" value="3"/>
      <label>Vrasi</label>
    </li>
  </ul>
</div>

<div class="flex">
  <div class="row ">
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <div class="search"></div>
      </div> -->
  </div>
  <div class="row equal filtered">
    @foreach($posts as $post)
    <div class="col-sm-12 col-md-10">
      <ul id="itemsToFilter">
        <li data-type="{{ $post->category_id}}">
          <div class="row">
            <div class="col-sm-2 col-md-2"><img src="{{ asset(Voyager::image( $post->image )) }}" style="width:100px;"></div>
            <div class="col-sm-8 col-md-8"><h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3></div>
          </div>
        </li>
        <li data-type="{{ $post->category_id}}"><hr></li>
      </ul>
    </div>
    @endforeach
  </div>
</div>



<script>
'use strict';

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach(elm => {
  elm.addEventListener('click', () => {
    elm.previousElementSibling.value = '';
  });
});


// get all of our list items
var itemsToFilter = document.querySelectorAll("#itemsToFilter li");

//setup click event handlers on our checkboxes
var checkBoxes = document.querySelectorAll(".filterSection li input");

for (var i = 0; i < checkBoxes.length; i++) {
    checkBoxes[i].addEventListener("click", filterItems, false);
    checkBoxes[i].checked = true;
}

// the event handler!
function filterItems(e) {
    var clickedItem = e.target;

    if (clickedItem.checked == true) {
        hideOrShowItems(clickedItem.value, "hideItem", "showItem");
    } else if (clickedItem.checked == false) {
        hideOrShowItems(clickedItem.value, "showItem", "hideItem");
    } else {
        // deal with the indeterminate state if needed
    }
}

// add or remove classes to show or hide our content
function hideOrShowItems(itemType, classToRemove, classToAdd) {
    for (var i = 0; i < itemsToFilter.length; i++) {
        var currentItem = itemsToFilter[i];

        if (currentItem.getAttribute("data-type") == itemType) {
            removeClass(currentItem, classToRemove);
            addClass(currentItem, classToAdd);
        }
    }
}

//
// Helper functions for adding and removing class values
//
function addClass(element, classToAdd) {
    var currentClassValue = element.className;

    if (currentClassValue.indexOf(classToAdd) == -1) {
        if ((currentClassValue == null) || (currentClassValue === "")) {
            element.className = classToAdd;
        } else {
            element.className += " " + classToAdd;
        }
    }
}

function removeClass(element, classToRemove) {
    var currentClassValue = element.className;

    if (currentClassValue == classToRemove) {
        element.className = "";
        return;
    }

    var classValues = currentClassValue.split(" ");
    var filteredList = [];

    for (var i = 0 ; i < classValues.length; i++) {
        if (classToRemove != classValues[i]) {
            filteredList.push(classValues[i]);
        }
    }

    element.className = filteredList.join(" ");
}

document.getElementById('switch_id').addEventListener("change", function(){
    if (!this.checked) window.location.href = '/news';
});
</script>
