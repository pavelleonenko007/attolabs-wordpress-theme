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

		console.log(this.options.filter((option) => option.selected));
	}

	/**
	 * @private
	 */
	setupHTML() {
		const selectedOption = this.options.filter((option) => option.selected);
		const options = this.options.map((option) => {
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
				<span data-select="selected" class="select-head__selected">${
					selectedOption[0].textContent
				}</span>
				<svg data-select="icon" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none" class="custom-select__icon">
					<path d="M5 10L2 1L8 1L5 10Z" fill="#fff"/>
				</svg>
			</div>
			<ul class="custom-select__options" data-select="list">${options.join('')}</ul>
		</div>`;

		this.select.insertAdjacentHTML('afterend', html);

		this.customSelect = this.select.nextElementSibling;
		this.optionsList = this.customSelect.querySelector('[data-select="list"]');
		this.customOptions = Array.from(
			this.optionsList.querySelectorAll('[data-select="option"]')
		);
		this.selectedOptionElement = this.customSelect.querySelector(
			'[data-select="selected"]'
		);
		this.icon = this.customSelect.querySelector('[data-select="icon"]');
	}

	/**
	 * @private
	 * @returns number
	 */
	getSelectedCustomOptionIndex() {
		return this.customOptions.findIndex((option) =>
			option.classList.contains('custom-option--selected')
		);
	}

	/**
	 * @private
	 * @returns number
	 */
	getFocusedCustomOptionIndex() {
		return this.customOptions.findIndex(
			(option) => document.activeElement === option
		);
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
		this.customSelect.addEventListener(
			'keydown',
			this.handleKeydown.bind(this)
		);
		document.body.addEventListener('click', this.handleClick.bind(this));
		this.customSelect.addEventListener('blur', this.handleBlur.bind(this));
		this.customOptions.forEach((option) =>
			option.addEventListener('blur', this.handleBlur.bind(this))
		);
	}

	open() {
		if (this.isOpen) return;

		this.customSelect.classList.add('custom-select--active');

		this.customOptions.forEach((option) => {
			option.setAttribute('tabindex', '0');
		});

		this.customOptions[this.getSelectedCustomOptionIndex()].focus();

		this.isOpen = true;

		return this;
	}

	close() {
		if (!this.isOpen) return;

		this.customSelect.classList.remove('custom-select--active');

		this.customOptions.forEach((option) => {
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

		const selectedOption = this.options.find(
			(option) => option.value === value
		);

		this.selectedOptionElement.textContent = selectedOption.textContent;

		this.customOptions.forEach((option) => {
			const optionValue = option.dataset.value;
			option.classList.toggle('custom-option--selected', optionValue === value);
		});

		this.close();
	}

	getValue() {}
}

export const initCustomSelects = () => {
	const customSelects = document.querySelectorAll(CUSTOM_SELECT_SELECTOR);
	customSelects.forEach((select) => {
		new Select(select);
	});
};
