@section('search')
<div class="navbar-custom-menu pl-4">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            <li class="has-submenu">
                <a href="{{ route('document.index') }}">
                    <span>Home</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="{{ route('category.index') }}">
                    <span>Category</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="{{ route('library.index') }}">
                    <span>Library</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="{{ route('tag.index') }}">
                    <span>Tag</span>
                </a>
            </li>
            <li class="hide-phone app-search">
                <form class="d-flex justify-content-end">
                    <input type="text" id="category" value="{{old('library', '')}}"  name="category"  placeholder="Search..." class="form-control ui-autocomplete-input" autocomplete="off">
                    <div class="button-list btn-social-icon ml-2 d-flex align-items-center">
                        <button type="submit" class="btn btn-success btn-xs">Search</button>
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addModal" data-animation="fade">Add</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>
@endsection
