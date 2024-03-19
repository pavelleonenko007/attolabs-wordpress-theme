import { refreshWebflowScripts } from '../utils';

export const initProjectsFilterForm = () => {
	const filterForm = document.getElementById('projects-filter-form');

	console.log(filterForm);

	if (!filterForm) return;

	/**
	 *
	 * @param {Event} event
	 */
	const formHandler = async (event) => {
		event.preventDefault();
		const formData = new FormData(filterForm);
		let isEmptyForm = true;

		if (formData.has('services[]') || formData.has('industries[]')) {
			isEmptyForm = false;
		}

		filterForm.classList.toggle('form--active', !isEmptyForm);

		try {
			const response = await fetch(ATTO.AJAX_URL, {
				method: 'POST',
				body: formData,
			});

			if (!response.ok) {
				throw new Error('Something goes wrong');
			}

			const data = await response.json();
			const projectsContainer = document.querySelector('.projects-container');
			const fieldsContainer = filterForm.querySelector(
				'.form-filters-container'
			);
			console.log(data);

			projectsContainer.innerHTML = data.data.projects;
			fieldsContainer.innerHTML = data.data['filter-form'];

			refreshWebflowScripts();
		} catch (error) {
			console.error(error);
		}
	};
	const resetHandler = async (event) => {
		event.preventDefault();
		filterForm.reset();
		filterForm.querySelectorAll('[type="checkbox"]').forEach((checkbox) => {
			checkbox.checked = false;
			checkbox.removeAttribute('checked');
		});
		setTimeout(() => {
			filterForm.dispatchEvent(new Event('change'));
		}, 100);
	};

	filterForm.addEventListener('change', formHandler);
	filterForm.addEventListener('submit', formHandler);
	filterForm.addEventListener('reset', resetHandler);
};
