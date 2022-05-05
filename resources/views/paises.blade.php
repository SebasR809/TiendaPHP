<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <center><h1>Paises del mundo</h1></center>
    <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <td>Nombre:</td>
                <td>Capital:</td>
                <td>Moneda:</td>
                <td>población:</td>
                <td>Ciudades Importantes:</td>
            </tr>
        </thead>    
        <tbody>
            @foreach($paises as $p => $infopais)
                <tr>
                    <td rowspan='{{ count($infopais["ciudadesprincipales"]) }}'>
                        {{ $p }}
                    </td>
                    <td rowspan='{{ count($infopais["ciudadesprincipales"]) }}'>
                        {{ $infopais["capital"] }}
                    </td>
                    <td rowspan='{{ count($infopais["ciudadesprincipales"]) }}'>
                        {{ $infopais["moneda"]}}
                    </td>
                    <td rowspan='{{ count($infopais["ciudadesprincipales"]) }}'>
                        {{ $infopais["poblacion"]." Millones" }}
                    </td>
                    @foreach($infopais["ciudadesprincipales"] as $ciudad)
                        <th>
                            {{ $ciudad }}
                        </th>
                    </tr>
                    @endforeach
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>