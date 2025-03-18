<?php
/*
    Template name: homepage
*/

get_header();
?>

<!-- Atención al detalle:
Hacer funcionar el slider, centrar y estandarizar el tamaño de las imagenes y 
además, añadirle una paginación al slider. -->

<!-- Recomendación: Revisar la consola -->

<div class="splide" role="group">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="https://picsum.photos/200/300">
            </li>
            <li class="splide__slide">
                <img src="https://picsum.photos/600/700">
            </li>
            <li class="splide__slide">
                <img src="https://picsum.photos/500/300">
            </li>
            <li class="splide__slide">
                <img src="https://picsum.photos/800/400">
            </li>
            <li class="splide__slide">
                <img src="https://picsum.photos/300/600">
            </li>
            <li class="splide__slide">
                <img src="https://picsum.photos/300/300">
            </li>
        </ul>
    </div>
</div>

<script>
    let splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
    })
    
    splide.mount();
</script>

<?php get_footer(); ?>