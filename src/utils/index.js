export const refreshWebflowScripts = () => {
	Webflow.destroy();
	Webflow.ready();
	Webflow.require('ix2').init();
	document.dispatchEvent(new Event('readystatechange'));
};

class FormValidator {
	static isEmail(input) {
		return input.value.match(
			/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
		);
	}

	static isEmpty(input) {
		return !input.value;
	}

	static isChecked(input) {
		return input.checked;
	}
}

export const validateForm = (form) => {
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
			if (FormValidator.isEmpty(input) && !FormValidator.isEmail(input)) {
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
