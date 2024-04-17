const POSITION_FORM_SELECTOR = '[data-form="filter-positions"]';
const POSITION_ELEMENT_SELECTOR = '.jobs-item';

export const initPositionsFilterForm = () => {
	const forms = document.querySelectorAll(POSITION_FORM_SELECTOR);
	/**
	 *
	 * @param {Event} event
	 */
	const changeHandler = async (event) => {
		event.preventDefault();
		const form = event.target.closest('form');
		const formId = form.getAttribute('id');
		const formData = new FormData(form);
		const resetButtons = document.querySelectorAll(
			`button[type="reset"][form="${formId}"]`
		);
		const submitButtons = document.querySelectorAll(
			`button[type="submit"][form="${formId}"]`
		);
		const isEmptyForm =
			!formData.has('department') &&
			!formData.has('office') &&
			!formData.has('employment_type');

		resetButtons.forEach((resetButton) =>
			resetButton.classList.toggle('clear-filters--active', !isEmptyForm)
		);

		submitButtons.forEach((submitButton) => {
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
	const formHandler = async (event) => {
		event.preventDefault();
		const form = event.target.closest('form');
		const formId = form.getAttribute('id');
		const formData = new FormData(form);
		const resetButtons = document.querySelectorAll(
			`button[type="reset"][form="${formId}"]`
		);
		const submitButtons = document.querySelectorAll(
			`button[type="submit"][form="${formId}"]`
		);
		const positions = Array.from(
			document.querySelectorAll(POSITION_ELEMENT_SELECTOR)
		);

		const isEmptyForm =
			!formData.has('department') &&
			!formData.has('office') &&
			!formData.has('employment_type');

		resetButtons.forEach((resetButton) =>
			resetButton.classList.toggle('clear-filters--active', !isEmptyForm)
		);

		submitButtons.forEach((submitButton) => {
			if (isEmptyForm) {
				submitButton.setAttribute('disabled', '');
			} else {
				submitButton.removeAttribute('disabled');
			}
		});

		if (event.type === 'change') return;

		positions.forEach((positionNode) => {
			const { department, office, employment_type } = positionNode.dataset;
			const offices = office.split(',');

			const departmentPassed =
				!formData.has('department') ||
				department === formData.get('department');
			const officePassed =
				!formData.has('office') || offices.includes(formData.get('office'));
			const employmentPassed =
				!formData.has('employment_type') ||
				employment_type === formData.get('employment_type');

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

	const resetHandler = (event) => {
		const form = event.target.closest('form');
		const trigger = form.dataset.formTrigger ?? 'submit';
		form.reset();
		setTimeout(() => {
			form.dispatchEvent(new Event(trigger));
		}, 100);
	};

	forms.forEach((form) => {
		const trigger = form.dataset.formTrigger ?? 'submit';
		form.addEventListener('submit', formHandler);
		form.addEventListener('change', formHandler);
		form.addEventListener('reset', resetHandler);
	});
};
