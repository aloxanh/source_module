@extends('layouts.appfront')

@section('content')

<div class="page-content">
    <div class="page-header">
        <h1>
            Profile
            <!-- <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>

                </small> -->
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->


            <div class="hide">
                <div id="user-profile-1" class="user-profile row">
                    <div class="col-xs-12 col-sm-3 center">
                        <div>
                            <span class="profile-picture">
                                <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="assets/images/avatars/profile-pic.jpg">
                            </span>

                            <div class="space-4"></div>

                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                <div class="inline position-relative">
                                    <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                        <i class="ace-icon fa fa-circle light-green"></i>
                                        &nbsp;
                                        <span class="white">Alex M. Doe</span>
                                    </a>

                                    <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                        <li class="dropdown-header"> Change Status </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-circle green"></i>
                                                &nbsp;
                                                <span class="green">Available</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-circle red"></i>
                                                &nbsp;
                                                <span class="red">Busy</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ace-icon fa fa-circle grey"></i>
                                                &nbsp;
                                                <span class="grey">Invisible</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="space-6"></div>

                        <div class="profile-contact-info">
                            <div class="profile-contact-links align-left">
                                <a href="#" class="btn btn-link">
                                    <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                    Add as a friend
                                </a>

                                <a href="#" class="btn btn-link">
                                    <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                    Send a message
                                </a>

                                <a href="#" class="btn btn-link">
                                    <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                    www.alexdoe.com
                                </a>
                            </div>

                            <div class="space-6"></div>

                            <div class="profile-social-links align-center">
                                <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                    <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                </a>

                                <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                    <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                </a>

                                <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                    <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                </a>
                            </div>
                        </div>

                        <div class="hr hr12 dotted"></div>

                        <div class="clearfix">
                            <div class="grid2">
                                <span class="bigger-175 blue">25</span>

                                <br>
                                Followers
                            </div>

                            <div class="grid2">
                                <span class="bigger-175 blue">12</span>

                                <br>
                                Following
                            </div>
                        </div>

                        <div class="hr hr16 dotted"></div>
                    </div>

                    <div class="col-xs-12 col-sm-9">
                        <div class="center">
                            <span class="btn btn-app btn-sm btn-light no-hover">
                                <span class="line-height-1 bigger-170 blue"> 1,411 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Views </span>
                            </span>

                            <span class="btn btn-app btn-sm btn-yellow no-hover">
                                <span class="line-height-1 bigger-170"> 32 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Followers </span>
                            </span>

                            <span class="btn btn-app btn-sm btn-pink no-hover">
                                <span class="line-height-1 bigger-170"> 4 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Projects </span>
                            </span>

                            <span class="btn btn-app btn-sm btn-grey no-hover">
                                <span class="line-height-1 bigger-170"> 23 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Reviews </span>
                            </span>

                            <span class="btn btn-app btn-sm btn-success no-hover">
                                <span class="line-height-1 bigger-170"> 7 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Albums </span>
                            </span>

                            <span class="btn btn-app btn-sm btn-primary no-hover">
                                <span class="line-height-1 bigger-170"> 55 </span>

                                <br>
                                <span class="line-height-1 smaller-90"> Contacts </span>
                            </span>
                        </div>

                        <div class="space-12"></div>

                        <div class="profile-user-info profile-user-info-striped">
                            <div class="profile-info-row">
                                <div class="profile-info-name"> Username </div>

                                <div class="profile-info-value">
                                    <span class="editable editable-click" id="username">alexdoe</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Location </div>

                                <div class="profile-info-value">
                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                    <span class="editable editable-click" id="country">Netherlands</span>
                                    <span class="editable editable-click" id="city">Amsterdam</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Age </div>

                                <div class="profile-info-value">
                                    <span class="editable editable-click" id="age">38</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Joined </div>

                                <div class="profile-info-value">
                                    <span class="editable editable-click" id="signup">2010/06/20</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> Last Online </div>

                                <div class="profile-info-value">
                                    <span class="editable editable-click" id="login">3 hours ago</span>
                                </div>
                            </div>

                            <div class="profile-info-row">
                                <div class="profile-info-name"> About Me </div>

                                <div class="profile-info-value">
                                    <span class="editable editable-click" id="about">Editable as WYSIWYG</span>
                                </div>
                            </div>
                        </div>

                        <div class="space-20"></div>

                        <div class="widget-box transparent">
                            <div class="widget-header widget-header-small">
                                <h4 class="widget-title blue smaller">
                                    <i class="ace-icon fa fa-rss orange"></i>
                                    Recent Activities
                                </h4>

                                <div class="widget-toolbar action-buttons">
                                    <a href="#" data-action="reload">
                                        <i class="ace-icon fa fa-refresh blue"></i>
                                    </a>
                                    &nbsp;
                                    <a href="#" class="pink">
                                        <i class="ace-icon fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main padding-8">
                                    <div id="profile-feed-1" class="profile-feed ace-scroll" style="position: relative;">
                                        <div class="scroll-track scroll-active" style="display: block; height: 200px;">
                                            <div class="scroll-bar" style="height: 63px; top: 0px;"></div>
                                        </div>
                                        <div class="scroll-content" style="max-height: 200px;">
                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png">
                                                    <a class="user" href="#"> Alex Doe </a>
                                                    changed his profile photo.
                                                    <a href="#">Take a look</a>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        an hour ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <img class="pull-left" alt="Susan Smith's avatar" src="assets/images/avatars/avatar1.png">
                                                    <a class="user" href="#"> Susan Smith </a>

                                                    is now friends with Alex Doe.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        2 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>
                                                    joined
                                                    <a href="#">Country Music</a>

                                                    group.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        5 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>
                                                    uploaded a new photo.
                                                    <a href="#">Take a look</a>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        5 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <img class="pull-left" alt="David Palms's avatar" src="assets/images/avatars/avatar4.png">
                                                    <a class="user" href="#"> David Palms </a>

                                                    left a comment on Alex's wall.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        8 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>
                                                    published a new blog post.
                                                    <a href="#">Read now</a>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        11 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png">
                                                    <a class="user" href="#"> Alex Doe </a>

                                                    upgraded his skills.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        12 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>

                                                    logged in.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        12 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>

                                                    logged out.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="profile-activity clearfix">
                                                <div>
                                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                    <a class="user" href="#"> Alex Doe </a>

                                                    logged in.
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        16 hours ago
                                                    </div>
                                                </div>

                                                <div class="tools action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hr hr2 hr-double"></div>

                        <div class="space-6"></div>

                        <div class="center">
                            <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                <span class="bigger-110">View more activities</span>

                                <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hide">
                <div id="user-profile-2" class="user-profile">
                    <div class="tabbable">
                        <ul class="nav nav-tabs padding-18">
                            <li class="active">
                                <a data-toggle="tab" href="#home" aria-expanded="true">
                                    <i class="green ace-icon fa fa-user bigger-120"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#feed" aria-expanded="false">
                                    <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                    Activity Feed
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#friends" aria-expanded="false">
                                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                                    Friends
                                </a>
                            </li>

                            <li class="">
                                <a data-toggle="tab" href="#pictures" aria-expanded="false">
                                    <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                    Pictures
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content no-border padding-24">
                            <div id="home" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 center">
                                        <span class="profile-picture">
                                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/images/avatars/profile-pic.jpg">
                                        </span>

                                        <div class="space space-4"></div>

                                        <a href="#" class="btn btn-sm btn-block btn-success">
                                            <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                            <span class="bigger-110">Add as a friend</span>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-block btn-primary">
                                            <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                            <span class="bigger-110">Send a message</span>
                                        </a>
                                    </div><!-- /.col -->

                                    <div class="col-xs-12 col-sm-9">
                                        <h4 class="blue">
                                            <span class="middle">Alex M. Doe</span>

                                            <span class="label label-purple arrowed-in-right">
                                                <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                online
                                            </span>
                                        </h4>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Username </div>

                                                <div class="profile-info-value">
                                                    <span>alexdoe</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Location </div>

                                                <div class="profile-info-value">
                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                    <span>Netherlands</span>
                                                    <span>Amsterdam</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Age </div>

                                                <div class="profile-info-value">
                                                    <span>38</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Joined </div>

                                                <div class="profile-info-value">
                                                    <span>2010/06/20</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Last Online </div>

                                                <div class="profile-info-value">
                                                    <span>3 hours ago</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr-8 dotted"></div>

                                        <div class="profile-user-info">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Website </div>

                                                <div class="profile-info-value">
                                                    <a href="#" target="_blank">www.alexdoe.com</a>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="#">Find me on Facebook</a>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">
                                                    <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                </div>

                                                <div class="profile-info-value">
                                                    <a href="#">Follow me on Twitter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space-20"></div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                    Little About Me
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <p>
                                                        My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                    </p>
                                                    <p>
                                                        Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                    </p>
                                                    <p>
                                                        The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                    </p>
                                                    <p>
                                                        Thanks for visiting my profile.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-small header-color-blue2">
                                                <h4 class="widget-title smaller">
                                                    <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                    My Skills
                                                </h4>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-16">
                                                    <div class="clearfix">
                                                        <div class="grid3 center">
                                                            <div class="easy-pie-chart percentage" data-percent="45" data-color="#CA5952" style="height: 72px; width: 72px; line-height: 71px; color: rgb(202, 89, 82);">
                                                                <span class="percent">45</span>%
                                                                <canvas height="72" width="72"></canvas></div>

                                                            <div class="space-2"></div>
                                                            Graphic Design
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B" style="height: 72px; width: 72px; line-height: 71px; color: rgb(89, 168, 75);">
                                                                <span class="percent">90</span>%
                                                                <canvas height="72" width="72"></canvas></div>

                                                            <div class="space-2"></div>
                                                            HTML5 &amp; CSS3
                                                        </div>

                                                        <div class="grid3 center">
                                                            <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF" style="height: 72px; width: 72px; line-height: 71px; color: rgb(149, 133, 191);">
                                                                <span class="percent">80</span>%
                                                                <canvas height="72" width="72"></canvas></div>

                                                            <div class="space-2"></div>
                                                            Javascript/jQuery
                                                        </div>
                                                    </div>

                                                    <div class="hr hr-16"></div>

                                                    <div class="profile-skills">
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width:80%">
                                                                <span class="pull-left">HTML5 &amp; CSS3</span>
                                                                <span class="pull-right">80%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" style="width:72%">
                                                                <span class="pull-left">Javascript &amp; jQuery</span>

                                                                <span class="pull-right">72%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                <span class="pull-left">PHP &amp; MySQL</span>

                                                                <span class="pull-right">70%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                <span class="pull-left">Wordpress</span>

                                                                <span class="pull-right">50%</span>
                                                            </div>
                                                        </div>

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                <span class="pull-left">Photoshop</span>

                                                                <span class="pull-right">38%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /#home -->

                            <div id="feed" class="tab-pane">
                                <div class="profile-feed row">
                                    <div class="col-sm-6">
                                        <div class="profile-activity clearfix">
                                            <div>
                                                <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png">
                                                <a class="user" href="#"> Alex Doe </a>
                                                changed his profile photo.
                                                <a href="#">Take a look</a>

                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    an hour ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <img class="pull-left" alt="Susan Smith's avatar" src="assets/images/avatars/avatar1.png">
                                                <a class="user" href="#"> Susan Smith </a>

                                                is now friends with Alex Doe.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    2 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>
                                                joined
                                                <a href="#">Country Music</a>

                                                group.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    5 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>
                                                uploaded a new photo.
                                                <a href="#">Take a look</a>

                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    5 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <img class="pull-left" alt="David Palms's avatar" src="assets/images/avatars/avatar4.png">
                                                <a class="user" href="#"> David Palms </a>

                                                left a comment on Alex's wall.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    8 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->

                                    <div class="col-sm-6">
                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>
                                                published a new blog post.
                                                <a href="#">Read now</a>

                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    11 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png">
                                                <a class="user" href="#"> Alex Doe </a>

                                                upgraded his skills.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    12 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>

                                                logged in.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    12 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>

                                                logged out.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    16 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="profile-activity clearfix">
                                            <div>
                                                <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                <a class="user" href="#"> Alex Doe </a>

                                                logged in.
                                                <div class="time">
                                                    <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                    16 hours ago
                                                </div>
                                            </div>

                                            <div class="tools action-buttons">
                                                <a href="#" class="blue">
                                                    <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                </a>

                                                <a href="#" class="red">
                                                    <i class="ace-icon fa fa-times bigger-125"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="space-12"></div>

                                <div class="center">
                                    <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                        <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                        <span class="bigger-110">View more activities</span>

                                        <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div><!-- /#feed -->

                            <div id="friends" class="tab-pane">
                                <div class="profile-users clearfix">
                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar4.png" alt="Bob Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Bob Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Content Editor</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar1.png" alt="Rose Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Rose Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Graphic Designer</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 30 min ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar.png" alt="Jim Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-busy"></span>
                                                        Jim Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">SEO &amp; Advertising</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                                        <span class="grey"> 1 hour ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar5.png" alt="Alex Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-idle"></span>
                                                        Alex Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Marketing</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class=""> 40 minutes idle </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar2.png" alt="Phil Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Phil Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Public Relations</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 2 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar3.png" alt="Susan Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-online"></span>
                                                        Susan Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">HR Management</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                        <span class="green"> 20 mins ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar1.png" alt="Jennifer Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Jennifer Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Graphic Designer</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 2 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv memberdiv">
                                        <div class="inline pos-rel">
                                            <div class="user">
                                                <a href="#">
                                                    <img src="assets/images/avatars/avatar3.png" alt="Alexa Doe's avatar">
                                                </a>
                                            </div>

                                            <div class="body">
                                                <div class="name">
                                                    <a href="#">
                                                        <span class="user-status status-offline"></span>
                                                        Alexa Doe
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="popover">
                                                <div class="arrow"></div>

                                                <div class="popover-content">
                                                    <div class="bolder">Accounting</div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                        <span class="grey"> 4 hours ago </span>
                                                    </div>

                                                    <div class="hr dotted hr-8"></div>

                                                    <div class="tools action-buttons">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr hr10 hr-double"></div>

                                <ul class="pager pull-right">
                                    <li class="previous disabled">
                                        <a href="#">← Prev</a>
                                    </li>

                                    <li class="next">
                                        <a href="#">Next →</a>
                                    </li>
                                </ul>
                            </div><!-- /#friends -->

                            <div id="pictures" class="tab-pane">
                                <ul class="ace-thumbnails">
                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-1.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-3.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-4.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-5.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-6.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-1.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#" data-rel="colorbox">
                                            <img alt="150x150" src="assets/images/gallery/thumb-2.jpg">
                                            <div class="text">
                                                <div class="inner">Sample Caption on Hover</div>
                                            </div>
                                        </a>

                                        <div class="tools tools-bottom">
                                            <a href="#">
                                                <i class="ace-icon fa fa-link"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-paperclip"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-pencil"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-times red"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /#pictures -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                @include('partials.alert')
                <br>
                <div id="user-profile-3" class="user-profile row">

                    <div class="col-sm-offset-1 col-sm-10">

                        <div class="form-horizontal">


                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-16">
                                    <li class="">
                                        <a data-toggle="tab" href="#edit-basic" aria-expanded="false">
                                            <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                            Thông tin cơ bản
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a data-toggle="tab" href="#edit-password" aria-expanded="true">
                                            <i class="blue ace-icon fa fa-key bigger-125"></i>
                                            Đổi mật khẩu
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content profile-edit-tab-content">
                                    <div id="edit-basic" class="tab-pane">
                                        <h4 class="header blue bolder smaller"></h4>

                                        <div class="row">


                                            <div class="col-xs-12 col-sm-8">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Tên đăng nhập</label>

                                                    <div class="col-sm-8">
                                                        <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" readonly placeholder="Username" value="{{Auth()->user()->username}}">
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Tên</label>

                                                    <div class="col-sm-8">
                                                        <input class="col-xs-12 col-sm-10" type="text" id="form-field-first" readonly placeholder="Tên" value="{{Auth()->user()->name}}">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="edit-password" class="tab-pane active">
                                        <form action="{{url('changepass')}}" method="post">

                                            @csrf
                                            <div class="space-10"></div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="current-password">Mật khẩu cũ</label>

                                                <div class="col-sm-9">
                                                    <input type="password" id="current-password" required name="current-password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="password">Mật khẩu mới</label>

                                                <div class="col-sm-9">
                                                    <input type="password" name="password" required id="password">
                                                </div>
                                            </div>

                                            <div class="space-4"></div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="password_confirmation">Nhập lại mật khẩu mới</label>

                                                <div class="col-sm-9">
                                                    <input type="password" name="password_confirmation" required id="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="clearfix form-actions">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button class="btn btn-info" type="submit">
                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                        Lưu
                                                    </button>

                                                    &nbsp; &nbsp;
                                                    <button class="btn" type="reset">
                                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                                        Xóa
                                                    </button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                            </div>



                        </div>
                    </div> <!-- /.span -->
                </div><!-- /.user-profile -->
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div>
</div>


<style>
    /* fix khoảng cách bên dưới table so với phân trang */

    .table {
        margin-bottom: 0px;
    }
</style>
@endsection
@section('script')


@endsection