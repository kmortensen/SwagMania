function changeImage(newImage) {
    var image = document.getElementById('showImage');
    var resetImage = document.getElementById('resetImage');
    var changeSize = document.getElementById('changeSize');
    if (image.src = "none") {
        image.src = newImage;
        var w = window,
            d = document,
            e = d.documentElement,
            g = d.getElementsByTagName('body')[0],
            x = w.innerWidth || e.clientWidth || g.clientWidth,
            y = w.innerHeight|| e.clientHeight|| g.clientHeight;
        image.style.display ="block";
        image.style.position = "fixed";
        image.style.top = "110px";
        image.style.margin = "auto";
        image.style.left = "0";
        image.style.right ="0";
        image.style.width = "auto";
        image.style.height = "auto";
        resetImage.style.display = "block";
        resetImage.style.height = Math.max(document.getElementById('galleryTable').clientHeight,document.getElementById('gallery').clientHeight).toString().concat("px");
        if (image.clientWidth>(x-150) || image.clientHeight>(y-150)) {
            if (image.clientWidth>(x-150)) {
                image.style.width = (x-150).toString().concat('px');
                image.style.height = "auto";
            }
            if (image.clientHeight>(y-150)) {
                image.style.height = (y-150).toString().concat('px');
                image.style.width = "auto";
            }
        changeSize.style.left = ((image.clientWidth+x)/2-35).toString().concat("px");
        changeSize.style.display = "block";
        }
    }
    if (newImage === 'none') {
        image.src = "none";
        image.style.display = "none";
        resetImage.style.display = "none";
        changeSize.style.display = "none";
    }
}


function changeSizeImage() {
    var image = document.getElementById('showImage');
    image.style.position = "absolute";
    image.style.top = (image.parentNode.scrollTop+10).toString().concat("px");
    image.style.left = "20px";
    image.style.right = "20px";
    image.style.width = "auto";
    image.style.height = "auto";
    document.getElementById('changeSize').style.display = "none";
    document.getElementById('resetImage').style.height = Math.max(document.getElementById('galleryTable').clientHeight,image.naturalHeight+image.parentNode.scrollTop+20).toString().concat("px");
    document.getElementById('resetImage').style.width = Math.max(document.documentElement.clientWidth-20,image.naturalWidth+20).toString().concat("px");
}