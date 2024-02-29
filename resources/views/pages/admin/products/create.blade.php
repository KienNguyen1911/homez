@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')

@section('additionals')
    <div class="col-lg-12">
        <div class="dashboard_title_area">
            <h2>Howdy, Ali!</h2>
            <p class="text">We are glad to see you again!</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="navtab-style1">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1"
                                    aria-selected="true">1. Description</button>
                                <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2"
                                    aria-selected="false">2. Media</button>
                                <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3"
                                    aria-selected="false">3. Location</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                aria-labelledby="nav-item1-tab">
                                <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                    <h4 class="title fz17 mb30">Property Description</h4>
                                    <form class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Title</label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Description</label>
                                                    <textarea cols="30" rows="5" name="description" placeholder="There are many variations of passages."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Status</label>
                                                    <div class="location-area">
                                                        <select class="selectpicker" name="status">
                                                            <option>Please select status</option>
                                                            @foreach (App\Models\Product::STATUS as $key => $status)
                                                                <option value="{{ $key }}">{{ $status }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb30">
                                                    <label class="heading-color ff-heading fw600 mb10">Price</label>
                                                    <input type="number" class="form-control" name="price"
                                                        placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb30">
                                                    <label class="heading-color ff-heading fw600 mb10">Sale Price</label>
                                                    <input type="number" class="form-control" name="sale_price"
                                                        placeholder="Sale Name">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
                                <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                    <h4 class="title fz17 mb30">Upload photos of your property</h4>
                                    <div class="col-lg-12">
                                        <div
                                            class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                            <div class="icon mb30"><span class="flaticon-upload"></span></div>
                                            <h4 class="title fz17 mb10">Upload photos of your property</h4>
                                            <p class="text mb25">Photos must be JPEG or PNG format and least 2048x768</p>
                                            <a class="ud-btn btn-white" id="browse-btn" href="#">Upload Main Image<i
                                                    class="fal fa-arrow-right-long"></i>
                                            </a>
                                            <a class="ud-btn btn-white" id="browse-img-btn" href="#">Upload other
                                                images<i class="fal fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                        <input type="file" name="main_image" id="main_image"
                                            style="visibility: hidden">
                                        <input type="file" name="images[]" id="images" style="visibility: hidden"
                                            multiple>
                                    </div>
                                    {{-- <div class="col-lg-12"> --}}
                                        <div class="profile-box position-relative d-md-flex align-items-end mb50"></div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            {{-- LOCATION --}}
                            <div class="tab-pane fade" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
                                <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                    <h4 class="title fz17 mb30">Listing Location</h4>
                                    <div class="form-style1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Address</label>
                                                    <input type="text" name="address" class="form-control"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Country /
                                                        State</label>
                                                    <div class="location-area">
                                                        <select class="selectpicker" name="province_id" id="province_id">
                                                            <option>Please select province</option>
                                                            @foreach ($provinces as $province)
                                                                <option value="{{ $province->id }}">{{ $province->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">City</label>
                                                    <div class="location-area">
                                                        <select class="selectpicker" name="district_id" id="district_id">
                                                            <option>Please select district</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <div class="mb20">
                                                    <label class="heading-color ff-heading fw600 mb10">Ward</label>
                                                    <div class="location-area">
                                                        <select class="selectpicker" name="ward_id" id="ward_id">
                                                            <option>Please select ward</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt30">
                                                <div class="d-sm-flex justify-content-between">
                                                    <button class="ud-btn btn-thm" type="submit">Submit Property<i
                                                            class="fal fa-arrow-right-long"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .dropdown-menu {
            max-height: 200px !important;
        }
    </style>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#province_id').on('change', function() {
                var province_id = $(this).val();
                if (province_id) {
                    $.ajax({
                        url: '/get-districts/' + province_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // append to select
                            $('select[name="district_id"]').empty();
                            // $('select[name="district_id"]').append('<option value="">Please select district</option>');
                            $('#district_id').append(
                                '<option value="">Please select district</option>');
                            console.log(data);
                            $.each(data, function(key, value) {
                                $('select[name="district_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                                $('select[name="district_id"]').selectpicker('refresh');
                                // $('button[data-id="district_id"]').selectpicker('refresh');
                            });

                        }
                    });
                } else {
                    $('select[name="district_id"]').empty();
                }
            });

            $('#district_id').on('change', function() {
                var district_id = $(this).val();
                if (district_id) {
                    $.ajax({
                        url: '/get-wards/' + district_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // append to select
                            $('select[name="ward_id"]').empty();
                            $('#ward_id').append(
                                '<option value="">Please select ward</option>');
                            console.log(data);
                            $.each(data, function(key, value) {
                                $('select[name="ward_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                                $('select[name="ward_id"]').selectpicker('refresh');
                            });

                        }
                    });
                } else {
                    $('select[name="ward_id"]').empty();
                }
            });

            // preview image before upload
            $('#browse-btn').click(function() {
                // open file dialog
                $('#main_image').click();
            });

            $('#browse-img-btn').click(function() {
                $('#images').click();
            });

            // preview image in profile-box before upload
            $('#main_image').change(function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.profile-box').html(
                            '<div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">' +
                            '<img src="' + e.target.result +
                            '" alt="" style="width:250px; height:250px; object-fit:cover">' +
                            '<a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item">' +
                            '<span class="fas fa-trash-can"></span>' +
                            '<span class="bg-white px-2 py-1 text-center rounded-3">Main</span>' +
                            '</a>' +
                            '</div>'
                        );
                    }
                    reader.readAsDataURL(file);
                }
            });

            $('#images').change(function() {
                var files = this.files;
                if (files) {
                    for (let i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('.profile-box').append(
                                '<div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">' +
                                '<img src="' + e.target.result +
                                '" alt="" style="width:250px; height:250px; object-fit:cover">' +
                                '<a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item">' +
                                '<span class="fas fa-trash-can"></span>' +
                                '</a>' +
                                '</div>'
                            );
                        }
                        reader.readAsDataURL(files[i]);
                    }
                }
            });

            $('.tag-del').click(function() {
                $('.profile-box').html('');
                $('#main_image').val('');
            });
        });
    </script>
@endpush
