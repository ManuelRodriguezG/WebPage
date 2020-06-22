<!--<script type="text/javascript" src="<?php //echo RUTA_URL; ?>/js/main.js"></script>-->

<?php //var_dump($_SERVER['REQUEST_URI']);
if(isset($datos['lan'])){
    $lan = $datos['lan'];
}else{
    if($_SERVER['REQUEST_URI'] == '/busquedas'){
        $lan = 'ES';
    }elseif($_SERVER['REQUEST_URI'] == '/busquedas-en'){
        $lan = 'EN';
    }
}
    $footerInfo = array(
            'ES'=>array(
                        array(
                            'text'=>'¿Quienes Somos?',
                            'url'=>'https://panoramex.mx/quienes-somos-panoramex'
                        ),
                        array(
                            'text'=>'Preguntas Frecuentes',
                            'url'=>'https://panoramex.mx/preguntas-frecuentes-(FAQ)'
                        ),
                        array(
                            'text'=>'Términos y Condiciones',
                            'url'=>'https://panoramex.mx/terminos-y-condiciones'
                        ),
                        array(
                            'text'=>'Políticas de Cancelación',
                            'url'=>'https://panoramex.mx/politicas-de-cancelacion'
                        ),
                        array(
                            'text'=>'Politicas de Privacidad',
                            'url'=>'https://panoramex.mx/politica-de-privacidad'
                        ),
                        array(
                            'text'=>'Politicas de Cookies',
                            'url'=>'https://panoramex.mx/politicas-de-cookies'
                        ),
                        'Horarios de Atencion',
                        'Lunes a Viernes',
                        'Ubicación',
                        'Todos los Derechos Reservados',
                        array(
                            'text'=>'Facturacion',
                            'url'=>'https://panoramex.mx/facturacion'
                        ),
                ),
            'EN'=>array(
                    array(
                            'text'=>'About us',
                            'url'=>'https://panoramex.mx/about-us-panoramex'
                        ),
                        array(
                            'text'=>'Frecuent Questions',
                            'url'=>'https://panoramex.mx/frecuent-questions'
                        ),
                        array(
                            'text'=>'Terms and Conditions',
                            'url'=>'https://panoramex.mx/conditions-and-terms'
                        ),
                        array(
                            'text'=>'Cancellation Policies',
                            'url'=>'https://panoramex.mx/cancellation-policies'
                        ),
                        array(
                            'text'=>'Privacy Policies',
                            'url'=>'https://panoramex.mx/privacy-policies'
                        ),
                        array(
                            'text'=>'Cookies Policies',
                            'url'=>'https://panoramex.mx/policies-cookies'
                        ),
                    'Attention schedule',
                    'Monday to Friday',
                    'Ubication',
                    'All rights reserved',
                     array(
                            'text'=>'Billing',
                            'url'=>'https://panoramex.mx/billing'
                        ),
                )
        );
        
?>

<!--<div style="border-width: 0 0 12vh 100vw;border-style: solid;border-color: transparent transparent #001C63 transparent;margin-bottom:0;"></div>-->
<div class="row row-footer" id="footer-page">

        <div class="col-md-12">
    
            <footer class="page-footer deep-purple center-on-small-only pt-0">
        
                <div class="container">
        
                    <div class="row pt-3 d-flex justify-content-center">
        
                        <div class="col-md-3 mb-3 ">
                            <ul class="listF">
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][0]['url']; ?>" style=""><?php echo $footerInfo[$lan][0]['text']; ?></a></h6>
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][1]['url']; ?>" style=""><?php echo $footerInfo[$lan][1]['text']; ?></a></h6>
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][10]['url']; ?>" style=""><?php echo $footerInfo[$lan][10]['text']; ?></a></h6>
                                </li>
                            </ul>
                            
                        </div>
        
        
                        <div class="col-md-3 mb-3">
                            <ul class="listF">
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][2]['url']; ?>" style=""><?php echo $footerInfo[$lan][2]['text']; ?></a></h6>
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][3]['url']; ?>" style=""><?php echo $footerInfo[$lan][3]['text']; ?></a></h6>
                                </li>
                                <li>
                                    
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][4]['url']; ?>" style=""><?php echo $footerInfo[$lan][4]['text']; ?></a></h6>
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a class="styleH" href="<?php echo $footerInfo[$lan][5]['url']; ?>" style=""><?php echo $footerInfo[$lan][5]['text']; ?></a></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <ul class="listF">
                                <li>
                                    
                                    <h6 class="title font-bold  styleH"><?php echo $footerInfo[$lan][6]; ?></h6>
                                </li>
                                <li>
                                    
                                    <h6 class="title font-bold  styleH"><?php echo $footerInfo[$lan][7]; ?></h6>
                                </li>
                                <li >
                                    <h6 class="title font-bold styleH">8:00 am - 8:00 pm</h6>
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a href="tel:+523315780421" class="styleH"><span class="fas fa-phone"></span>MX:(33)1578-0421</a></h6>
                                    
                                </li>
                                <li>
                                    <h6 class="title font-bold "><a href="tel:+13232838223" class="styleH"><span class="fas fa-phone"></span> USA:(32)3283-8223</a></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <ul class="listF">
                                <li >
                                    <h6 class="title font-bold styleH"><?php echo $footerInfo[$lan][8]; ?></h6>
                                    
                                </li>
                                <li >
                                    <h6 class="title font-bold "><a class="styleH" href="https://goo.gl/maps/2VAAxeUUoL42" style="">Avenida de las Américas 1545 Piso 21 , Providencia, 44630 Guadalajara, Jal.</a></h6>
                                </li>
                            </ul>
                        </div>
        
                    </div>
                    <div class="row " style="border-top:1px solid white;">
        
                        <div class="col-md-12">
                            <div class="footer-socials mb-3 flex-center" style="text-align:center;color:white">
        
                                <a target="_blank"  href="https://www.facebook.com/panoramexgdl/"><i class="iconS fab fa-facebook-square"></i></a>
                                
                                <a target="_blank"  href="https://www.instagram.com/panoramex/"><i class="iconS fab fa-instagram"></i></a>
                                
                                <a target="_blank"  href="https://twitter.com/PanoramexTours"><i class="iconS fab fa-twitter"></i></a>
                                
                                <a target="_blank"  href="mailto:info@panoramex.mx"><i class="iconS far fa-envelope"></i></a>
                                
                                <!--<a   href="https://api.whatsapp.com/send?phone=5213315876695&text=Hola%20mi%20nombre%20es...%20y%20mi%20pregunta%20es...&source=&data="><i class="iconS fab fa-whatsapp"></i></a>-->
                                <a style="cursor:pointer;" data-toggle="modal" data-target="#msg-whts"><i class="iconS fab fa-whatsapp"></i></a>
                            </div>
                        </div>
        
                    </div>
                    <div class="row text-center" style="justify-content:center;">
                        <label style="color:white;">Panoramex Tours & Travel <i class="far fa-registered"></i>  <?php echo $footerInfo[$lan][9]; ?></label>
                    </div>
                    
    
    </div>
    
    
    
    
    </footer>
    
    </div>

    </div>
    <!-- Modal -->
    <?php 
        $textModal = array(
                'ES'=>array(
                        'Envianos un Mensaje',
                        'Escribir mensaje',
                        'Enviar mensaje'
                    ),
                'EN'=>array(
                        'Send us a message',
                        'Write a message',
                        'Send message'
                    )
            );
    ?>
    <div class="modal fade" id="msg-whts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $textModal[$lan][0]; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:black;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1"><?php echo $textModal[$lan][1]; ?></label>
                <textarea type="email" class="form-control" require id="whats-msg"></textarea>
                <small id="small-msg" class="form-text text-danger" style="display:none;"></small>
              </div>
              
              
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-primary" onclick="enviarWhatsApp();"><?php echo $textModal[$lan][2]; ?></button>
          </div>
        </div>
      </div>
    </div>
    <script>
        function enviarWhatsApp(){
            var mensaje = $('#whats-msg').val();
            if(mensaje){
                console.log(mensaje);
                var url = "https://api.whatsapp.com/send?phone=5213315876695&text="+mensaje+"&source=&data=";
                $('#msg-whts').modal('hide');
                window.open(url, '_blank');
            }else{
                $('#small-msg').html('Mensaje vacio');
                $('#small-msg').css('display','block');
                setTimeout(function(){
                    $('#small-msg').css('display','none');    
                },3000)
            }
        }
        
    </script>
