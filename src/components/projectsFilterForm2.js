const POSITION_FORM_SELECTOR = '[data-form="filter-projects"]';

export const initProjectsFilterForm = () => {
	const forms = document.querySelectorAll(POSITION_FORM_SELECTOR);
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

		const isEmptyForm = !formData.has('services[]') && !formData.has('industries[]');

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

		try {
			const response = await fetch(ATTO.AJAX_URL, {
				method: 'POST',
				body: formData,
			});

			const json = await response.json();

			if (!json.success) {
				throw new Error(json.data.message);
			}

			const projectsContainer = document.querySelector('.projects-container');
			const projectsCounter = document.querySelector('[data-filter="counter"]');

			projectsContainer.innerHTML = json.data.html;
			projectsCounter.textContent = json.data.count;
		} catch (error) {
			console.error(error);
		} finally {
			if (formId === 'projects-filter-form-mob') {
				document.documentElement.classList.remove('filteropened');
			}
		}
	};

	const resetHandler = (event) => {
		const form = event.target.closest('form');
		form.reset();
		setTimeout(() => {
			form.dispatchEvent(new Event('submit'));
		}, 100);
	};

	forms.forEach((form) => {
		form.addEventListener('submit', formHandler);
		form.addEventListener('change', formHandler);
		form.addEventListener('reset', resetHandler);
	});
};
