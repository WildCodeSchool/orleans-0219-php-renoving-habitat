const Swal = require('sweetalert2')

$(document).ready(() => {
    // uncheck all checkbox on page load
    let checkboxes = document.getElementsByTagName('input');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].type == 'checkbox') {
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
    ];

    let elementsArray = document.getElementsByClassName("form-check-input");

    elementsArray.forEach(function (elem, index) {
        elem.addEventListener("change", function () {
            controlForm(elem, index)
        });
    });

    function controlForm(elem, index) {
        if (elem.checked) {
            showElement(index)
        } else {
            hideElement(index);
        }
    }

    function showElement(index) {
        elementsArray.forEach(function (elem, i) {
            if (index === i) {
                forms[i].style.display = 'block';
            }
        });
    }

    function hideElement(index) {
        elementsArray.forEach(function (elem, i) {
            if (index === i) {
                forms[i].style.display = 'none';
            }
        });
    }

    /*document.getElementById('sendAllForms').addEventListener('click', () => {
        getFormData()
    })

    function getFormData() {
        let infos = {personal:{}};

        let persInfoForms = document.getElementsByClassName('info_pers_form');

        persInfoForms.forEach((e) => {
            let key = e.children[0].innerText.replace(" ", "")
                                             .replace(":", "");
            infos.personal[key] = e.children[1].value;
        });

        forms.forEach((v) => {
            if (v.style.display === 'block') {
                let formInputs = document.querySelectorAll('#' + v.id + ' .list-group-item');
                let formInfo = {};
                formInputs.forEach((e) => {
                    if (e.children[0].nodeName !== 'DIV') { //dealing with checkbox
                        formInfo[e.innerText.replace("?", "").trim()] = e.children[0].children[0].checked
                    } else { //dealing with radio
                        let choices = Array.from(e.children[0].children);
                        let chosen = choices.filter(el => el.children[0].children[0].checked === true);
                        let key = e.innerText.split('?').shift().trim();
                        formInfo[key] = chosen[0].innerText;
                    }
                })
                infos[v.id.split(/(?=[A-Z])/).pop()] = formInfo;
            }
        })

        let errorsNb = 0;
        let emailRE =  /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
        let emptyField = '';

        Object.keys(infos.personal).forEach((v) => {
            if(infos.personal[v] === ''){
                emptyField = v;
                errorsNb++;
            }
        })
        if(errorsNb === 1){
            Swal.fire({
                title: 'Erreur',
                text: 'Veuillez renseigner le champ ' + emptyField.toLowerCase(),
                type: 'error',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#4c934e',
            })
        }else if(errorsNb > 1) {
            Swal.fire({
                title: 'Erreur',
                text: 'Veuillez renseigner les champs',
                type: 'error',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#4c934e',
            })
        }
        if(errorsNb === 0 && !emailRE.test(infos.personal.Email)){
            Swal.fire({
                title: 'Erreur',
                text: 'Email incorrect',
                type: 'error',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#4c934e',
            })
            errorsNb++;
        }
        if (errorsNb === 0) {
            sendAjax(infos)
        }
    }

    function sendAjax(infos) {
        $.ajax({
            url: '/projet/sendEmail',
            data: infos,
            type: 'POST',
            success: function() {
                Swal.fire({
                    title: 'Nice !',
                    text: 'ça passe sur dev :^)',
                    type: 'success',
                    confirmButtonText: 'Ok',
                    confirmButtonColor: '#4c934e',
                })
            }
        })
    }*/
})