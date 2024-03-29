const JOB_CONTACT_FORM_SELECTOR = '[data-form="job-contact"]';

export const initJobContactForm = () => {
	const forms = document.querySelectorAll(JOB_CONTACT_FORM_SELECTOR);
	/**
	 *
	 * @param {Event} event
	 */
	const submitHandler = async (event) => {
		event.preventDefault();
		const form = event.target.closest('form');
		const formData = new FormData(form);

		const submitButton = form.querySelector('[type="submit"]');
		const buttonText = submitButton.value;

		try {
			const response = await fetch(ATTO.AJAX_URL, {
				method: 'POST',
				body: formData,
			});

			const { data, success } = await response.json();

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

	forms.forEach((form) => form.addEventListener('submit', submitHandler));
};