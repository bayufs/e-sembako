@extends('index')

@section('title', 'Master Data partisipan')

@section('page-content')
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Table ini berisi data semua data partisipan
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover master" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>L/P</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>Nomor Kartu</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($list_partisipan)==0)
                        <td colspan="6" class="text-center" style="color:red"><h4>Tidak Ada partisipan</h4></td>
                    @else
                    <?php $no=1; ?>
                    @foreach ($list_partisipan as $list_partisipan)
                    <tr class="odd gradeX">
                            <td>{{ $no }}</td>
                            <td>{{ $list_partisipan->nama }}</td>
                            <td>{{ $list_partisipan->kelamin }}</td>
                            <td>{{ $list_partisipan->alamat }}</td>
                            <td>{{ $list_partisipan->nik }}</td>
                            <td>{{ $list_partisipan->no_kartu }}</td>
                        </tr>
                        <?php $no++; ?>
                    @endforeach
                    @endif
                    
                </tbody>
            </table>

            <div class="col-lg-6">
                <form role="form" action="/print-report" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Cetak Laporan Berdasarkan RW :</label>
                         <select name="rw" id="">
                            <option value="">--PILIH RW--</option>
                            @foreach ($list_rw as $list_rw)
                            <option value="{{ $list_rw->id }}">{{ $list_rw->nama_rw }}</option>
                            @endforeach 
                         </select>
                     </div>
                    <button type="submit" name="print_report" class="btn btn-primary">Cetak</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

