import { validateForm } from '../utils';

const SLIDER_FORM_SELECTOR = '[data-form="slider"]';

export const initSliderForms = () => {
	const forms = document.querySelectorAll(SLIDER_FORM_SELECTOR);

	console.log(forms);

	/**
	 *
	 * @param {Event} event
	 */
	const handleForm = async (event) => {
		event.preventDefault();
		const form = event.target.closest('form');
		const submitButton = form.querySelector('[type="submit"]');
		const submitButtonText = submitButton.value;

		const successMessageElement = form.parentNode.querySelector('.success-message');
		const failMessageElement = form.parentNode.querySelector('.w-form-fail');

		console.log({ successMessageElement, failMessageElement });

		submitButton.value = 'Processing...';

		const isValid = validateForm(form);

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
				body: formData,
			});

			const { data, success } = await response.json();

			console.log(data);

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

	forms.forEach((form) => {
		form.addEventListener('submit', handleForm);
	});
};
