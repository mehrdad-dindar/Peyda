@extends('profile.layouts.master')
@section('title','انتقال فراگارانتی')
@section('custom_head')
@endsection
@section('content')
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card mb-2">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Section-->
                    <form action="{{route('transfer_store')}}" method="post" id="transferForm">
                        @csrf
                        <input type="hidden" value="{{$warranty_id}}" name="warranty_id">
                        <div class="py-10">
                            <!--begin::Heading-->
                            <h1 class="anchor fw-bolder mb-5" id="custom-form-control">
                                <a href="#custom-form-control"></a>کد انتقال</h1>
                            <!--end::Heading-->
                            <!--begin::Block-->
                            <div class="py-5">
                                <div class="rounded border p-10">
                                    <div class="mb-10">

                                        @if(isset($transfer_code))
                                            <h3 class="anchor fw-bolder mb-5">{{$transfer_code}}</h3>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="py-5">
                                <div class="mb-10">
                                    @if(!isset($transfer_code))
                                    <button style="font-family: IRANSans;" type="submit" class="btn btn-success">تولید کد</button>
                                        @endif
                                </div>
                            </div>

                            <!--end::Block-->
                        </div>
                    </form>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>




@endsection
@section('custom_js')

    @if (isset($success))
        <script>
            toastr.success("ثبت درخواست", 'برای انتقال فراگارانتی، این کد را در اختیار کاربر دوم قرار دهید.');
        </script>
    @elseif(isset($error))
        <script>
            toastr.error("خطا", 'متاسفانه درخواست شما ثبت نشد!');
        </script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <script src="{{URL::asset('profile/js/custom/documentation/forms/dropzonejs.js')}}"></script>

    <script type="text/javascript">

        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('projects.storeMedia') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file,response) {
                // alert(response.id);
                $('form').append('<input type="hidden" name="document_id[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document_id[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($project) && $project->document)
                var files =
                    {!! json_encode($project->document) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document_id[]" value="' + file.file_name + '">')
                }
                @endif
            }
        }
    </script>

@endsection
