<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>México X</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>        
        
        <style>
            .colortit{color: blue;}
            .header{background-image: url('header_mexicox.png')}
            tr{height: 50px;}
            .tdp6{width: 15%; text-align: center;}
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default header">
            <div class="container">
                <img class="col-md-offset-2" src="LOGO_mexicoX.png">
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <form action="descargaConstancias.php" method="post" class="row">
                <input type="hidden" name="constancia" value="<?php print $_GET['constancia'];?>">
                <div class="panel panel-default col-md-12 col-lg-12 col-xs-12 ">
                    <div class="panel-heading">
                        <h3 class="text-center">Encuesta de satisfacción para usuarios de MéxicoX</h3>
                        <h3 class="panel-title colortit">Por favor, dedique unos minutos para completar esta encuesta.
                            La información que nos proporcione será utilizada para mejorar nuestro servicio.
                            Al terminar de responder la encuesta presione el botón Guardar e iniciará la <strong>descarga de su constancia.</strong>
                        </h3>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table-striped col-lg-11 col-md-11 col-xs-12">
                            <tr><td><strong>1.- ¿Cómo se enteró de los cursos de MéxicoX?</strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Redes Sociales">Redes Sociales</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Internet">Internet</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Radio">Radio</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Televisión">Televisión</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Por amigos">Por amigos</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Por familiares">Por familiares</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="Publicidad">Publicidad</label>
                                    <label class="radio-inline"><input required type="radio" name="p1" value="otro">Otro</label>
                                </td>
                            </tr>
                            <tr><td><strong>2.- ¿Por qué razón decidió tomar un curso en MéxicoX?</strong></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Para fortalecer mi aprendizaje en la escuela">Para fortalecer mi aprendizaje en la escuela</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Para reforzar mis habilidades laborales">Para reforzar mis habilidades laborales</label></td></tr>                        
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Para mejorar mi currículo profesional">Para mejorar mi currículo profesional</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Por cultura general">Por cultura general</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Por recomendación">Por recomendación</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Por interés en el tema">Por interés en el tema</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Por ser un servicio gratuito">Por ser un servicio gratuito</label></td></tr>
                            <tr><td><label class="radio-inline"><input required type="radio" name="p2" value="Otro">Otro&nbsp;&nbsp;&nbsp;</label>
                                <input  id="r2texto" type="text" name="p2otro" size="25">
                                </td></tr>                                                    
                            <tr><td><strong>3.- ¿Cómo considera su experiencia en la plataforma MéxicoX?</strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p3" value="Muy buena">Muy buena</label>
                                    <label class="radio-inline"><input required type="radio" name="p3" value="Buena">Buena</label>                        
                                    <label class="radio-inline"><input required type="radio" name="p3" value="Poco buena">Poco buena</label>
                                    <label class="radio-inline"><input required type="radio" name="p3" value="Mala">Mala</label>
                                    <label class="radio-inline"><input required type="radio" name="p3" value="Muy mala">Muy mala</label>
                                </td>
                            </tr>  
                            <tr><td><strong>4.-Con base en su experiencia al tomar el curso en MéxicoX, ¿qué tan satisfecho se siente con el servicio que se le proporcionó?</strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p4" value="Muy satisfecho">Muy satisfecho</label>
                                    <label class="radio-inline"><input required type="radio" name="p4" value="Satisfecho">Satisfecho</label>                        
                                    <label class="radio-inline"><input required type="radio" name="p4" value="Poco satisfecho">Poco satisfecho</label>
                                    <label class="radio-inline"><input required type="radio" name="p4" value="Mala">Mala</label>
                                    <label class="radio-inline"><input required type="radio" name="p4" value="Nada satisfecho">Nada satisfecho</label>
                                </td>
                            </tr> 
                            <tr><td><strong>5.- En una escala del 5 al 10, en donde 5 es nada y 10 es mucho, ¿qué tanto considera usted que le ha servido el tema una vez que concluyó su curso en MéxicoX?</strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p5" value="5">5</label>
                                    <label class="radio-inline"><input required type="radio" name="p5" value="6">6</label>                        
                                    <label class="radio-inline"><input required type="radio" name="p5" value="7">7</label>
                                    <label class="radio-inline"><input required type="radio" name="p5" value="8">8</label>
                                    <label class="radio-inline"><input required type="radio" name="p5" value="9">9</label>
                                    <label class="radio-inline"><input required type="radio" name="p5" value="10">10</label>                                
                                </td>
                            </tr>     
                            <tr><td><strong>6.- A continuación se mencionan algunos aspectos sobre el funcionamiento de MéxicoX. Para cada uno de ellos, ¿qué opinión tiene?</strong></td></tr>
                            <tr>
                                <td>
                                    <table class="table-bordered col-md-offset-1 col-md-9 col-lg-9 col-xs-12 col-sm-12 p6estilo">
                                        <tr class="text-center">
                                            <td></td>
                                            <td>Muy bueno</td>
                                            <td>Bueno</td>
                                            <td>Malo</td>
                                            <td>Muy malo</td>
                                        </tr>
                                        <tr>
                                            <td>Información actualizada, sencilla, creíble y concisa</td>
                                            <td class="text-center tdp6"><input required type="radio" name="p6op1" value="Muy bueno"></td>
                                            <td class="text-center tdp6"><input required type="radio" name="p6op1" value="Bueno"></td>
                                            <td class="text-center tdp6"><input required type="radio" name="p6op1" value="Malo"></td>
                                            <td class="text-center tdp6"><input required type="radio" name="p6op1" value="Muy malo"></td>                                
                                        </tr>
                                        <tr>
                                            <td>Apariencia de la plataforma</td>
                                            <td class="text-center"><input required type="radio" name="p6op2" value="Muy bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op2" value="Bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op2" value="Malo"></td>
                                            <td class="text-center"><input required type="radio" name="p6op2" value="Muy malo"></td>                                                                
                                        </tr>
                                        <tr>
                                            <td>Facilidad de navegación</td>
                                            <td class="text-center"><input required type="radio" name="p6op3" value="Muy bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op3" value="Bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op3" value="Malo"></td>
                                            <td class="text-center"><input required type="radio" name="p6op3" value="Muy malo"></td>                                                                
                                        </tr>   
                                        <tr>
                                            <td>Rapidez de descarga</td>
                                            <td class="text-center"><input required type="radio" name="p6op4" value="Muy bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op4" value="Bueno"></td>
                                            <td class="text-center"><input required type="radio" name="p6op4" value="Malo"></td>
                                            <td class="text-center"><input required type="radio" name="p6op4" value="Muy malo"></td>                                                                
                                        </tr>                              
                                    </table>
                                </td></tr>
                            <tr><td><strong>7.- ¿Qué tan probable es que usted tome otro curso en MéxicoX? </strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p7" value="Muy probable">Muy probable</label>
                                    <label class="radio-inline"><input required type="radio" name="p7" value="Probable">Probable</label>                        
                                    <label class="radio-inline"><input required type="radio" name="p7" value="Poco probable">Poco probable</label>
                                    <label class="radio-inline"><input required type="radio" name="p7" value="Nada probable">Nada probable</label>
                                </td>
                            </tr>  
                            <tr><td><strong>8.- ¿Usted recomendaría a otras personas los cursos de MéxicoX?</strong></td></tr>                        
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p8" value="Sí">Sí los recomendaría</label>
                                    <label class="radio-inline"><input required type="radio" name="p8" value="No">No los recomendaría</label>                        
                                </td>
                            </tr>                         
                            <tr><td><strong>9.- A su interés, ¿qué temas le gustaría que se tomarán en cuenta para los próximos cursos de MéxicoX?</strong></td></tr>
                            <tr>
                                <td>
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Español">Español</label>
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Matemáticas">Matemáticas</label>                        
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Ciencia y Tecnología">Ciencia y Tecnología</label>
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Biología">Biología </label>
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Humanidades">Humanidades </label>
                                    <label class="radio-inline"><input required type="radio" name="p9" value="Otro">Otro&nbsp;&nbsp;&nbsp;</label>
                                    <input  type="text" size="25" name="p9otro" id="r9text">                                
                                </td>
                            </tr>                          
                            <tr>
                                <td>
                                    <strong>10.- Para finalizar, ¿hay algún comentario sobre su experiencia en MéxicoX que no se haya preguntado en esta encuesta? Si es así, por favor, díganos de qué se trata:</strong>
                                </td>
                            <tr>
                                <td><textarea  name="p10" cols="150"></textarea></td>
                            </tr>                 

                            <tr class="text-center">
                                <td><input  type="submit" class="btn-success btn-lg" value="Descargar Constancia" /></td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer colortit"></div>
                </div>
            </form>
        </div>
    </body>
</html>
<script type="text/javascript">
//function checkDisabledP9(evt1) {
//    var valp9 = $("input [name=p9]:checked").val();
//    if (valp9 === 'Otro') {
//          $('#r9text').removeAttr('disabled');
//        
//    } else {
//      $('#r9text').attr('disabled', true);
//    }
//}
//function checkDisabledP2(evt2) {
//    var valp2 = $("input [name=p2]:checked").val();
//    if (valp2 === 'Otro') {
//          $('#r2texto').removeAttr('disabled');
//        
//    } else {
//      $('#r2texto').attr('disabled', true);
//    }
//}
//
//$('input [name=p9]:radio').change(checkDisabledP9);
//$('input [name=p2]:radio').change(checkDisabledP2);
//
//checkDisabledP2();
//checkDisabledP9();

</script>