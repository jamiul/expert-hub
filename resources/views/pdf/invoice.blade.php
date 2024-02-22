<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <link rel="stylesheet" href="{{ asset('assets/invoice/pdf.css') }}"/>
<body>
<table class="w-full">
    <tr>
        <td class="w-half">
            <img src="{{ asset('assets/frontend/img/invoice-logo.png') }}" alt="" width="200" />
        </td>
    </tr>
</table>

<div class="margin-top">
    <div class="invoice-area">
        <div class="invoice-left-area">
            <table class="w-full">
                <tr>
                    <td class="w-half">
                        <div><h4>From:</h4></div>
                        <div>Expert Gate</div>
                        <div>32 Erie Street, South Granville</div>
                        <div>NSW 2142, Australia</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-half">
                        <div><h4>To:</h4></div>
                        <div>{{ @$data['full_name'] }}</div>
                        <div>{{ $data['address_line1'] }}</div>
                        <div>{{ $data['address_line2'] }}</div>
                    </td>

                </tr>

            </table>
        </div>
        <div class="invoice-right-area">
            <table>
                <tr><td class="invoice-title">Invoice</td></tr>
                <tr>
                    <td class="text-left">Invoice #</td>
                    <td class="text-right text-bold">{{ $data['invoice_id'] }}</td>
                </tr>
                <tr>
                    <td class="text-left">Date</td>
                    <td class="text-right">{{ $data['date'] }}</td>
                </tr>
                <tr>
                    <td class="text-left">Due Date</td>
                    <td class="text-right">{{ $data['due_date'] }}</td>
                </tr>
                <tr>
                    <td class="text-left">Total Amount</td>
                    <td class="text-right text-bold">${{ $data['total'] }}</td>
                </tr>
                <tr>
                    <td class="text-left">Total Due</td>
                    <td class="text-right text-bold">${{ $data['total_due'] }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<div class="margin-top invoice-description">
    <table class="products tbl-description">
        <tr>
            <th class="text-left">Description</th>
            <th class="text-right">Amount</th>
        </tr>
        <tr class="items">
            <td class="text-left">{{ $data['description'] }}</td>
            <td class="text-right text-bold">{{ $data['amount'] }}</td>
        </tr>
    </table>
</div>

<div class="total">
    <table>
        <tr>
            <td>Total Amount:</td>
            <td class="text-right text-bold"> ${{ $data['total'] }}</td>
        </tr>
    </table>
</div>

</body>
</html>
