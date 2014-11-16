<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo (isset($query) ? $query." - " : ""); ?>Sphinx Search - Retrieval Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/jquery/jquery.min.js"></script>
        
        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>/res/scripts/bootstrap/bootstrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/res/css/apps.css">
        <script type="text/javascript">
            $(document).ready(function () { 
                if ($('#main-content').height() < $(window).height()) $('#main-content').css("min-height",$(window).height()); 
            });
        </script>
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
                    <center>
                        <p>2014 &COPY; <a href="<?php echo base_url()."/index/about"; ?>">StartLing.Inc</a> - Institut Pertanian Bogor.</p>
                    </center>
                </footer>
            </div>
            <!-- END Content -->
    </body>
</html>