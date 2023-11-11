@extends('admin.layouts.main')

@section('content-admin')
  <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
    <!--Start Toolbar-->
    <div class="toolbar" id="kt_toolbar">
      <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
          <!--Start Title-->
          <h1 class="text-dark fw-bold my-1 fs-2">Dashboard <small class="text-muted fs-6 fw-normal ms-1"></small></h1>
          <!--End Title-->

          <!--Start Breadcrumb-->
          <ul class="breadcrumb fw-semibold fs-base my-1">
            <li class="breadcrumb-item text-muted">
              <a href="index.html" class="text-muted text-hover-primary"> Home </a>
            </li>

            <li class="breadcrumb-item text-muted">Dashboards</li>

            <li class="breadcrumb-item text-dark">Multipurpose</li>
          </ul>
          <!--End Breadcrumb-->
        </div>
      </div>
    </div>
    <!--End Toolbar-->

    <!--Start Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
      <div class="container-xxl">
        <!--Start Form-->
        <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="products.html">
          <!--Start Aside column-->
          <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--Start Thumbnail settings-->
            <div class="card card-flush py-4">
              <div class="card-header">
                <div class="card-title">
                  <h2>Thumbnail</h2>
                </div>
              </div>
              <div class="card-body text-center pt-0">
                <style>
                  .image-input-placeholder {
                    background-image: url("../../../{{ asset('assets_admin/media/svg/files/blank-image.svg') }}");
                  }

                  [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url("../../../{{ asset('assets_admin/media/svg/files/blank-image-dark.svg') }}");
                  }
                </style>

                <!--Start Image input-->
                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                  <!--Start Preview -->
                  <div class="image-input-wrapper w-150px h-150px"></div>
                  <!--End Preview -->

                  <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                  </label>

                  <!--Start Cancel-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                  </span>
                  <!--End Cancel-->

                  <!--Start Remove-->
                  <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                  </span>
                  <!--End Remove-->
                </div>
                <!--End Image input-->

                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
              </div>
            </div>
            <!--End Thumbnail settings-->

            <!--Start Category -->
            <div class="card card-flush py-4">
              <div class="card-header">
                <div class="card-title">
                  <h2>Product Details</h2>
                </div>
              </div>

              <div class="card-body pt-0">
                <!--Start Input group-->
                <label class="form-label">Categories</label>

                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                  <option></option>
                  <option value="Computers">Computers</option>
                  <option value="Watches">Watches</option>
                  <option value="Headphones">Headphones</option>
                  <option value="Footwear">Footwear</option>
                </select>

                <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                <!--End Input group-->

                <!--Start Button-->
                <a href="add-category.html" class="btn btn-light-primary btn-sm mb-10"> <i class="ki-duotone ki-plus fs-2"></i> Create new category </a>
                <!--End Button-->
              </div>
            </div>
            <!--End Category -->
          </div>
          <!--End Aside column-->

          <!--Start Main column-->
          <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="d-flex flex-column gap-7 gap-lg-10">
              <!--Start General options-->
              <div class="card card-flush py-4">
                <div class="card-header">
                  <div class="card-title">
                    <h2>General</h2>
                  </div>
                </div>

                <div class="card-body pt-0">
                  <!--Start Input group-->
                  <div class="mb-10 fv-row">
                    <label class="required form-label">Product Name</label>

                    <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="" />
                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                  </div>
                  <!--End Input group-->

                  <!--Start Input group-->
                  <div>
                    <label class="form-label">Description</label>

                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>

                    <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                  </div>
                  <!--End Input group-->
                </div>
              </div>
              <!--End General options-->

              <!--Start Media-->
              <div class="card card-flush py-4">
                <div class="card-header">
                  <div class="card-title">
                    <h2>Media</h2>
                  </div>
                </div>

                <div class="card-body pt-0">
                  <!--Start Input group-->
                  <div class="fv-row mb-2">
                    <div class="dropzone" id="kt_ecommerce_add_product_media">
                      <div class="dz-message needsclick">
                        <i class="ki-duotone ki-file-up text-primary fs-3x"><span class="path1"></span><span class="path2"></span></i>
                        <div class="ms-4">
                          <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                          <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--End Input group-->

                  <div class="text-muted fs-7">Set the product media gallery.</div>
                </div>
              </div>
              <!--End Media-->

              <!--Start Pricing-->
              <div class="card card-flush py-4">
                <div class="card-header">
                  <div class="card-title">
                    <h2>Pricing</h2>
                  </div>
                </div>

                <!--Start Card body-->
                <div class="card-body pt-0">
                  <!--Start Input group-->
                  <div class="mb-10 fv-row">
                    <label class="required form-label">Base Price</label>
                    <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="" />

                    <div class="text-muted fs-7">Set the product price.</div>
                  </div>
                  <!--End Input group-->

                  <!--Start Input group-->
                  <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                    <!--Start Slider -- Dilarang di hapus karna akan mempengaruhi dropzone-->
                    <div class="d-flex flex-column text-center mb-5">
                      <div class="d-flex align-items-start justify-content-center mb-7">
                        <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                      </div>
                      <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                    </div>
                    <!--End Slider-->
                  </div>
                  <!--End Input group-->
                </div>
              </div>
              <!--End Pricing-->
            </div>

            <div class="d-flex justify-content-end">
              <a href="products.html" class="btn btn-light me-5"> Cancel </a>

              <button type="submit" class="btn btn-primary">
                <span class="indicator-label"> Save Changes </span>
              </button>
            </div>
          </div>
          <!--End Main column-->
        </form>
        <!--End Form-->
      </div>
    </div>
    <!-- End Post -->
  </div>
@endsection