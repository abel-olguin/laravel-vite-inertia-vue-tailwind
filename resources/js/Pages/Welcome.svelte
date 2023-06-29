<script>
    const saludo = "Hola Mundo!";
    let contador = 0;
    const click = () => contador++;
</script>

<h1>{saludo}</h1>
<button on:click={click} class="bg-amber-300 rounded shadow hover:shadow-md hover:bg-amber-400 p-2">PROGRAMEE {contador}</button>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
