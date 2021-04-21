<body data-layout="horizontal" class="">
<div>
    <!-- Page Content-->
    <div class="page-content">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(session('errors'))
                    <ul style="color: red">
                        @foreach (session('errors') as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if(session('messages'))
                        @foreach (session('messages')  as $message)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                </button>
                                {{$message}}.
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @yield('page')
        </div>
    </div>
</div>
{{-- <!-- end page-wrapper -->
<!-- jQuery  -->
<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/jquery-ui.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/waves.js"></script>
<script src="{{URL::to('/')}}/assets/js/jquery.slimscroll.min.js"></script>

<!-- App js -->
<script src="{{URL::to('/')}}/assets/plugins/moment/moment.js"></script>
<script src="{{URL::to('/')}}/assets/js/app.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/select2/select2.min.js"></script> --}}

<!-- jQuery  -->
<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/jquery-ui.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/bootstrap.bundle.min.js"></script>
{{-- <script src="{{URL::to('/')}}/assets/js/metismenu.min.js"></script> --}}
{{-- <script src="{{URL::to('/')}}/assets/js/waves.js"></script> --}}
{{-- <script src="{{URL::to('/')}}/assets/js/feather.min.js"></script> --}}
<script src="{{URL::to('/')}}/assets/js/jquery.slimscroll.min.js"></script>
{{-- <script src="{{URL::to('/')}}/assets/plugins/apexcharts/apexcharts.min.js"></script> --}}

<!-- Plugins js -->
<script src="{{URL::to('/')}}/assets/plugins/moment/moment.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/select2/select2.min.js"></script>
<script src="{{URL::to('/')}}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="{{URL::to('/')}}/assets/pages/jquery.forms-advanced.js"></script>

<!-- App js -->
<script src="{{URL::to('/')}}/assets/js/app.js"></script>
<script>
    function setElementValue(element ,route) {
        $(element).attr("href", route);
    }
</script>

</body>
