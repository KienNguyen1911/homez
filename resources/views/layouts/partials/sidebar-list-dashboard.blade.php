<div class="dashboard_sidebar_list">
    <div class="sidebar_list_item">
        <a href="{{ route('admin.dashboard') }}"
            class="items-center
        @if (Route::currentRouteName() == 'admin.dashboard') -is-active @endif"><i
                class="flaticon-discovery mr15"></i>Dashboard</a>
    </div>
    {{-- <div class="sidebar_list_item ">
        <a href="page-dashboard-message.html" class="items-center"><i
                class="flaticon-chat-1 mr15"></i>Message</a>
    </div> --}}
    <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
    <div class="sidebar_list_item ">
        <a href="{{ route('admin.products.create') }}"
            class="items-center 
        @if (Route::currentRouteName() == 'admin.products.create') -is-active @endif">
            <i class="flaticon-new-tab mr15"></i>Add New
            Property</a>
    </div>
    <div class="sidebar_list_item ">
        <a href="{{ route('admin.products.index') }}"
            class="items-center
        @if (Route::currentRouteName() == 'admin.products.index') -is-active @endif
        "><i
                class="flaticon-home mr15"></i>My
            Properties</a>
    </div>
    <div class="sidebar_list_item ">
        <a href="{{ route('admin.users.index') }}"
            class="items-center
        @if (Route::currentRouteName() == 'admin.users.index') -is-active @endif
        "><i
                class="flaticon-home mr15"></i>Registed User</a>
    </div>
    {{-- <div class="sidebar_list_item ">
        <a href="page-dashboard-favorites.html" class="items-center"><i
                class="flaticon-like mr15"></i>My Favorites</a>
    </div>
    <div class="sidebar_list_item ">
        <a href="page-dashboard-savesearch.html" class="items-center"><i
                class="flaticon-search-2 mr15"></i>Saved Search</a>
    </div>
    <div class="sidebar_list_item ">
        <a href="page-dashboard-review.html" class="items-center"><i
                class="flaticon-review mr15"></i>Reviews</a>
    </div> --}}
    <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
    {{-- <div class="sidebar_list_item ">
        <a href="page-dashboard-package.html" class="items-center"><i
                class="flaticon-protection mr15"></i>My Package</a>
    </div> --}}
    <div class="sidebar_list_item ">
        <a href="" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
    </div>
    <div class="sidebar_list_item ">
        <a href="" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
    </div>
</div>
