{{-- <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form class="">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="tag" name="tag" value="{{old('tag', '')}}" placeholder="Tiêu đề">
                            </div>
                        </div>
                        <div class="col-md-3 text-right">
                            <button type="submit" class="btn btn-sm btn-info px-4 btn-square waves-effect waves-light">
                                <i class="fas fa-search"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-info px-4 btn-square waves-effect waves-light" data-toggle="modal" data-target="#addModal" data-animation="fade">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @include('pages.nav')
        </div>
    </div>
</div> --}}
@section('search')
<div class="navbar-custom-menu">
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
                <a href="#">
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
                    <input type="text" id="category" value="{{old('tag', '')}}"  name="category"  placeholder="Search..." class="form-control ui-autocomplete-input" autocomplete="off">
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
