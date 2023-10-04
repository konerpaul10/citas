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
    <h1>SCRIPT PARA REFERIDOS</h1>
    <div class="mensaje">

        <p>Buenos días con la Sr/Sra [Nombre]?</p>
        <p>Mi Sr/Sra [Nombre], le saluda Paul Toapanta del área de regalos de la empresa [Empresa], ¿me podría brindar unos 3 minutitos de su valioso tiempo?</p>
        <p>Muchísimas gracias, le llamo de parte de la Sr/Sra [Cliente], ¿no sé si ubica?</p>
        <p>Perfecto mi Sr/Sra [Nombre], le comento hace dos días estuvimos en la casa del Sr/Sra [Cliente] en donde nosotros impartimos una charla de salud y nutrición, aparte la Sr/Sra se hizo acreedora a un regalo de parte de nuestra empresa, y la Sr/Sra nos supo manifestar que a usted también le gustaría recibir esta charla de salud y nutrición y también hacerle llegar el regalo totalmente gratis de parte de nuestra empresa, me confirma mi Sr/Sra?</p>
        <p>Listo mi Sr/Sra [Nombre], el día de hoy y mañana estaremos en el sector de [Sector], me confirma mi Sr/Sra [Nombre], el día de hoy o mañana está bien para poder recibir la charla??</p>
        <p>(Se cuadra el día), perfecto mi Sr/Sra [Nombre], en la tarde está bien?</p>
        <p>(Se cuadra la hora si es mujer), mi Sr/Sra [Nombre], ¿A qué hora llega su esposo del trabajo?</p>
        <p>(Si es mujer) el motivo de mi pregunta primero es por respeto a su hogar y segundo porque es una charla de suma importancia para que la reciba usted y su esposo.</p>
        <p>Mi Sr/Sra [Nombre], me podría ayudar con su dirección de domicilio por favor?</p>
        <p>Alguna referencia de su domicilio mi Sr/Sra [Nombre]?</p>
        <p>Perfecto, Mi Sr/Sra [Nombre], el día de la exposición aparte de su espos@ y usted, ¿quién más va a estar presente en la charla?</p>
        <p>Le hago esta pregunta para que nuestro chef, [Chef], lleve las porciones exactas para el día de la charla.</p>
        <p>Un gusto mi Sr/Sra [Nombre], gracias por la apertura y el día [Fecha]. Nuestro chef que se llama [Chef], estará el día y la hora para impartir la charla, que tenga un excelente día.</p>
    </div>

</html>