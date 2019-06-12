Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}

document.querySelector('#formCouverture').style.display = 'none';
//////////////

$(document).ready(() => {
    let elementsArray = document.getElementsByClassName("form-check-input");

    elementsArray.forEach(function(elem, index) {
        elem.addEventListener("change", function() {

                controlForm(elem, index)

            console.log('elem ' + index + ' checked')
        });
    });
})

function controlForm(elem, index){
    switch(index){
        case 0:
            if (elem.checked) {
                document.querySelector('#formCouverture').style.display = 'block';
            }else{
                document.querySelector('#formCouverture').style.display = 'none';
            }
        case 1:
            if (elem.checked) {
                showIsolation();
            }else{
                hideIsolation()
            }
        case 2:
            if (elem.checked) {
                showInterieur();
            }else{
                hideInterieur()
            }
        case 3:
            if (elem.checked) {
                showRavalement();
            }else{
                hideRavalement()
            }
        case 4:
            if (elem.checked) {
                showMenuiserie();
            }else{
                hideMenuiserie()
            }
        case 5:
            if (elem.checked) {
                showTerrassement();
            }else{
                hideTerrassement()
            }
    }
}
