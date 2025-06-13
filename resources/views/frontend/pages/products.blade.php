@extends('layouts.frontend')


@section('content')
        <main index>
            <section class="sub_banner" style="background: url('{{ get_site_image_src('images', $content['image1'] ?? 'default.jpg') }}') !important;">
                <div class="contain">
                    <div class="cntnt">
                       {!! $content['banner_text'] ?? '' !!}
                    </div>
                </div>
            </section>
            <!--  -->

            <div class="blk_product_loop">
                <section class="sec_product">
                    <div class="contain">
                        
                        <div class="sec_content">
                            {!! $content['section1_text'] ?? '' !!}
                        </div>
                        <div class="flex icons_flex">
                              @for ($i = 2; $i <= 6; $i++)
                            <div class="cols">
                                <div class="img_icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                            </div>
                             @endfor
                           
                        </div>
                        <div class="products">
                            <div class="text-center">
                                <h3>{!! $content['section1t_heading'] ?? '' !!}</h3>
                            </div>
                            <div class="product_sec">
                                <div class="flex">
                                    <div class="col">
                                        <div class="inner">
                                            <div class="block">
                                                <div class="image">
                                                    <img src="{{ get_site_image_src('images', $content['image8'] ?? 'default.jpg') }}" alt="">
                                                </div>
                                                <div class="txt">
                                                   {!! $content['sec1main_text'] ?? '' !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner">
                                            <div class="block">
                                                <div class="image">
                                                    <img src="{{ get_site_image_src('images', $content['image9'] ?? 'default.jpg') }}" alt="">
                                                </div>
                                                <div class="txt">
                                                   {!! $content['sec1main2_text'] ?? '' !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk text-center lst_btn">
                            <a href=" {!! $content['section1_btn_link'] ?? '' !!}" class="site_btn"> {!! $content['section1_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </section>
                <section class="sec_product">
                    <div class="contain">
                       
                        <div class="sec_content">
                            {!! $content['section2_text'] ?? '' !!}
                        </div>
                        <div class="flex icons_flex">
                           @for ($i = 10; $i <= 14; $i++)
                            <div class="cols">
                                <div class="img_icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                            </div>
                             @endfor
                        </div>
                        <div class="products">
                            <div class="text-center">
                                <h3>{!! $content['section2_theading'] ?? '' !!}</h3>
                            </div>
                            <div class="product_sec">
                                <div class="flex">
                                    <div class="col">
                                        <div class="inner">
                                            <div class="block">
                                                <div class="image">
                                                    <img src="{{ get_site_image_src('images', $content['image15'] ?? 'default.jpg') }}" alt="">
                                                </div>
                                                <div class="txt">
                                                   {!! $content['sec2main2_text'] ?? '' !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner">
                                            <div class="block">
                                                <div class="image">
                                                    <img src="{{ get_site_image_src('images', $content['image16'] ?? 'default.jpg') }}" alt="">
                                                </div>
                                                <div class="txt">
                                                   {!! $content['sec2main2_text'] ?? '' !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_blk text-center lst_btn">
                            <a href=" {!! $content['section2_btn_link'] ?? '' !!}" class="site_btn"> {!! $content['section2_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </section>
                <section class="sec_product">
                    <div class="contain">
                        
                        <div class="sec_content">
                              {!! $content['section3_text'] ?? '' !!}
                        </div>
                        <div class="product_icons">
                            @for ($i = 17; $i <= 20; $i++)
                            
                            <div class="_col">
                                <div class="img">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <div class="txt">
                                    <h3>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h3>
                                </div>
                            </div>
                             @endfor
                        </div>
                        <div class="btn_blk text-center lst_btn">
                            <a href=" {!! $content['section3_btn_link'] ?? '' !!}" class="site_btn"> {!! $content['section3_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </section>
                <section class="sec_product">
                    <div class="contain">
                       
                        <div class="sec_content">
                             {!! $content['section4_text'] ?? '' !!}
                        </div>
                        <div class="flex icons_flex">
                            @for ($i = 21; $i <= 25; $i++)
                            <div class="cols">
                                <div class="img_icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                            </div>
                             @endfor
                        </div>
                        <div class="flex_grid">
                            <div class="colL">
                                <div class="image">
                                    <img src="{{ get_site_image_src('images', $content['image26'] ?? 'default.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="colR">
                                  {!! $content['sec4main_text'] ?? '' !!}
                            </div>
                        </div>
                        <div class="btn_blk text-center lst_btn">
                            <a href="  {!! $content['section4_btn_link'] ?? '' !!}" class="site_btn">  {!! $content['section4_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </section>
                <section class="sec_product">
                    <div class="contain">

                        <div class="sec_content">
                            
                              {!! $content['section5_text'] ?? '' !!}
                        </div>
                        <div class="flex icons_flex">
                             @for ($i = 27; $i <= 31; $i++)
                            <div class="cols">
                                <div class="img_icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                            </div>
                             @endfor
                        </div>
                        <div class="flex_grid">
                            <div class="colL">
                                <div class="image">
                                    <img src="{{ get_site_image_src('images', $content['image32'] ?? 'default.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="colR">
                                  {!! $content['sec5main_text'] ?? '' !!}
                            </div>
                        </div>
                        <div class="btn_blk text-center lst_btn">
                            <a href="  {!! $content['section5_btn_link'] ?? '' !!}" class="site_btn">  {!! $content['section5_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ===== -->
            @include('frontend.includes.cta')
        </main>
@endsection