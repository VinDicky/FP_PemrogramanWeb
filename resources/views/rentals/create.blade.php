@extends('frontend.layout')

@section('content')
<div class="container">
    <h1>Sewa Mobil: {{ $car->title }}</h1>
    <form action="{{ route('rentals.store', $car->slug) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="rental_start" class="form-label">Tanggal Mulai</label>
            <input type="datetime-local" class="form-control" id="rental_start" name="rental_start" required>
        </div>
        <div class="mb-3">
            <label for="rental_end" class="form-label">Tanggal Selesai</label>
            <input type="datetime-local" class="form-control" id="rental_end" name="rental_end" required>
        </div>
        <button type="submit" class="btn btn-primary">Sewa</button>
    </form>
</div>
@endsection
