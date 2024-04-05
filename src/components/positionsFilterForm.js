const POSITION_FORM_SELECTOR = '[data-form="filter-positions"]';
const POSITION_ELEMENT_SELECTOR = '.jobs-item';

export const initPositionsFilterForm = () => {
	const forms = document.querySelectorAll(POSITION_FORM_SELECTOR);
	/**
	 *
	 * @param {Event} event
	 */
	const formHandler = async (event) => {
		event.preventDefault();
		const form = event.target.closest('form');
		const formData = new FormData(form);
		const positions = Array.from(
			document.querySelectorAll(POSITION_ELEMENT_SELECTOR)
		);
		const resetButton = form.querySelector('button[type="reset"]');
		const isEmptyForm =
			!formData.has('department') &&
			!formData.has('office') &&
			!formData.has('employment_type');

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

		resetButton.classList.toggle('clear-filters--active', !isEmptyForm);
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
		form.addEventListener(trigger, formHandler);
		form.addEventListener('reset', resetHandler);
	});
};
