<ul class="sidebar-list-group list-group list-group-flush">
    <li class="list-group-item @if($menu == 'index') active @endif fw-bold">
     <a href="{{ route('user_profile') }}">
         پروفایل کاربری
     </a>
    </li>
    <li class="list-group-item @if($menu == 'password') active @endif fw-bold">
        <a href="{{ route('user_password') }}">
            تغییر رمز عبور
        </a>
    </li>
    <li class="list-group-item fw-bold">
        <a href="{{ route('logout') }}">
            خروج
        </a>
    </li>

</ul>