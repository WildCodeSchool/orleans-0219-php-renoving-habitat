let beforeArray =
    [
        '/assets/homepage_image/imgbf1_1.jpeg',
        '/assets/homepage_image/imgbf2_1.png',
    ];

let afterArray =
    [
        '/assets/homepage_image/imgbf1_2.jpeg',
        '/assets/homepage_image/imgbf2_2.jpeg',
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

}

refreshSlider();