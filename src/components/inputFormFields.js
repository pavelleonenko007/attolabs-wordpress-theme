export const initInputFormFields = () => {
	document.querySelectorAll('[required]').forEach((input) => {
		input.addEventListener('change', (event) => {
			const fieldParenNode = input.closest('.input-keeper');
			if (fieldParenNode) {
				fieldParenNode.classList.remove('input-keeper--error');
			}
		});
	});
};

export const initFileInputs = () => {
	const fileInputs = document.querySelectorAll('input[type="file"]');

	fileInputs.forEach((fileInput) => {
		fileInput.addEventListener('change', (event) => {
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
