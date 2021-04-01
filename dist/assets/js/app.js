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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/assets/js/app.js":
/*!******************************!*\
  !*** ./src/assets/js/app.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("console.log('file 1');\r\n\r\n\r\n// table ------------------\r\nfunction FixTable(table) {\r\n\tvar inst = this;\r\n\tthis.table  = table;\r\n\r\n\t$('tr > th',$(this.table)).each(function(index) {\r\n\t\tvar div_fixed = $('<div/>').addClass('fixtable-fixed');\r\n\t\tvar div_relat = $('<div/>').addClass('fixtable-relative');\r\n\t\tdiv_fixed.html($(this).html());\r\n\t\tdiv_relat.html($(this).html());\r\n\t\t$(this).html('').append(div_fixed).append(div_relat);\r\n\t\t$(div_fixed).hide();\r\n\t});\r\n\r\n\tthis.StyleColumns();\r\n\tthis.FixColumns();\r\n\r\n\t$(window).scroll(function(){\r\n\t\tinst.FixColumns()\r\n\t}).resize(function(){\r\n\t\tinst.StyleColumns()\r\n\t});\r\n}\r\n\r\nFixTable.prototype.StyleColumns = function() {\r\n\tvar inst = this;\r\n\t$('tr > th', $(this.table)).each(function(){\r\n\t\tvar div_relat = $('div.fixtable-relative', $(this));\r\n\t\tvar th = $(div_relat).parent('th');\r\n\t\t$('div.fixtable-fixed', $(this)).css({\r\n\t\t\t'width': $(th).outerWidth(true) - parseInt($(th).css('border-left-width')) + 'px',\r\n\t\t\t'height': $(th).outerHeight(true) + 'px',\r\n\t\t\t'left': $(div_relat).offset().left - parseInt($(th).css('padding-left')) + 'px',\r\n\t\t\t'padding-top': $(div_relat).offset().top - $(inst.table).offset().top + 'px',\r\n\t\t\t'padding-left': $(th).css('padding-left'),\r\n\t\t\t'padding-right': $(th).css('padding-right')\r\n\t\t});\r\n\t});\r\n}\r\n\r\nFixTable.prototype.FixColumns = function() {\r\n\tvar inst = this;\r\n\tvar show = false;\r\n\tvar s_top = $(window).scrollTop();\r\n\tvar h_top = $(inst.table).offset().top;\r\n\r\n\tif (s_top < (h_top + $(inst.table).height() - $(inst.table).find('.fixtable-fixed').outerHeight()) && s_top > h_top) {\r\n\t\tshow = true;\r\n\t}\r\n\r\n\t$('tr > th > div.fixtable-fixed', $(this.table)).each(function(){\r\n\t\tshow ? $(this).show() : $(this).hide()\r\n\t});\r\n}\r\n\r\n$(document).ready(function(){\r\n\t$('.fixtable').each(function() {\r\n\t\tnew FixTable(this);\r\n\t});\r\n});\r\n\r\n\r\n\r\n// ========================\r\n\r\n    /* функция добавления ведущих нулей */\r\n    /* (если число меньше десяти, перед числом добавляем ноль) */\r\n    function zero_first_format(value)\r\n    {\r\n        if (value < 10)\r\n        {\r\n            value='0'+value;\r\n        }\r\n        return value;\r\n    }\r\n\r\n    /* функція для отримання дати та часу */\r\n    function date_time()\r\n    {\r\n        var current_datetime = new Date();\r\n        var day = zero_first_format(current_datetime.getDate());\r\n        var month = zero_first_format(current_datetime.getMonth()+1);\r\n        var year = current_datetime.getFullYear();\r\n        var hours = zero_first_format(current_datetime.getHours());\r\n        var minutes = zero_first_format(current_datetime.getMinutes());\r\n        var seconds = zero_first_format(current_datetime.getSeconds());\r\n\r\n        return day+\".\"+month+\".\"+year+\" \"+hours+\":\"+minutes+\":\"+seconds;\r\n    }\r\n\r\n    /* выводим текущую дату и время на сайт в блок с id \"current_date_time_block\" */\r\n    document.getElementById('loads__head_time_block').innerHTML = date_time();\r\n\r\n\r\n    document.getElementById('loads__head-refresh').window.location.reload();\r\n\r\n// book info ---------------------\r\n// function openNav() {\r\n//     document.getElementById(\"mySidenav\").style.width = \"250px\";\r\n//   }\r\n\r\n//   function closeNav() {\r\n//     document.getElementById(\"mySidenav\").style.width = \"0\";\r\n//   }\r\n\r\n\r\n\r\n// burger menu ---трансформація бутербродного меню в хрестик і назад\r\n$(function () {\r\n\tdocument.querySelector(\".menu-icon-wrapper\").onclick = function () {\r\n\tdocument.querySelector(\".menu-icon\").classList.toggle(\"menu-icon-active\");\r\n\t};\r\n});\r\n// виїзд меню при натисканні на іконку бутербодного меню\r\n$(function () {\r\n\t$(\".menu-icon-wrapper\").on(\"click\", function () {\r\n\t$(\".menu-list\").slideToggle(300, function () {\r\n\t\tif ($(this).css(\"display\") === \"block\") {\r\n\t\t// $(this).removeAttr(\"style\");\r\n\t\t}\r\n\t});\r\n\t});\r\n});\n\n//# sourceURL=webpack:///./src/assets/js/app.js?");

/***/ }),

/***/ "./src/assets/js/file2.js":
/*!********************************!*\
  !*** ./src/assets/js/file2.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("console.log('file 2');\r\n\n\n//# sourceURL=webpack:///./src/assets/js/file2.js?");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./src/assets/js/app.js ./src/assets/js/file2.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! K:\\PROGRAMMING\\GitHub\\UnitedTransportBoard\\src\\assets\\js\\app.js */\"./src/assets/js/app.js\");\nmodule.exports = __webpack_require__(/*! K:\\PROGRAMMING\\GitHub\\UnitedTransportBoard\\src\\assets\\js\\file2.js */\"./src/assets/js/file2.js\");\n\n\n//# sourceURL=webpack:///multi_./src/assets/js/app.js_./src/assets/js/file2.js?");

/***/ })

/******/ });