@extends('nv_layout')
@section('nv_content')


<h2 align="center">Chào mừng bạn đến với trang quản lý chuỗi nhà hàng Ender</h2>

<!-- //market-->
{{-- <div class="market-updates">
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-2">
        <div class="col-md-4 market-update-right">
            <i class="fa fa-eye"> </i>
        </div>
        <div class="col-md-8 market-update-left">
        <h4>Lượt xem</h4>
        <h3>13,500</h3>
        <p>Lượt</p>
    </div>
    <div class="clearfix"> </div>
    </div>
</div>
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-1">
        <div class="col-md-4 market-update-right">
            <i class="fa fa-users" ></i>
        </div>
        <div class="col-md-8 market-update-left">
        <h4>Khách</h4>
            <h3>1,250</h3>
            <p>Khách</p>
        </div>
    <div class="clearfix"> </div>
    </div>
</div>
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-3">
        <div class="col-md-4 market-update-right">
            <i class="fa fa-usd"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Đã bán</h4>
            <h3>12,500</h3>
            <p>Đĩa thức ăn</p>
        </div>
    <div class="clearfix"> </div>
    </div>
</div>
<div class="col-md-3 market-update-gd">
    <div class="market-update-block clr-block-4">
        <div class="col-md-4 market-update-right">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </div>
        <div class="col-md-8 market-update-left">
            <h4>Đã đặt</h4>
            <h3>1,500</h3>
            <p>Bàn</p>
        </div>
    <div class="clearfix"> </div>
    </div>
</div>
<div class="clearfix"> </div>
</div>
<!-- //market-->
<div class="row">
<div class="panel-body">
    <div class="col-md-12 w3ls-graph">
        <!--agileinfo-grap-->
            <div class="agileinfo-grap">
                <div class="agileits-box">
                    <header class="agileits-box-header clearfix">
                        <h3>Thống kê lượt truy cập</h3>
                            <div class="toolbar">


                            </div>
                    </header>
                    <div class="agileits-box-body clearfix">
                        <div id="hero-area"></div>
                    </div>
                </div>
            </div>
<!--//agileinfo-grap-->

    </div>
</div>
</div> --}}
<div class="agil-info-calendar">
<!-- calendar -->
<div class="col-md-6 agile-calendar">
<div class="calendar-widget">
    <div class="panel-heading ui-sortable-handle">
        <span class="panel-icon">
        <i class="fa fa-calendar-o"></i>
        </span>
        <span class="panel-title"> Lịch</span>
    </div>
    <!-- grids -->
        <div class="agile-calendar-grid">
            <div class="page">

                <div class="w3l-calendar-left">
                    <div class="calendar-heading">

                    </div>
                    <div class="monthly" id="mycalendar"></div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
</div>
</div>
<!-- //calendar -->
<div class="col-md-6 w3agile-notifications">
    <img src="{{asset('public/backend/images/nhahang.jpg')}}" alt="Nhà Hàng Ender"
    style="width:500px;height:600px;">
</div>
{{--<div class="notifications">
    <!--notification start-->

        <header class="panel-heading">
            Thông báo
        </header>
        <div class="notify-w3ls">
            <div class="alert alert-info clearfix">
                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                        <li class="pull-right notification-time">1 min ago</li>
                    </ul>
                    <p>
                        Urgent meeting for next proposal
                    </p>
                </div>
            </div>
            <div class="alert alert-danger">
                <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                        <li class="pull-right notification-time">7 Hours Ago</li>
                    </ul>
                    <p>
                        Very cool photo jack
                    </p>
                </div>
            </div>
            <div class="alert alert-success ">
                <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender">You have 5 message unread</li>
                        <li class="pull-right notification-time">1 min ago</li>
                    </ul>
                    <p>
                        <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                    </p>
                </div>
            </div>
            <div class="alert alert-warning ">
                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                        <li class="pull-right notification-time">5 Days Ago</li>
                    </ul>
                    <p>
                        Next 5 July Thursday is the last day
                    </p>
                </div>
            </div>
            <div class="alert alert-info clearfix">
                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                <div class="notification-info">
                    <ul class="clearfix notification-meta">
                        <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                        <li class="pull-right notification-time">1 min ago</li>
                    </ul>
                    <p>
                        Urgent meeting for next proposal
                    </p>
                </div>
            </div>

        </div>

    <!--notification end-->
    </div>
</div>
<div class="clearfix"> </div>
</div>

<div class="agileits-w3layouts-stats">
        <div class="col-md-4 stats-info widget">
            <div class="stats-info-agileits">
                <div class="stats-title">
                    <h4 class="title">Browser Stats</h4>
                </div>
                <div class="stats-body">
                    <ul class="list-unstyled">
                        <li>GoogleChrome <span class="pull-right">85%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar green" style="width:85%;"></div>
                            </div>
                        </li>
                        <li>Firefox <span class="pull-right">35%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar yellow" style="width:35%;"></div>
                            </div>
                        </li>
                        <li>Internet Explorer <span class="pull-right">78%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar red" style="width:78%;"></div>
                            </div>
                        </li>
                        <li>Safari <span class="pull-right">50%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar blue" style="width:50%;"></div>
                            </div>
                        </li>
                        <li>Opera <span class="pull-right">80%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar light-blue" style="width:80%;"></div>
                            </div>
                        </li>
                        <li class="last">Others <span class="pull-right">60%</span>
                            <div class="progress progress-striped active progress-right">
                                <div class="bar orange" style="width:60%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 stats-info stats-last widget-shadow">
            <div class="stats-last-agile">
                <table class="table stats-table ">
                    <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>PRODUCT</th>
                            <th>STATUS</th>
                            <th>PROGRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lorem ipsum</td>
                            <td><span class="label label-success">In progress</span></td>
                            <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Aliquam</td>
                            <td><span class="label label-warning">New</span></td>
                            <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lorem ipsum</td>
                            <td><span class="label label-danger">Overdue</span></td>
                            <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Aliquam</td>
                            <td><span class="label label-info">Out of stock</span></td>
                            <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Lorem ipsum</td>
                            <td><span class="label label-success">In progress</span></td>
                            <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Aliquam</td>
                            <td><span class="label label-warning">New</span></td>
                            <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div> --}}
@endsection
