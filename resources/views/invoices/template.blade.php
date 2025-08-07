<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $order->order_number }}</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #5a058f;
        }
        .invoice-title {
            font-size: 20px;
            margin: 10px 0;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .details-table th, .details-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .details-table th {
            background-color: #f2f2f2;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .total-row {
            font-weight: bold;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">PawMart Pet Care</div>
        <div class="invoice-title">INVOICE #{{ $order->order_number }}</div>
        <div>Date: {{ $order->created_at->format('d-M-Y') }}</div>
    </div>

    <table class="details-table">
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
        @foreach($order->items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>Rs. {{ number_format($item['price'], 2) }}</td>
            <td>Rs. {{ number_format($item['price'] * $item['quantity'], 2) }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" class="text-right">Subtotal:</td>
            <td>Rs. {{ number_format($order->subtotal, 2) }}</td>
        </tr>
        <tr>
            <td colspan="3" class="text-right">Tax (10%):</td>
            <td>Rs. {{ number_format($order->tax, 2) }}</td>
        </tr>
        <tr class="total-row">
            <td colspan="3" class="text-right">Total:</td>
            <td>Rs. {{ number_format($order->total, 2) }}</td>
        </tr>
    </table>

    @if($order->delivery_info)
    <h3>Delivery Information</h3>
    <p>Expected Delivery: {{ $order->delivery_info['expected_delivery'] }}</p>
    <p>Address: {{ $order->delivery_info['address'] }}</p>
    @endif

    @if($order->appointment_info)
    <h3>Appointment Information</h3>
    <p>Date: {{ $order->appointment_info['date'] }}</p>
    <p>Time: {{ $order->appointment_info['time'] }}</p>
    <p>Location: {{ $order->appointment_info['location'] }}</p>
    @endif

    <div class="footer">
        Thank you for your order!<br>
        PawMart Pet Care<br>
        Contact: support@pawmart.com
    </div>
</body>
</html>