<?php   

        require 'includes/funciones.php';
         
         
        incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                $3.000.000
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In sequi voluptate quaerat aperiam error magni saepe, nostrum ab tenetur maiores amet neque, distinctio laudantium. Ipsa ullam unde nemo nam eum.
                Dicta beatae corrupti accusantium modi sit officiis neque molestiae, ab debitis quasi sequi? Quis quod, nam unde corrupti mollitia vitae atque ratione eveniet hic laudantium. Obcaecati cumque amet qui eum?
                Facere minus ipsum non. Repellendus temporibus voluptatum ad neque repudiandae recusandae! Consequuntur nobis minus consectetur iste nulla voluptatem vero cumque, accusamus exercitationem similique? Distinctio provident numquam incidunt dolorum, accusamus neque?</p>

        </div>
    </main>

    <?php   
       incluirTemplate('footer');
     ?>



    <script src="build/js/bundle.min.js"></script>
    <!--mordernaizer, para ver si el navegador soporta webp(siertas caracteristicas)-->
