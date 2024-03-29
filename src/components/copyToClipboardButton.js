const COPY_TO_CLIPBOARD_BUTTON_SELECTOR = '[data-button="copy"]';

export const initCopyToClipboardButtons = () => {
	const buttons = document.querySelectorAll(COPY_TO_CLIPBOARD_BUTTON_SELECTOR);

	buttons.forEach((button) => {
		button.addEventListener('click', (event) => {
			event.preventDefault();
			const prevText = button.textContent;
			navigator.clipboard.writeText(window.location.href).then(() => {
				button.textContent = 'Copied to clipboard!';
				setTimeout(() => {
					button.textContent = prevText;
				}, 300);
			});
		});
	});
};
