@extends('profile.layouts.master')
@section('title','تیکت')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1 fs-2">جزییات تیکت</span>

                    </h3>
                    @if(!$ticket->closed)
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
                            <a onclick="javascript: return confirm('آیا اطمینان به بستن تیکت دارید؟');" href="{{route('closeTicket',[$ticket->id])}}" class="btn btn-sm btn-light-dark" >
                                <!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->

                                <!--end::Svg Icon-->بستن تیکت</a>
                        </div>
                    @endif
                </div>
                {{--<div class="card-header">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">جزییات تیکت</h3>
                    </div>
                </div>--}}
                <div class="card-body">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                            <!--begin::Ticket view-->
                                <form method="post" action="{{route('storeThisTicket',$id)}}">
                                    @csrf
                                    <div class="mb-0">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <label class=" required fs-6 fw-bold mb-2">توضیحات</label>
                                            <textarea class="form-control form-control-solid" rows="4" name="descriptions"
                                                      placeholder="توضیحات خود را اینجا بنویسید."></textarea>
                                        </div>
                                        <div class="text-center mb-5">
                                            <input type="submit" name="xxx" value="ثبت" class="btn  btn-primary">
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                    </div>
                                </form>
                            <!--end::Ticket view-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>

                <!--begin::Card body-->
                <div class="card-body mt-0" id="kt_drawer_chat_messenger_body">
                    <!--begin::Messages-->
                    <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                         data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                         data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                         data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                        <!--begin::Message(in)-->
                        @foreach($tickets as $ticket)
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->

                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">شما</a>
                                            <span class="text-muted fs-7 mb-1">
                                                {{\Hekmatinasser\Verta\Verta::instance($ticket->created_at)->formatDifference()}}
                                            </span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                         data-kt-element="message-text">{{$ticket->request}}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                        @if($ticket->response!=null)
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">
                                                {{\Hekmatinasser\Verta\Verta::instance($ticket->updated_at)->formatDifference()}}</span>
                                            <a href="#"
                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">@if($ticket->ticket->admin_id!=null) {{\App\Models\User::getFullNameAttribute(\App\Models\User::find($ticket->ticket->admin_id))}}
                                                @else ادمین @endif</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                         data-kt-element="message-text">{{$ticket->response}}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                        @endif
                    @endforeach
                    <!--end::Message(out)-->
                    </div>
                    <!--end::Messages-->
                </div>
                <!--end::Card body-->
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('custom_js')
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ URL::asset('profile/assets/js/custom/apps/support-center/tickets/create.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/documentation/documentation.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/widgets.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/modals/create-app.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/modals/upgrade-plan.js')}}"></script>
    @if(isset($error))
        <script>
            toastr.error('{{$error}}');
        </script>

    @endif
    @if(isset($success))

        <script>
            toastr.success('{{$success}}');
        </script>

    @endif
    <!--end::Page Custom Javascript-->
@endsection
