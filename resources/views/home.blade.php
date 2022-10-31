<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>

    @php
        $data = [
            [
                "name" => "pippo",
                "age" => "45",
            ],
            [
                "name" => "paperino",
                "age" => "39",
            ],
        ];
    @endphp

    <h1>HELLO WORLD</h1>

    <div>
        @foreach ( $data as $item )

            <div>
                <span> {{ $item["name"] }} </span>
                <span> {{ $item["age"] }} </span>
            </div>

        @endforeach
    </div>
    
</body>
</html>