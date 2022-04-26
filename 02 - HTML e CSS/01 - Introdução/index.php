<html>
    <head>
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: navy;
            }
        </style>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>

        <title>Projeto DIO - Primeiro Site em PHP</title>
    </head>
    <body>
        <?php
        for ($i = 0; $i < 10; $i++) {
            print("<span class=\"linha\">Linha número " . $i . "</span></br />");
        }

        ?>
    </body>
    <script type="text/javascript">
        $(document).ready((function () {
            alert.('Woohoo!');
        });
    </script>
</html>
