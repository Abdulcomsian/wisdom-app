<li class="sidebar-header">
    Users
</li>

<li class="sidebar-item {{ request()->route()->getName() == 'users.index' ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('users.index') }}">
        <i class="align-middle me-2 fas fa-users"></i> <span class="align-middle">Users</span>
    </a>
</li>

<li class="sidebar-item {{ request()->route()->getName() == 'categories.index' ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('categories.index') }}">
        <i class="align-middle me-2 fas fa-boxes"></i> <span class="align-middle">Categories</span>
    </a>
</li>

<li class="sidebar-item {{ request()->route()->getName() == 'quotes.index' ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('quotes.index') }}">
        <i class="align-middle me-2 fas fa-quote-left"></i> <span class="align-middle">Quotes</span>
    </a>
</li>

