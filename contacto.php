<?php   

        require 'includes/funciones.php';
         
         
        incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen contacto">
        </picture>

        <h2>Llene el Formulario de Contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"> </textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option> <!--No se selecciona en el combo-->
                    <option value="Compra">Compra</option>
                    <option value="Venta">Venta</option>
                </select>

                <label for="presupuesto"> Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser Contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input  name="contactar" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contactar" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligio Telefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time"  id="hora" min="09:00" max="18:00"> <!--validar horario min y max-->
            </fieldset>


            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php   
       incluirTemplate('footer');
     ?>


    <script src="build/js/bundle.min.js"></script>
    <!--mordernaizer, para ver si el navegador soporta webp(siertas caracteristicas)-->
