import App from './App.svelte';

const elements = document.querySelectorAll('.component')

elements.forEach(el =>{
	const app = new App({
		target: el,
		props: {
			name: el.getAttribute('data-id') // get php rendered data-id
		}
	});
})



export default app;