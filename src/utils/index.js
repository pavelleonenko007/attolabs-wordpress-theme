export const refreshWebflowScripts = () => {
	Webflow.destroy();
	Webflow.ready();
	Webflow.require('ix2').init();
	document.dispatchEvent(new Event('readystatechange'));
};

class FormValidator {
	static isEmail(input) {
		const regex =
			/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return regex.test(input.value);
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

export function getCookie(name) {
	let matches = document.cookie.match(
		new RegExp(
			'(?:^|; )' +
				name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') +
				'=([^;]*)'
		)
	);
	return matches ? decodeURIComponent(matches[1]) : undefined;
}

export function setCookie(name, value, options = {}) {
	options = {
		path: '/',
		...options,
	};

	if (options.expires instanceof Date) {
		options.expires = options.expires.toUTCString();
	}

	let updatedCookie =
		encodeURIComponent(name) + '=' + encodeURIComponent(value);

	for (let optionKey in options) {
		updatedCookie += '; ' + optionKey;
		let optionValue = options[optionKey];
		if (optionValue !== true) {
			updatedCookie += '=' + optionValue;
		}
	}

	document.cookie = updatedCookie;
}

export function deleteCookie(name) {
	setCookie(name, '', {
		'max-age': -1,
	});
}

/**
 * Resets the form by clearing all input fields and checkboxes.
 *
 * @param {HTMLFormElement} form - The form element to reset.
 * @return {void} This function does not return anything.
 */
export const resetForm = (form) => {
	form.reset();
	const formElements = form.querySelectorAll('input, select, textarea');
	formElements.forEach((element) => {
		switch (element.type) {
			case 'hidden':
				break;
			case 'checkbox':
			case 'radio': {
				element.checked = false;
				element.removeAttribute('checked');
				break;
			}
			case 'file':
				element.value = '';
				break;
			default:
				element.value = '';
		}
	});
};
