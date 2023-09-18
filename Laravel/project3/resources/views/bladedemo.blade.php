<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Blade Demo</h1>
    <h1>{{10 + 20}}</h1>

    @if(10 < 100)
        <p>Condition is True</p>
    @else
        <p>Condition is False</p>
    @endif

    @if(10 > 100)
        <p>10 > 100</p>
    @elseif(10 > 200)
        <p>10 > 200</p>
    @else
        <p>10 is lowest value</p>
    @endif

    @for($i=1; $i<=10; $i++)
        <p>Value is {{$i}}</p>
    @endfor

    {{-- @foreach($data as $tmp)
        <p>Welcome {{$tmp}}</p>
    @endforeach --}}
</body>
</html>
<script>
    //alert("Welcome");
    alert(@json($data));
</script>