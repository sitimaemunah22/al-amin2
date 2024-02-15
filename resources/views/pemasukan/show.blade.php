@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center mt-2 card-header-warning">Detail data Pemasukan</h4>

              </div>
              <div class="card-body">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>{{ $pemasukan->jenis->nama }}</td>
                      </tr>
                      <tr>
                        <td>Nama Donatur</td>
                        <td>:</td>
                        <td>{{ $pemasukan->donatur->nama }}</td>
                      </tr>
                      <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>Rp {{ $pemasukan->jumlah_pemasukan }}</td>
                      </tr>
                      <tr>
                        <td>tanggal Pemasukan</td>
                        <td>:</td>
                        <td>{{ $pemasukan->tanggal_pemasukan }}</td>
                      </tr>

                    </tbody>
                </table>   
                <a href="{{ url()->previous() }}" class="btn btn-info btn-sm mt-5">Kembali</a>
              </div>     
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')

@endsection