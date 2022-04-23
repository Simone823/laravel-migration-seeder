<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link Css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Trains</title>
</head>
<body>

    {{-- Main --}}
    <main>

        {{-- Wrapper trains --}}
        <div class="trains_wrapper">
            {{-- Title --}}
            <h1>Trains</h1>
    
            {{-- Ciclo foreach trains array --}}
            @foreach ($trains as $element)
                
                {{-- Train --}}
                <div class="train">
                    {{-- Company --}}
                    <h3 class="company">
                        <img src="{{asset('img/company_icon.svg')}}" alt="">
                        <span>{{$element['company']}}</span>
                    </h3>
                    {{-- Departure station --}}
                    <p class="departure_station">
                        <img src="{{asset('img/train_station_logo.svg')}}" alt="">
                        Stazione di partenza:
                        <span>{{$element['departure_station']}}</span>
                    </p>
                    {{-- Arrival station --}}
                    <p class="arrival_station">
                        <img src="{{asset('img/train_station_logo.svg')}}" alt="">
                        Stazione di arrivo: 
                        <span>{{$element['arrival_station']}}</span>
                    </p>
                    {{-- Departure time --}}
                    <p class="departure_time">
                        <img src="{{asset('img/train_time.svg')}}" alt="">
                        Orario di partenza: 
                        <span>{{$element['departure_time']}}</span>
                    </p>
                    {{-- Arrival Time --}}
                    <p class="arrival_time">
                        <img src="{{asset('img/train_time.svg')}}" alt="">
                        Orario di arrivo: 
                        <span>{{$element['arrival_time']}}</span>
                    </p>
                    {{-- Train code --}}
                    <p class="train_code">
                        <img src="{{asset('img/code_icon.svg')}}" alt="">
                        Codice treno: 
                        <span>{{$element['train_code']}}</span>
                    </p>
                    {{-- Number of carriages --}}
                    <p class="number_of_carriages">
                        <img src="{{asset('img/carriage_train.svg')}}" alt="">
                        Numero carrozze: 
                        <span>{{$element['number_of_carriages']}}</span>
                    </p>
                    {{-- On time --}}
                    <p class="on_time">
                        <img src="{{asset('img/train_time.svg')}}" alt="">
                        In orario: 
                        <span>{{$element['on_time']}}</span>
                    </p>
                    {{-- Deleted --}}
                    <p class="deleted">
                        <img src="{{asset('img/cross_icon.svg')}}" alt="">
                        Cancellato: 
                        <span>{{$element['deleted']}}</span>
                    </p>
                </div>

            @endforeach
    
        </div>
    </main>

</body>
</html>