@extends('backend.layouts.app')
@section("title","Category")
@section('main')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test"
                            data-target="#exampleModal">Add Category</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Digital Product</h5>
                                        <button class="close" type="button" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="project-category-form" action="{{ route('project.category.store') }}"
                                            method="POST" class="needs-validation">
                                            @csrf
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                    <input name="name" class="form-control" type="text" required=''>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="batchDelete" class="category-table user-list order-table jsgrid"
                        style="position: relative; height: auto; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tbody>
                                    <tr class="jsgrid-header-row">
                                        <th style="width: 50px !important;" class="jsgrid-header-cell">No</th>
                                        <th style="width: 100px;" class="jsgrid-header-cell">Name</th>
                                        <th style="width: 100px;" class="jsgrid-header-cell">Slug</th>
                                        <th style="width: 100px;" class="jsgrid-header-cell">Action</th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-grid-body">
                            <table class="jsgrid-table">
                                <tbody>

                                    @foreach ($project_category as $category)
                                    <tr class="jsgrid-row ">
                                        <td style="width: 50px !important;" class="jsgrid-cell">{{ $loop-> index +1  }}
                                        </td>
                                        <td style="width: 100px;" class="jsgrid-cell">{{ $category -> name }}</td>
                                        <td style="width: 100px;" class="jsgrid-cell">{{ $category -> slug }}</td>
                                        <td style="width: 100px;" class="jsgrid-cell action">
                                            <a class="project_category_edit" cat_id="{{ $category -> id }}" href="#"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a class="delete_notification" href="www.facebook.com"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-pager-container" style="">
                            <div class="jsgrid-pager">Pages: <span
                                    class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                        href="javascript:void(0);">First</a></span> <span
                                    class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                        href="javascript:void(0);">Prev</a></span> <span
                                    class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                                    class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span> <span
                                    class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span
                                    class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span>
                                &nbsp;&nbsp; 1
                                of 2 </div>
                        </div>
                        <div class="jsgrid-load-shader"
                            style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                        </div>
                        <div class="jsgrid-load-panel"
                            style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please,
                            wait...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="modal fade" id="project-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Digital Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="project-category-edit" action="{{ route('project.category.update') }}" method="POST"
                    class="needs-validation">
                    @csrf
                    @method('put')
                    <div class="form">
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Category Name :</label>
                            <input name="name" class="form-control" type="text" required=''>
                            <input name="id" class="form-control" type="hidden" >
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
