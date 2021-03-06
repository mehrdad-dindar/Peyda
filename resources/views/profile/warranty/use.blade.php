@extends('profile.layouts.master')
@section('title','استفاده از فراگارانتی')
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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                    <!--begin::Section-->
                    <form action="{{ route('store_use') }}" method="post" id="useForm">
                        @csrf
                        <input type="hidden" value="{{$warranty_id}}" name="warranty_id">
                        <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bolder mb-5" id="custom-form-control">
                            <a href="#custom-form-control"></a>استفاده از فراگارانتی</h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="title" class="form-label required">عنوان</label>
                                    <input type="text" name="title" class="form-control" placeholder="شکستن صفحه" />
                                </div>
                            </div>
                        </div>
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label for="descriptions" class="form-label required">توضیحات</label>
                                    <textarea name="descriptions" class="form-control" placeholder="شکستن اسکرین، خطوط کناره راست و..." ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="rounded border p-10">
                                    {{-- Name/Description fields, irrelevant for this article --}}

                                <div class="form-group">
                                    <label for="document" class="required">اسناد</label>
                                    <div class="needsclick dropzone" id="document-dropzone">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="mb-10">
                                <button type="submit" class="btn btn-success">ثبت</button>
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
            toastr.success("پیام", 'درخواست شما با موفقیت ثبت شد!');
        </script>
    @elseif(isset($error))
        <script>
            toastr.error("پیام", 'متاسفانه درخواست شما ثبت نشد!');
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
