<div class="card">
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
</div>