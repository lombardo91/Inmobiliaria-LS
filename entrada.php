<?php   

        require 'includes/funciones.php';
         
         
        incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Aca esta el Titulo de la Propiedad</h1>
            

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta"> Escrito el: <span>26/12/2023</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad">
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
