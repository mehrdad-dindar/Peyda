@extends('profile.layouts.master')
@section('title','ویرایش استفاده از فراگارانتی')
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
                    <form action="{{ route('store_use','1') }}" method="post" id="useForm">
                        @csrf
                        <input type="hidden" value="{{$warrantyUse->id}}" name="use_warranty_id">
                        <input type="hidden" value="{{$warrantyUse->warranty_id}}" name="warranty_id">
                        <div class="py-10">
                            <!--begin::Heading-->
                            <h1 class="anchor fw-bolder mb-5" id="custom-form-control">
                                <a href="#custom-form-control"></a>استفاده از فراگارانتی</h1>
                            <!--end::Heading-->
                            <!--begin::Block-->
                            <div class="py-5">
                                <div class="rounded border p-10">
                                    <div class="mb-10">
                                        <label class="form-label">عنوان*</label>
                                        <input type="text" name="title" class="form-control" value="{{$warrantyUse->title}}" placeholder="شکستن صفحه" />
                                    </div>
                                </div>
                            </div>
                            <div class="py-5">
                                <div class="rounded border p-10">
                                    <div class="mb-10">
                                        <label class="form-label">توضیحات</label>
                                        <textarea name="descriptions" class="form-control" placeholder="شکستن اسکرین، خطوط کناره راست و..." >{{$warrantyUse->descriptions}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="py-5">
                                <div class="rounded border p-10">
                                    {{-- Name/Description fields, irrelevant for this article --}}

                                    <div class="form-group">
                                        <label for="document">اسناد</label>
                                        <div class="needsclick dropzone" id="document-dropzone">

                                            @foreach($images as $image)

                                                <div id="image_{{$image->id}}" class="dz-preview dz-processing dz-error dz-complete dz-image-preview"><input type="hidden" name="document_id[]" value="{{$image->URL}}"> <div class="dz-image"><img data-dz-thumbnail="" alt="404_bg.jpg" src="{{URL::asset('uploads/use_images').'/'.$image->URL}}" width="120px"></div> <div class="dz-details"> <div class="dz-size"><span data-dz-size=""><strong>57.7</strong> KB</span></div> <div class="dz-filename"><span data-dz-name="">404_bg.jpg</span></div> </div> <div class="dz-progress"> <span class="dz-upload" data-dz-uploadprogress=""></span> </div> <div class="dz-error-message"><span data-dz-errormessage="">Server responded with 0 code.</span></div> <div class="dz-success-mark"> <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>Check</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF"></path> </g> </svg> </div> <div class="dz-error-mark"> <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>Error</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475"> <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"></path> </g> </g> </svg> </div> <a class="dz-remove" href="javascript:undefined;" onclick="removeDropzoneImage('image_'+{{$image->id}})" data-dz-remove="">Remove file</a></div>

                                            @endforeach
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

        function removeDropzoneImage(id){
            document.getElementById(id).remove();
        }

    </script>

@endsection
