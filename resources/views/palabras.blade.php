<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Busqueda finalizada</h1>
    <h3>Coinciden {{ $cantidad }} palabras con tu busqueda</h3>
    <h3>El programa tardó {{ $tiempo }} segundos en ejecutarse</h3>
    
    {{-- <ol>
        @foreach ($salida as $data)
            <li>{{ $data }}</li>
        @endforeach
    </ol> --}}

            {{ $i=1 }}
            @while($salida != null)
                <tr>
                    <td> {{ $salida[$i] }} </td>
                    <td> {{ $salida[$i+1] }} </td>
                    <td> {{ $salida[$i+2] }} </td>
                    <td> {{ $salida[$i+3] }} </td>
                    <td> {{ ($salida[$i+4] != null) ? $salida[$i+4] : null }} </td>
                    
                </tr>
                {{ $i++ }}
            @endwhile


    {{-- <table>
        {{ $cont = 0 }}
        @foreach ($salida as $data)

            

            @if($cont%10 == 0)
            <td> {{ $data }} </td>
            @endif
            <tr>
                
            </tr>
        @endforeach
        
</table> --}}


    {{-- <table>
        
            @for($i = 0; $i < 10; $i++)
                <tr>
                    @foreach ($salida as $data)
                    <td> {{ $data }} </td>
                    @endforeach
                </tr>
            @endfor
            
    </table> --}}

</body>
</html>
