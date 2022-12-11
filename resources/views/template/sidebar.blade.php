<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{url('dashboard')}}" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{Nfs::content('logo')}}" alt="" width="40px">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">{{Nfs::content('app')}}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

      @auth

        <!-- Dashboard -->
      <li class="menu-item @if($link=='dashboard') active @endif">
        <a href="{{url('dashboard')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

        {{-- SETTINGAN DARI CMS MENUS --}}
        @foreach (Nfs::menu(Session::get('id')) as $menu_access)

            @php
              $sub = Nfs::submenuSidebar(Session::get('id'),$menu_access->cms_menus_id);
            @endphp

            @if(count($sub) == 0)
          
              <li class="menu-item @if($link==$menu_access->url) active @endif">
                <a href="{{url($menu_access->url.'/'.Nfs::Encrypt($menu_access->cms_menus_id))}}" class="menu-link">
                  <i class="menu-icon tf-icons bx {{$menu_access->icon}}"></i>
                  <div data-i18n="Analytics">{{$menu_access->name}}</div>
                </a>
              </li>

            @else

            <li class="menu-item @if($link==$menu_access->url) open active @endif">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx {{$menu_access->icon}}"></i>
                <div data-i18n="Account Settings">{{$menu_access->name}}</div>
              </a>
              <ul class="menu-sub">

                @foreach($sub as $submenu)
                  <li class="menu-item @if($link==$submenu->url) active @endif ">
                    <a href="{{url($submenu->url.'/'.Nfs::Encrypt($submenu->cms_menus_id))}}" class="menu-link">
                      <div data-i18n="{{$submenu->name}}">{{$submenu->name}}</div>
                    </a>
                  </li>
                @endforeach

              </ul>
            </li>

            @endif
            
        @endforeach

        {{-- account setting --}}

        <li class="menu-item @if($link=='account' or $link=='password') open active @endif">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Account Settings">Account Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item @if($link=='account') active @endif ">
              <a href="{{url('account')}}" class="menu-link">
                <div data-i18n="Account">Account</div>
              </a>
            </li>
            <li class="menu-item @if($link=='password') active @endif">
              <a href="{{url('password')}}" class="menu-link">
                <div data-i18n="Notifications">Change Password</div>
              </a>
            </li>
          </ul>
        </li>

      @endauth

      @if(Session::get('cms_role_id') ==1 or Session::get('cms_role_id') ==2 )
        @auth
        
          <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu Admin</span></li>


          <li class="menu-item @if($link=='cms_role') active @endif">
            <a href="{{url('admin/role')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-key"></i>
              <div data-i18n="Analytics">Roles Management</div>
            </a>
          </li>

          <li class="menu-item @if($link=='users') active @endif">
            <a href="{{url('admin/users')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div data-i18n="Analytics">Users Management</div>
            </a>
          </li>

          <li class="menu-item @if($link=='cms_settings') active @endif">
            <a href="{{url('admin/settings')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-cog"></i>
              <div data-i18n="Analytics">Settings</div>
            </a>
          </li>
          
          <li class="menu-item @if($link=='cms_logs') active @endif">
            <a href="{{url('admin/logs')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bxs-flag-alt"></i>
              <div data-i18n="Analytics">Log Users Access</div>
            </a>
          </li>

        @endauth
      @endif


      @if(Session::get('cms_role_id') ==1)
        @auth

          <li class="menu-header small text-uppercase"><span class="menu-header-text">Menu Superadmin</span></li>

          <li class="menu-item @if($link=='cms_menus') active @endif">
            <a href="{{url('admin/menus')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-book-content"></i>
              <div data-i18n="Analytics">Menu Management</div>
            </a>
          </li>

          <li class="menu-item @if($link=='cms_modules') active @endif">
            <a href="{{url('admin/modules')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-code-alt"></i>
              <div data-i18n="Analytics">Module Generator</div>
            </a>
          </li>

          <li class="menu-item @if($link=='cms_emails') active @endif">
            <a href="{{url('admin/emails')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-envelope"></i>
              <div data-i18n="Analytics">Email Templates</div>
            </a>
          </li>

          <li class="menu-item @if($link=='cms_document') active @endif">
            <a href="{{url('admin/document')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-book-open"></i>
              <div data-i18n="Analytics">Documentation</div>
            </a>
          </li>

        @endauth
      @endif

    </ul>
  </aside>