/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/components/copyToClipboardButton.js":
/*!*************************************************!*\
  !*** ./src/components/copyToClipboardButton.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initCopyToClipboardButtons: () => (/* binding */ initCopyToClipboardButtons)
/* harmony export */ });
const COPY_TO_CLIPBOARD_BUTTON_SELECTOR = '[data-button="copy"]';
const initCopyToClipboardButtons = () => {
  const buttons = document.querySelectorAll(COPY_TO_CLIPBOARD_BUTTON_SELECTOR);
  buttons.forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();
      const textNode = button.querySelector('div:first-child');
      const prevText = textNode.textContent;
      navigator.clipboard.writeText(window.location.href).then(() => {
        button.textContent = 'Copied to clipboard!';
        setTimeout(() => {
          textNode.textContent = prevText;
        }, 300);
      });
    });
  });
};

/***/ }),

/***/ "./src/components/jobContactForm.js":
/*!******************************************!*\
  !*** ./src/components/jobContactForm.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initJobContactForm: () => (/* binding */ initJobContactForm)
/* harmony export */ });
const JOB_CONTACT_FORM_SELECTOR = '[data-form="job-contact"]';
const initJobContactForm = () => {
  const forms = document.querySelectorAll(JOB_CONTACT_FORM_SELECTOR);
  /**
   *
   * @param {Event} event
   */
  const submitHandler = async event => {
    event.preventDefault();
    const form = event.target.closest('form');
    const formData = new FormData(form);
    const submitButton = form.querySelector('[type="submit"]');
    const buttonText = submitButton.value;
    try {
      const response = await fetch(ATTO.AJAX_URL, {
        method: 'POST',
        body: formData
      });
      const {
        data,
        success
      } = await response.json();
      if (!success) {
        throw new Error(data.message);
      }
      submitButton.value = data.message;
    } catch (error) {
      console.error(error);
      submitButton.value = error;
    } finally {
      setTimeout(() => {
        submitButton.value = buttonText;
      }, 3000);
    }
  };
  forms.forEach(form => form.addEventListener('submit', submitHandler));
};

/***/ }),

/***/ "./src/components/positionsFilterForm.js":
/*!***********************************************!*\
  !*** ./src/components/positionsFilterForm.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initPositionsFilterForm: () => (/* binding */ initPositionsFilterForm)
/* harmony export */ });
const POSITION_FORM_SELECTOR = '[data-form="filter-positions"]';
const POSITION_ELEMENT_SELECTOR = '.jobs-item';
const initPositionsFilterForm = () => {
  const forms = document.querySelectorAll(POSITION_FORM_SELECTOR);
  /**
   *
   * @param {Event} event
   */
  const formHandler = async event => {
    event.preventDefault();
    const form = event.target.closest('form');
    const formData = new FormData(form);
    const positions = Array.from(document.querySelectorAll(POSITION_ELEMENT_SELECTOR));
    const resetButton = form.querySelector('button[type="reset"]');
    const isEmptyForm = !formData.has('department') && !formData.has('office') && !formData.has('schedule');
    positions.forEach(positionNode => {
      const {
        department,
        office,
        schedule
      } = positionNode.dataset;
      const offices = office.split(',');
      const departmentPassed = !formData.has('department') || department === formData.get('department');
      const officePassed = !formData.has('office') || offices.includes(formData.get('office'));
      const schedulePassed = !formData.has('schedule') || schedule === formData.get('schedule');
      if (departmentPassed && officePassed && schedulePassed) {
        positionNode.style.display = 'flex';
      } else {
        positionNode.style.display = 'none';
      }
    });
    resetButton.classList.toggle('clear-filters--active', !isEmptyForm);
  };
  const resetHandler = event => {
    var _form$dataset$formTri;
    const form = event.target.closest('form');
    const trigger = (_form$dataset$formTri = form.dataset.formTrigger) !== null && _form$dataset$formTri !== void 0 ? _form$dataset$formTri : 'submit';
    form.reset();
    setTimeout(() => {
      form.dispatchEvent(new Event(trigger));
    }, 100);
  };
  forms.forEach(form => {
    var _form$dataset$formTri2;
    const trigger = (_form$dataset$formTri2 = form.dataset.formTrigger) !== null && _form$dataset$formTri2 !== void 0 ? _form$dataset$formTri2 : 'submit';
    form.addEventListener(trigger, formHandler);
    form.addEventListener('reset', resetHandler);
  });
};

/***/ }),

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
/* harmony import */ var _components_copyToClipboardButton__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/copyToClipboardButton */ "./src/components/copyToClipboardButton.js");
/* harmony import */ var _components_jobContactForm__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/jobContactForm */ "./src/components/jobContactForm.js");
/* harmony import */ var _components_positionsFilterForm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/positionsFilterForm */ "./src/components/positionsFilterForm.js");
/* harmony import */ var _components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/projectsFilterForm */ "./src/components/projectsFilterForm.js");
/* harmony import */ var _styles_index_scss__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./styles/index.scss */ "./src/styles/index.scss");





window.addEventListener('load', () => {
  (0,_components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_3__.initProjectsFilterForm)();
  (0,_components_positionsFilterForm__WEBPACK_IMPORTED_MODULE_2__.initPositionsFilterForm)();
  (0,_components_jobContactForm__WEBPACK_IMPORTED_MODULE_1__.initJobContactForm)();
  (0,_components_copyToClipboardButton__WEBPACK_IMPORTED_MODULE_0__.initCopyToClipboardButtons)();
});
})();

/******/ })()
;
//# sourceMappingURL=bundle.js.map