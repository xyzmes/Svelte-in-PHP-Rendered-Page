import Component1 from './Component1.svelte';
import Component2 from './Component2.svelte';

/**
 * You can select different classes
 * to render different svelte component
 */

 // Select target classes which are rendered by index.php
const elements1 = document.querySelectorAll('.component1') 
const elements2 = document.querySelectorAll('.component2')

// Assign svelte component to each element
elements1.forEach(el =>{
	const comp1 = new Component1({
		target: el,
		props: {
			dataId: el.getAttribute('data-id') // get php rendered data-id
		}
	});
})

// Assign svelte component to each element
elements2.forEach(el =>{
	const comp2 = new Component2({
		target: el,
		props: {
			dataId: el.getAttribute('data-id') // get php rendered data-id
		}
	});
})



export default{
	comp1,
	comp2
}