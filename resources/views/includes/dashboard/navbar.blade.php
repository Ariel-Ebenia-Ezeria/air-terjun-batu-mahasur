<div class="transition topbar">
    <div class="bars">
        <button type="button" class="transition btn" id="sidebar-toggle">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="menu">
        <ul>
            {{-- <li class="nav-item dropdown dropdown-list-toggle">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
                </a>
                <div class="dropdown-menu dropdown-list">
                    <div class="dropdown-header">Notifications</div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <div class="custome-list-notif">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="text-white dropdown-item-icon bg-primary">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    The Atrana template has the latest update!
                                    <div class="time text-primary">3 Min Ago</div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="text-white dropdown-item-icon bg-info">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Sri asks you for friendship!
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>

                            <a href="#" class="dropdown-item">
                                <div class="text-white dropdown-item-icon bg-danger">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Storage has been cleared, now you can get back to work!
                                    <div class="time">20 Hours Ago</div>
                                </div>
                            </a>


                            <a href="#" class="dropdown-item">
                                <div class="text-white dropdown-item-icon bg-info">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Welcome to Atrana Template, I hope you enjoy using this template!
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="text-center dropdown-footer">
                        <a href="#">View All</a>
                    </div>
                </div>
            </li> --}}

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="/assets/dashboard/images/avatar/avatar-1.png" alt="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user size-icon-1"></i>
                        <span>Profil
                            Saya</span></a>
                    <a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i>
                        <span>Settings</span></a>
                    <hr class="dropdown-divider">
                    <!-- <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt size-icon-1"></i> <span>My Profile</span></a> -->
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item"><i
                            class="fa fa-sign-out-alt size-icon-1"></i> <span>Keluar</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>