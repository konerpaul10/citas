<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>

<head>
    <title>Script de Referidos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;

            background-color: #f8f8f8;
            /* Color de fondo de la hoja de cuaderno */
            border: 1px solid #ddd;
            /* Borde de la hoja de cuaderno */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Sombra de la hoja de cuaderno */
            line-height: 1.5;
            /* Espaciado entre líneas */
        }

        .greeting {
            font-weight: bold;
            font-size: 1.2em;
            /* Tamaño de fuente para el saludo */
        }

        p {
            text-align: justify;
            margin-bottom: 10px;
        }

        /* Estilo para el borde del párrafo */
        p::before {
            content: " ";
            display: block;
            height: 1px;
            background-color: #ddd;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        /* Estilo para centrar el saludo */
        .centered {
            text-align: center;
        }

        /* Estilo para la imagen en la esquina superior derecha */
        .corner-image {
            width: 55px;
            /* Ajusta el ancho deseado */
            height: auto;
            /* Mantén la proporción original */
            float: left;

            /* Alinea la imagen a la izquierda del contenido */
            margin-right: 10px;
            /* Espacio entre la imagen y el título */
        }
    </style>
</head>

<body>
    <!-- Agregar la imagen junto al título -->
    <img src="<?php echo base_url(); ?>/img/royal.png" alt="Imagen" class="corner-image">
    <h1>SCRIPT PARA POSTVENTA</h1>
    <div class="mensaje">

        <p>Buenas tardes con la Sra/Sr…?</p>
        <p>Mi Sra/Sr…, le saluda Paul Toapanta del departamento de servicio al cliente de la empresa R.P. ¿Me podría brindar unos dos minutitos de su valioso tiempo? Es para llenar una pequeña encuesta de satisfacción al cliente.</p>
        <p>Perfecto mi Sra/Sr… coménteme, ¿utiliza a diario nuestros productos?</p>
        <p>¿En una escala del 1 al 10 siendo 1 insatisfactorio y 10 satisfactorio, ¿cuál es la calificación que usted pondría a su compra?</p>
        <p>(¿Ver la falencia y si le dio una calificación regular y dialogar?)</p>
        <p>¿Hace cuánto tiempo ha adquirido nuestro sistema de salud?</p>
        <p>¿Y en ese tiempo le han hecho su respectivo mantenimiento del sistema de salud?</p>
        <p>Perfecto mi Sra/Sr… el motivo de mi llamada es justamente para eso, para poder brindarle el respectivo mantenimiento a su sistema de salud ya que, al momento de adquirir nuestro sistema la empresa cubre una garantía de 50 años, este mantenimiento no tiene ningún costo adicional y se lo hará en un lapso de 30 a 40 minutos dejando totalmente como nuevo a su sistema de salud, nosotros vamos a estar el día de hoy y mañana por su sector [Sector]. ¿Está bien el día de hoy o mañana mi Sra/Sr?</p>
        <p>(Se cuadra el día), perfecto mi Sra/Sr … en la tarde está bien?</p>
        <p>(Se cuadra la hora), mi Sra/Sr …. ¿A qué hora llega su esposo del trabajo?</p>
        <p>(Si es mujer) el motivo de mi pregunta primero es por respeto a su hogar y segundo mi Sra/Sr … cuénteme ya ha preparado el pastel en nuestro sistema de salud?</p>
        <p>(Negativa) Mi Sra/Sr … entonces el día ACORDADO al momento de realizar el mantenimiento también se le hará una pequeña demostración de la realización de un pastel en nuestro sistema de salud ya que también se le puede usar como un horno, posterior a eso se le dará una pequeña charla de enseñanza de uso de nuestro sistema, ¿estamos?</p>
        <p>My Sra/Sr … me confirma su dirección de domicilio por favor? (Si se tiene el domicilio genial se repite pero si no se lo pregunta?</p>
        <p>(Negativa) Mi Sra/Sr .. me podría ayudar con la dirección de su domicilio para que uno de nuestros asesores vaya a realizar el respectivo mantenimiento de su sistema de salud?</p>
        <p>Listo mi Sra/Sr .. así quedamos el día [Fecha] y la hora en la dirección emitida para poder realizar su respectivo mantenimiento. Mi Sra/Sr .. un gusto poder ayudarla y que tenga un excelente resto del día.</p>
    </div>

</html>