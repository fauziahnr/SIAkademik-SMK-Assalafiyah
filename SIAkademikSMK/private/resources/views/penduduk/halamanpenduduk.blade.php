@extends('layouts.masterklorofil')

@section('content')
<div class="container">
  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{Session::get('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="col-md-12">
  @if($penduduks->isEmpty())
  <div class="text-center">
    <h4>Tidak ada Siswa</h4>
  </div>
  @else

            <div class="panel-heading">
              <div class="text-right mb-4">
                <button class="btn btn-primary" type="button" onclick="window.location='{{route("penduduk.create")}}'" name="button">Tambah</button>
              </div>
              <strong><h1 class="panel-title">Semua Data Siswa</h1></strong>
            </div>
            <!-- /.box-header -->
            <div class="panel-body">
              <table id="example1" class="table table-hover">
                @method('PATCH')
                <thead>
                <tr >
                  <th>No</th>
                  <th scope="col">Nama Depan</th>
                  <th scope="col">Nama Belakang</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Tampat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelurahan</th>
                  <th scope="col">No Telepon</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Status Siswa</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  @foreach($penduduks as $data)
                  <?php $no++ ;?>
                    <tr>
                        <td>{{$no}}</td>

                        <td><a href="{{route('penduduk.profile', $data)}}">{{$data->nama_depan}}</a></td>
                        <td><a href="">{{$data->nama_belakang}}</a></td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{ Carbon\Carbon::parse($data->created_at)->formatLocalized('%A, %d %B %Y')}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->kelurahan}}</td>
                        <td>{{$data->pekerjaan}}</td>
                        <td>{{$data->agama}}</td>
                        <td>{{$data->status_kawin}}</td>
                        <td><img src="{{asset('private/storage/app/public/gambar/'.$data->gambar)}}" width="80"></td>
                        <td>

                          <a class="mr-2" href="{{route('penduduk.edit', $data)}}"> <i class="fa fa-pencil"></i></a>
                          <a href="#" data-toggle="modal" data-target="#hapus{{$data->id}}"> <i class="fa fa-trash"></i> </a>

                          <!--
                          <button type="button" onclick="window.location='{{route("penduduk.edit", $data)}}'" <i class="fa fa-pencil">Edit</i></button><br><br>
                          <form action="{{route('penduduk.delete', $data->id)}}" method="post">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data {{$data->nama_depan}}')" style="width: 65px;"type="submit">Hapus</button>
                        </form>
                        -->
                        </td>
                    </tr>
                </tbody>
                @endforeach
                @endif
              </table>
            </div>
            <!-- /.box-body -->
            {{ $penduduks->links() }}

          <!-- /.box -->

        <!-- /.col -->


</div>
</div>

@foreach($penduduks as $data)
<div class="modal fade" id="hapus{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        {!! Form::open(array('route' =>['penduduk.delete',$data],'method'=>'DELETE')) !!}
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Penduduk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus Data Penduduk dengan nama <strong>{{$data->nama_depan}}</strong> </p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button> -->
        {{ Form::submit('Batal',['class' => 'btn btn-secondary','data-dismiss' => 'modal'])}}
        {{ Form::submit('Hapus',['class' => 'btn btn-danger'])}}
      </div>
      {{ Form::close()}}
    </div>
  </div>
</div>
@endforeach

@endsection

@section('footer')

@stop
