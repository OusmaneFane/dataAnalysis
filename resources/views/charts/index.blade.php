@extends('layouts.base')
@section('sidebar')

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="/theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="/theme-assets/images/logo/logo.png"/>
            <h3 class="brand-text">Data Analysis</h3></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=""><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="active nav-item"><a href="charts.html"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
        </li>
        <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Icons</span></a>
        </li>
        <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Cards</span></a>
        </li>
        <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Buttons</span></a>
        </li>
        <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
        </li>
        <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
        </li>
        <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
        </li>
        <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
        </li>
      </ul>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank">Download PRO!</a>
    <div class="navigation-background"></div>
  </div>

@endsection
@section('content')

<div class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">
            <div class="app-content content">
                <div class="content-wrapper">
                <div class="content-wrapper-before"></div>
                <div class="content-header row">
                </div>
                <div class="content-body"><!-- Chart -->
            <div class="row match-height">
            <div class="col-12">
                <div class="">
                    <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
                </div>
            </div>
            </div>
            <!-- Chart -->
            <!-- eCommerce statistic -->
            <section id="chartjs-bar-charts">
                <!-- Column Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Column Chart</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                        <div class="height-400">
                                    <canvas id="column-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                        <div class="height-400">
                                    <canvas id="bar-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // Bar charts section end -->

            <!-- line chart section start -->
            <section id="chartjs-line-charts">
                <!-- Line Chart -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Line Chart</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body chartjs">
                                        <div class="height-500">
                                    <canvas id="line-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // line chart section end -->

            <!-- Pie charts section start -->
            <section id="chartjs-pie-charts">
                <div class="row">
                    <!-- Simple Pie Chart -->
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Pie Chart</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                        <div class="height-400">
                                    <canvas id="simple-pie-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Simple Doughnut Chart -->
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Doughnut Chart</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                        <div class="height-400">
                                    <canvas id="simple-doughnut-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                </div>
                </div>
            </div>
</div>

@endsection

