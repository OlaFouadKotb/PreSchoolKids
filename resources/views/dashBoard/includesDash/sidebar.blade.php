<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img src="{{asset('adminAssets/img/kaiadmin/logo_light.svg')}}" alt="navbar brand" class="navbar-brand" height="20" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <!-- Dashboard -->
        <li class="nav-item active">
          <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
              <li>
                <a href="../demo1/index.html">
                  <span class="sub-item">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Components Section -->
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Base</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="components/avatars.html">
                  <span class="sub-item">Avatars</span>
                </a>
              </li>
              <li>
                <a href="components/buttons.html">
                  <span class="sub-item">Buttons</span>
                </a>
              </li>
              <li>
                <a href="components/gridsystem.html">
                  <span class="sub-item">Grid System</span>
                </a>
              </li>
              <li>
                <a href="components/panels.html">
                  <span class="sub-item">Panels</span>
                </a>
              </li>
              <li>
                <a href="components/notifications.html">
                  <span class="sub-item">Notifications</span>
                </a>
              </li>
              <li>
                <a href="components/sweetalert.html">
                  <span class="sub-item">Sweet Alert</span>
                </a>
              </li>
              <li>
                <a href="components/font-awesome-icons.html">
                  <span class="sub-item">Font Awesome Icons</span>
                </a>
              </li>
              <li>
                <a href="components/simple-line-icons.html">
                  <span class="sub-item">Simple Line Icons</span>
                </a>
              </li>
              <li>
                <a href="components/typography.html">
                  <span class="sub-item">Typography</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Kids Section -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#kids">
            <i class="fas fa-child"></i>
            <p>Kids</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="kids">
            <ul class="nav nav-collapse">
              <li>
                <a href="kids/kid-list.html">
                  <span class="sub-item">Kid List</span>
                </a>
              </li>
              <li>
                <a href="kids/add-kid.html">
                  <span class="sub-item">Add Kid</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Teachers Section -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#teachers">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Teachers</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="teachers">
            <ul class="nav nav-collapse">
              <li>
                <a href="teachers/teacher-list.html">
                  <span class="sub-item">Teacher List</span>
                </a>
              </li>
              <li>
                <a href="teachers/add-teacher.html">
                  <span class="sub-item">Add Teacher</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Classes Section -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#classes">
            <i class="fas fa-school"></i>
            <p>Classes</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="classes">
            <ul class="nav nav-collapse">
              <li>
                <a href="classes/class-list.html">
                  <span class="sub-item">Class List</span>
                </a>
              </li>
              <li>
                <a href="classes/add-class.html">
                  <span class="sub-item">Add Class</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Register -->
        <li class="nav-item">
          <a href="register.html">
            <i class="fas fa-user-plus"></i>
            <p>Register</p>
          </a>
        </li>
        <!-- Login -->
        <li class="nav-item">
          <a href="login.html">
            <i class="fas fa-sign-in-alt"></i>
            <p>Login</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
