<div class="sidebar right-side" id="sidebar-right">
    <!-- Wrapper Reqired by Nicescroll -->
    <div class="nicescroll">
        <div class="wrapper">
            <div class="block-primary">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="{{ url('images/guy.jpg') }}" alt="person" class="img-circle border-white" width="60"/>
                        </a>
                    </div>
                    <div class="media-body media-middle">
                        <a href="{{ action('AccountController@edit', ['id' => $user->id]) }}" class="h4">{{ $user->name }}</a>
                    </div>
                </div>
            </div>
            <ul class="nav nav-sidebar" id="sidebar-menu">
                <li><a href="{{ action('AccountController@edit', ['id' => $user->id]) }}"><i class="md md-person-outline"></i> Account</a></li>
                <li><a href="email.html"><i class="md md-email"></i> Emails</a></li>
                <li><a href="#"><i class="md md-attach-money"></i> Payments</a></li>
                <li><a href="#"><i class="md md-settings"></i> Settings</a></li>
                <li><a href="{{ url('auth/logout') }}"><i class="md md-exit-to-app"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>