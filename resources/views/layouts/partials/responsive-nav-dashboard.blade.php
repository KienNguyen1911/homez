<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
    <ul id="myDropdown" class="dropdown-content">
        <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
        <li><a href=""><i class="flaticon-chat-1 mr10"></i>Message</a></li>
        <li>
            <p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p>
        </li>
        <li><a href="{{ route('admin.products.create') }}"><i class="flaticon-new-tab mr10"></i>Add New Property</a></li>
        <li><a href="{{ route('admin.products.index') }}"><i class="flaticon-home mr10"></i>My Properties</a></li>
        {{-- <li><a href="page-dashboard-favorites.html"><i class="flaticon-like mr10"></i>My Favorites</a></li>
        <li><a href="page-dashboard-savesearch.html"><i class="flaticon-search-2 mr10"></i>Saved Search</a></li>
        <li><a href="page-dashboard-review.html"><i class="flaticon-review mr10"></i>Reviews</a></li> --}}
        <li>
            <p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p>
        </li>
        {{-- <li><a href="page-dashboard-package.html"><i class="flaticon-protection mr10"></i>My Package</a></li> --}}
        <li><a href=""><i class="flaticon-user mr10"></i>My Profile</a></li>
        <li><a class="" href="{{ route('logout') }}"><i class="flaticon-exit mr10"></i>Logout</a></li>
    </ul>
</div>
