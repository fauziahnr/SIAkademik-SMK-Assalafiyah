<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="{{url('dashboard')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        @if(auth()->user()->role == 'admin')
          <li><a href="{{url('penduduk')}}" class="active"><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
        @endif
        <li><a href="{{url('post')}}"class="active"><i class="lnr lnr-pencil"></i> <span>Post</span></a></li>
      </ul>
    </nav>
  </div>
</div>
