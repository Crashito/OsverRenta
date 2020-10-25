<?php
    /*CODIGO PARA LOS METAS*/
    include_once 'layout/head.php';
?>
    <!-- Preloader -->
    <div id="karla-page-loading" class="karla-pageloading">
        <div class="karla-pageloading-inner">
            <img src="https://via.placeholder.com/450x150" alt="">
        </div>
    </div>
    <!-- Preloader -->

    <?php include_once 'layout/nav.php';?>

    <!-- Banner -->
    <div id="contacto" class="ready banner-padding bg-img" data-overlay-light="0" data-background="images/1920x1080.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cat text-center animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h1>Contáctanos</h1>
                        <hr class="line line-hr-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span>Contáctanos</span>
                    <h2>Nos encantaria ser parte de tu historia.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2"> <span class="line-one"></span> </div>
                        <div class="col-md-4 mb-30">
                            <p>Te ayudamos a transformar tu evento en un momento inolvidable e impactante</p>
                            <p>Queremos saber de ti, llena el formulario debajo, mandandanos un correo o una llamada para comenzar a prepararlo todo</p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <p><b>TELEFONO :</b> +31 (0)6 11 333 444</p>
                            <p><b>EMAIL :</b> info@carolinekarla.com</p>
                            <p><b>DIRECCIÓN :</b>Nederlands</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form -->
    <div class="ready banner-full-padding bg-img valign" data-background="images/1920x1080-no.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 bg-white">
                            <div class="contact-form">
                                <h6>Contactanos Ahora</h6>
                                <hr class="line line-hr-center"><br>
                                <p>Queremos saber más de ti, llena este formulario y explicanos un poco de tu evento, nos pondremos en contacto contigo a la brevedad</p>
                                <form method="post" class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" id="name" placeholder="Tu Nombre" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="number" id="number" placeholder="Telefono" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="email" placeholder="Email" required />
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" id="message" cols="40" rows="3" placeholder="Escribe tu mensaje aquí, nos encantaria saber tanto como sea posible de lo que necesitas"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="karla-btn" type="submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'layout/footer.php';?>
    <?php include_once 'layout/scripts.php';?>