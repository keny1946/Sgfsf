/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/Admin/paper-dashboard.js.map":
/*!***************************************************!*\
  !*** ./resources/js/Admin/paper-dashboard.js.map ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module parse failed: Unexpected token (1:10)\nYou may need an appropriate loader to handle this file type, currently no loaders are configured to process this file. See https://webpack.js.org/concepts#loaders\n> {\"version\":3,\"sources\":[\"_site_dashboard_free/assets/js/dashboard-free.js\"],\"names\":[\"hexToRGB\",\"hex\",\"alpha\",\"r\",\"parseInt\",\"slice\",\"g\",\"b\",\"isWindows\",\"navigator\",\"platform\",\"indexOf\",\"$\",\"perfectScrollbar\",\"addClass\",\"transparent\",\"transparentDemo\",\"fixedTop\",\"navbar_initialized\",\"backgroundOrange\",\"sidebar_mini_active\",\"toggle_initialized\",\"seq\",\"delays\",\"durations\",\"seq2\",\"delays2\",\"durations2\",\"document\",\"ready\",\"length\",\"on\",\"this\",\"closest\",\"removeClass\",\"paperDashboard\",\"initMinimizeSidebar\",\"$navbar\",\"scroll_distance\",\"attr\",\"checkScrollForTransparentNavbar\",\"window\",\"parent\",\"each\",\"$this\",\"data_on_label\",\"data\",\"data_off_label\",\"bootstrapSwitch\",\"onText\",\"offText\",\"$toggle\",\"misc\",\"navbar_menu_visible\",\"setTimeout\",\"remove\",\"div\",\"appendTo\",\"click\",\"resize\",\"isExpanded\",\"find\",\"hasClass\",\"width\",\"showSidebarMessage\",\"simulateWindowResize\",\"setInterval\",\"dispatchEvent\",\"Event\",\"clearInterval\",\"message\",\"notify\",\"icon\",\"type\",\"timer\",\"placement\",\"from\",\"align\",\"e\",\"console\",\"log\"],\"mappings\":\"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\"}");

/***/ }),

/***/ 2:
/*!*********************************************************!*\
  !*** multi ./resources/js/Admin/paper-dashboard.js.map ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\XAMMPP\htdocs\PrototipoSgfs\resources\js\Admin\paper-dashboard.js.map */"./resources/js/Admin/paper-dashboard.js.map");


/***/ })

/******/ });