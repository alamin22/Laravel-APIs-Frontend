/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'react-dom'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module './components/App'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'react/jsx-runtime'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
 // import App component

 // change the getElementId from example to app 
// render App component instead of Example



if (document.getElementById('root')) {
  Object(function webpackMissingModule() { var e = new Error("Cannot find module 'react-dom'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())( /*#__PURE__*/Object(function webpackMissingModule() { var e = new Error("Cannot find module 'react/jsx-runtime'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(Object(function webpackMissingModule() { var e = new Error("Cannot find module './components/App'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()), {}), document.getElementById('root'));
}

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n8 │ @import '~bootstrap/scss/bootstrap';\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  resources\\sass\\app.scss 8:9  root stylesheet\n    at processResult (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\webpack\\lib\\NormalModule.js:758:19)\n    at C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\webpack\\lib\\NormalModule.js:860:5\n    at C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\sass-loader\\dist\\index.js:54:7\n    at Function.call$2 (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\sass\\sass.dart.js:99281:16)\n    at render_closure1.call$2 (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\sass\\sass.dart.js:84834:12)\n    at _RootZone.runBinary$3$3 (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\sass\\sass.dart.js:29620:18)\n    at _FutureListener.handleError$1 (C:\\xampp\\htdocs\\zepto-apps-frontend\\node_modules\\sass\\sass.dart.js:28140:21)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"](0, {}, __webpack_require__);
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/sass/app.scss"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;