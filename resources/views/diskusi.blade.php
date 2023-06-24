@extends('layouts.main')

@section('container')
    <h1>Forum Diskusi</h1>

    <hr>

    @foreach($pertanyaan as $item)
        <div class="card">
            <div class="card-header">{{ $item->tanggal }} {{ $item->waktu }}</div>
            <div class="card-body">
                <h5 class="card-title">{{ $item->pertanyaan }}</h5>
                <p class="card-text">{{ $item->balasan }}</p>
            </div>
        </div>

        <hr>

        <h4>Balas Pertanyaan:</h4>

        <form action="{{ route('diskusi.storeBalasan', $item->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="balasan">Balasan:</label>
                <textarea class="form-control" name="balasan" id="balasan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Balasan</button>
        </form>

        <hr>
    @endforeach

    <h2>Tambahkan Pertanyaan Baru:</h2>

    <form action="{{ route('diskusi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan:</label>
            <textarea class="form-control" name="pertanyaan" id="pertanyaan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
    </form>
@endsection
