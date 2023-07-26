<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h1 class="my-3">
                        Treni in partenza il {{date('Y-m-d')}}
                    </h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Azienda
                                </th>
                                <th>
                                    Stazione di Partenza
                                </th>
                                <th>
                                    Stazione di Arrivo
                                </th>
                                <th>
                                    Data di Partenza
                                </th>
                                <th>
                                    Orario di Partenza
                                </th>
                                <th>
                                    Orario di Arrivo
                                </th>
                                <th>
                                    Codice Treno
                                </th>
                                <th>
                                    Numero Carrozze
                                </th>
                                <th>
                                    In Orario
                                </th>
                                <th>
                                    Cancellato
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <td>
                                        {{$train->Azienda}}
                                    </td>
                                    <td>
                                        {{$train['Stazione di Partenza']}}
                                    </td>
                                    <td>
                                        {{$train['Stazione di Arrivo']}}
                                    </td>
                                    <td>
                                        {{$train['Data di Partenza']}}
                                    </td>
                                    <td>
                                        {{$train['Orario di Partenza']}}
                                    </td>
                                    <td>
                                        {{$train['Orario di Arrivo']}}
                                    </td>
                                    <td>
                                        {{$train['Codice Treno']}}
                                    </td>
                                    <td>
                                        {{$train['Numero Carrozze']}}
                                    </td>
                                    <td>
                                        {{$train['In Orario']}}
                                    </td>
                                    <td>
                                        {{$train->Cancellato}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>