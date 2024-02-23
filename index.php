<?php   

        require 'includes/funciones.php';
         
         
        incluirTemplate('header', $inicio = true );
?>

    <main class="contenedor seccion">
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
    </main>
    <section class="seccion contenedor">
        <h2>Aca esta el Titulo</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                  <source srcset="build/img/anuncio1.webp" type="image/webp">
                  <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                  <img loading="lazy"  src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>LA casa de Tus Sueños</h3>
                    <p>tetur adipisicing elit. Saepe il quo at perspiciatis corrupti illo, deserunt eaque suscipit, hic magnam! Soluta nostrum optio exercitationem aspernatur quis, minus aut.</p>
                    <p class="precio">$ 32.000.000</p>

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
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>

                </div> <!--.contenido-anuncio-->
            </div><!--.anuncio-->
            <div class="anuncio">
                <picture>
                  <source srcset="build/img/anuncio2.webp" type="image/webp">
                  <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                  <img loading="lazy"  src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>La casa Ideal</h3>
                    <p>Saepe il quo at perspiciatis corrupti illo, deserum optio exercitationem aspernatur quis, minus aut.</p>
                    <p class="precio">$ 32.000.000</p>

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
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>

                </div> <!--.contenido-anuncio-->
            </div><!--.anuncio-->
            <div class="anuncio">
                <picture>
                  <source srcset="build/img/anuncio3.webp" type="image/webp">
                  <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                  <img loading="lazy"  src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Para los Fines de Semana</h3>
                    <p>ttis corrupti illo, deserunt eaque suscipit, hic magnam! Soluta nostrum optio exercitationem aspernatur quis, minus aut.</p>
                    <p class="precio">$ 32.000.000</p>

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
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>

                </div> <!--.contenido-anuncio-->
            </div><!--.anuncio-->

        </div><!--.contenedor-anuncio-->
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">
                Ver Todas
            </a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la Casa de tus Sueños</h2>
        <p>Completa el formulario, y en breve un accesor se pondra a dispociosion</p>
        <a href="contacto.php" class="boton-amarillo">Contactànos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

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
                        <p class="informacion-meta">Escrito el <span>19/12/2023</span> por: <span>Admin</span></p>

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
                        <p class="informacion-meta">Escrito el <span>13/12/2023</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio, decora e ilumina Rincones, 
                            Combina Muebles, Paredes y Decoraciones
                        </p>
                    </a>
                </div>

            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    Lorem ipsum, dolor sit amete illum, molestias architecto. Lorem ipsum, dolor sit amete illum, marchitecto. Lorem ipsum, dolor sit amete illum, molestias architecto.
                </blockquote>
                <p>- Mauro Ezequiel</p>
            </div>
        </section>

    </div>

  
    
    <?php   
       incluirTemplate('footer');
     ?>


