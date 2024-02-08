<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <link rel="stylesheet" href="{{ asset('assets/invoice/pdf.css') }}" type="text/css">
</head>
<body>
<table class="w-full">
    <tr>
        <td class="w-half">
            <img src="{{ asset('/assets/frontend/img/invoice-logo.png') }}" alt="laravel daily" width="200" />
        </td>
        <td class="w-half">
            <h2>Invoice ID: {{ $data['id'] }}</h2>
            <p>Date: {{ $data['created_at'] }}</p>
        </td>
    </tr>
</table>

<div class="margin-top">
    <table class="w-full">
        <tr>
            <td class="w-half">
                <div><h4>To:</h4></div>
                <div>{{ $data['client_id'] }}</div>
            </td>
            <td class="w-half">
                <div><h4>From:</h4></div>
                <div>Expert Gate</div>
                <div>32 Erie Street, South Granville</div>
                <div>NSW 2142, Australia</div>
            </td>
        </tr>
    </table>
</div>

<div class="margin-top">
    <table class="products">
        <tr>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr class="items">
            <th>{{ $data['description'] }}</th>
            <th>{{ number_format($data['amount'], 2) }}</th>
        </tr>
    </table>
</div>

<div class="total">
    Total Amount: ${{ number_format($data['amount'], 2) }} AUD
</div>

</body>
</html>
