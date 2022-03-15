<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="../../dist/img/AdminLTELogo.png" alt=" السجلات الصناعية" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">السجلات الصناعية</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            @can('user-edit')

            <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link">ادارة المستخدمين</a>
          </li>
          @endcan
           @can('role-list')

          <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link">ادارة الصلاحيات</a>
        </li>
        @endcan
          <li class="nav-item">
            <a class="nav-link"   href="{{ route('factory.create') }}"> اضافة منشأة</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">ادارة المالكين</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="{{ route('owner.create') }}" class="dropdown-item"> تعريف مالك </a></li>
              <li><a href="{{ route('owners') }}" class="dropdown-item"> عرض كل المالكين </a></li>

            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        {{-- <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>--}}
      </div>

      <!-- Right navbar links -->
      <ul class="order-12 order-md-3 navbar-nav navbar-no-expand ml-auto  " >
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"> {{ Auth::user()->name }}</i>

          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <a  class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                       تسجيل الخروج
                    </a>


             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>
