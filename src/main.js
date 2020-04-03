// Just import the custom web element
import MyElement from './MyElement.svelte';

// customElement: true, is set in rollup.config.js

// You can't use regular Svelte components and loop through classes
// when 'customElement: true' is set in rollup.config.js

// Use this for creating reusable web components. 
// Just rename the created JS file and include it in your projects