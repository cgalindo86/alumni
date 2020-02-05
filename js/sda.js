    var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


/**** random image ******/

$(document).ready(function () {
    var images = ['1.png', '2.png', '3.png'];
    $('.smart').css({
        'background-image': 'url(images/jumbotron/' + images[Math.floor(Math.random() * images.length)] + ')'
    });
    $('.tablet').css({
        'background-image': 'url(images/sm/' + images[Math.floor(Math.random() * images.length)] + ')'
    });
});

/************/
