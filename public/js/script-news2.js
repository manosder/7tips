
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

    for (var i = 0; i < classValues.length; i++) {
        if (classToRemove != classValues[i]) {
            filteredList.push(classValues[i]);
        }
    }

    element.className = filteredList.join(" ");
}

document.getElementById('switch_id').addEventListener("change", function () {
    if (!this.checked) window.location.href = '/news';
});



function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function myFunction2() {
    var x = document.getElementById("myDIV2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

