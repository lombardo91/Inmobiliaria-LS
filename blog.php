<?php  
    include './includes/template/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de Tu Casa</h4>
                    <p>Escrito el <span>19/12/2023</span> por: <span>Admin</span></p>

                    <p>
                        Consejos, Opciones e Ideas para Constrir tu TERRAZZA
                        sobre el Techo de tu CASA
                    </p>
                </a>
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Decoraciones Internas - Ideas Imperdibles</h4>
                    <p>Escrito el <span>13/12/2023</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio, decora e ilumina Rincones, 
                        Combina Muebles, Paredes y Decoraciones
                    </p>
                </a>
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de Tu Casa</h4>
                    <p>Escrito el <span>19/12/2023</span> por: <span>Admin</span></p>

                    <p>
                        Consejos, Opciones e Ideas para Constrir tu TERRAZZA
                        sobre el Techo de tu CASA
                    </p>
                </a>
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Decoraciones Internas - Ideas Imperdibles</h4>
                    <p>Escrito el <span>13/12/2023</span> por: <span>Admin</span></p>

                    <p>
                        Maximiza el espacio, decora e ilumina Rincones, 
                        Combina Muebles, Paredes y Decoraciones
                    </p>
                </a>
            </div>

        </article>

    </main>

    <?php   
       incluirTemplate('footer');
     ?>


    <script src="build/js/bundle.min.js"></script>
    <!--mordernaizer, para ver si el navegador soporta webp(siertas caracteristicas)-->
