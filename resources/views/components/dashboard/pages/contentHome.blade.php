<div class="container">
    <div class="page-inner">
        <div class="row">
            <x-dashboard.comp.statistics.statisticsCard icon="fa-chart-line" category="Active Users" count="3,567"
                colorIcone="icon-primary" />
            <x-dashboard.comp.statistics.statisticsCard icon="fa-user-check" category="Subscribers" count="1303"
                colorIcone="icon-success" />
            <x-dashboard.comp.statistics.statisticsCard icon="fa-luggage-cart" category="Sales" count="1,345"
                colorIcone='icon-info' />
            <x-dashboard.comp.statistics.statisticsCard icon="fa-check-circle" category="Order" count="576"
                colorIcone='icon-secondary' />
        </div>
        <div class="row">
            <div class="col-md-8">
                <x-dashboard.comp.cardRound.cardRound1 />
            </div>
            <div class="col-md-4">
                <x-dashboard.comp.cardRound.cardRound2 Jan="99" Feb="125" Mar="122" Apr="105"
                    May="110" Jun="124" Jul="115" Aug="434" Sep="568" Oct="610"
                    Nov="700" Dec="900" title="Users Online" description="Active users at the moment"
                    usersOnline="17" percentageChange="+5%" />


            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <x-dashboard.comp.cardRound.cardRound3 />
            </div>
            <div class="col-md-8">
                <x-dashboard.comp.cardRound.cardRound4 title="Transaction History" :items="[
                    [
                        'payment' => 'Payment from #10231',
                        'date' => 'Mar 19, 2020, 2.45pm',
                        'amount' => '$250.00',
                        'status' => 'Completed',
                    ],
                    [
                        'payment' => 'Payment from #10232',
                        'date' => 'Mar 20, 2020, 3.15pm',
                        'amount' => '$300.00',
                        'status' => 'Pending',
                    ],
                ]" />

            </div>
        </div>
    </div>
</div>
