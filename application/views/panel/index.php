<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <body lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <?php $this->load->view('panel/inc/inc_meta'); ?>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <?php $this->load->view('panel/inc/inc_style'); ?>

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-footer-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">

    <!-- BEGIN HEADER -->
    <?php $this->load->view('panel/inc/inc_header'); ?>
    <!-- END HEADER -->

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <?php $this->load->view('panel/inc/inc_sidebar'); ?>
        <?php $this->load->view('panel/users_view'); ?>
        <?php $this->load->view('panel/inc/inc_quicksidebar'); ?>
    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <?php $this->load->view('panel/inc/inc_footer'); ?>
    <!-- END FOOTER -->

</div>


    <?php $this->load->view('panel/inc/inc_script'); ?>

</body>
</html>
