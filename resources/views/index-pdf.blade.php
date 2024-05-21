@extends('layout')

@section('content')
    <div class="container">
        <div class="heading">
            <h1>PRODUCT PDF</h1>
            <div class="wrapper">
                <table>
                    <thead>
                        <tr>
                            <td>BRAND</td>
                            <td>MODEL</td>
                            <td>TYPE</td>
                            <td>COLOR</td>
                            <td>PRICE</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedals as $ped)
                        <tr>
                            <img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($ped->id)) }}" alt="QR Code">
                            <td>{{$ped->brand}}</td>
                            <td>{{$ped->model}}</td>
                            <td>{{$ped->type}}</td>
                            <td>{{$ped->color}}</td>
                            <td>{{$ped->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection