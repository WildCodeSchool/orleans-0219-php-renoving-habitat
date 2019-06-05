let beforeArray =
    [
        'https://juxtapose.knightlab.com/static/img/Sochi_11April2005.jpg',
        'https://images.unsplash.com/photo-1528920304568-7aa06b3dda8b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
        'https://images-na.ssl-images-amazon.com/images/I/61mJ3oVegKL._SY550_.jpg',
    ];

let afterArray =
    [
        'https://juxtapose.knightlab.com/static/img/Sochi_22Nov2013.jpg',
        'https://images.pexels.com/photos/247478/pexels-photo-247478.jpeg?cs=srgb&dl=clouds-cloudy-conifers-247478.jpg&fm=jpg',
        'https://cdn.shopify.com/s/files/1/0150/6262/products/the-sill_snake-plant-slaurentii_terracotta_4_800x.jpg?v=1537308389',
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
            removeElem();
            refreshSlider();
        }else{
            photoArrayIndex++
            removeElem();
            refreshSlider();
        }
    }else{
        if(photoArrayIndex === 0){
            photoArrayIndex = beforeArray.length - 1;
            removeElem();
            refreshSlider();
        }else{
            photoArrayIndex--
            removeElem();
            refreshSlider();
        }
    }
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

    document.querySelector('#image_counter > div').innerHTML = (photoArrayIndex+1) + '/' + beforeArray.length;
}

refreshSlider();