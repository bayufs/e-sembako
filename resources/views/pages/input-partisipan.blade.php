@extends('index')

@section('title', 'Master Data partisipan')

@section('page-content')
<div class="col-lg-6">
        @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
        @endif
    <form action="{{ url('simpan-partisipan') }}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="" class="form-control">
        </div>
        <div class="form-group">
            <label>L/P</label><br>
            <input type="radio" name="kelamin" value="L" checked> <span>L</span><input type="radio" name="kelamin" value="P" > <span>P</span>
        </div>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" value="" class="form-control">
        </div>
        <div class="form-group">
            <label>Nomor Kartu</label>
            <input type="text" name="no_kartu" value="194690" class="form-control">
        </div>
        <div class="form-group">
            <label>RW Berapa</label>
            <select name="id_rw" id="" class="form-control">
                <option value="">--Pilih RW--</option>
                @foreach ($list_rw as $list_rw)
                <option value="{{ $list_rw->id }}">{{ $list_rw->nama_rw }}</option>
                @endforeach
              
            </select>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="" class="form-control">
        </div>
        <button type="submit" name="simpan_partisipan" class="btn btn-primary">Simpan Partisipan</button>
        <button type="reset" class="btn btn-warning">Reset Data</button>
    </form>
</div><br><br>
@endsection

