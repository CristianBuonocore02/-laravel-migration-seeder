<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellone Treni</title>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Share Tech Mono', monospace;
            background-color: #f8f9fa;
        }

        h1 {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            /* unisce i bordi */
            width: 100%;
        }

        th,
        td {
            border: 2px solid #000;
            /* bordo ben visibile per tutte le celle */
            padding: 10px;
            text-align: center;
        }

        thead {
            background-color: #343a40;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Treni in partenza da oggi</h1>

        <table>
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Partenza</th>
                    <th>Arrivo</th>
                    <th>Orario Partenza</th>
                    <th>Orario Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Totale Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->totale_carrozze }}</td>
                        <td>{{ $train->in_orario ? 'Si' : 'No' }}</td>
                        <td>{{ $train->cancellato ? 'Si' : 'No' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Nessun treno disponibile</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
