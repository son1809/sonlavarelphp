<!DOCTYPE html>
<html>
<head>
    <title>Product Report</title>
</head>
<body>
    <h1>Product Report</h1>
    <table border="1">
        <tr>
            <th>Product Type</th>
            <th>Quantity</th>
        </tr>
        @foreach ($report as $item)
        <tr>
            <td>{{ $item->ProductType }}</td>
            <td>{{ $item->Quantity }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>