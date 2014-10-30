<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <?php echo $this->Html->charset(); ?>
        <title>MyApp Web application</title>

        <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- bootstrap & fontawesome -->
        <?php echo $this->Html->css('bootstrap.min') ?>
        <?php echo $this->Html->css('/font-awesome/4.1.0/css/font-awesome.min') ?>
        <!-- page specific plugin styles -->
        <?php echo $this->Html->css('jquery-ui.min') ?>
        <?php echo $this->Html->css('datepicker') ?>
        <?php echo $this->Html->css('ui.jqgrid') ?>
        <!-- text fonts -->
        <?php echo $this->Html->css('css-family=Open+Sans-400,300') ?>
        <!-- ace styles -->
        <?php echo $this->Html->css('ace.min') ?>
        <!--[if lte IE 9]>
        <?php echo $this->Html->css('ace-part2.min') ?>
        <![endif]-->
        <?php echo $this->Html->css('ace-skins.min') ?>
        <?php echo $this->Html->css('ace-rtl.min') ?>


        <!--[if lte IE 9]>
        <?php echo $this->Html->css('ace-ie.min') ?>

        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <?php echo $this->Html->script('ace-extra.min') ?>


        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <?php echo $this->Html->script('html5shiv.min') ?>
        <?php echo $this->Html->script('respond.min') ?>

        <![endif]-->
        <!-- basic scripts -->

        <!--[if !IE]> -->
        <?php echo $this->Html->script('jquery.min') ?>
        <!-- <![endif]-->

        <!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/js/jquery.min.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <?php echo $this->Html->script('bootstrap.min') ?>


        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="/js/excanvas.min.js"></script>
        <![endif]-->
        <?php echo $this->Html->script('jquery-ui.custom.min') ?>

        <?php echo $this->Html->script('jquery.ui.touch-punch.min') ?>

        <?php echo $this->Html->script('jquery.easypiechart.min') ?>

        <?php echo $this->Html->script('jquery.easypiechart.min') ?>

        <?php echo $this->Html->script('jquery.sparkline.min') ?>

        <?php echo $this->Html->script('flot/jquery.flot.min') ?>

        <?php echo $this->Html->script('flot/jquery.flot.pie.min') ?>

        <?php echo $this->Html->script('flot/jquery.flot.resize.min') ?>

        <!-- ace scripts -->
        <?php echo $this->Html->script('ace-elements.min') ?>

        <?php echo $this->Html->script('ace.min') ?>
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>

    <body class="no-skin">
        <!--Header-->
        <?php echo $this->element('header') ?>
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {
                }
            </script>

            <!--Left menu-->
            <?php echo $this->element('left_menu') ?>
            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {
                        }
                    </script>
                </div>

                <div class="page-content">
                    <!-- /.ace-settings-container -->
                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>

                </div><!-- /.page-content -->
            </div><!-- /.main-content -->

            <!--Footer-->
            <?php echo $this->element('footer') ?>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
                        window.jQuery || document.write("<script src='assets/js/jquery.min.js'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="/js/jquery-ui.custom.min.js"></script>
        <script src="/js/jquery.ui.touch-punch.min.js"></script>

        <!-- ace scripts -->
        <script src="/js/ace-elements.min.js"></script>
        <script src="/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
    </body>
</html>
