<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="contatiner">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Age</th>
                        <th scope="col">Type</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp

                        @foreach ($persons as $person)

                        @if($person->age >18)
                            @php
                                $type = 'Adult';
                            @endphp
                        @elseif($person->age <13)
                            @php
                            $type = 'kid';
                            @endphp
                        @else
                            @php
                                $type = 'Teen';
                            @endphp
                        @endif

                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$person->name}}</td>
                            <td>{{$person->email}}</td>
                            <td>{{$person->age}}</td>
                            <td>{{$type}}</td>
                        </tr>

                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</body>
</html>
