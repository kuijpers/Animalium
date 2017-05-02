<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Animalium</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">

            <li class="selected"><a href="#"><i class="fa fa-bullseye"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="#"><i class="fa fa-font"></i> Icons</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ul"></i> Bootstrap Elements <span class="caret icon-right"></span></a>
                <ul class="dropdown-menu scrollable-menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Navigation</a></li>
                    <li><a href="#">Indicators</a></li>
                    <li><a href="#">Progress bars</a></li>
                    <li><a href="#">Containers</a></li>
                    <li><a href="#">Misc</a></li>
                    <li><a href="#">Forms</a></li>
        </ul>
            </li>
            <li><a href="#"><i class="fa fa-table"></i> Bootstrap Grid</a></li>
            <li><a href="#"><i class="fa fa-table"></i> Tables</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ul"></i> Pages  <span class="caret icon-right"></span></a>
                <ul class="dropdown-menu scrollable-menu">
                    <li><a href="#"> Plain Page</a></li>
                    <li><a href="#"> Portfolio</a></li>
                    <li><a href="#"> Blog</a></li>
                    <li><a href="#"> SignUp</a></li>
                    <li><a href="#"> SignIn</a></li>
                    <li><a href="#"> Register</a></li>
                    <li><a href="#"> Timeline</a></li>
                    <li><a href="#"> Charts </a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">2 New Messages</li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><i class="fa fa-bell"></i></span>
                            <span class="message">Security alert</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li class="message-preview">
                        <a href="#">
                            <span class="avatar"><i class="fa fa-bell"></i></span>
                            <span class="message">Security alert</span>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                </ul>
            </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }}<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </li>
            <li class="divider-vertical"></li>
            <li  class="input-group">
                <form class="navbar-form navbar-right navbar-search">
                    <div class="input-group">
                        <input type="text" placeholder="Search for..." class="form-control">
                    </div>
                    <button type="submit" class="btn btn-theme">Go</button>
                </form>
            </li>
        </ul>
    </div>
</nav>