/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/components/projectsFilterForm.js":
/*!**********************************************!*\
  !*** ./src/components/projectsFilterForm.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initProjectsFilterForm: () => (/* binding */ initProjectsFilterForm)
/* harmony export */ });
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils */ "./src/utils/index.js");

const initProjectsFilterForm = () => {
  const filterForm = document.getElementById('projects-filter-form');
  console.log(filterForm);
  if (!filterForm) return;

  /**
   *
   * @param {Event} event
   */
  const formHandler = async event => {
    event.preventDefault();
    const formData = new FormData(filterForm);
    let isEmptyForm = true;
    if (formData.has('services[]') || formData.has('industries[]')) {
      isEmptyForm = false;
    }
    filterForm.classList.toggle('form--active', !isEmptyForm);
    try {
      const response = await fetch(ATTO.AJAX_URL, {
        method: 'POST',
        body: formData
      });
      if (!response.ok) {
        throw new Error('Something goes wrong');
      }
      const data = await response.json();
      const projectsContainer = document.querySelector('.projects-container');
      const fieldsContainer = filterForm.querySelector('.form-filters-container');
      console.log(data);
      projectsContainer.innerHTML = data.data.projects;
      fieldsContainer.innerHTML = data.data['filter-form'];
      (0,_utils__WEBPACK_IMPORTED_MODULE_0__.refreshWebflowScripts)();
    } catch (error) {
      console.error(error);
    }
  };
  const resetHandler = async event => {
    event.preventDefault();
    filterForm.reset();
    filterForm.querySelectorAll('[type="checkbox"]').forEach(checkbox => {
      checkbox.checked = false;
      checkbox.removeAttribute('checked');
    });
    setTimeout(() => {
      filterForm.dispatchEvent(new Event('change'));
    }, 100);
  };
  filterForm.addEventListener('change', formHandler);
  filterForm.addEventListener('submit', formHandler);
  filterForm.addEventListener('reset', resetHandler);
};

/***/ }),

/***/ "./src/utils/index.js":
/*!****************************!*\
  !*** ./src/utils/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   refreshWebflowScripts: () => (/* binding */ refreshWebflowScripts)
/* harmony export */ });
const refreshWebflowScripts = () => {
  Webflow.destroy();
  Webflow.ready();
  Webflow.require('ix2').init();
  document.dispatchEvent(new Event('readystatechange'));
};

/***/ }),

/***/ "./src/styles/index.scss":
/*!*******************************!*\
  !*** ./src/styles/index.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/projectsFilterForm */ "./src/components/projectsFilterForm.js");
/* harmony import */ var _styles_index_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/index.scss */ "./src/styles/index.scss");


window.addEventListener('load', () => {
  (0,_components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_0__.initProjectsFilterForm)();
});
})();

/******/ })()
;
//# sourceMappingURL=bundle.js.map