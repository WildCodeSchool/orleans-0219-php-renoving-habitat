

$(document).ready(() => {

    // uncheck all checkbox on page load
    let checkboxes = document.getElementsByTagName('input');
    for(var i = 0; i <checkboxes.length; i++){
        if(checkboxes[i].type == 'checkbox'){
            checkboxes[i].checked = false;
        }
    }

    let forms = [
        document.querySelector('#formCouverture'),
        document.querySelector('#formRavalement'),
        document.querySelector('#formChauffage'),
        document.querySelector('#formTerrassement'),
        document.querySelector('#formTravauxInterieur'),
        document.querySelector('#formSalleDeBain'),
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

    document.getElementById('sendAllForms').addEventListener('click', ()=>{

        let persInfo = {};

        let persInfoForms = document.getElementsByClassName('info_pers_form');

        persInfoForms.forEach((e) => {
            persInfo[e.children[0].innerText] = e.children[1].value;
        });
        console.log(persInfo);

        forms.forEach((v)=>{
            if (v.style.display === 'block') {
                let formInputs = document.querySelectorAll('#'+ v.id +' .list-group-item');
                let formInfo = {};
                formInputs.forEach((e)=>{

                    if (e.children[0].nodeName !== 'DIV') {
                        formInfo[e.innerText] = e.children[0].children[0].checked
                    } else { //dealing with radio
                        let choices = Array.from(e.children[0].children);
                        let chosen = choices.filter(el => el.children[0].children[0].checked === true);
                        let key = e.innerText.split('?').shift() + ' ?';
                        formInfo[key] = chosen[0].innerText;
                    }
                })
                persInfo[v.id.split(/(?=[A-Z])/).pop()] = formInfo;
            }
        })
        console.log(persInfo)
    })
})