let beforeArray =
    [
        'https://image.noelshack.com/fichiers/2019/23/5/1559898020-image1.png',
        'https://image.noelshack.com/fichiers/2019/23/5/1559899276-image3.png',
    ];

let afterArray =
    [
        'https://image.noelshack.com/fichiers/2019/23/5/1559898320-image2.png',
        'https://image.noelshack.com/fichiers/2019/23/5/1559899282-image4.jpeg',
    ];

let photoArrayIndex = 0;

document.getElementById("nextImageButton").addEventListener("click", () => {
    switchImage('next')
});
document.getElementById("prevImageButton").addEventListener("click", () => {
    switchImage('prev')
});

function switchImage(direction){
    if(direction === 'next'){
        if(photoArrayIndex === beforeArray.length - 1){
            photoArrayIndex = 0;
        }else{
            photoArrayIndex++;
        }
    }else{
        if(photoArrayIndex === 0){
            photoArrayIndex = beforeArray.length - 1;
        }else{
            photoArrayIndex--;
        }
    }
    removeElem();
    refreshSlider();
}

function removeElem(){
    let elem = document.getElementsByClassName('jx-slider')[0];
    elem.parentNode.removeChild(elem);
}

function refreshSlider(){
    slider = new juxtapose.JXSlider('#slider',
        [
            {
                src: beforeArray[photoArrayIndex],
                label: 'avant',
            },
            {
                src: afterArray[photoArrayIndex],
                label: 'après',
            }
        ],

        {
            animate: true,
            showLabels: true,
            showCredits: false,
            startingPosition: "50%",
            makeResponsive: true
        });

    // document.querySelector('#image_counter > div').innerHTML = (photoArrayIndex+1) + '/' + beforeArray.length;
}

refreshSlider();