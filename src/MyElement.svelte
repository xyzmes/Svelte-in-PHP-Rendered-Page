<svelte:options tag="my-element" />
<script>
  let count = 0;

  const increment = () => {
    count += 1;
  };
</script>

<style>
  button {
    padding: 10px;
    border-color: black;
    border: black, 1px;
    background: none;
  }
  section {
    text-align: center;
    padding: 1em;
    max-width: 240px;
    margin: 0 auto;
    background-color: aliceblue;
    margin-bottom: 15px;
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

<section>
  <!-- Get the text inside the element vis slot -->
  <!-- Text is rendered in server -->
  <h1>
	<!-- Default slot -->
    <slot />
  </h1>
  <p>Second slot with id: <slot name="secondslot"></slot></p>
  <button on:click={increment}>Count: {count}</button>
</section>
