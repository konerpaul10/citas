<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            line-height: 1.5;
            position: relative;
        }

        .greeting {
            font-weight: bold;
            font-size: 1.2em;
        }

        p {
            text-align: justify;
            margin-bottom: 10px;
        }

        p::before {
            content: " ";
            display: block;
            height: 1px;
            background-color: #ddd;
            margin-top: 5px;
            margin-bottom: 5px;
        }

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
    <div class="mensaje">
        <!-- Agregar la imagen junto al título -->
        <img src="<?php echo base_url(); ?>/img/royal.png" alt="Imagen" class="corner-image">
        <h1>SCRIPT PARA REDES SOCIALES</h1>
    </div>

    <p>Buenas tardes con la Sra/Sr…?</p>
    <p>Mi Sra/Sr…?, le saluda Paul Toapanta del departamento de servicio al cliente de la empresa R.P</p>
    <p>Mi Sra/Sr… el motivo de mi llamada es porque usted lleno un registro en nuestra página de Facebook y se ha hecho acreedor de un obsequio por parte de nuestra empresa, Mi Sra/Sr… me permite unos 3 minutitos de su valioso tiempo?</p>
    <p>Perfecto mi Sra/Sr… como le comentaba el obsequio por parte de nuestra empresa es una cena totalmente gratis en donde nuestro chef le prepara una receta sin sal, sin agua y sobre todo sin aceite en un lapso de 30 a 40 minutos.</p>
    <p>Mi mi Sra/Sr… que le parece este obsequito totalmente gratis por parte de nuestra empresa por haber llenado el formulario en nuestra página de Facebook?</p>
    <p>(Positivismo) Si verdad, posterior a eso se le brindará una charla de salud y nutrición.</p>
    <p>Mi mi Sra/Sr…, el día de hoy y mañana estaremos en el sector de ………………………………, me confirma mi Sra/Sr ….. el día de hoy o mañana está bien para poder recibir la charla y el obsequio que le acabo de mencionar?</p>
    <p>(Dia acordado si es mujer) Perfecto mi Sra/Sr … en la tarde estaría bien?</p>
    <p>(Se cuadra la hora si es mujer), mi Sra/Sr …. ¿A qué hora llega su esposo del trabajo?</p>
    <p>(Si es mujer) el motivo de mi pregunta primero es por respeto a su hogar y segundo porque es una charla de suma importancia para que la reciba usted y su esposo.</p>
    <p>Mi Sra/Sr … me podría ayudar con su dirección de domicilio por favor?</p>
    <p>Alguna referencia de su domicilio mi Sra/Sr…?</p>
    <p>Perfecto, Mi Sra/Sr … el día de la exposición aparte de su espos@ y usted quien más va a estar presente en la charla?</p>
    <p>Le hago esta pregunta para que nuestro chef lleve las porciones exactas para el día de la charla.</p>
    <p>Un gusto mi Sra/Sr … gracias por la apertura y el día ……. Nuestro chef que se llama …. Estará el día y la hora para impartir la charla, que tenga un excelente día.</p>
</body>

</html>