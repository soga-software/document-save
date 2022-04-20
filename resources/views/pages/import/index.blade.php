@extends('layouts.main')
@section('css')
<link href="{{URL::to('/')}}/assets/plugins/treeview/themes/default/style.css" rel="stylesheet">
@endsection
@section('page')
@include('pages.import.list')
@endsection

@section('js')

<script src="{{URL::to('/')}}/assets/plugins/treeview/jstree.min.js"></script>
<script src="{{URL::to('/')}}/assets/pages/jquery.treeview.init.js"></script>
<script type="text/javascript"  src="{{URL::to('/')}}/assets/js/bookmark_convert/chrome-bookmarks-converter.js"></script>
<script type="text/javascript"  src="{{URL::to('/')}}/assets/js/bookmark_convert/import.js"></script>
<script type="text/javascript"  src="{{URL::to('/')}}/assets/js/bookmark_convert/view.js"></script>
@include('pages.import.js')
@endsection
