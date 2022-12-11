<ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
      <a class="nav-link @if($link=='account') active @endif" href="{{url('account')}}">
        <i class="bx bx-user me-1"></i> Account
    </a>
    </li>
    <li class="nav-item">
      <a class="nav-link @if($link=='password') active @endif" href="{{url('password')}}"
        ><i class="bx bx-key me-1"></i> Change Password</a
      >
    </li>
  </ul>