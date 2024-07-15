@extends('frontend.layout')

@section('content')
<div class="container">
    <h1>Riwayat Sewa Mobil</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Mobil</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->car->title }}</td>
                    <td>{{ $rental->rental_start }}</td>
                    <td>{{ $rental->rental_end }}</td>
                    <td>{{ $rental->car->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
