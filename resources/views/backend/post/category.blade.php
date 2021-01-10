@extends('backend.layouts.app')

@section('main')
<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-header-left">
						<h3>Category
                            <small>Multikart Admin </small>
                        </h3>
					</div>
				</div>
				<div class="col-lg-6">
					<ol class="breadcrumb pull-right">
						<li class="breadcrumb-item">
							<a href="index.html">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
									<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
									<polyline points="9 22 9 12 15 12 15 22"></polyline>
								</svg>
							</a>
						</li>
						<li class="breadcrumb-item">Post</li>
						<li class="breadcrumb-item active">Category</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="btn-popup pull-right">
							<button type="button" class="btn btn-secondary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title f-w-600" id="exampleModalLabel">Add Digital Product</h5>
											<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
											</button>
										</div>
										<div class="modal-body">
											<form id="post-cat-form" action="{{ route('post-category.store') }}" method="POST" class="needs-validation">@csrf
												<div class="form">
													<div class="form-group">
														<label for="validationCustom01" class="mb-1">Category Name :</label>
														<input name="name" class="form-control" id="validationCustom01" type="text">
													</div>
													<div class="form-group mb-0">
														<label for="validationCustom02" class="mb-1">Category Image :</label>
														<input name="img" class="form-control" id="validationCustom02" type="file">
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
						</div>
						<div class="table-responsive">
							<div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
								<div class="jsgrid-grid-header jsgrid-header-scrollbar">
									<table class="jsgrid-table">
										<tr class="jsgrid-header-row">
											<th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable">Image</th>
											<th style="width: 100px;" class="jsgrid-header-cell jsgrid-header-sortable">Name</th>
											<th style="width: 50px;" class="jsgrid-header-cell jsgrid-header-sortable">Status</th>
											
											<th style="width: 50px;" class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center">
												<input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
											</th>
										</tr>
										
									
									</table>
								</div>
								<div class="jsgrid-grid-body">
									<table class="jsgrid-table">
										<tbody>

											<tr class="jsgrid-row">
												<td style="width: 50px;" class="jsgrid-cell jsgrid-align-center">
													<img src="../assets/images/digital-product/graphic-design.png" class="blur-up lazyloaded" style="height: 50px; width: 50px;">
												</td>
												<td style="width: 100px;" class="jsgrid-cell">Graphic Design</td>
												
												<td style="width: 50px;" class="jsgrid-cell"><i class="fa fa-circle font-success f-12"></i>
												</td>
												
												<td style="width: 50px;" class="jsgrid-cell jsgrid-control-field jsgrid-align-center">
													<input class="jsgrid-button jsgrid-edit-button" type="button" title="Edit">
													<input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
												</td>
											</tr>
									
									
									
									
										</tbody>
									</table>
								</div>
							 <div class="jsgrid-pager-container" style="display: none;">
									<div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span>  <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span>  <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span>  <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Next</a></span>  <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 1</div>
								</div> 
								<div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
								<div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
@endsection