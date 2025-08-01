<!doctype html>
<html lang="es_ES">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<br>
    </br>

    <title>EmpleaTec - Bolsa de Empleo</title>
    <meta name="description" content="Bolsa de Empleo Instituto Nelson Torres" />
    <meta name="keywords" content="trabajo, empleos, cv, curriculum, empresas, carrera, profesionales, tecnicos, bolsa de trabajo" />
    <meta property="og:image:alt" content="EMPLEATEC - Bolsa de Empleo INT" />
    <meta property="og:description" content="Bolsa de Empleo INT" />

    <link rel="shortcut icon" href="images/Logo yavirac.png">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">    
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    
    <link rel="stylesheet" href="icons/linearicons/style.css">
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="icons/rivolicons/style.css">
    <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

    <link href="css/style.css" rel="stylesheet">

    <style>
        .autofit2 {
            height: 70px;
            width: 400px;
            object-fit: cover; 
        }
        .autofit3 {
            height: 80px;
            width: 100px;
            object-fit: cover; 
        }
        .hero {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 80px 0;
        }
    </style>

</head>

<body class="home">

    <div class="container-wrapper">

        <header id="header">

            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                <div class="container">
                    
                    <div class="logo-wrapper">
                        <div class="logo">
                            <a href="./"><img src="images/LogoIntGris.png" alt="Logo" /></a>
                        </div>
                    </div>
                    
                    <div id="navbar" class="navbar-nav-wrapper navbar-arrow">
                    
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li><a href="./" style="text-transform: uppercase;">INICIO</a></li>
                            <li><a href="job-list.php" style="text-transform: uppercase;">VACANTES</a></li>
                            <li><a href="employers.php" style="text-transform: uppercase;">EMPRESAS</a></li>
                            <li><a href="employees.php" style="text-transform: uppercase;">PERSONAS</a></li>
                            <li><a href="contact.php" style="text-transform: uppercase;">CONTACTO</a></li>
                        </ul>
                
                    </div>

                    <div class="nav-mini-wrapper">
                        <ul class="nav-mini sign-in">
                        <?php
                        if ($user_online == true) {
                            print '
                                <li><a href="logout.php">Cerrar Sesión</a></li>
                                <li><a href="'.$myrole.'">Perfil</a></li>';
                        } else {
                            print '
                                <li><a href="login.php">Ingresar</a></li>
                                <li><a data-toggle="modal" href="#registerModal">Registrate</a></li>';                        
                        }
                        ?>
                        </ul>
                    </div>
                
                </div>
                
                <div id="slicknav-mobile"></div>
                
            </nav>

            <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-center">Regístrate</h4>
                </div>
                <div class="modal-body">
                    <div class="row gap-20">
                        <div class="col-sm-6 col-md-6">
                            <a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Registro Empresas</a>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Registro Personas</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Cerrar</button>
                </div>
            </div>

        </header>

        <?php
        // Array con las rutas de las imágenes (vacío o agrega las que quieras)
        $imagenes = [
            // ejemplo: 'images/banner1.jpg',
        ];
        $imagenAleatoria = !empty($imagenes) ? $imagenes[array_rand($imagenes)] : 'images/bg_default.jpg';
        ?>

        <div class="hero d-flex justify-content-center align-items-center" 
            style="background-image:url('<?php echo $imagenAleatoria; ?>'); background-size: cover; background-position: center;">
            
            <div class="container">

                <h1 class="fs-1 fw-normal" style="font-family: 'Roboto', sans-serif;">
                    <strong>Bolsa de Empleo</strong>
                    <span class="text-danger">Instituto Nelson Torres</span>
                </h1>

                <p>Impulsa tu carrera. Descubre tu próximo desafío profesional con EmpleaTec.</p>

                <br><br>

                <div class="center-container" style="display: flex; justify-content: center;">
                    <img src="images/qrMovil3.png" alt="qr" class="qr-image" style="width: 400px; height: auto; transition: transform 0.3s ease, opacity 0.3s ease;">
                </div>

            </div>
        </div>

        <div class="post-hero bg-light"></div>

        <div class="pt-0 pb-50">
            <div class="container">

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="section-title">
                            <br><h2>EMPRESAS OFERTANTES</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row top-company-wrapper with-bg">

                <?php
                require 'constants/db_config.php';
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE role = 'employer' ORDER BY rand() LIMIT 8");
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    foreach($result as $row) {
                        $complogo = $row['avatar'];
                ?>
                    <div class="col-xss-12 col-xs-6 col-sm-4 col-md-3">
                        <div class="top-company">
                            <div class="image">
                                <?php 
                                if ($complogo == null) {
                                    print '<center><img class="autofit2" alt="image" src="images/blank.png"/></center>';
                                } else {
                                    echo '<center><img class="autofit2" alt="image" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';    
                                }
                                ?>
                            </div>
                            <h6><?php echo $row['first_name'];?></h6>
                            <a target="_blank" href="company.php?ref=<?php echo $row['member_no']; ?>">Ver Empresa</a>
                        </div>
                    </div>
                <?php
                    }
                } catch(PDOException $e) {
                    // manejar error si es necesario
                }
                ?>
                
                </div>

            </div>
        </div>

        <div class="bg-light pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="section-title">
                            <h2>VACANTES RECIENTES</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="recent-job-wrapper alt-stripe mr-0">
                        <?php
                        require 'constants/db_config.php';
                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            foreach($result as $row) {
                                $jobcity = $row['city'];
                                $jobcountry = $row['country'];
                                $type = $row['type'];
                                $title = $row['title'];
                                $closingdate = $row['closing_date'];
                                $company_id = $row['company'];
                                $post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                                $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                                $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
                                
                                $stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                                $stmtb->execute();
                                $resultb = $stmtb->fetchAll();
                                foreach($resultb as $rowb) {
                                    $complogo = $rowb['avatar'];
                                    $thecompname = $rowb['first_name'];    
                                }
                                
                                if ($type == "Freelance") {
                                    $sta = '<div class="job-label label label-success">Freelance</div>';
                                } elseif ($type == "Part-time") {
                                    $sta = '<div class="job-label label label-danger">Part-time</div>';
                                } elseif ($type == "Full-time") {
                                    $sta = '<div class="job-label label label-warning">Full-time</div>';
                                } else {
                                    $sta = '';
                                }
                        ?>
                            <a class="recent-job-item clearfix" target="_blank" href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                <div class="GridLex-grid-middle">
                                    <div class="GridLex-col-5_xs-12">
                                        <div class="job-position">
                                            <div class="image">
                                                <?php 
                                                if ($complogo == null) {
                                                    print '<center><img alt="image" src="images/blank.png"/></center>';
                                                } else {
                                                    echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';    
                                                }
                                                ?>
                                            </div>
                                            <div class="content">
                                                <h4><?php echo $title; ?></h4>
                                                <p><?php echo $thecompname; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                        <div class="job-location">
                                            <i class="fa fa-map-marker text-primary"></i> <?php echo $jobcountry ?> - <?php echo $jobcity ?>
                                        </div>
                                    </div>
                                    <div class="GridLex-col-2_xs-4_xss-12">
                                        <?php echo $sta; ?>
                                        <span class="font12 block spacing1 font400 text-center">
                                            Cierre - <?php echo $post_month; ?> <?php echo $post_date; ?>, <?php echo $post_year; ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        <?php
                            }
                        } catch(PDOException $e) {
                            // manejar error si es necesario
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

    </div>

    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
    <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/handlebars.min.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.js"></script>
    <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/easy-ticker.js"></script>
    <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
    <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
    <script type="text/javascript" src="js/customs.js"></script>

</body>
</html>  