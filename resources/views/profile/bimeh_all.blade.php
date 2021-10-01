@extends('profile.layouts.master')
@section('title','همه فراگارانتی ها')
@section('custom_head')
@endsection
@section('content')
    <div id="kt_content_container" class="container">
        <!--begin::Tables Widget 13-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">همه فراگارانتی ها</span>
                    {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span>--}}
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                        <!--begin::Table head-->
                        <thead>
                        <tr class="fw-bolder text-muted">
                            <th class="min-w-150px">شناسه</th>
                            <th class="min-w-140px">تاریخ شروع</th>
                            <th class="min-w-120px">تاریخ انقضا</th>
                            <th class="min-w-120px">مبلغ</th>
                            <th class="min-w-120px">هدیه همراه</th>
                            <th class="min-w-120px">وضعیت</th>
                            <th class="min-w-100px text-end">تغییرات</th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        @foreach($warranties as $row)
                            <tr>
                                <td>
                                    <a class="text-dark fw-bolder text-hover-primary fs-6">{{$row->activation_code}}</a>
                                    <span
                                        class="text-muted fw-bold text-muted d-block fs-7">{{$row->phone_name}}</span>
                                </td>
                                <td>
                                    <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"></a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">از زمان تایید</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-bold text-muted d-block fs-7">یک سال پس از تایید</span>
                                </td>
                                <td class="text-dark fw-bolder text-hover-primary fs-6"><span
                                        class="peyda_price">{{$row->addition_fire_commitment_id != null ? number_format($row->Commitment_ceiling->price+$row->Fire_commitment_ceiling->price+$row->tax) : number_format($row->Commitment_ceiling->price+$row->tax)}}</span>
                                    تومان
                                </td>
                                <td>
                                    <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">@if($row->fire_gift==1)
                                            بیمه آتش سوزی@endif</a>
                                    <span class="text-muted fw-bold text-muted d-block fs-7"></span>
                                </td>

                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$row->id}}"
                                       class="badge badge-{{$row->status->color}}">{{$row->status->text}}</a>
                                </td>
                                <td class="text-end">
                                    @if($row->status->id==4 || $row->status->id==6)

                                    @else
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$row->id}}"
                                           class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path
                                                                                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                                fill="#000000"/>
                                                                            <path
                                                                                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                                fill="#000000" opacity="0.3"/>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    @endif
                                    {{-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                         <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                         <span class="svg-icon svg-icon-3">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                             <rect x="0" y="0" width="24" height="24" />
                                                                             <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                             <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                         </g>
                                                                     </svg>
                                                                 </span>
                                         <!--end::Svg Icon-->
                                     </a>--}}
                                </td>
                            </tr>

                            {{--  <tr>
                                  <td>
                                      <div class="form-check form-check-sm form-check-custom form-check-solid">
                                          <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                      </div>
                                  </td>
                                  <td>
                                      <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">05822-FXSP</a>
                                  </td>
                                  <td>
                                      <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Belarus</a>
                                      <span class="text-muted fw-bold text-muted d-block fs-7">Code: BY</span>
                                  </td>
                                  <td>
                                      <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">04/18/2021</a>
                                      <span class="text-muted fw-bold text-muted d-block fs-7">Code: Paid</span>
                                  </td>
                                  <td>
                                      <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                      <span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>
                                  </td>
                                  <td class="text-dark fw-bolder text-hover-primary fs-6">$4850</td>
                                  <td>
                                      <span class="badge badge-light-warning">In Progress</span>
                                  </td>
                                  <td class="text-end">
                                      <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                          <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                          <span class="svg-icon svg-icon-3">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                              <rect x="0" y="0" width="24" height="24" />
                                                                              <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                              <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                          </g>
                                                                      </svg>
                                                                  </span>
                                          <!--end::Svg Icon-->
                                      </a>
                                      <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                          <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                          <span class="svg-icon svg-icon-3">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                          <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                          <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                      </svg>
                                                                  </span>
                                          <!--end::Svg Icon-->
                                      </a>
                                      <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                          <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                          <span class="svg-icon svg-icon-3">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                              <rect x="0" y="0" width="24" height="24" />
                                                                              <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                              <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                          </g>
                                                                      </svg>
                                                                  </span>
                                          <!--end::Svg Icon-->
                                      </a>
                                  </td>
                              </tr>--}}
                            {{--                       <tr>
                                                       <td>
                                                           <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                               <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">4472-QREX</a>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: BH</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">07/23/2019</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: Paid</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">RoadGee</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                                       </td>
                                                       <td class="text-dark fw-bolder text-hover-primary fs-6">$8376</td>
                                                       <td>
                                                           <span class="badge badge-light-danger">Success</span>
                                                       </td>
                                                       <td class="text-end">
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                                   <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                               <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                   <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                               <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">00347-BCLQ</a>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Argentina</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: BR</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">12/21/2021</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: Paid</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">The Hill</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>
                                                       </td>
                                                       <td class="text-dark fw-bolder text-hover-primary fs-6">$9486</td>
                                                       <td>
                                                           <span class="badge badge-light-info">Rejected</span>
                                                       </td>
                                                       <td class="text-end">
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                                   <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                               <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                   <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                       </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                           <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                               <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                                           </div>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">59486-XDER</a>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: BT</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Code: Paid</span>
                                                       </td>
                                                       <td>
                                                           <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                                                           <span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>
                                                       </td>
                                                       <td class="text-dark fw-bolder text-hover-primary fs-6">$8476</td>
                                                       <td>
                                                           <span class="badge badge-light-primary">Approved</span>
                                                       </td>
                                                       <td class="text-end">
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Settings-1.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                                   <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                               <!--begin::Svg Icon | path: icons/duotone/Communication/Write.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                               <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                           <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                               <!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
                                                               <span class="svg-icon svg-icon-3">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                   <rect x="0" y="0" width="24" height="24" />
                                                                                                   <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                                   <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                               </g>
                                                                                           </svg>
                                                                                       </span>
                                                               <!--end::Svg Icon-->
                                                           </a>
                                                       </td>
                                                   </tr>--}}

                            <div>
                                <div class="modal fade" tabindex="-1" id="kt_modal_{{$row->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">انتخاب کنید</h5>
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                     data-bs-dismiss="modal" aria-label="Close">
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                    <span class="svg-icon svg-icon-2x">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24" version="1.1">
																			<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                               fill="#000000">
																				<rect fill="#000000" x="0" y="7"
                                                                                      width="16" height="2" rx="1"/>
																				<rect fill="#000000" opacity="0.5"
                                                                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                                      x="0" y="7" width="16" height="2"
                                                                                      rx="1"/>
																			</g>
																		</svg>
																	</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <div class="modal-body">
                                                <div class="fv-row mb-15" data-kt-buttons="true">
                                                @if($row->status->id == 3 || $row->status->id == 8)
                                                    <!--begin::Option-->
                                                        <label
                                                            @if(sizeof($warranties)>0) onclick="window.location.href='{{route('cart',$row->id)}}'"
                                                            @endif
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" checked
                                                                   name="warranty_type" value="1"/>
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                                <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg viewBox="0 0 24 24" version="1.1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Shopping / Wallet</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Shopping-/-Wallet" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-47" fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5"></circle>
        <rect id="Rectangle-162" fill="#000000" opacity="0.3"
              transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3"
              y="3" width="18" height="7" rx="1"></rect>
        <path
            d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
            id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>
																			</span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">پرداخت هزینه سفارش</span>
																			</span>
                                                                <!--end::Info-->
																		</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->
                                                @endif
                                                @if($row->status->id == 2)
                                                    <!--begin::Option-->
                                                        @if($row->usable_percentage>0)
                                                            <label
                                                                @if(sizeof($warranties)>0) onclick="window.location.href='{{route('bimeh_use',$row->id)}}'"
                                                                @endif
                                                                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                                <!--begin::Input-->
                                                                <input class="btn-check" type="radio" checked
                                                                       name="warranty_type" value="1"/>
                                                                <!--end::Input-->

                                                                <!--begin::Label-->
                                                                <span class="d-flex" id="first_select">
                                                                                <!--begin::Icon-->
                                                                    <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                                                <span class="svg-icon svg-icon-3hx">
                                                                                    <svg viewBox="0 0 24 24"
                                                                                         version="1.1"
                                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                                         xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Stockholm-icons-/-General-/-Update" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
            <path
                d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z"
                id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
        </g>
    </svg>
                                                                                </span>
                                                                    <!--end::Svg Icon-->
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                                <span class="ms-4">
                                                                                    <span
                                                                                        class="fs-3 fw-bolder text-gray-900 mb-2 d-block">استفاده از فراگارانتی</span>
                                                                                </span>
                                                                    <!--end::Info-->
                                                                            </span>
                                                                <!--end::Label-->
                                                            </label>
                                                        @endif
                                                    <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label
                                                            @if(sizeof($warranties)>0) onclick="window.location.href='mobile/transfer_faraguaranty/{{$row->id}}'"
                                                            @endif
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="warranty_type"
                                                                   value="2"/>
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <span class="d-flex" id="new_mobile_select_btn">
																			<!--begin::Icon-->
                                                                <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                     width="24px" height="24px"
                                                                                     viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1"
                                                                                       fill="none" fill-rule="evenodd">
																						<rect x="5" y="5" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"/>
																						<rect x="14" y="5" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																						<rect x="5" y="14" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																						<rect x="14" y="14" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																					</g>
																				</svg>
																			</span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">انتقال فراگارانتی</span>
																				{{--<span
                                                                                    class="fw-bold fs-4 text-muted">{{ $user->phone_brand->name." / ".$user->phone_model->name }}</span>--}}
																			</span>
                                                                <!--end::Info-->
																		</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->

                                                        <!--begin::Option-->
                                                        <label
                                                            onclick="window.location.href='{{route('print',$row->id)}}'"
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" checked
                                                                   name="warranty_type" value="1"/>
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg viewBox="0 0 24 24" version="1.1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Stockholm-icons-/-General-/-Update" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path
            d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z"
            id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg>
																			</span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">چاپ فراگارانتی</span>
																			</span>
                                                                <!--end::Info-->
																		</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->
                                                    @endif
                                                    @if($row->status->id == 5)
                                                    <!--begin::Option-->
                                                        <label
                                                            @if(sizeof($warranties)>0) onclick="window.location.href='{{route('uploadPhoto',$row->id)}}'"
                                                            @endif
                                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" checked
                                                                   name="warranty_type" value="1"/>
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                                <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg viewBox="0 0 24 24" version="1.1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Shopping / Wallet</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Shopping-/-Wallet" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-47" fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5"></circle>
        <rect id="Rectangle-162" fill="#000000" opacity="0.3"
              transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3"
              y="3" width="18" height="7" rx="1"></rect>
        <path
            d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
            id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>
																			</span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">آپلود تصاویر</span>
                                                                                <span
                                                                                    class="fw-bold fs-4 text-muted">فعال سازی فراگارانتی {{$row->phone_name}}</span>
																			</span>
                                                                <!--end::Info-->
																		</span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Option-->
                                                    @endif
                                                    @if($row->status->id == 7)
                                                    <!--begin::Option-->
                                                        @if(sizeof($warranties)>0)
                                                            @if($warrantyProblemType==2)
                                                                <label
                                                                    onclick="window.location.href='{{route('editPhoto',['id'=>$row->id])}}'"

                                                                    class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                                    <!--begin::Input-->
                                                                    <input class="btn-check" type="radio" checked
                                                                           name="warranty_type" value="1"/>
                                                                    <!--end::Input-->

                                                                    <!--begin::Label-->
                                                                    <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                                        <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg viewBox="0 0 24 24" version="1.1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Shopping / Wallet</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Shopping-/-Wallet" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-47" fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5"></circle>
        <rect id="Rectangle-162" fill="#000000" opacity="0.3"
              transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3"
              y="3" width="18" height="7" rx="1"></rect>
        <path
            d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
            id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>
																			</span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">ویرایش تصاویر</span>
                                                                                <span
                                                                                    class="fw-bold fs-4 text-muted"> {{$row->phone_name}}</span>
																			</span>
                                                                        <!--end::Info-->
																		</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                            @elseif($warrantyProblemType==3)
                                                                <label
                                                                    onclick="window.location.href='{{route('editPhoto',['id'=>$row->id])}}'"

                                                                    class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                                    <!--begin::Input-->
                                                                    <input class="btn-check" type="radio" checked
                                                                           name="warranty_type" value="1"/>
                                                                    <!--end::Input-->

                                                                    <!--begin::Label-->
                                                                    <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                                        <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg viewBox="0 0 24 24" version="1.1"
                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Shopping / Wallet</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Shopping-/-Wallet" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-47" fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5"></circle>
        <rect id="Rectangle-162" fill="#000000" opacity="0.3"
              transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3"
              y="3" width="18" height="7" rx="1"></rect>
        <path
            d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
            id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>
																			</span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">ویرایش تصاویر</span>
                                                                                <span
                                                                                    class="fw-bold fs-4 text-muted"> {{$row->phone_name}}</span>
																			</span>
                                                                        <!--end::Info-->
																		</span>
                                                                    <!--end::Label-->
                                                                </label>
                                                            @endif
                                                        @endif
                                                    <!--end::Option-->
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">بستن
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 13-->
    </div>
@endsection
@section('custom_js')
    @if(isset($message) && $code != 100)
        <script>
            toastr.error("{{$message}}", "خطا");
        </script>
    @elseif(isset($message) && $code == 100)
        <script>
            toastr.success("{{$message}}", "پرداخت موفق");
        </script>
    @endif

    @if (isset($success))
        <script>
            toastr.success("پیام", 'درخواست شما با موفقیت ثبت شد!');
        </script>
    @elseif(isset($error))
        <script>
            toastr.error("پیام", 'متاسفانه درخواست شما ثبت نشد!');
        </script>
    @endif

@endsection
