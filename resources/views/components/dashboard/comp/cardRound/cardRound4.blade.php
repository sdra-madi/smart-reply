@props([
    'title' => 'Transaction History',
    'items' => [],
])

<div class="card card-round">
    <div class="card-header">
        <div class="card-head-row card-tools-still-right">
            <div class="card-title">{{ $title }}</div>
            <div class="card-tools">
                <x-dashboard.comp.menu.dropdownMenu :items="[
                    ['label' => 'Action', 'link' => '#'],
                    ['label' => 'Another action', 'link' => '#'],
                    ['label' => 'Something else here', 'link' => '#'],
                    ['label' => 'Separated link', 'link' => '#'],
                ]" buttonIcon="fas fa-ellipsis-h" />
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Payment Number</th>
                        <th scope="col" class="text-end">Date & Time</th>
                        <th scope="col" class="text-end">Amount</th>
                        <th scope="col" class="text-end">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row">
                                <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                    <i class="fa fa-check"></i>
                                </button>
                                {{ $item['payment'] }}
                            </th>
                            <td class="text-end">{{ $item['date'] }}</td>
                            <td class="text-end">{{ $item['amount'] }}</td>
                            <td class="text-end">
                                <span class="badge badge-success">{{ $item['status'] }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
