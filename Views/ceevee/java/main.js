
var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('Pic2.jpg');
    if(mySrc === 'Pic2.jpg') {
      myImage.setAttribute ('src','test.jpg');
    } else {
      myImage.setAttribute ('src','Pic2.jpg');
    }
}