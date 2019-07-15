@extends('layouts.masterklorofil')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop
@section('content')
	<!-- MAIN -->

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="" class="img-circle" alt="">
										<h3 class="name">Fauziah</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$penduduk->kk->count()}} <span>Mata Pelajaran</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Detail Data Diri</h4><br>
										<ul class="list-unstyled list-justify">
											<li>Nama Depan <span>Fauziah</span></li>
											<li>Nama Belakang <span>Rahma</span></li>
											<li>Jenis Kelamin <span>Perempuan</span></li>
										</ul>
									</div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<!-- TABBED CONTENT -->
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Nilai</button>

								<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Mata Pelajaran</h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Nama Pelajaran</th>
					<th>Semester</th>
					<th>Nilai</th>
					<th>Guru</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($penduduk->kk as $kk)
				<tr>
					<td>{{$kk->nomor_kk}}</td>
					<td>{{$kk->nama}}</td>
					<td>{{$kk->semester}}</td>
					<td>{{$kk->pivot->nik}}</td>
					<td><a href="{{$kk->guru_id}}/profile">{{$kk->guru_id}}</a></td>
					<td>
					<a class="nik" href="{{$penduduk->id}}/editnilai" data-type="text" data-pk="{{$kk->id}}" data-title="Masukan Nilai"> <i class="fa fa-pencil"></i></a>
					<href="{{$penduduk->id}}/{{$kk->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin dihapus ?')">Delete</a>
					</td>
					<!--<td><a href="" class="nik" data-type="text" data-pk="{{$kk->id}}" data-url="Api{{$penduduk->id}}/editnilai" data-title="Masukan Nilai">{{$kk->pivot->nik}}</a></td>-->
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/scripts/klorofil-common.js"></script>

<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="tambahnilai">Tambah Nilai</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="{{$penduduk->id}}/addnilai" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}
								<div class="form-group">
								    <label for="mapel">Mata Pelajaran</label>
								    <select class="form-control" id="mapel" name="mapel">
											@foreach($penduduk->kk as $mapel)
											<option value="{{$mapel->id}}">{{$mapel->nama}}</option>
											@endforeach
								    </select>
							  </div>
								<div class="form-group{{$errors->has('nama') ? has-error : ''}}">
									<label for="exampleInputEmail1">Nilai</label>
									<input type="text" name="nilai" class="form-control" id="exampleInputEmail1" placeholder="nilai" value="{{old('nilai')}}">
									@if($errors->has('nilai'))
										<span class="help-block">{{$errors->first('nilai')}}</span>
									@endif
								</div>

			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Simpan</button>
						</form>
						</div>
			    </div>
			  </div>
			</div>
@stop

@section('footer')
<script>
$(document).ready(function() {
    $('.nik').editable();
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

@stop
