<?php   

        require 'includes/funciones.php';
         
         
        incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenedor nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>21 Años de Experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In sequi voluptate quaerat aperiam error magni saepe, nostrum ab tenetur maiores amet neque, distinctio laudantium. Ipsa ullam unde nemo nam eum.
                Dicta beatae corrupti accusantium modi sit officiis neque molestiae, ab debitis quasi sequi? Quis quod, nam unde corrupti mollitia vitae atque ratione eveniet hic laudantium. Obcaecati cumque amet qui eum?
                Facere minus ipsum non. Repellendus temporibus voluptatum ad neque repudiandae recusandae! Consequuntur nobis minus consectetur iste nulla voluptatem vero cumque, accusamus exercitationem similique? Distinctio provident numquam incidunt dolorum, accusamus neque?</p>
            </div>
    
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad"
                loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsumtatiqui harum maxime, nesciunt, rerum, aperiam aliquid exercitationem! Ullam tenetur voluptatem eveniet fugiat? Consectetur sint cum consequatur rerum quisquam officiis est tempora provident sunt.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio"
                loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectestias sequi harum .
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo"
                loading="lazy">
                <h3>Tiempo</h3>
                <p>
                    Lorem ipsuitatis in ex istnt, rerum, aperiam aliquid exercitationem! Ullam tenetur voluptatem eveniet fugiat? Consectetur sint cum consequatur rerum quisquam officiis est tempora provident sunt.
                </p>
            </div>
        </div>
    </section>

    <?php   
       incluirTemplate('footer');
     ?>



    <script src="build/js/bundle.min.js"></script>
    <!--mordernaizer, para ver si el navegador soporta webp(siertas caracteristicas)-->
