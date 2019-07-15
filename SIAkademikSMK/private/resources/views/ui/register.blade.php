    @extends('layouts.frontend')

    @section('content')
    <section class="banner-area relative about-banner" id="home">
    				<div class="overlay overlay-bg"></div>
    				<div class="container">
    					<div class="row d-flex align-items-center justify-content-center">
    						<div class="about-content col-lg-12">
    							<h1 class="text-white">
    								Pendaftaran
    							</h1>
    							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Pendaftaran</a></p>
    						</div>
    					</div>
    				</div>
    			</section>
    <section class="search-course-area relative" style="background: unset;">

    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-3 col-md-6 search-course-left">
          <h1>
            Pendaftaran Online <br>
            Bergabung Bersama Kami
          </h1>
          <p>
            Web SMK ASSALAIYAH
          </p>
        </div>
        <div class="col-lg-49 col-md-6 search-course-right section-gap">

          {!! Form::open(['url' =>'/postregister', 'class' => 'form-wrap']) !!}
          <h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>

              {!! Form::text('nama_depan', 'Nama Depan', ['class' => 'form-control','placeholder'=>'']) !!}
              {!! Form::text('nama_belakang', 'Nama Belakang', ['class' => 'form-control','placeholder'=>'Nama Belakang']) !!}
              {{Form::select('jenis_kelamin',['Laki-Laki' => 'Laki-Laki',
               'Perempuan' => 'Perempuan'

               ], null,
             [
                "class" => "form-control",
                "placeholder" => "Pilih Jenis Kelamin",'required', old('jenis kelamin') == 'Laki-Laki' ? 'selected' : ''
             ])
            }}
              {!! Form::text('tempat_lahir', 'Tempat Lahir', ['class' => 'form-control','placeholder'=>'Tempat Lahir']) !!}
              {!! Form::date('tanggal_lahir', 'Tanggal Lahir', ['class' => 'form-control','placeholder'=>'Tanggal Lahir']) !!}
              {!! Form::textarea('alamat', 'Alamat', ['class' => 'form-control','placeholder'=>'Alamat']) !!}
              {!! Form::text('kelurahan', 'Kelurahan', ['class' => 'form-control','placeholder'=>'Kelurahan']) !!}
              {!! Form::text('pekerjaan', 'Pekerjaan', ['class' => 'form-control','placeholder'=>'Pekerjaan']) !!}
              {!! Form::text('agama', 'Agama', ['class' => 'form-control','placeholder'=>'Agama']) !!}
              {!! Form::text('status_kawin', 'Status Kawin', ['class' => 'form-control','placeholder'=>'Status Kawin']) !!}
              {!! Form::file('gambar', ['class' => 'form-control']) !!}
              {!! Form::email('email', 'Email', ['class' => 'form-control','placeholder'=>'Email']) !!}
              {!! Form::password('Password', ['class' => 'form-control','placeholder'=>'Password']) !!}


              <input type="submit" class="primary-btn text-uppercase" value="Kirim" style="text-align: center">
          </div>

          <!--
          <form class="form-wrap" action="#">
            <h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>
            <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
            <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
            <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
            <div class="form-select" id="service-select">
              <select>
                <option datd-display="">Choose Course</option>
                <option value="1">Course One</option>
                <option value="2">Course Two</option>
                <option value="3">Course Three</option>
                <option value="4">Course Four</option>
              </select>
            </div>-->

          </form>
        </div>
      </div>
    </div>
    </section>
    @stop
