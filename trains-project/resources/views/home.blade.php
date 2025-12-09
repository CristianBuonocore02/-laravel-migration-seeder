<!DOCTYPE html>
<html>

<head>
    <title>Tabellone Treni</title>
</head>

<body>
    <h1>Treni in partenza da oggi</h1>

    <table border="1" cellpadding="5" cellspacing="0">
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

        @foreach ($trains as $train)
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
        @endforeach
    </table>
</body>

</html>
