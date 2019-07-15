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
  <div class="panel-heading">
    <div class="text-right mb-4">
      <button class="btn btn-primary" type="button" onclick="window.location='{{route("post.create")}}'" name="button">Tambah Berita</button>
    </div>
    <strong><h1 class="panel-title">Semua Data Postingan</h1></strong>
  </div>
            <!-- /.box-header -->
          <div class="panel-body">
              <table id="example1" class="table table-hover">
                @method('PATCH')
                <thead>
                <tr>
                  <th>No</th>
                  <th scope="col">ID</th>
                  <th scope="col">USER</th>
                  <th scope="col">TITLE</th>
                  <th scope="col">ACTION</th>

                </tr>
                </thead>
                <tbody>
                  <?php $no = 0;?>
                  <?php $no++ ;?>
                    <tr>
                        <td>{{$no}}</td>

                        <td>1</td>
                        <td>ini berita pertama</td>
                        <td>fauziah</td>

                        <td>
                          <a target="_blank" href="" class="btn btn-info btn sm">View</a>
                          <a href="#" class="btn btn-warning btn-sm">Edit</a>
                          <a href="#" class="btn btn-danger btn sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
              </table>
          </div>
            <!-- /.box-body -->


          <!-- /.box -->

        <!-- /.col -->


</div>
</div>

@endsection

@section('footer')

@stop
