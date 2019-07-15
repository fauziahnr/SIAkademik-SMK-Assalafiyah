<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Warga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="alert alert-success" role="alert">
        Data Warga Berhasil di simpan
    </div>
      <div class="row">
        <div class="col-6">
          <h3>DATA WARGA</h3>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
              Tambah Data
            </button>
        </div>

        <table class="table table-hover">
          <tr>
            <th>NAMA DEPAN</th>
            <th>NAMA BELAKANG</th>
            <th>JENIS KELAMIN</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>KELURAHAN</th>
            <th>PEKERJAAN</th>
            <th>AGAMA</th>
            <th>STATUS KAWIN</th>
          </tr>
          @foreach($data_warga as $warga)
          <tr>
            <td>{{$warga->nama_depan}}</td>
            <td>{{$warga->nama_belakang}}</td>
            <td>{{$warga->jenis_kelamin}}</td>
            <td>{{$warga->tempat_lahir}}</td>
            <td>{{$warga->tanggal_lahir}}</td>
            <td>{{$warga->alamat}}</td>
            <td>{{$warga->kelurahan}}</td>
            <td>{{$warga->pekerjaan}}</td>
            <td>{{$warga->agama}}</td>
            <td>{{$warga->status_kawin}}</td>
          </tr>
          @endforeach
        </table>

      </div>

    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Warga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='/warga/create' method="post">
          {{csrf_field()}}

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Depan</label>
            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Belakang</label>
            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form form-control datepicker" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Kelurahan</label>
            <input name="kelurahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelurahan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Pekerjaan</label>
            <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Status Kawin</label>
            <input name="status_kawin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Kawin">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
