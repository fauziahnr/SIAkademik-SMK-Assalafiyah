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
										<h3 class="name">Kartini</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>

								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<!-- TABBED CONTENT -->

								<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Mata Pelajaran Yang diampu oleh guru <strong>Kartini</strong></h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nama Pelajaran</th>
					<th>Semester</th>

				</tr>
			</thead>
			<tbody>
        <tr>
          <td>Framework</td>
          <td>ganjil</td>
				</tr>
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

@stop
@section('footer')
@stop
