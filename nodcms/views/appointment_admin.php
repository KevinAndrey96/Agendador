<!DOCTYPE html>
<html lang="<?=$_SESSION["language"]["code"]?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <?php if(isset($settings["fav_icon"]) && $settings["fav_icon"]!=''){ ?>
    <link rel="shortcut icon" href="<?php echo base_url($settings["fav_icon"]); ?>">
    <?php } ?>
    <title><?=_l('Administration',$this)?> <?=isset($settings["company"])?$settings["company"]:""?></title>

    <script src="<?php echo base_url(); ?>assets/metronic/global/plugins/pace/pace.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/metronic/global/plugins/pace/themes/pace-theme-minimal.css" rel="stylesheet" type="text/css"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/metronic/global/plugins/select2/select2.css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <?php if($_SESSION["language"]["rtl"]!=1){ ?>
    <link href="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- BEGIN THEME STYLES -->
    <link href="<?php echo base_url(); ?>assets/metronic/global/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
   <?php }else{ ?>
    <link href="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/global/css/components-rtl.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/themes/darkblue-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo base_url(); ?>assets/metronic/admin/layout/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/metronic/global/plugins/bootstrap-toastr/toastr.min.css"/>
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/metronic/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css">
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery.min.js" type="text/javascript"></script>
</head>
<body class="page-header-fixed page-quick-sidebar-over-content">
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo base_url(); ?>" target="_blank">
                <img style="height: 20px;" src="<?php echo isset($settings["logo"])?base_url().$settings["logo"]:""; ?>" alt="<?=isset($settings["company"])?$settings["company"]:""?>" title="<?=isset($settings["company"])?$settings["company"]:""?>" class="logo-default">
            </a>
            <div class="menu-toggler sidebar-toggler hide">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <a href="<?php echo base_url();?>" target="_blank" class="btn btn-link font-yellow navbar-btn"><i class="icon-screen-desktop"></i> <?php echo _l('View site',$this); ?></a>
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <?php if($this->session->userdata('avatar')){ ?> <img alt="" class="img-circle" src="<?=base_url().$this->session->userdata('avatar')?>"/><?php } ?>
					<span class="username username-hide-on-mobile">
					<?=$this->session->userdata('username')?> </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <?php if($this->session->userdata('group')==1){ ?>
                            <li><a href="<?php echo base_url(); ?>admin/settings"><i class="icon-settings"></i><?=_l('Settings',$this);?></a></li>
                        <?php } ?>
                        <li><a href="<?php echo APPOINTMENT_ADMIN_URL; ?>accountSetting"><i class="icon-user"></i><?=_l('Account Setting',$this);?></a></li>
                        <li class="divider">
                        <li><a href="<?php echo base_url(); ?>admin-sign/logout"><i class="icon-key"></i><?=_l('Log Out',$this);?></a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <br>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <form id="" class="sidebar-search">

                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>

                <li <?=($page == "home")?'class="star active"':''?>>
                    <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>">
                        <i class="icon-home"></i>
                        <span class="title"><?php echo _l('Home',$this); ?></span>
                        <?php if($page == "home"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
                <li <?=($page == "providers")?'class="star active"':''?>>
                    <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>providers">
                        <i class="icon-docs"></i>
                        <span class="title"><?=_l("Providers",$this)?></span>
                        <?php if($page == "providers"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
                <?php //if(isset($provider_data)){ ?>
                <?php if($this->session->userdata("provider_name")){ ?>
                    <li <?=(isset($provider_data))?'class="star active"':''?>>
                        <a href="javascript:;">
                            <i class="icon-pin"></i>
                            <span class="title"><?php echo $this->session->userdata("provider_name"); ?></span>
                            <?php if(isset($provider_data)){ ?>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            <?php }else{ ?>
                                <span class="arrow"></span>
                            <?php } ?>
                        </a>
                        <ul class="sub-menu">
                            <li <?=($page == "dashboard")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>dashboard">
                                    <i class="icon-speedometer"></i>
                                    <span class="title"><?php echo _l('Dashboard',$this); ?></span>
                                </a>
                            </li>
                            <li <?php echo in_array($page,array('reservation_calendar','reservation_list'))?'class="star active open"':''?>>
                                <a href="javascript:;">
                                    <i class="icon-list"></i>
                                    <span class="title"><?php echo _l('Appointments',$this); ?></span>
                                    <?php if(in_array($page,array('reservation_calendar','reservation_new','reservation_now','reservation_expired','reservation_closed'))){ ?>
                                        <span class="selected"></span>
                                        <span class="arrow open"></span>
                                    <?php }else{ ?>
                                        <span class="arrow"></span>
                                    <?php } ?>
                                </a>
                                <ul class="sub-menu">
                                    <li <?php echo ($page == "reservation_calendar")?'class="star active"':''?>><a href="<?php echo APPOINTMENT_ADMIN_URL; ?>calendar"><span class="title"><?php echo _l('Calendar',$this); ?></span></a></li>
                                    <li <?php echo ($page == "reservation_list")?'class="star active"':''?>><a href="<?php echo APPOINTMENT_ADMIN_URL; ?>reservation?min_app_date=<?php echo my_int_date(time()); ?>&filters=unclosed"><span class="title"><?php echo _l('List',$this); ?></span></a></li>
                                </ul>
                            </li>
                            <?php if($this->paypal_addon){ ?>
                                <li <?=($page == "provider_paypal_payments")?'class="star active"':''?>>
                                    <a href="<?php echo PAYPAL_ADMIN_URL; ?>providerPayments">
                                        <i class="fa fa-paypal"></i>
                                        <span class="title"><?php echo _l('PayPal Payments',$this); ?></span>
                                    </a>
                                </li>
                            <?php } ?>
                            <li <?=($page == "holidays")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>holidays/">
                                    <i class="icon-calendar"></i>
                                    <span class="title"><?php echo _l('Holidays',$this); ?></span>
                                    <?php if($page == "holidays"){ ?>
                                        <span class="selected"></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li <?=($page == "service")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>services/">
                                    <i class="icon-briefcase"></i>
                                    <span class="title"><?php echo _l('Services',$this); ?></span>
                                    <?php if($page == "service"){ ?>
                                        <span class="selected"></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li <?=($page == "extra_fields")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>extraFields/">
                                    <i class="icon-paper-clip"></i>
                                    <span class="title"><?php echo _l('Extra fields',$this); ?></span>
                                    <?php if($page == "extra_fields"){ ?>
                                        <span class="selected"></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li <?=($page == "portable_btn")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>portableBtn/">
                                    <i class="icon-mouse"></i>
                                    <span class="title"><?php echo _l('Booking button',$this); ?></span>
                                    <?php if($page == "portable_btn"){ ?>
                                        <span class="selected"></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li <?=($page == "provider_manager")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>myProviderManager">
                                    <i class="icon-users"></i>
                                    <span class="title"><?php echo _l('Managers',$this); ?></span>
                                </a>
                            </li>
                            <li <?=($page == "provider")?'class="star active"':''?>>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>myProviderEdit">
                                    <i class="icon-pencil"></i>
                                    <span class="title"><?php echo _l('Provider Details',$this); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php if($this->paypal_addon){ ?>
                    <li <?=($page == "paypal_payments")?'class="star active"':''?>>
                        <a href="<?php echo PAYPAL_ADMIN_URL; ?>payments">
                            <i class="fa fa-paypal"></i>
                            <span class="title"><?php echo _l('PayPal Payments',$this); ?></span>
                            <?php if($page == "paypal_payments"){ ?>
                                <span class="selected"></span>
                            <?php } ?>
                        </a>
                    </li>
                <?php } ?>
                <li <?=($page == "user")?'class="star active"':''?>>
                    <a href="<?php echo ADMIN_URL; ?>user">
                        <i class="icon-users"></i>
                        <span class="title"><?=_l("Members",$this)?></span>
                        <?php if($page == "user"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
                <li <?=($page == "language")?'class="star active"':''?>>
                    <a href="<?php echo ADMIN_URL; ?>language">
                        <i class="icon-globe"></i>
                        <span class="title"><?=_l("Languages",$this)?></span>
                        <?php if($page == "language"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
                <li <?=($page == "menu")?'class="star active"':''?>>
                    <a href="<?php echo ADMIN_URL; ?>menu">
                        <i class="icon-directions"></i>
                        <span class="title"><?=_l("Navbar",$this)?></span>
                        <?php if($page == "setting"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
                <li <?php echo in_array($page,array('setting','date_setting','seo_setting','contact_setting','mail_setting','appointment_setting','paypal_setting'))?'class="star active open"':''?>>
                    <a href="javascript:;">
                        <i class="icon-settings"></i>
                        <span class="title"><?php echo _l('Settings',$this); ?></span>
                        <?php if(in_array($page,array('setting','seo_setting','contact_setting','mail_setting','appointment_setting','paypal_setting'))){ ?>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        <?php }else{ ?>
                            <span class="arrow"></span>
                        <?php } ?>
                    </a>
                    <ul class="sub-menu">
                        <li <?=($page == "setting")?'class="star active"':''?>>
                            <a href="<?php echo ADMIN_URL; ?>settings">
                                <span class="title"><?php echo _l('General',$this); ?></span>
                            </a>
                        </li>
                        <li <?=($page == "date_setting")?'class="star active"':''?>>
                            <a href="<?php echo ADMIN_URL; ?>settings/date-and-time">
                                <span class="title"><?php echo _l('Date & Time',$this); ?></span>
                            </a>
                        </li>
                        <li <?=($page == "seo_setting")?'class="star active"':''?>>
                            <a href="<?php echo ADMIN_URL; ?>settings/seo">
                                <span class="title"><?php echo _l('SEO optimise',$this); ?></span>
                            </a>
                        </li>
                        <li <?=($page == "contact_setting")?'class="star active"':''?>>
                            <a href="<?php echo ADMIN_URL; ?>settings/contact">
                                <span class="title"><?php echo _l('Contact info',$this); ?></span>
                            </a>
                        </li>
                        <li <?=($page == "mail_setting")?'class="star active"':''?>>
                            <a href="<?php echo ADMIN_URL; ?>settings/mail">
                                <span class="title"><?php echo _l('Send mail',$this); ?></span>
                            </a>
                        </li>
                        <li <?=($page == "appointment_setting")?'class="star active"':''?>>
                            <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>settings">
                                <span class="title"><?php echo _l('Appointment',$this); ?></span>
                            </a>
                        </li>
                        <?php if($this->paypal_addon){ ?>
                            <li <?=($page == "paypal_setting")?'class="star active"':''?>>
                                <a href="<?php echo PAYPAL_ADMIN_URL; ?>settings">
                                    <span class="title"><?php echo _l('PayPal',$this); ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li <?=($page == "account")?'class="star active"':''?>>
                    <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>accountSetting">
                        <i class="icon-user-following"></i>
                        <span class="title"><?=_l("Account",$this)?></span>
                        <?php if($page == "account"){ ?>
                            <span class="selected"></span>
                        <?php } ?>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                <?php echo isset($provider_data)?$provider_data['provider_name'].' -':''; ?> <?php echo $title; ?> <small><?php echo isset($sub_title)?$sub_title:''; ?></small>
            </h3>
            <?php if(isset($breadcrumb) && count($breadcrumb)!=0){ ?>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <?php if(isset($provider_data)){ ?>
                                <i class="icon-speedometer"></i>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>dashboard"><?php echo $provider_data['provider_name']; ?></a>
                            <?php }else{ ?>
                                <i class="icon-home"></i>
                                <a href="<?php echo APPOINTMENT_ADMIN_URL; ?>"><?php echo _l('Home', $this); ?></a>
                            <?php } ?>
                        </li>
                        <?php foreach($breadcrumb as $item){ ?>
                        <li>
                            <?php if(isset($_SESSION['language']['rtl']) && $_SESSION['language']['rtl']==1){ ?>
                                <i class="fa fa-angle-left"></i>
                            <?php }else{ ?>
                                <i class="fa fa-angle-right"></i>
                            <?php } ?>
                            <?php if(isset($item['url'])){ ?>
                                <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                            <?php }else{ ?>
                                <span><?php echo $item['title']; ?></span>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php if(isset($breadcrumb_options) && count($breadcrumb_options)!=0){ ?>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <?php foreach($breadcrumb_options as $item){ ?>
                                <?php if(!isset($item['sub_links'])){ ?>
                                    <a href="<?php echo $item['url']; ?>" class="btn btn-fit-height grey-salt <?php echo (isset($item['active']) && $item['active']==1)?"active":""; ?>" <?php echo isset($item['target'])?'target="'.$item['target'].'"':''; ?>>
                                        <?php if(isset($item['icon'])){ ?>
                                            <i class="<?php echo $item['icon']; ?>"></i>
                                        <?php } ?>
                                        <?php echo $item['title']; ?>
                                    </a>
                                <?php }else{ ?>
                                    <div class="btn-group">
                                        <button class="btn btn-fit-height grey-salt dropdown-toggle <?php echo (isset($item['active']) && $item['active']==1)?"active":""; ?>" type="button" data-toggle="dropdown" data-close-others="true" data-hover="dropdown" data-delay="1000">
                                            <?php if(isset($item['icon'])){ ?>
                                                <i class="<?php echo $item['icon']; ?>"></i>
                                            <?php } ?>
                                            <?php echo $item['title']; ?> <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <?php foreach($item['sub_links'] as $sub_item){ ?>
                                                <li>
                                                    <a href="<?php echo $sub_item['url']; ?>">
                                                        <?php if(isset($sub_item['icon'])){ ?>
                                                            <i class="<?php echo $sub_item['icon']; ?>"></i>
                                                        <?php } ?>
                                                        <?php echo $sub_item['title']; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if(isset($admin_permission_warning)){ ?>
                <div class="note note-warning">
                    <p>
                        <i class="icon-flag font-red"></i>
                        <strong class="font-red"><?php echo _l('Admin Permission!', $this); ?></strong>
                        <?php echo $admin_permission_warning; ?></p>
                </div>
            <?php } ?>
            <?php if(isset($page_tabs) && count($page_tabs)!=0){ ?>
                <div class="tabbable-line">
                    <ul class="nav nav-tabs nav-justified">
                        <?php foreach($page_tabs as $item){ ?>
                            <li <?php echo (isset($item['active']) && $item['active']==1)?'class="active"':""; ?>>
                                <a href="<?php echo isset($item['url'])?$item['url']:'#'; ?>">
                                    <?php if(isset($item['icon'])){ ?>
                                        <i class="<?php echo $item['icon']; ?>"></i>
                                    <?php } ?>
                                    <?php echo $item['title']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <br>
            <?php } ?>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS -->
            <?php if($this->session->flashdata('static_error')){ ?>
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close" type="button"></button>
                    <h4 class="alert-heading"><?php echo _l('Error',$this); ?>!</h4>
                    <?php echo $this->session->flashdata('static_error'); ?>
                </div>
            <?php } ?>
            <?php echo isset($content)?$content:''; ?>
            <!-- END DASHBOARD STATS -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2016 &copy; Produced by <a href="http://codecanyon.net/item/appointment-management-system-nodaps/16197805" title="Purchase just $24">Chic Theme</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->

<div class="modal fade" id="askStaticModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-warning">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title text-warning"><i class="fa fa-warning"></i> <?php echo _l("Confirmation!",$this); ?></div>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l("No",$this); ?></button>
                <a href="#" class="btn btn-warning btn-accept"><?php echo _l("Yes",$this); ?></a>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?php echo base_url()?>assets/metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/metronic/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/metronic/admin/layout/scripts/layout.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
    });
</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-inputmask.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<!--script for this page-->

<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<script>
    $(function(){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        <?php if($this->session->flashdata('success')){ ?>
        toastr['success']("<?php echo $this->session->flashdata('success'); ?>", "<?php echo _l("Success",$this); ?>");
        <?php } ?>
        <?php if($this->session->flashdata('error')){ ?>
        toastr['error']("<?php echo $this->session->flashdata('error'); ?>", "<?php echo _l("Error",$this); ?>");
        <?php } ?>
        <?php if($this->session->flashdata('message')){ ?>
        toastr['info']("<?php echo $this->session->flashdata('message'); ?>", "<?php echo _l("Info",$this); ?>");
        <?php } ?>
    });
</script>
<script src="<?php echo base_url(); ?>assets/metronic/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
<script>
    $(function(){
        $('.btn-ask').confirmation({
            container: 'body',
            btnOkClass: 'btn-xs btn-success',
            btnCancelClass: 'btn-xs btn-danger',
            singleton: true,
            popout: true,
            btnOkIcon: 'fa fa-check',
            btnCancelIcon: 'fa fa-times',
            placement: 'left',
            title:$(this).attr('data-msg'),
            btnOkLabel: '<?php echo _l("Yes please!",$this); ?>',
            btnCancelLabel: '<?php echo _l("No Stop!",$this); ?>'
        });
    });
</script>
</body>
</html>
