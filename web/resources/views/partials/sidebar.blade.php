<!-- Sidebar Left -->
<div class="sidebar left-side" id="sidebar-left">
    <div class="sidebar-user">
        <div class="media sidebar-padding">
            <div class="media-left media-middle">
                <img src="/images/guy.jpg" alt="person" style="width: 60px" class="img-circle"/>
            </div>
            <div class="media-body media-middle">
                <a href="#" class="h4 margin-none">{{ $user->name }}</a>
                <ul class="list-unstyled list-inline margin-none">
                    <li><a href="account.html"><i class="md-person-outline"></i></a></li>
                    <li><a href="email.html"><i class="md-email"></i></a></li>
                    <li><a href="#"><i class="md-settings"></i></a></li>
                    <li><a href="login.html"><i class="md-exit-to-app"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
    <div class="nicescroll">
        <div class="wrapper" style="margin-bottom:90px">
            <ul class="nav nav-sidebar" id="sidebar-menu">
                <h4 class="sidebar-headline">Sidebar Menu</h4>
                <li><a href="index.html"><i class="md md-desktop-mac"></i> Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="timeline.html"><i class="md md-dashboard"></i> Timeline</a></li>
                <li><a href="real-estate.html"><i class="md md-pin-drop"></i> Real Estate</a></li>
                <li><a href="course.html"><i class="fa fa-graduation-cap"></i>Learning</a></li>
                <li><a href="shop.html"><i class="md md-shopping-cart"></i> Shop</a></li>
                <li class="active"><a href="clients-listing.html"><i class="md md-group"></i> Clients</a></li>
                <li><a href="finances.html"><i class="md md-attach-money"></i> Financial</a></li>
                <li><a href="email.html"><i class="md md-email"></i>Emails</a></li>
                <li><a href="calendar.html"><i class="md md-event-available"></i>Calendar</a></li>
                <li><a href="form-elements.html"><i class="md md-text-format"></i>Form Elements</a></li>
                <li><a href="tables.html"><i class="md md-list"></i>Tables</a></li>
                <li><a href="charts.html"><i class="md md-insert-chart"></i>Charts</a></li>
                <li><a href="maps.html"><i class="md md-map"></i>Maps</a></li>
                <li class="submenu">
                    <a href="#"><i class="md md-my-library-add"></i>Components</a>
                    <ul >
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons &nbsp;<span class="label label-primary">1468</span></a></li>
                        <li><a href="panels.html">Panels </a></li>
                        <li><a href="progress.html">Progress & Ratings</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="tree.html">Tree View</a></li>
                        <li><a href="nestable.html">Nestable</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" ><i class="md md-description"></i> Extra Pages <span class="pull-right label label-primary">10+</span></a>
                    <ul >
                        <li><a href="jobs.html">Jobs</a></li>
                        <li><a href="account.html">Account</a></li>
                        <li><a href="marketing.html">Marketing</a></li>
                        <li><a href="error.html">Errors [404]</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
            <h4 class="sidebar-headline">Sidebar Headline</h4>
            <ul class="nav nav-sidebar">
                <li class="submenu">
                    <a href="#"><i class="md md-my-library-add"></i>Collapse Menu</a>
                    <ul>
                        <li><a href="#">Submenu Link</a></li>
                        <li><a href="#">Submenu</a></li>
                        <li><a href="#">Link &nbsp;<span class="label label-primary">1468+</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- // Sidebar -->

<!-- Sidebar Right -->
<div class="sidebar right-side" id="sidebar-right">
    <!-- Wrapper Reqired by Nicescroll -->
    <div class="nicescroll">
        <div class="wrapper">
            <div class="block-primary">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"><img src="images/guy.jpg" alt="person" class="img-circle border-white" width="60"/></a>
                    </div>
                    <div class="media-body media-middle">
                        <a href="account.html" class="h4">{{ $user->name }}</a>
                        <a href="login.html" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-sidebar" id="sidebar-menu">
                <li><a href="account.html"><i class="md md-person-outline"></i> Account</a></li>
                <li><a href="email.html"><i class="md md-email"></i> Emails</a></li>
                <li><a href="#"><i class="md md-attach-money"></i> Payments</a></li>
                <li><a href="#"><i class="md md-settings"></i> Settings</a></li>
                <li><a href="login.html"><i class="md md-exit-to-app"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- // Sidebar -->