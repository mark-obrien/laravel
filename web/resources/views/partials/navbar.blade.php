<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle visible-xs collapsed pull-left"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <i class="md md-menu"></i>
            </button>
            <a class="navbar-brand" href="index.html">Blueprint</a>
            <button type="button" class="navbar-toggle pull-right" id="showRightPush">
                <i class="md md-more-vert"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../default/index.html">Admin</a></li>
                <li><a href="../sidebar-mini/index.html">Sidebar-Mini</a></li>
                <li class="active"><a href="../fixed/index.html">Fixed</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="index.html">Dashboard <span class="sr-only">(current)</span></a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="real-estate.html">Real Estate</a></li>
                        <li><a href="course.html">Learning</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="clients-listing.html">Clients</a></li>
                        <li><a href="finances.html">Financial</a></li>
                        <li><a href="email.html">Emails</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="charts.html">Charts</a></li>
                        <li><a href="maps.html">Maps</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="panels.html">Panels </a></li>
                        <li><a href="progress.html">Progress & Ratings</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                        <li><a href="icons.html">Icons &nbsp;<span class="label label-primary">1468</span></a></li>
                        <li><a href="jobs.html">Jobs</a></li>
                        <li><a href="account.html">Account</a></li>
                        <li><a href="marketing.html">Marketing</a></li>
                        <li><a href="error.html">Errors [404]</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li class="active dropdown">
                    <button class="btn btn-default navbar-btn btn-rounded"  data-toggle="dropdown">
                        <i class="md md-notifications"></i>
                    </button>
                    <div class="dropdown-menu dropdown-caret dropdown-caret-right  width-300">
                        <div class="dropdown-padding dropdown-headline">
                            <div class="media dropdown-head">
                                <div class="media-body media-middle">
                                    <h4 class="">Notifications <small class="bold text-muted">(3 new)</small></h4>
                                </div>
                                <div class="media-right media-middle">
                                    <a href="#" class="text-muted"><i class="md md-list"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-padding">
                            <div class="notification-block body-bg">
									<span class="notification-icon orange">
										<i class="md md-comment"></i>
									</span>
									<span class="notification-content">
										Andrew replied to <a href="#">"How do I use Grunt?"</a>
									</span>
                                <small>2 min ago</small>
                            </div>
                            <div class="notification-block body-bg">
									<span class="notification-icon green">
										<i class="md md-today"></i>
									</span>
									<span class="notification-content">
										Event <a href="#">SEO Conference</a> started
									</span>
                                <small>2 min ago</small>
                            </div>
                            <div class="notification-block body-bg">

									<span class="notification-icon primary">
										<i class="md md-timelapse"></i>
									</span>
									<span class="notification-content">
										2h 40min left to <a href="#">General Board Meeting</a>.
									</span>
                                <small>2 min ago</small>
                            </div>
                        </div>
                        <div class="dropdown-padding text-center">
                            <a href="#">View all</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <button class="btn btn-default-light navbar-btn btn-rounded"  data-toggle="dropdown">
                        <i class="md md-language"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-caret dropdown-caret-right dropdown-menu-auto">
                        <li><a href="#">English</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">French</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <button class="btn btn-primary navbar-btn btn-rounded"  data-toggle="dropdown">
                        <i class="md md-email"></i>
                    </button>
                    <div class="dropdown-menu dropdown-caret dropdown-caret-right width-300">
                        <div class="dropdown-padding">
                            <a href="#" class="notification-block">
									<span class="notification-icon primary">
										<i class="md md-email"></i>
									</span>
									<span class="notification-content">
										Hi Andrew,
										Is it ok to meet tomorrow?
									</span>
                                <small>2 min ago</small>
                            </a>
                        </div>
                        <div class="dropdown-padding">
                            <a href="#" class="notification-block">
									<span class="notification-icon primary">
										<i class="md md-email"></i>
									</span>
									<span class="notification-content">
										Hi Andrew,
										Is it ok to meet tomorrow?
									</span>
                                <small>2 min ago</small>
                            </a>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="user" id="showUserPush">
                        <img src="{{ url('images/guy.jpg') }}" width="40" alt="guy" class="img-circle"/>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>