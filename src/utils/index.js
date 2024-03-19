export const refreshWebflowScripts = () => {
	Webflow.destroy();
	Webflow.ready();
	Webflow.require('ix2').init();
	document.dispatchEvent(new Event('readystatechange'));
};