<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Portal Labkom FMIPA UNS</title>
        <meta HTTP-EQUIV="REFRESH" content="2; url=<?php echo base_url().$redirect ?>">
        <link href=<?php echo '"' . base_url() . 'resources/css/default.css"'; ?> rel="stylesheet" type="text/css" />
        <style>
            #container{
                text-align: center;
                margin: 15% 15% 0 15%;
            }
        </style>
    </head>

    <body>

        <div id="container">
            <h1>Selamat datang </h1>

            <div id="body">
                <?php
                echo $pesan;
                ?>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>
</html><?php

?>