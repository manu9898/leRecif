(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _js_custom_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/custom.js */ "./assets/js/custom.js");
/* harmony import */ var _js_custom_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_custom_js__WEBPACK_IMPORTED_MODULE_1__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

/***/ }),

/***/ "./assets/js/custom.js":
/*!*****************************!*\
  !*** ./assets/js/custom.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* animate efflects */

document.addEventListener("DOMContentLoaded", function () {
  var elementsToAnimate = document.querySelectorAll('.animated-element');
  window.addEventListener('scroll', function () {
    elementsToAnimate.forEach(function (element) {
      if (isInViewport(element)) {
        startAnimation(element);
      } else {
        stopAnimation(element);
      }
    });
  });
});
function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
}
function startAnimation(element) {
  element.classList.add('animate__animated', 'animate__heartBeat');
}
function stopAnimation(element) {
  element.classList.remove('animate__animated', 'animate__heartBeat');
}
document.addEventListener("DOMContentLoaded", function () {
  var scrollLinks = document.querySelectorAll('.smooth-scroll');
  scrollLinks.forEach(function (scrollLink) {
    scrollLink.addEventListener('click', smoothScroll);
  });
  function smoothScroll(e) {
    e.preventDefault();
    var targetId = this.getAttribute('href');
    var targetElement = document.querySelector(targetId);
    var currentPage = this.getAttribute('data-current-page');
    if (currentPage !== targetId.substring(1)) {
      var scrollOptions = {
        top: targetElement.offsetTop,
        behavior: 'smooth',
        duration: 1500
      };
      window.scrollTo(scrollOptions);
    }
  }
});

/* animate efflects */

/* readMore */

document.addEventListener('DOMContentLoaded', function () {
  var moreTextButtons = document.querySelectorAll('.moreText');
  moreTextButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      var truncatedText = this.parentElement.querySelector('.txtSecondDiv');

      // Toggle la classe 'truncatedText'
      truncatedText.classList.toggle('truncatedText');

      // Si le texte est tronqué, supprime le backgroundColor blanc
      if (truncatedText.classList.contains('truncatedText')) {
        truncatedText.style.backgroundColor = ''; // Supprime le backgroundColor
      } else {
        truncatedText.style.backgroundColor = 'white'; // Définit le backgroundColor à blanc
      }

      // Masque le lien "Lire la suite" après avoir cliqué
      this.style.display = 'none';

      // Empêche la propagation de l'événement au document global
      event.stopPropagation();
    });
  });

  // Ajoute un écouteur de clic sur tout le document
  document.addEventListener('click', function (event) {
    // Réinitialise le texte tronqué et le backgroundColor
    moreTextButtons.forEach(function (button) {
      var truncatedText = button.parentElement.querySelector('.txtSecondDiv');
      truncatedText.classList.add('truncatedText'); // Ajoute la classe 'truncatedText' pour tronquer le texte
      truncatedText.style.backgroundColor = ''; // Supprime le backgroundColor blanc
      button.style.display = 'block'; // Affiche à nouveau tous les boutons "Lire la suite"
    });
  });
});
/* end of readMore */

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_for-each_js-node_modules_core-js_modules_es_obj-7bb33f"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFLLENBQUNFLE9BQU8sR0FBRyxPQUFPLENBQUMsQ0FBQztJQUNwQyxDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDTixDQUFDLENBQUM7QUFDRjs7Ozs7Ozs7Ozs7O0FDeEdBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvY3VzdG9tLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLmNzcz8zZmJhIl0sInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogVGhpcyBmaWxlIHdpbGwgYmUgaW5jbHVkZWQgb250byB0aGUgcGFnZSB2aWEgdGhlIGltcG9ydG1hcCgpIFR3aWcgZnVuY3Rpb24sXG4gKiB3aGljaCBzaG91bGQgYWxyZWFkeSBiZSBpbiB5b3VyIGJhc2UuaHRtbC50d2lnLlxuICovXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xuaW1wb3J0ICcuL2pzL2N1c3RvbS5qcyc7XG5cbmNvbnNvbGUubG9nKCdUaGlzIGxvZyBjb21lcyBmcm9tIGFzc2V0cy9hcHAuanMgLSB3ZWxjb21lIHRvIEFzc2V0TWFwcGVyISDwn46JJyk7XG4iLCJcblxuLyogYW5pbWF0ZSBlZmZsZWN0cyAqL1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwiRE9NQ29udGVudExvYWRlZFwiLCBmdW5jdGlvbigpIHtcbiAgICBjb25zdCBlbGVtZW50c1RvQW5pbWF0ZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5hbmltYXRlZC1lbGVtZW50Jyk7XG5cbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24oKSB7XG4gICAgICAgIGVsZW1lbnRzVG9BbmltYXRlLmZvckVhY2goZnVuY3Rpb24oZWxlbWVudCkge1xuICAgICAgICAgICAgaWYgKGlzSW5WaWV3cG9ydChlbGVtZW50KSkge1xuICAgICAgICAgICAgICAgIHN0YXJ0QW5pbWF0aW9uKGVsZW1lbnQpO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBzdG9wQW5pbWF0aW9uKGVsZW1lbnQpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICB9KTtcbn0pO1xuXG5mdW5jdGlvbiBpc0luVmlld3BvcnQoZWxlbWVudCkge1xuICAgIGNvbnN0IHJlY3QgPSBlbGVtZW50LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xuICAgIHJldHVybiAoXG4gICAgICAgIHJlY3QudG9wID49IDAgJiZcbiAgICAgICAgcmVjdC5sZWZ0ID49IDAgJiZcbiAgICAgICAgcmVjdC5ib3R0b20gPD0gKHdpbmRvdy5pbm5lckhlaWdodCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xpZW50SGVpZ2h0KSAmJlxuICAgICAgICByZWN0LnJpZ2h0IDw9ICh3aW5kb3cuaW5uZXJXaWR0aCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xpZW50V2lkdGgpXG4gICAgKTtcbn1cblxuZnVuY3Rpb24gc3RhcnRBbmltYXRpb24oZWxlbWVudCkge1xuICAgIGVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnYW5pbWF0ZV9fYW5pbWF0ZWQnLCAnYW5pbWF0ZV9faGVhcnRCZWF0Jyk7XG59XG5cbmZ1bmN0aW9uIHN0b3BBbmltYXRpb24oZWxlbWVudCkge1xuICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSgnYW5pbWF0ZV9fYW5pbWF0ZWQnLCAnYW5pbWF0ZV9faGVhcnRCZWF0Jyk7XG59XG5cblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oKSB7XG4gICAgY29uc3Qgc2Nyb2xsTGlua3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc21vb3RoLXNjcm9sbCcpO1xuXG4gICAgc2Nyb2xsTGlua3MuZm9yRWFjaChzY3JvbGxMaW5rID0+IHtcbiAgICAgICAgc2Nyb2xsTGluay5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIHNtb290aFNjcm9sbCk7XG4gICAgfSk7XG5cbiAgICBmdW5jdGlvbiBzbW9vdGhTY3JvbGwoZSkge1xuXG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICBjb25zdCB0YXJnZXRJZCA9IHRoaXMuZ2V0QXR0cmlidXRlKCdocmVmJyk7XG4gICAgICAgIGNvbnN0IHRhcmdldEVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKHRhcmdldElkKTtcblxuXG4gICAgICAgIGNvbnN0IGN1cnJlbnRQYWdlID0gdGhpcy5nZXRBdHRyaWJ1dGUoJ2RhdGEtY3VycmVudC1wYWdlJyk7XG4gICAgICAgIGlmIChjdXJyZW50UGFnZSAhPT0gdGFyZ2V0SWQuc3Vic3RyaW5nKDEpKSB7XG4gICAgICAgICAgICBjb25zdCBzY3JvbGxPcHRpb25zID0ge1xuICAgICAgICAgICAgICAgIHRvcDogdGFyZ2V0RWxlbWVudC5vZmZzZXRUb3AsXG4gICAgICAgICAgICAgICAgYmVoYXZpb3I6ICdzbW9vdGgnLFxuICAgICAgICAgICAgICAgIGR1cmF0aW9uOiAxNTAwXG4gICAgICAgICAgICB9O1xuICAgICAgICAgICAgd2luZG93LnNjcm9sbFRvKHNjcm9sbE9wdGlvbnMpO1xuICAgICAgICB9XG4gICAgfVxufSk7XG5cbi8qIGFuaW1hdGUgZWZmbGVjdHMgKi9cblxuLyogcmVhZE1vcmUgKi9cblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uKCkge1xuICAgIHZhciBtb3JlVGV4dEJ1dHRvbnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubW9yZVRleHQnKTtcblxuICAgIG1vcmVUZXh0QnV0dG9ucy5mb3JFYWNoKGZ1bmN0aW9uKGJ1dHRvbikge1xuICAgICAgICBidXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xuICAgICAgICAgICAgdmFyIHRydW5jYXRlZFRleHQgPSB0aGlzLnBhcmVudEVsZW1lbnQucXVlcnlTZWxlY3RvcignLnR4dFNlY29uZERpdicpO1xuXG4gICAgICAgICAgICAvLyBUb2dnbGUgbGEgY2xhc3NlICd0cnVuY2F0ZWRUZXh0J1xuICAgICAgICAgICAgdHJ1bmNhdGVkVGV4dC5jbGFzc0xpc3QudG9nZ2xlKCd0cnVuY2F0ZWRUZXh0Jyk7XG5cbiAgICAgICAgICAgIC8vIFNpIGxlIHRleHRlIGVzdCB0cm9ucXXDqSwgc3VwcHJpbWUgbGUgYmFja2dyb3VuZENvbG9yIGJsYW5jXG4gICAgICAgICAgICBpZiAodHJ1bmNhdGVkVGV4dC5jbGFzc0xpc3QuY29udGFpbnMoJ3RydW5jYXRlZFRleHQnKSkge1xuICAgICAgICAgICAgICAgIHRydW5jYXRlZFRleHQuc3R5bGUuYmFja2dyb3VuZENvbG9yID0gJyc7IC8vIFN1cHByaW1lIGxlIGJhY2tncm91bmRDb2xvclxuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICB0cnVuY2F0ZWRUZXh0LnN0eWxlLmJhY2tncm91bmRDb2xvciA9ICd3aGl0ZSc7IC8vIETDqWZpbml0IGxlIGJhY2tncm91bmRDb2xvciDDoCBibGFuY1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAvLyBNYXNxdWUgbGUgbGllbiBcIkxpcmUgbGEgc3VpdGVcIiBhcHLDqHMgYXZvaXIgY2xpcXXDqVxuICAgICAgICAgICAgdGhpcy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuXG4gICAgICAgICAgICAvLyBFbXDDqmNoZSBsYSBwcm9wYWdhdGlvbiBkZSBsJ8OpdsOpbmVtZW50IGF1IGRvY3VtZW50IGdsb2JhbFxuICAgICAgICAgICAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgLy8gQWpvdXRlIHVuIMOpY291dGV1ciBkZSBjbGljIHN1ciB0b3V0IGxlIGRvY3VtZW50XG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xuICAgICAgICAvLyBSw6lpbml0aWFsaXNlIGxlIHRleHRlIHRyb25xdcOpIGV0IGxlIGJhY2tncm91bmRDb2xvclxuICAgICAgICBtb3JlVGV4dEJ1dHRvbnMuZm9yRWFjaChmdW5jdGlvbihidXR0b24pIHtcbiAgICAgICAgICAgIHZhciB0cnVuY2F0ZWRUZXh0ID0gYnV0dG9uLnBhcmVudEVsZW1lbnQucXVlcnlTZWxlY3RvcignLnR4dFNlY29uZERpdicpO1xuICAgICAgICAgICAgdHJ1bmNhdGVkVGV4dC5jbGFzc0xpc3QuYWRkKCd0cnVuY2F0ZWRUZXh0Jyk7IC8vIEFqb3V0ZSBsYSBjbGFzc2UgJ3RydW5jYXRlZFRleHQnIHBvdXIgdHJvbnF1ZXIgbGUgdGV4dGVcbiAgICAgICAgICAgIHRydW5jYXRlZFRleHQuc3R5bGUuYmFja2dyb3VuZENvbG9yID0gJyc7IC8vIFN1cHByaW1lIGxlIGJhY2tncm91bmRDb2xvciBibGFuY1xuICAgICAgICAgICAgYnV0dG9uLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snOyAvLyBBZmZpY2hlIMOgIG5vdXZlYXUgdG91cyBsZXMgYm91dG9ucyBcIkxpcmUgbGEgc3VpdGVcIlxuICAgICAgICB9KTtcbiAgICB9KTtcbn0pO1xuLyogZW5kIG9mIHJlYWRNb3JlICovIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImNvbnNvbGUiLCJsb2ciLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlbGVtZW50c1RvQW5pbWF0ZSIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJ3aW5kb3ciLCJmb3JFYWNoIiwiZWxlbWVudCIsImlzSW5WaWV3cG9ydCIsInN0YXJ0QW5pbWF0aW9uIiwic3RvcEFuaW1hdGlvbiIsInJlY3QiLCJnZXRCb3VuZGluZ0NsaWVudFJlY3QiLCJ0b3AiLCJsZWZ0IiwiYm90dG9tIiwiaW5uZXJIZWlnaHQiLCJkb2N1bWVudEVsZW1lbnQiLCJjbGllbnRIZWlnaHQiLCJyaWdodCIsImlubmVyV2lkdGgiLCJjbGllbnRXaWR0aCIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsInNjcm9sbExpbmtzIiwic2Nyb2xsTGluayIsInNtb290aFNjcm9sbCIsImUiLCJwcmV2ZW50RGVmYXVsdCIsInRhcmdldElkIiwiZ2V0QXR0cmlidXRlIiwidGFyZ2V0RWxlbWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJjdXJyZW50UGFnZSIsInN1YnN0cmluZyIsInNjcm9sbE9wdGlvbnMiLCJvZmZzZXRUb3AiLCJiZWhhdmlvciIsImR1cmF0aW9uIiwic2Nyb2xsVG8iLCJtb3JlVGV4dEJ1dHRvbnMiLCJidXR0b24iLCJldmVudCIsInRydW5jYXRlZFRleHQiLCJwYXJlbnRFbGVtZW50IiwidG9nZ2xlIiwiY29udGFpbnMiLCJzdHlsZSIsImJhY2tncm91bmRDb2xvciIsImRpc3BsYXkiLCJzdG9wUHJvcGFnYXRpb24iXSwic291cmNlUm9vdCI6IiJ9