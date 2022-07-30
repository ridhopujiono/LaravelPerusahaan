<li class="nav-item">
    <a href="{{ route('layanans.index') }}"
       class="nav-link {{ Request::is('layanans*') ? 'active' : '' }}">
        <p>Layanans</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('partners.index') }}"
       class="nav-link {{ Request::is('partners*') ? 'active' : '' }}">
        <p>Partners</p>
    </a>
</li>


