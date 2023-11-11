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
      <div class="row g-xl-8">
        <div class="card card-flush">
          <!--begin::Card header-->
          <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
              <!--begin::Search-->
              <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i> <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
              </div>
              <!--end::Search-->
            </div>
            <!--end::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
              <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                  <option></option>
                  <option value="all">All</option>
                  <option value="published">Published</option>
                  <option value="scheduled">Scheduled</option>
                  <option value="inactive">Inactive</option>
                </select>
                <!--end::Select2-->
              </div>

              <!--begin::Add product-->
              <a href="{{ route('product.create') }}" class="btn btn-primary"> Add Product </a>
              <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
          </div>
          <!--end::Card header-->

          <!--begin::Card body-->
          <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
              <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                  <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                      <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                    </div>
                  </th>
                  <th class="min-w-200px">Product</th>
                  <th class="text-end min-w-100px">SKU</th>
                  <th class="text-end min-w-70px">Qty</th>
                  <th class="text-end min-w-100px">Price</th>
                  <th class="text-end min-w-100px">Rating</th>
                  <th class="text-end min-w-100px">Status</th>
                  <th class="text-end min-w-70px">Actions</th>
                </tr>
              </thead>
              <tbody class="fw-semibold text-gray-600">
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/1.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">03408009</span>
                  </td>
                  <td class="text-end pe-0" data-order="48">
                    <span class="fw-bold ms-3">48</span>
                  </td>
                  <td class="text-end pe-0">180</td>
                  <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/2.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">02554004</span>
                  </td>
                  <td class="text-end pe-0" data-order="2">
                    <span class="badge badge-light-warning">Low stock</span>
                    <span class="fw-bold text-warning ms-3">2</span>
                  </td>
                  <td class="text-end pe-0">196</td>
                  <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/3.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">04570007</span>
                  </td>
                  <td class="text-end pe-0" data-order="36">
                    <span class="fw-bold ms-3">36</span>
                  </td>
                  <td class="text-end pe-0">245</td>
                  <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/4.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">01636009</span>
                  </td>
                  <td class="text-end pe-0" data-order="2">
                    <span class="badge badge-light-warning">Low stock</span>
                    <span class="fw-bold text-warning ms-3">2</span>
                  </td>
                  <td class="text-end pe-0">17</td>
                  <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/5.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">03568005</span>
                  </td>
                  <td class="text-end pe-0" data-order="23">
                    <span class="fw-bold ms-3">23</span>
                  </td>
                  <td class="text-end pe-0">160</td>
                  <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/6.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">03162002</span>
                  </td>
                  <td class="text-end pe-0" data-order="47">
                    <span class="fw-bold ms-3">47</span>
                  </td>
                  <td class="text-end pe-0">138</td>
                  <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/7.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">04346001</span>
                  </td>
                  <td class="text-end pe-0" data-order="15">
                    <span class="fw-bold ms-3">15</span>
                  </td>
                  <td class="text-end pe-0">86</td>
                  <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/8.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">04657004</span>
                  </td>
                  <td class="text-end pe-0" data-order="10">
                    <span class="fw-bold ms-3">10</span>
                  </td>
                  <td class="text-end pe-0">251</td>
                  <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/9.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">03760001</span>
                  </td>
                  <td class="text-end pe-0" data-order="37">
                    <span class="fw-bold ms-3">37</span>
                  </td>
                  <td class="text-end pe-0">40</td>
                  <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/10.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">02752003</span>
                  </td>
                  <td class="text-end pe-0" data-order="8">
                    <span class="badge badge-light-warning">Low stock</span>
                    <span class="fw-bold text-warning ms-3">8</span>
                  </td>
                  <td class="text-end pe-0">28</td>
                  <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/11.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">02747003</span>
                  </td>
                  <td class="text-end pe-0" data-order="33">
                    <span class="fw-bold ms-3">33</span>
                  </td>
                  <td class="text-end pe-0">55</td>
                  <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image: url(../../../assets/media/stock/ecommerce/12.png)"></span>
                      </a>
                      <!--end::Thumbnail-->

                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold">03381002</span>
                  </td>
                  <td class="text-end pe-0" data-order="45">
                    <span class="fw-bold ms-3">45</span>
                  </td>
                  <td class="text-end pe-0">263</td>
                  <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                      <div class="rating-label">
                        <i class="ki-duotone ki-star fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      Actions
                      <i class="ki-duotone ki-down fs-5 ms-1"></i>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="edit-product.html" class="menu-link px-3"> Edit </a>
                      </div>
                      <!--end::Menu item-->

                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row"> Delete </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
              </tbody>
            </table>
            <!--end::Table-->
          </div>
          <!--end::Card body-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Post -->
</div>
@endsection