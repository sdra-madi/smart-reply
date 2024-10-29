<li class="nav-item topbar-icon dropdown hidden-caret">
    <a
        class="nav-link dropdown-toggle"
        href="#"
        id="notifDropdown"
        role="button"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        <i class="fa fa-bell"></i>
        <span class="notification">4</span>
    </a>
    <ul
        class="dropdown-menu notif-box animated fadeIn"
        aria-labelledby="notifDropdown"
    >
        <li>
            <div class="dropdown-title">
                You have 4 new notification
            </div>
        </li>
        <li>
            <div class="notif-scroll scrollbar-outer">
                <div class="notif-center">
                    <x-dashboard.comp.notification.notification  icon="fa-bell" message="System update available" time="Just now"/>
                    <x-dashboard.comp.notification.notification  icon="fa-comment" message="Rahmad commented on Admin" time="12 minutes ago"/>
                    <x-dashboard.comp.notification.notification  icon="fa-heart" message="Farrah liked Admin" time="17 minutes ago"/>
                    <x-dashboard.comp.notification.notification  icon="fa-bell" message="System update available" time="Just now"/>
                </div>
            </div>
        </li>
        <li>
            <a
                class="see-all"
                href="javascript:void(0);"
                >See all notifications<i
                    class="fa fa-angle-right"
                ></i>
            </a>
        </li>
    </ul>
</li>