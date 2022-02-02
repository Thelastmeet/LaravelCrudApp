<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>share price list call from api http client</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css"/>
</head>
<body>

<h1>Share price list</h1>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-light">
        <tr>
            <td class="table-primary">symbol</td>
            <td class="table-secondary">ltp</td>
            <td class="table-success">percent_change</td>
            <td class="table-danger">high</td>
            <td class="table-warning">low</td>
            <td class="table-info">open</td>
            <td class="table-light">qty</td>
            <td class="table-light">full_name</td>

    </tr>
</thead>
    @foreach($collection as $item)
    <tr>
        <td>{{ $item['symbol']}}</td>
        <td>{{ $item['ltp'] }}</td>
        <td>{{$item['percent_change']}}</td>
        <td>{{$item['high']}}</td>
        <td>{{$item['low']}}</td>
        <td>{{$item['open']}}</td>
        <td>{{$item['qty']}}</td>
        <td>{{$item['full_name']}}</td>
    </tr>
    @endforeach
    </table>
</div>

</body>
</html>




















