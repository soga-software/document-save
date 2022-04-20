@section('search')
<div class="card bg-success">
    <div class="card-body p-2 pl-5 pr-5">
        <div class="row">
            <div class="col-md-12">
                <div class="hide-phone app-search pt-0">
                    <form class="d-flex justify-content-end">
                        <input type="text" id="tag" value="{{old('tag', '')}}"  name="tag"  placeholder="Search..." class="form-control ui-autocomplete-input" autocomplete="off">
                        <div class="button-list btn-social-icon ml-2 d-flex align-items-center">
                            <button type="submit" class="btn btn-success btn-xs">Search</button>
                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#addModal" data-animation="fade">Add</button>
                            <button type="button" onclick="goHome()" class="btn btn-danger btn-xs font-11"><i class="fas fa-home font-12"></i> Home</button>
                            <button type="button" onclick="goLibrary()" class="btn btn-danger btn-xs font-11"><i class="fas fa-bookmark font-12"></i> Library</button>
                            <button type="button" onclick="goCategory()" class="btn btn-danger btn-xs font-11"><i class="fas fa-align-center font-12"></i> Category</button>
                            <button type="button" onclick="goTag()" class="btn btn-danger btn-xs font-11"><i class="fas fa-tag font-12"></i> Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
