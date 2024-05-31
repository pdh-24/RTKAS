@extends('layoutswarga.template')

@section('content')
<div class="card">
    <div class="card-header" style="background-color: #8cbb91;">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">Informasi Iuran Warga 1</h1>
    </div>
    <div class="card-body" style="background-color: #8cbb91;">
        <section>
            <h3 style="color: white;">Daftar Iuran</h3>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table">
                <thead style="color: white;">
                    <tr>
                        <th>Bulan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody style="color: white;">
                    @foreach($iuran as $item)
                        <tr>
                            <td>{{ $item['bulan'] }}</td>
                            <td>{{ $item['status'] }}</td>
                            <td>
                                @if($item['status'] == 'Belum Bayar')
                                    <form method="POST" action="{{ url('/bayar-iuran') }}" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="bulan" value="{{ $item['bulan'] }}">
                                        <button type="submit" class="btn btn-primary" disabled>Bayar Iuran Kas</button>
                                    </form>
                                @else
                                    <span class="text-success">Sudah Bayar</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection
