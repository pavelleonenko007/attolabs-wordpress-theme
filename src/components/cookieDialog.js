import { getCookie, setCookie } from '../utils';

const COOKIE_DIALOG_SELECTOR = '[data-element="cookie"]';
const COOKIE_ACCEPT_BUTTON_SELECTOR = '[data-button="accept"]';

export const initCookieDialog = () => {
	const cookie = getCookie('terms-of-use');

	if (cookie && cookie === 'accept') return;

	const cookieDialog = document.querySelector(COOKIE_DIALOG_SELECTOR);

	if (!cookieDialog) return;

	const acceptButton = cookieDialog.querySelector(
		COOKIE_ACCEPT_BUTTON_SELECTOR
	);

	cookieDialog.style.display = 'flex';

	acceptButton.onclick = (event) => {
		event.preventDefault();

		setCookie('terms-of-use', 'accept', { 'max-age': 60 });

		cookieDialog.style.display = 'none';
	};
};
