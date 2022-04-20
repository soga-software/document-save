<div id="documentAjax">
    <?php use App\Http\Helpers\ColorBadgeHelper; ?>
    <style lang="css">
        .navigation-menu > li a:hover {
            color: #fff !important;
            background-color: #ec2a35;
            border-color: #eb1e2a;
        }

        .card-h {
            overflow: hidden;
            text-overflow: ellipsis;
            height: min-content;
            display: inline-block;
            /* padding-top: 10px; */
            /* font-weight: normal; */
            font-size: 11px;
        }
        .tag-h{
            height: 30px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Chrome Bookmarks HTML</h2>
                            <div>
                                <input type="file" id="bookmarksFile">
                                <button type="button" id="processFile" onclick="onReadSelectedFile();">Read Selected File</button>
                                <button type="button" id="convertToJson" onClick="onConvertToJson();" disabled>Convert to JSON</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2>JSON Result</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <textarea id="input" rows="12" style="width: 100%;"></textarea>
                        </div>
                        <div class="col-md-6">
                            <textarea id="output" rows="12" style="width: 100%;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-sm-6">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Default Tree</h4>
                                    <div id="jstree">
                                        <!-- in this example the tree is populated from inline HTML -->
                                        <ul>
                                            <li class="jstree-open"  data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 1
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-primary font-18"}'>Child node 1</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 3</li>
                                                    <li  data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Child node 3
                                                        <ul>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2
                                                                <ul>
                                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                                </ul>
                                                            </li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 3</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 4</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 2
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18", "disabled":true}'>
                                                        Child
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class=" col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Checkable Tree</h4>
                                    <div id="jstree-checkbox">
                                        <!-- in this example the tree is populated from inline HTML -->
                                        <ul>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Root node 1
                                                <ul>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                    <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}' class="jstree-open">Child node 3
                                                        <ul>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 1</li>
                                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Child node 2</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{"icon":"fa fa-folder text-warning font-18"}'>Root node 2</li>
                                        </ul>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="viewData">

        </div>
    </div>
</div>
