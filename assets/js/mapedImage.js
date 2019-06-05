
const resizeTime = 100;     // total duration of the resize effect, 0 is instant
const resizeDelay = 10;    // time to wait before checking the window size again
                          // the shorter the time, the more reactive it will be.
                          // short or 0 times could cause problems with old browsers.
const constWidth = 700;
const constHeight = 526;
                          

$(document).ready(function() {

	$('#house_image').mapster({
    	staticState: true,
    	fillColor: '00ff00',
	});

	$('.tooltip').tooltipster({
		theme: 'tooltipster-noir'
	});
	

	let windowWidth = $(window).width();

	if(windowWidth<constWidth){
		let calcHeight = windowWidth*constHeight/constWidth;
		$('#house_image').mapster('resize',windowWidth,calcHeight,0); 
	}else{
		$('#house_image').mapster('resize',constWidth,constHeight,0);
	}

})

// Resize the map to fit within the boundaries provided
function resize(maxWidth, maxHeight) {
     let image = $('#house_image'),
        imgWidth = image.width(),
        imgHeight = image.height(),
        newWidth=0,
        newHeight=0;

    if (imgWidth/maxWidth>imgHeight/maxHeight) {
        newWidth = maxWidth;
    } else {
        newHeight = maxHeight;
    }
    if(newWidth > constWidth){
    	newWidth = constWidth;
    }
    if(newHeight > constHeight){
    	newHeight = constHeight;
    }
    image.mapster('resize',newWidth,newHeight,resizeTime);
}

// Track window resizing events, but only actually call the map resize when the
// window isn't being resized any more

function onWindowResize() {
    
    let curWidth = $(window).width(),
        curHeight = $(window).height(),
        checking = false;

    if (checking) {
        return;
    }

    checking = true;
    window.setTimeout(function() {
        let newWidth = $(window).width(),
            newHeight = $(window).height();
        if (newWidth === curWidth &&
            newHeight === curHeight) {
            resize(newWidth,newHeight); 
        }
        checking=false;
    },resizeDelay );
}

$(window).bind('resize',onWindowResize);
