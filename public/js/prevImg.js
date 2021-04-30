/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/prevImg.js ***!
  \*********************************/
document.getElementById('img').onchange = function (e) {
  var reader = new FileReader();
  reader.readAsDataURL(e.target.files[0]);

  reader.onload = function () {
    var prevImg = document.getElementById('prevImg');
    image = document.createElement('img');
    image.src = reader.result;
    image.className = "img-fluid";
    prevImg.innerHTML = '';
    prevImg.append(image);
  };
};
/******/ })()
;