<table>
    <thead>
    <tr>
        <th>Ref ID</th>
        <th>Date</th>
        <th>Type</th>
        <th>Description</th>
        <th>Expert</th>
        <th>Amount</th>
        <th>Balance</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->created_at->format('M d, Y') }}</td>
            <td>{{ $data->type }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ @$data->expert->first_name }} {{ @$data->expert->last_name }}</td>
            <td>@if($data->charge_type == 'debit')
                    ({{ number_format($data->amount, 2) }})
                @elseif($data->charge_type == 'credit')
                    {{ number_format($data->amount, 2) }}
                @endif
            </td>
            <td>${{ number_format($data->balance, 2) }}</td>
            <td>{{ ($data->status == 0) ? 'Pending' : 'Paid' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
