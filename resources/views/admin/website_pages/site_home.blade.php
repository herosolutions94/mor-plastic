@extends('layouts.adminlayout')
@section('page_meta')
    <meta name="description" content={{ !empty($site_settings) ? $site_settings->site_meta_desc : '' }}">
    <meta name="keywords" content="{{ !empty($site_settings) ? $site_settings->site_meta_keyword : '' }}">
    <meta name="author" content="{{ !empty($site_settings->site_name) ? $site_settings->site_name : 'Login' }}">
    <title>Admin - {{ $site_settings->site_name }}</title>
@endsection
@section('page_content')
    {!! breadcrumb('Home Page') !!}

    <form class="form theme-form" method="post" action="" enctype="multipart/form-data" id="saveForm">
        @csrf
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('admin/sitecontent') }}" class="btn btn-lg btn-danger">
                Cancel
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="page_title">Page Title</label>
                                <input class="form-control" id="page_title" type="text" name="page_title" placeholder=""
                                    value="{{ $sitecontent['page_title'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="meta_title">Meta Title</label>
                                <input class="form-control" id="meta_title" type="text" name="meta_title" placeholder=""
                                    value="{{ $sitecontent['meta_title'] ?? '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="site_meta_desc">Meta Description</label>
                                <textarea class="form-control" id="meta_description" rows="3"
                                    name="meta_description">{{ $sitecontent['meta_description'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <textarea class="form-control" id="meta_keywords" rows="3"
                                    name="meta_keywords">{{ $sitecontent['meta_keywords'] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-header">
                <h5>Banner</h5>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image1">Banner Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image1']) ? $sitecontent['image1'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image1" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="image1">Banner Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image2']) ? $sitecontent['image2'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image2" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label" for="image1">Banner Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image3']) ? $sitecontent['image3'] : ' ') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image3" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_heading">Banner Heading</label>
                                    <input class="form-control" id="banner_heading" type="text" name="banner_heading"
                                        placeholder="" value="{{ $sitecontent['banner_heading'] ?? '' }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_text">Text</label>
                                    <textarea id="banner_text" name="banner_text" rows="4"
                                        class="editor">{{ $sitecontent['banner_text'] ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn1_txt">Button 1 Text</label>
                                    <input class="form-control" id="banner_btn1_txt" type="text" name="banner_btn1_txt"
                                        placeholder="" value="{{ $sitecontent['banner_btn1_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn1_link">Button 1 Link URL</label>
                                    <select name="banner_btn1_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}" {{ !empty($sitecontent['banner_btn1_link']) && $sitecontent['banner_btn1_link'] == $key ? 'selected' : '' }}>
                                                {{ $page }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn2_txt">Button 2 Text</label>
                                    <input class="form-control" id="banner_btn2_txt" type="text" name="banner_btn2_txt"
                                        placeholder="" value="{{ $sitecontent['banner_btn2_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="banner_btn2_link">Button 2 Link URL</label>
                                    <select name="banner_btn2_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}" {{ !empty($sitecontent['banner_btn2_link']) && $sitecontent['banner_btn2_link'] == $key ? 'selected' : '' }}>
                                                {{ $page }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="search_field_txt">Search Bar Field Text</label>
                                    <input class="form-control" id="search_field_txt" type="text" name="search_field_txt"
                                        placeholder="" value="{{ $sitecontent['search_field_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="search_btn_txt">Search Bar Button Text</label>
                                    <input class="form-control" id="search_btn_txt" type="text" name="search_btn_txt"
                                        placeholder="" value="{{ $sitecontent['search_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 1</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image2">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image4']) ? $sitecontent['image4'] : '') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image4" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section1t_heading">Heading</label>
                                            <input class="form-control" id="section1t_heading" type="text"
                                                name="section1t_heading" placeholder=""
                                                value="{{ $sitecontent['section1t_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2_theading">Heading</label>
                                            <input class="form-control" id="section2_theading" type="text"
                                                name="section2_theading" placeholder=""
                                                value="{{ $sitecontent['section2_theading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section1_text">Text</label>
                                            <textarea id="section1_text" name="section1_text" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section1_text']) ? $sitecontent['section1_text'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section1_btn_txt">Button 1 Text</label>
                                            <input class="form-control" id="section1_btn_txt" type="text"
                                                name="section1_btn_txt" placeholder=""
                                                value="{{ $sitecontent['section1_btn_txt'] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section1_btn_link">Button Link URL</label>
                                            <select name="section1_btn_link" class="form-control" required>
                                                <option value="">Set URL</option>

                                                @foreach ($all_pages as $key => $page)
                                                    <option value="{{ $key }}" {{ !empty($sitecontent['section1_btn_link']) && $sitecontent['section1_btn_link'] == $key ? 'selected' : '' }}>
                                                        {{ $page }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row">
                        <?php $section1 = 0; ?>
                        @for ($i = 5; $i <= 7; $i++) <?php    $section1 = $section1 + 1; ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Block {{ $section1 }}</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <div class="card w-100 border position-relative overflow-hidden">
                                                    <div class="card-body p-4">
                                                        <div class="text-center">
                                                            <div class="file_choose_icon"
                                                                style="background-color: rgb(179, 179, 179)">
                                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image' . $i]) ? $sitecontent['image' . $i] : '') }}"
                                                                    alt="matdash-img" class="img-fluid ">
                                                            </div>
                                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size
                                                                of 800K
                                                            </p>
                                                            <input class="form-control uploadFile" name="image{{ $i }}"
                                                                type="file" data-bs-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-4">
                                                    <label class="form-label" for="sec6_heading{{ $i }}">Heading
                                                        {{ $section1 }}</label>
                                                    <input class="form-control" id="sec6_heading{{ $i }}" type="text"
                                                        name="sec6_heading{{ $i }}" placeholder=""
                                                        value="{{ !empty($sitecontent['sec6_heading' . $i]) ? $sitecontent['sec6_heading' . $i] : '' }}">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-4">
                                                    <label class="form-label" for="sec6_text{{ $i }}">Text
                                                        {{ $section1 }}</label>
                                                    <textarea id="sec6_text{{ $i }}" name="sec6_text{{ $i }}" rows="8"
                                                        class="form-control">{{ !empty($sitecontent['sec6_text' . $i]) ? $sitecontent['sec6_text' . $i] : '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>

            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 2</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image2">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image8']) ? $sitecontent['image8'] : '') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image8" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2_heading">Heading</label>
                                            <input class="form-control" id="section2_heading" type="text"
                                                name="section2_heading" placeholder=""
                                                value="{{ $sitecontent['section2_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2_text">Text</label>
                                            <textarea id="section2_text" name="section2_text" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section2_text']) ? $sitecontent['section2_text'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2_btn_txt">Button 1 Text</label>
                                            <input class="form-control" id="section2_btn_txt" type="text"
                                                name="section2_btn_txt" placeholder=""
                                                value="{{ $sitecontent['section2_btn_txt'] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2_btn_link">Button Link URL</label>
                                            <select name="section2_btn_link" class="form-control" required>
                                                <option value="">Set URL</option>

                                                @foreach ($all_pages as $key => $page)
                                                    <option value="{{ $key }}" {{ !empty($sitecontent['section2_btn_link']) && $sitecontent['section2_btn_link'] == $key ? 'selected' : '' }}>
                                                        {{ $page }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 3</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image2">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image9']) ? $sitecontent['image9'] : '') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image9" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section3_heading">Heading</label>
                                            <input class="form-control" id="section3_heading" type="text"
                                                name="section3_heading" placeholder=""
                                                value="{{ $sitecontent['section3_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section3_text">Text</label>
                                            <textarea id="section3_text" name="section3_text" rows="4"
                                                class=" form-control">{{ !empty($sitecontent['section3_text']) ? $sitecontent['section3_text'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <?php $section2 = 0; ?>
                            @for ($i = 10; $i <= 13; $i++) <?php    $section2 = $section2 + 1; ?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $section2 }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="card w-100 border position-relative overflow-hidden">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <div class="file_choose_icon"
                                                                    style="background-color: rgb(179, 179, 179)">
                                                                    <img src="{{ get_site_image_src('images', !empty($sitecontent['image' . $i]) ? $sitecontent['image' . $i] : '') }}"
                                                                        alt="matdash-img" class="img-fluid ">
                                                                </div>
                                                                <p class="mb-0">Allowed JPG, GIF or PNG. Max size
                                                                    of 800K
                                                                </p>
                                                                <input class="form-control uploadFile" name="image{{ $i }}"
                                                                    type="file" data-bs-original-title="" title="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec6_heading{{ $i }}">Heading
                                                            {{ $section2 }}</label>
                                                        <input class="form-control" id="sec6_heading{{ $i }}" type="text"
                                                            name="sec6_heading{{ $i }}" placeholder=""
                                                            value="{{ !empty($sitecontent['sec6_heading' . $i]) ? $sitecontent['sec6_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec6_text{{ $i }}">Text
                                                            {{ $section2 }}</label>
                                                        <textarea id="sec6_text{{ $i }}" name="sec6_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec6_text' . $i]) ? $sitecontent['sec6_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>





                    </div>

                </div>

            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 4</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <!-- <div class="row">
                                                                <div class="col-md-4">
                                                                    <label class="form-label" for="image2">Image</label>
                                                                    <div class="card w-100 border position-relative overflow-hidden">
                                                                        <div class="card-body p-4">
                                                                            <div class="text-center">
                                                                                <div class="file_choose_icon">
                                                                                    <img src="{{ get_site_image_src('images', !empty($sitecontent['image4']) ? $sitecontent['image4'] : '') }}"
                                                                                        alt="matdash-img" class="img-fluid ">
                                                                                </div>
                                                                                <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                                                <input class="form-control uploadFile" name="image4" type="file"
                                                                                    data-bs-original-title="" title="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                        <!-- <div class="row">
                                                                <div class="col">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="section2_heading">Heading</label>
                                                                        <input class="form-control" id="section2_heading" type="text" name="section2_heading"
                                                                            placeholder="" value="{{ $sitecontent['section2_heading'] ?? '' }}">
                                                                    </div>
                                                                </div>
                                                            </div> -->


                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_text">Text</label>
                                    <textarea id="section4_text" name="section4_text" rows="4"
                                        class=" editor">{{ !empty($sitecontent['section4_text']) ? $sitecontent['section4_text'] : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php $section3 = 0; ?>
                            @for ($i = 14; $i <= 17; $i++) <?php    $section3 = $section3 + 1; ?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Block {{ $section3 }}</h5>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col">
                                                    <div class="card w-100 border position-relative overflow-hidden">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <div class="file_choose_icon"
                                                                    style="background-color: rgb(179, 179, 179)">
                                                                    <img src="{{ get_site_image_src('images', !empty($sitecontent['image' . $i]) ? $sitecontent['image' . $i] : '') }}"
                                                                        alt="matdash-img" class="img-fluid ">
                                                                </div>
                                                                <p class="mb-0">Allowed JPG, GIF or PNG. Max size
                                                                    of 800K
                                                                </p>
                                                                <input class="form-control uploadFile" name="image{{ $i }}"
                                                                    type="file" data-bs-original-title="" title="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec6_heading{{ $i }}">Heading
                                                            {{ $section3 }}</label>
                                                        <input class="form-control" id="sec6_heading{{ $i }}" type="text"
                                                            name="sec6_heading{{ $i }}" placeholder=""
                                                            value="{{ !empty($sitecontent['sec6_heading' . $i]) ? $sitecontent['sec6_heading' . $i] : '' }}">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-4">
                                                        <label class="form-label" for="sec6_text{{ $i }}">Text
                                                            {{ $section3 }}</label>
                                                        <textarea id="sec6_text{{ $i }}" name="sec6_text{{ $i }}" rows="8"
                                                            class="form-control">{{ !empty($sitecontent['sec6_text' . $i]) ? $sitecontent['sec6_text' . $i] : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_btn_txt">Button 1 Text</label>
                                    <input class="form-control" id="section4_btn_txt" type="text" name="section4_btn_txt"
                                        placeholder="" value="{{ $sitecontent['section4_btn_txt'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="section4_btn_link">Button Link URL</label>
                                    <select name="section4_btn_link" class="form-control" required>
                                        <option value="">Set URL</option>

                                        @foreach ($all_pages as $key => $page)
                                            <option value="{{ $key }}" {{ !empty($sitecontent['section4_btn_link']) && $sitecontent['section4_btn_link'] == $key ? 'selected' : '' }}>
                                                {{ $page }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 5</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image2">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image18']) ? $sitecontent['image18'] : '') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image18" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section2top_heading">Top Heading</label>
                                            <input class="form-control" id="section2top_heading" type="text"
                                                name="section2top_heading" placeholder=""
                                                value="{{ $sitecontent['section2top_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_n_heading">Heading</label>
                                            <input class="form-control" id="section5_n_heading" type="text"
                                                name="section5_n_heading" placeholder=""
                                                value="{{ $sitecontent['section5_n_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_text">Text</label>
                                            <textarea id="section2_text" name="section5_text" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section5_text']) ? $sitecontent['section5_text'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_text2">Text</label>
                                            <textarea id="section5_text2" name="section5_text2" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section5_text2']) ? $sitecontent['section5_text2'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_btn_txt">Button 1 Text</label>
                                            <input class="form-control" id="section5_btn_txt" type="text"
                                                name="section5_btn_txt" placeholder=""
                                                value="{{ $sitecontent['section5_btn_txt'] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_btn_link">Button Link URL</label>
                                            <select name="section5_btn_link" class="form-control" required>
                                                <option value="">Set URL</option>

                                                @foreach ($all_pages as $key => $page)
                                                    <option value="{{ $key }}" {{ !empty($sitecontent['section5_btn_link']) && $sitecontent['section5_btn_link'] == $key ? 'selected' : '' }}>
                                                        {{ $page }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>


        </div>



        <div class="card">
            <div class="card-header">
                <h5>Section 6</h5>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-12">




                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-label" for="image3">Image</label>
                                        <div class="card w-100 border position-relative overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <div class="file_choose_icon">
                                                        <img src="{{ get_site_image_src('images', !empty($sitecontent['image19']) ? $sitecontent['image19'] : '') }}"
                                                            alt="matdash-img" class="img-fluid ">
                                                    </div>
                                                    <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                    <input class="form-control uploadFile" name="image19" type="file"
                                                        data-bs-original-title="" title="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="section6_heading">Heading</label>
                                                    <input class="form-control" id="section6_heading" type="text"
                                                        name="section6_heading" placeholder=""
                                                        value="{{ $sitecontent['section6_heading'] ?? '' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="section7_btn_txt">Button 1 Text</label>
                                                    <input class="form-control" id="section7_btn_txt" type="text"
                                                        name="section7_btn_txt" placeholder=""
                                                        value="{{ $sitecontent['section7_btn_txt'] ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="section7_btn_link">Button Link
                                                        URL</label>
                                                    <select name="section7_btn_link" class="form-control" required>
                                                        <option value="">Set URL</option>

                                                        @foreach ($all_pages as $key => $page)
                                                            <option value="{{ $key }}" {{ !empty($sitecontent['section7_btn_link']) && $sitecontent['section7_btn_link'] == $key ? 'selected' : '' }}>
                                                                {{ $page }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <?php $section6 = 0; ?>
                                    @for ($i = 20; $i <= 21; $i++) <?php    $section6 = $section6 + 1; ?>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Block {{ $section6 }}</h5>
                                                </div>
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="card w-100 border position-relative overflow-hidden">
                                                                <div class="card-body p-4">
                                                                    <div class="text-center">
                                                                        <div class="file_choose_icon"
                                                                            style="background-color: rgb(179, 179, 179)">
                                                                            <img src="{{ get_site_image_src('images', !empty($sitecontent['image' . $i]) ? $sitecontent['image' . $i] : '') }}"
                                                                                alt="matdash-img" class="img-fluid ">
                                                                        </div>
                                                                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size
                                                                            of 800K
                                                                        </p>
                                                                        <input class="form-control uploadFile"
                                                                            name="image{{ $i }}" type="file"
                                                                            data-bs-original-title="" title="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="sec6_heading{{ $i }}">Heading
                                                                    {{ $section6 }}</label>
                                                                <input class="form-control" id="sec6_heading{{ $i }}"
                                                                    type="text" name="sec6_heading{{ $i }}" placeholder=""
                                                                    value="{{ !empty($sitecontent['sec6_heading' . $i]) ? $sitecontent['sec6_heading' . $i] : '' }}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-4">
                                                                <label class="form-label" for="sec6_text{{ $i }}">Text
                                                                    {{ $section6 }}</label>
                                                                <textarea id="sec6_text{{ $i }}" name="sec6_text{{ $i }}"
                                                                    rows="8"
                                                                    class="form-control">{{ !empty($sitecontent['sec6_text' . $i]) ? $sitecontent['sec6_text' . $i] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>



                            </div>

                        </div>



                    </div>

                </div>
            </div>

        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 7</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label" for="image7">Image</label>
                                <div class="card w-100 border position-relative overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <div class="file_choose_icon">
                                                <img src="{{ get_site_image_src('images', !empty($sitecontent['image22']) ? $sitecontent['image22'] : '') }}"
                                                    alt="matdash-img" class="img-fluid ">
                                            </div>
                                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            <input class="form-control uploadFile" name="image22" type="file"
                                                data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section5_heading">Heading</label>
                                            <input class="form-control" id="section5_heading" type="text"
                                                name="section5_heading" placeholder=""
                                                value="{{ $sitecontent['section5_heading'] ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section7_text1">Text </label>
                                            <textarea id="section7_text1" name="section7_text1" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section7_text1']) ? $sitecontent['section7_text1'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section8_btn_txt">Button 1 Text</label>
                                            <input class="form-control" id="section8_btn_txt" type="text"
                                                name="section8_btn_txt" placeholder=""
                                                value="{{ $sitecontent['section8_btn_txt'] ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section8_btn_link">Button Link URL</label>
                                            <select name="section8_btn_link" class="form-control" required>
                                                <option value="">Set URL</option>

                                                @foreach ($all_pages as $key => $page)
                                                    <option value="{{ $key }}" {{ !empty($sitecontent['section8_btn_link']) && $sitecontent['section8_btn_link'] == $key ? 'selected' : '' }}>
                                                        {{ $page }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>









                    </div>

                </div>

            </div>


        </div>

        <div class="card">

            <div class="card-header">
                <h5>Section 8</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-12">

                      
                               
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="section8_text">Text </label>
                                            <textarea id="section7_text1" name="section8_text" rows="4"
                                                class=" editor">{{ !empty($sitecontent['section8_text']) ? $sitecontent['section8_text'] : '' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                               

                           

                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                <button class="btn btn-primary" type="submit">Update Page</button>
                            </div>
                        </div>






                    </div>

                </div>

            </div>


        </div>


        </div>


        {{-- <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <h6>You can edit CTA section from edit CTA section on mange pages</h6>

                    </div>
                </div>
            </div>


        </div> --}}


@endsection