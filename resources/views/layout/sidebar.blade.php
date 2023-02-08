<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Larch<span>Team</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['admin/home/1','admin/home/2','admin/home/3','admin/home/4','admin/home/5','admin/home/6','admin/home/7','admin/home/8']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false" aria-controls="email">
          <i class="link-icon" data-feather="home"></i>
          <span class="link-title">Home</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ active_class(['admin/home/1','admin/home/2','admin/home/3','admin/home/4','admin/home/5','admin/home/6','admin/home/7','admin/home/8'], 'show') }}" id="home">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('admin/home/1') }}" class="nav-link {{ active_class(['admin/home/1']) }}">Section 1</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/2') }}" class="nav-link {{ active_class(['admin/home/2']) }}">Section 2</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/3') }}" class="nav-link {{ active_class(['admin/home/3']) }}">Section 3</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/4') }}" class="nav-link {{ active_class(['admin/home/4']) }}">Section 4</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/5') }}" class="nav-link {{ active_class(['admin/home/5']) }}">Section 5</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/6') }}" class="nav-link {{ active_class(['admin/home/6']) }}">Section 6</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/7') }}" class="nav-link {{ active_class(['admin/home/7']) }}">Section 7</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/home/8') }}" class="nav-link {{ active_class(['admin/home/8']) }}">Section 8</a>
            </li>
          </ul>
        </div>
        {{-- <a href="{{ url('admin/home') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a> --}}
      </li>
      <li class="nav-item {{ active_class(['admin/visitor']) }}">
        <a href="{{ url('admin/visitor') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Visitor</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['admin/jenis_pembangunan']) }}">
        <a href="{{ url('admin/jenis_pembangunan') }}" class="nav-link">
          <i class="link-icon" data-feather="tag"></i>
          <span class="link-title">Jenis Pembangunan</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['admin/user']) }}">
        <a href="{{ url('admin/user') }}" class="nav-link">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">User</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['admin/setting']) }}">
        <a href="{{ url('admin/setting') }}" class="nav-link">
          <i class="link-icon" data-feather="settings"></i>
          <span class="link-title">Setting</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
