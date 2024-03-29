import { initPositionsFilterForm } from './components/positionsFilterForm';
import { initProjectsFilterForm } from './components/projectsFilterForm';
import './styles/index.scss';

window.addEventListener('load', () => {
	initProjectsFilterForm();
	initPositionsFilterForm();
});
