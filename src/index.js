import { initCopyToClipboardButtons } from './components/copyToClipboardButton';
import {
	initFileInputs,
	initInputFormFields,
} from './components/inputFormFields';
import { initJobContactForm } from './components/jobContactForm';
import { initPositionsFilterForm } from './components/positionsFilterForm';
import { initProjectsFilterForm } from './components/projectsFilterForm';
import { initCustomSelects } from './components/selectField';
import { initSliderForms } from './components/sliderForm';
import './styles/index.scss';

window.addEventListener('load', () => {
	initCustomSelects();
	initInputFormFields();
	initFileInputs();
	initSliderForms();
	initProjectsFilterForm();
	initPositionsFilterForm();
	initJobContactForm();
	initCopyToClipboardButtons();
});
