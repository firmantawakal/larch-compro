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
      <li class="nav-item {{ active_class(['admin/home']) }}">
        <a href="{{ url('admin/home') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['admin/visitor']) }}">
        <a href="{{ url('admin/visitor') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Visitor</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['admin/user']) }}">
        <a href="{{ url('admin/user') }}" class="nav-link">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">User</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
