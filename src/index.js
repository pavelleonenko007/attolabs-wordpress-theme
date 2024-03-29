import { initCopyToClipboardButtons } from './components/copyToClipboardButton';
import { initJobContactForm } from './components/jobContactForm';
import { initPositionsFilterForm } from './components/positionsFilterForm';
import { initProjectsFilterForm } from './components/projectsFilterForm';
import './styles/index.scss';

window.addEventListener('load', () => {
	initProjectsFilterForm();
	initPositionsFilterForm();
	initJobContactForm();
	initCopyToClipboardButtons();
});
