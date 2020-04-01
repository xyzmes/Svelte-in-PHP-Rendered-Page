<script>
	export let dataId;
</script>

<section>
	<h1>Hello Kitty!: {dataId} </h1>
</section>

<style>
	section {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 2em;
		font-weight: 100;
	}

	@media (min-width: 640px) {
		section {
			max-width: none;
		}
	}
</style>