<?php require_once('rutas.php'); ?>
<?php include 'header.php'; ?>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-6">
                    <div class="caption">
                        <form action="<?php echo $rutaSesion ?>" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="<?php echo $rutaLogin ?>">Ya tengo cuenta</a>
                                <button type="submit"class="btn btn-primary">restablecer Contraseña</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'foot.php'; ?>