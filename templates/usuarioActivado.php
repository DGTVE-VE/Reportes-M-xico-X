<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <base href="http://<?php print $_SESSION[CONFIG]['host']['url']; ?>">
        <title>México X</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                border: 0;
                position: relative;
                /*border: 2px solid red;*/
            }
            html, body {
                width: 100%;
                min-height: 100%;
                height: auto !important;
                height: 100%;
            }
            .img1{
                background-image: url('images/header_mexicox_1871px_121px.png');                
                background-repeat: no-repeat;
                background-size: 100%;
                width: 100%;
                height: 100px;
                //border: 2px solid red;
                border-bottom: 1px solid black;
            }
            .img2{
                background-image: url('images/banner_web.png');                
                background-repeat: no-repeat;
                height: 400px;
                width: 100%;
                position: absolute;
                
            }
            .texto1, texto2{                
                position: relative;
                margin-top: 10%;
                font-size: 30px;
                color: red;
            }
        </style>    
    </head>
    <body>
        <div class="row">
            <div class="col-md-12 img1"><br><img class="col-md-offset-2" src="images/logo.png"></div>
            <div class="col-md-12">
                <br><br><br>
                <div class="col-md-offset-2 img2"></div>                
                <div class="col-md-offset-7 texto1">¡Has sido activado!</div>
                <br><br>
                <div class="col-md-offset-7 texto2"><a href="http://mx.televisioneducativa.gob.mx/login"><button type="button" class="btn btn-success btn-lg">Ingresar</button></a></div>
            </div>
        </div>
    </body>
</html>
