<li class="nav-item topbar-icon dropdown hidden-caret">
    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-envelope"></i>
    </a>
    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown" >
        <li>
            <div
                class="dropdown-title d-flex justify-content-between align-items-center"
            >
                Messages
                <a href="#" class="small"
                    >Mark all as read</a
                >
            </div>
        </li>
        <li>
            <div
                class="message-notif-scroll scrollbar-outer"
            >
                <div class="notif-center">
                    <x-dashboard.comp.messages.messages />
                    <x-dashboard.comp.messages.messages />
                    <x-dashboard.comp.messages.messages />
                    <x-dashboard.comp.messages.messages />
                </div>
            </div>
        </li>
        <li>
            <a
                class="see-all"
                href="javascript:void(0);"
                >See all messages<i
                    class="fa fa-angle-right"
                ></i>
            </a>
        </li>
    </ul>
</li>