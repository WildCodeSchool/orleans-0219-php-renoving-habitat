$(document).ready(() => {

    let forms = [
        document.querySelector('#formCouverture'),
        document.querySelector('#formChauffage'),
        document.querySelector('#formClim')
    ]



    let elementsArray = document.getElementsByClassName("form-check-input");

    elementsArray.forEach(function(elem, index) {
        elem.addEventListener("change", function() {
            controlForm(elem, index)
        });
    });


    function showElement(index) {
        elementsArray.forEach(function(elem, i) {
            if (index===i) {
                forms[i].style.display = 'block';
            }
        });
    }

    function hideElement(index) {
        elementsArray.forEach(function(elem, i) {
            if (index===i) {
                forms[i].style.display = 'none';
            }
        });
    }

    function controlForm (elem, index) {
        if (elem.checked) {
            showElement(index)
        } else {
        hideElement(index);
        }
    }
})