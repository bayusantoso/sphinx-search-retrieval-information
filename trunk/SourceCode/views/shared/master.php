<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sphinx Search - Retrieval Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/css/flaty_themes/flaty.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/css/flaty_themes/flaty-responsive.css">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/nicescroll/jquery.nicescroll.min.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/data-tables/DT_bootstrap.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.crosshair.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flot/jquery.flot.tooltip.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/sparkline/jquery.sparkline.min.js"></script>
        
        <!--flaty scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/flaty/flaty.js"></script>
        
        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/normalize/normalize.css">

        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/modernizr/modernizr-2.6.2.min.js"></script>
		
        <!--menambahkan icon-->
        <link rel="shortcut icon" href="favicon.ico">
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () { 
                if ($('#main-content').height() < $(window).height()) $('#main-content').css("min-height",$(window).height()); 
            });
        </script>
        <style type="text/css">
            #main-content {
                min-height: 100%;
            }
        </style>
    </head>
    <body>
            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <?php require_once $content; ?>
                </div>
                <!-- END Main Content -->
                
                <footer style="bottom: 0px;">
                    <p>2014 © StartLing.Co - Institut Pertanian Bogor.</p>
                </footer>
                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
    </body>
</html>