<div class="card card-round">
    <div class="card-body">
        <div class="card-head-row card-tools-still-right">
            <div class="card-title">New Customers</div>
            <div class="card-tools">
                <x-dashboard.comp.menu.dropdownMenu :items="[
                    ['label' => 'Action', 'link' => '#'],
                    ['label' => 'Another action', 'link' => '#'],
                    ['label' => 'Something else here', 'link' => '#'],
                    ['label' => 'Separated link', 'link' => '#'],
                    ['label' => 'Separated link', 'link' => '#'],
                ]" buttonIcon="fas fa-ellipsis-h" />
            </div>
        </div>
        <div class="card-list py-4">
            <x-dashboard.comp.tab.tab1 avatar="portal/assets-dash/img/jm_denis.jpg" username="Jimmy Denis"
                status="Graphic Designer" messageLink="#" banLink="#" />
            <x-dashboard.comp.tab.tab1 avatar="portal/assets-dash/img/jm_denis.jpg" username="Jimmy Denis"
                status="Graphic Designer" messageLink="#" banLink="#" />
            <x-dashboard.comp.tab.tab1 avatar="portal/assets-dash/img/jm_denis.jpg" username="Jimmy Denis"
                status="Graphic Designer" messageLink="#" banLink="#" />
            <x-dashboard.comp.tab.tab1 avatar="portal/assets-dash/img/jm_denis.jpg" username="Jimmy Denis"
                status="Graphic Designer" messageLink="#" banLink="#" />

        </div>
    </div>
</div>
