/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/components/cookieDialog.js":
/*!****************************************!*\
  !*** ./src/components/cookieDialog.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initCookieDialog: () => (/* binding */ initCookieDialog)
/* harmony export */ });
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils */ "./src/utils/index.js");

const COOKIE_DIALOG_SELECTOR = '[data-element="cookie"]';
const COOKIE_ACCEPT_BUTTON_SELECTOR = '[data-button="accept"]';
const initCookieDialog = () => {
  const cookie = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.getCookie)('terms-of-use');
  if (cookie && cookie === 'accept') return;
  const cookieDialog = document.querySelector(COOKIE_DIALOG_SELECTOR);
  if (!cookieDialog) return;
  const acceptButton = cookieDialog.querySelector(COOKIE_ACCEPT_BUTTON_SELECTOR);
  cookieDialog.style.display = 'flex';
  acceptButton.onclick = event => {
    event.preventDefault();
    const secondsInOneDay = 24 * 60 * 60;
    (0,_utils__WEBPACK_IMPORTED_MODULE_0__.setCookie)('terms-of-use', 'accept', {
      'max-age': 2 * secondsInOneDay
    });
    cookieDialog.style.display = 'none';
  };
};

/***/ }),

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

/***/ "./src/components/inputFormFields.js":
/*!*******************************************!*\
  !*** ./src/components/inputFormFields.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initFileInputs: () => (/* binding */ initFileInputs),
/* harmony export */   initInputFormFields: () => (/* binding */ initInputFormFields)
/* harmony export */ });
const initInputFormFields = () => {
  document.querySelectorAll('[required]').forEach(input => {
    input.addEventListener('change', event => {
      const fieldParenNode = input.closest('.input-keeper');
      if (fieldParenNode) {
        fieldParenNode.classList.remove('input-keeper--error');
        input.closest('form')?.classList.remove('form-error');
      }
    });
  });
};
const initFileInputs = () => {
  const fileInputs = document.querySelectorAll('input[type="file"]');
  fileInputs.forEach(fileInput => {
    fileInput.addEventListener('change', event => {
      const isEmpty = fileInput.files.length === 0;
      const fieldParentNode = fileInput.closest('.input-keeper');
      if (!fieldParentNode) return;
      const linkInput = fieldParentNode.querySelector('input[name="link"]');
      if (!linkInput) return;
      if (!isEmpty) {
        linkInput.removeAttribute('required');
      } else {
        linkInput.setAttribute('required', '');
      }
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
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils */ "./src/utils/index.js");

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
    const isValid = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.validateForm)(form);
    const submitButton = form.querySelector('[type="submit"]');
    const buttonText = submitButton.value;
    submitButton.value = 'Processing...';
    if (!isValid) {
      submitButton.value = buttonText;
      return;
    }
    const formData = new FormData(form);
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
  const changeHandler = async event => {
    event.preventDefault();
    const form = event.target.closest('form');
    const formId = form.getAttribute('id');
    const formData = new FormData(form);
    const resetButtons = document.querySelectorAll(`button[type="reset"][form="${formId}"]`);
    const submitButtons = document.querySelectorAll(`button[type="submit"][form="${formId}"]`);
    const isEmptyForm = !formData.has('department') && !formData.has('office') && !formData.has('employment_type');
    resetButtons.forEach(resetButton => resetButton.classList.toggle('clear-filters--active', !isEmptyForm));
    submitButtons.forEach(submitButton => {
      if (isEmptyForm) {
        submitButton.setAttribute('disabled', '');
      } else {
        submitButton.removeAttribute('disabled');
      }
    });
  };

  /**
   *
   * @param {Event} event
   */
  const formHandler = async event => {
    event.preventDefault();
    const form = event.target.closest('form');
    const formId = form.getAttribute('id');
    const formData = new FormData(form);
    const resetButtons = document.querySelectorAll(`button[type="reset"][form="${formId}"]`);
    const submitButtons = document.querySelectorAll(`button[type="submit"][form="${formId}"]`);
    const positions = Array.from(document.querySelectorAll(POSITION_ELEMENT_SELECTOR));
    const isEmptyForm = !formData.has('department') && !formData.has('office') && !formData.has('employment_type');
    resetButtons.forEach(resetButton => resetButton.classList.toggle('clear-filters--active', !isEmptyForm));
    submitButtons.forEach(submitButton => {
      if (isEmptyForm) {
        submitButton.setAttribute('disabled', '');
      } else {
        submitButton.removeAttribute('disabled');
      }
    });
    if (event.type === 'change') return;
    positions.forEach(positionNode => {
      const {
        department,
        office,
        employment_type
      } = positionNode.dataset;
      const offices = office.split(',');
      const departmentPassed = !formData.has('department') || department === formData.get('department');
      const officePassed = !formData.has('office') || offices.includes(formData.get('office'));
      const employmentPassed = !formData.has('employment_type') || employment_type === formData.get('employment_type');
      if (departmentPassed && officePassed && employmentPassed) {
        positionNode.style.display = 'flex';
      } else {
        positionNode.style.display = 'none';
      }
    });
    if (formId === 'job-filter-form-mobile') {
      document.documentElement.classList.remove('filteropened');
    }
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
    form.addEventListener('submit', formHandler);
    form.addEventListener('change', formHandler);
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

/***/ "./src/components/selectField.js":
/*!***************************************!*\
  !*** ./src/components/selectField.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initCustomSelects: () => (/* binding */ initCustomSelects)
/* harmony export */ });
const CUSTOM_SELECT_SELECTOR = '[data-field="select"]';
class Select {
  /**
   *
   * @param {HTMLSelectElement} select
   */
  constructor(select) {
    this.select = select;
    if (!select) {
      console.warn('Please provide select element as argument');
      return;
    }
    this.select.style.display = 'none';
    this.value = this.select.value;
    this.options = Array.from(this.select.options);
    this.isOpen = false;
    this.canBlur = false;
    this.setupHTML();
    this.setEvents();
    console.log(this.options.filter(option => option.selected));
  }

  /**
   * @private
   */
  setupHTML() {
    const selectedOption = this.options.filter(option => option.selected);
    const options = this.options.map(option => {
      let classes = 'custom-select__option custom-option';
      if (option.selected) {
        classes += ' custom-option--selected';
      }
      return `<li data-select="option" data-value="${option.value}" class="${classes}">
				<span>${option.textContent}</span>
			</li>`;
    });
    const html = `<div tabindex="0" class="custom-select" data-select="field">
			<div class="custom-select__head select-head">
				<span data-select="selected" class="select-head__selected">${selectedOption[0].textContent}</span>
				<svg data-select="icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none" class="custom-select__icon">
					<path d="M5 10L2 1L8 1L5 10Z" fill="#fff"/>
				</svg>
			</div>
			<ul class="custom-select__options" data-select="list">${options.join('')}</ul>
		</div>`;
    this.select.insertAdjacentHTML('afterend', html);
    this.customSelect = this.select.nextElementSibling;
    this.optionsList = this.customSelect.querySelector('[data-select="list"]');
    this.customOptions = Array.from(this.optionsList.querySelectorAll('[data-select="option"]'));
    this.selectedOptionElement = this.customSelect.querySelector('[data-select="selected"]');
    this.icon = this.customSelect.querySelector('[data-select="icon"]');
  }

  /**
   * @private
   * @returns number
   */
  getSelectedCustomOptionIndex() {
    return this.customOptions.findIndex(option => option.classList.contains('custom-option--selected'));
  }

  /**
   * @private
   * @returns number
   */
  getFocusedCustomOptionIndex() {
    return this.customOptions.findIndex(option => document.activeElement === option);
  }
  handleKeydown(event) {
    console.log(event);
    if (event.keyCode === 27) {
      event.preventDefault();
      this.close();
      return;
    }
    if (event.keyCode === 38) {
      event.preventDefault();
      this.focus(this.getFocusedCustomOptionIndex() - 1);
    }
    if (event.keyCode === 40) {
      event.preventDefault();
      this.focus(this.getFocusedCustomOptionIndex() + 1);
    }
    if (event.keyCode === 32 || event.keyCode === 13) {
      event.preventDefault();
      const type = event.target.dataset.select;
      if (type === 'field') {
        this.isOpen ? this.close() : this.open();
        return;
      }
      if (type === 'option') {
        const value = event.target.dataset.value;
        this.selectValue(value);
        return;
      }
    }
  }
  handleClick(event) {
    const element = event.target.closest('[data-select]');
    if (!element) {
      this.close();
      return;
    }
    const type = element.dataset.select;
    if (type === 'field' || type === 'selected') {
      this.isOpen ? this.close() : this.open();
    }
    if (type === 'option') {
      const value = event.target.dataset.value;
      this.selectValue(value);
    }
  }
  handleBlur(event) {
    setTimeout(() => {
      if (!document.activeElement.closest('.custom-select')) {
        this.close();
      }
    }, 10);
  }
  setEvents() {
    this.customSelect.addEventListener('keydown', this.handleKeydown.bind(this));
    document.body.addEventListener('click', this.handleClick.bind(this));
    this.customSelect.addEventListener('blur', this.handleBlur.bind(this));
    this.customOptions.forEach(option => option.addEventListener('blur', this.handleBlur.bind(this)));
  }
  open() {
    if (this.isOpen) return;
    this.customSelect.classList.add('custom-select--active');
    this.customOptions.forEach(option => {
      option.setAttribute('tabindex', '0');
    });
    this.customOptions[this.getSelectedCustomOptionIndex()].focus();
    this.isOpen = true;
    return this;
  }
  close() {
    if (!this.isOpen) return;
    this.customSelect.classList.remove('custom-select--active');
    this.customOptions.forEach(option => {
      option.removeAttribute('tabindex');
    });
    this.isOpen = false;
    return this;
  }

  /**
   *
   * @param {number} index
   */
  focus(index) {
    if (!this.isOpen) return;
    let normalizedIndex = index;
    if (index >= this.customOptions.length) {
      normalizedIndex = 0;
    }
    if (index < 0) {
      normalizedIndex = this.customOptions.length - 1;
    }
    this.customOptions[normalizedIndex].focus();
  }
  selectValue(value = '') {
    this.select.value = value;
    this.value = value;
    const selectedOption = this.options.find(option => option.value === value);
    this.selectedOptionElement.textContent = selectedOption.textContent;
    this.customOptions.forEach(option => {
      const optionValue = option.dataset.value;
      option.classList.toggle('custom-option--selected', optionValue === value);
    });
    this.close();
  }
  getValue() {}
}
const initCustomSelects = () => {
  const customSelects = document.querySelectorAll(CUSTOM_SELECT_SELECTOR);
  customSelects.forEach(select => {
    new Select(select);
  });
};

/***/ }),

/***/ "./src/components/sliderForm.js":
/*!**************************************!*\
  !*** ./src/components/sliderForm.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initSliderForms: () => (/* binding */ initSliderForms)
/* harmony export */ });
/* harmony import */ var _utils__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../utils */ "./src/utils/index.js");

const SLIDER_FORM_SELECTOR = '[data-form="slider"]';
const initSliderForms = () => {
  const forms = document.querySelectorAll(SLIDER_FORM_SELECTOR);
  /**
   *
   * @param {Event} event
   */
  const handleForm = async event => {
    event.preventDefault();
    const form = event.target.closest('form');
    const submitButton = form.querySelector('[type="submit"]');
    const submitButtonText = submitButton.value;
    const successMessageElement = form.parentNode.querySelector('.success-message');
    const failMessageElement = form.parentNode.querySelector('.w-form-fail');
    submitButton.value = 'Processing...';
    const isValid = (0,_utils__WEBPACK_IMPORTED_MODULE_0__.validateForm)(form);
    if (!isValid) {
      const firstInvalidInput = form.querySelector('.input-keeper--error');
      const invalidSlide = firstInvalidInput.closest('.w-slide');
      const allSlides = Array.from(form.querySelectorAll('.w-slide'));
      const invalidSlideIndex = allSlides.indexOf(invalidSlide);
      const sliderNavLinks = form.querySelectorAll('.w-slider-dot');
      $(sliderNavLinks[invalidSlideIndex]).trigger('click');
      submitButton.value = submitButtonText;
      return;
    }
    const formData = new FormData(form);
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
      form.style.display = 'none';
      successMessageElement.style.display = 'block';
    } catch (error) {
      console.error(error);
      form.style.display = 'none';
      failMessageElement.style.display = 'block';
    } finally {
      setTimeout(() => {
        form.reset();
        form.style.display = null;
        successMessageElement.style.display = null;
        failMessageElement.style.display = null;
        submitButton.value = submitButtonText;
      }, 3000);
    }
  };

  /**
   *
   * @param {HTMLFormElement} form
   */
  const setSlidesLogic = form => {
    const slides = form.querySelectorAll('.form-slide');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const $slider = $(entry.target).closest('.form-slider');
          $slider.removeClass('first-slide');
          $slider.removeClass('last-slide');
          if ($(entry.target).next().is(':last-child')) {
            $slider.addClass('last-slide');
          } else if ($(entry.target).is(':first-child')) {
            $slider.addClass('first-slide');
          }
        }
      });
    }, {
      threshold: 0.1,
      margin: '0px'
    });
    slides.forEach(slide => {
      observer.observe(slide);
    });
  };
  forms.forEach(form => {
    form.addEventListener('submit', handleForm);
    setSlidesLogic(form);
  });
};

/***/ }),

/***/ "./src/utils/index.js":
/*!****************************!*\
  !*** ./src/utils/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   deleteCookie: () => (/* binding */ deleteCookie),
/* harmony export */   getCookie: () => (/* binding */ getCookie),
/* harmony export */   refreshWebflowScripts: () => (/* binding */ refreshWebflowScripts),
/* harmony export */   setCookie: () => (/* binding */ setCookie),
/* harmony export */   validateForm: () => (/* binding */ validateForm)
/* harmony export */ });
const refreshWebflowScripts = () => {
  Webflow.destroy();
  Webflow.ready();
  Webflow.require('ix2').init();
  document.dispatchEvent(new Event('readystatechange'));
};
class FormValidator {
  static isEmail(input) {
    const regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(input.value);
  }
  static isEmpty(input) {
    return !input.value;
  }
  static isChecked(input) {
    return input.checked;
  }
}
const validateForm = form => {
  const requiredInputs = form.querySelectorAll('[required]');
  let isValid = true;
  for (let i = 0; i < requiredInputs.length; i++) {
    const input = requiredInputs[i];
    if (input.type === 'checkbox' || input.type === 'radio') {
      if (!FormValidator.isChecked(input)) {
        input.closest('.input-keeper')?.classList.add('input-keeper--error');
        isValid = false;
      }
      continue;
    }
    if (input.type === 'email') {
      if (FormValidator.isEmpty(input) || !FormValidator.isEmail(input)) {
        input.closest('.input-keeper')?.classList.add('input-keeper--error');
        isValid = false;
      }
      continue;
    }
    if (FormValidator.isEmpty(input)) {
      input.closest('.input-keeper')?.classList.add('input-keeper--error');
      isValid = false;
    }
  }
  form.classList.toggle('form-error', !isValid);
  return isValid;
};
function getCookie(name) {
  let matches = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
function setCookie(name, value, options = {}) {
  options = {
    path: '/',
    ...options
  };
  if (options.expires instanceof Date) {
    options.expires = options.expires.toUTCString();
  }
  let updatedCookie = encodeURIComponent(name) + '=' + encodeURIComponent(value);
  for (let optionKey in options) {
    updatedCookie += '; ' + optionKey;
    let optionValue = options[optionKey];
    if (optionValue !== true) {
      updatedCookie += '=' + optionValue;
    }
  }
  document.cookie = updatedCookie;
}
function deleteCookie(name) {
  setCookie(name, '', {
    'max-age': -1
  });
}

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
/* harmony import */ var _components_cookieDialog__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/cookieDialog */ "./src/components/cookieDialog.js");
/* harmony import */ var _components_copyToClipboardButton__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/copyToClipboardButton */ "./src/components/copyToClipboardButton.js");
/* harmony import */ var _components_inputFormFields__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/inputFormFields */ "./src/components/inputFormFields.js");
/* harmony import */ var _components_jobContactForm__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/jobContactForm */ "./src/components/jobContactForm.js");
/* harmony import */ var _components_positionsFilterForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/positionsFilterForm */ "./src/components/positionsFilterForm.js");
/* harmony import */ var _components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/projectsFilterForm */ "./src/components/projectsFilterForm.js");
/* harmony import */ var _components_selectField__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/selectField */ "./src/components/selectField.js");
/* harmony import */ var _components_sliderForm__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/sliderForm */ "./src/components/sliderForm.js");
/* harmony import */ var _styles_index_scss__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./styles/index.scss */ "./src/styles/index.scss");









window.addEventListener('load', () => {
  (0,_components_cookieDialog__WEBPACK_IMPORTED_MODULE_0__.initCookieDialog)();
  (0,_components_selectField__WEBPACK_IMPORTED_MODULE_6__.initCustomSelects)();
  (0,_components_inputFormFields__WEBPACK_IMPORTED_MODULE_2__.initInputFormFields)();
  (0,_components_inputFormFields__WEBPACK_IMPORTED_MODULE_2__.initFileInputs)();
  (0,_components_sliderForm__WEBPACK_IMPORTED_MODULE_7__.initSliderForms)();
  (0,_components_projectsFilterForm__WEBPACK_IMPORTED_MODULE_5__.initProjectsFilterForm)();
  (0,_components_positionsFilterForm__WEBPACK_IMPORTED_MODULE_4__.initPositionsFilterForm)();
  (0,_components_jobContactForm__WEBPACK_IMPORTED_MODULE_3__.initJobContactForm)();
  (0,_components_copyToClipboardButton__WEBPACK_IMPORTED_MODULE_1__.initCopyToClipboardButtons)();
});
})();

/******/ })()
;
//# sourceMappingURL=bundle.js.map