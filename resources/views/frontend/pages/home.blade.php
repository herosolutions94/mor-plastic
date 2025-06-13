@extends('layouts.frontend')


@section('content')
    <main index>
        <section class="banner" id="banner">
            <div class="owl-carousel owl-theme" id="banner_carousel">
                <div class="item">
                    <div class="image">
                        <img src="{{ get_site_image_src('images', !empty($content['image1']) ? $content['image1'] : ' ') }}" alt="">
                    </div>
                </div>

                <div class="item">
                    <div class="image">
                        <img src="{{ get_site_image_src('images', !empty($content['image2']) ? $content['image2'] : ' ') }}" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{ get_site_image_src('images', !empty($content['image3']) ? $content['image3'] : ' ') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="cntnt">
                <div class="contain">
                    <div class="inner_cntnt">
                        <h1>
                            <h1>{{ $content['banner_heading'] }}</h1>
                        </h1>
                        {!! $content['banner_text'] ?? '' !!}
                        <div class="btn_blk">
                            <a href="{!! $content['banner_btn1_link'] ?? '' !!}" class="site_btn">{!! $content['banner_btn1_txt'] ?? '' !!}</a>
                            <a href="{!! $content['banner_btn2_link'] ?? '' !!}" class="site_btn color">{!! $content['banner_btn2_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="after_banner">
            <div class="contain">
                <div class="flex">

                  @for ($i = 5; $i <= 7; $i++)
                    <div class="col">
                        <div class="inner">
                            <div class="img_icon">
                                <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                            </div>
                            <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                        </div>
                        <p>{{ !empty($content['sec6_text' . $i]) ? $content['sec6_text' . $i] : '' }}</p>
                    </div>
                     @endfor
                    
                    <div class="col">
                        <div class="_inner" style="background: url('{{ get_site_image_src('images', $content['image4'] ?? 'default.jpg') }}') !important;">
                            <div class="txt">
                                <div class="top_txt">
                                    <h1>{!! $content['section1t_heading'] ?? '' !!}</h1>
                                    <h4>{!! $content['section2_theading'] ?? '' !!}</h4>
                                </div>
                                <p>{!! $content['section1_text'] ?? '' !!}</p>
                                <div class="btn_blk">
                                    <a href="{!! $content['section1_btn_link'] ?? '' !!}" class="site_btn color">{!! $content['section1_btn_txt'] ?? '' !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about_sec">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="image">
                            <img src="{{ get_site_image_src('images', $content['image8'] ?? 'default.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="colR">
                        <div class="sec_heading">
                            <h2>{!! $content['section2_heading'] ?? '' !!}</h2>
                        </div>
                       {!! $content['section2_text'] ?? '' !!}
                        <div class="btn_blk">
                            <a href="{!! $content['section2_btn_link'] ?? '' !!}" class="site_btn">{!! $content['section2_btn_txt'] ?? '' !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services_sec" style="background: url('{{ get_site_image_src('images', $content['image9'] ?? 'default.jpg') }}') !important;">
            <div class="contain">
                <div class="cntnt text-center">
                    <div class="sec_heading">
                        <h2>{!! $content['section3_heading'] ?? '' !!}</h2>
                    </div>
                    <p>{!! $content['section3_text'] ?? '' !!}</p>
                </div>
                <div class="flex">

                @for ($i = 10; $i <= 13; $i++)
                   

                    <div class="col">
                        <div class="inner">
                            <div class="head_flex">
                                <div class="icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                            </div>
                            <p>{{ !empty($content['sec6_text' . $i]) ? $content['sec6_text' . $i] : '' }}</p>

                        </div>
                    </div>
                     @endfor
                    
                 
                </div>
            </div>
        </section>
        <section class="product_sec">
            <div class="contain">
                <div class="sec_heading">
                   {!! $content['section4_text'] ?? '' !!}
                </div>
                <div class="flex">
                     @for ($i = 14; $i <= 17; $i++)
                   

                   
                    <div class="col">
                        <div class="inner">
                            <a href="" class="image">
                                <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                            </a>
                            <div class="txt">
                                <h3><a href="">{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</a></h3>
                                <p>{{ !empty($content['sec6_text' . $i]) ? $content['sec6_text' . $i] : '' }}</p>
                            </div>
                        </div>
                    </div>
                     @endfor
                    
                   
                </div>
                <div class="btn_blk text-center">
                    <a href="{!! $content['section4_btn_link'] ?? '' !!}" class="site_btn">{!! $content['section4_btn_txt'] ?? '' !!}</a>
                </div>
            </div>
        </section>
        <section class="process_sec">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="sec_heading">
                            <h5>{!! $content['section2top_heading'] ?? '' !!}</h5>
                            <h2>{!! $content['section5_n_heading'] ?? '' !!}</h2>
                        </div>
                        {!! $content['section5_text'] ?? '' !!}

                    </div>
                    <div class="colR">
                        <div class="image">
                            <img src="{{ get_site_image_src('images', $content['image18'] ?? 'default.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="txt_blk">
                    {!! $content['section5_text2'] ?? '' !!}
                    <div class="btn_blk">
                        <a href="{!! $content['section5_btn_link'] ?? '' !!}" class="site_btn">{!! $content['section5_btn_txt'] ?? '' !!}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid_icons">
            <div class="contain">
                <div class="flex">
                    <div class="col">
                        <div class="inner" style="background: url('{{ get_site_image_src('images', $content['image19'] ?? 'default.jpg') }}') !important;">
                            <div class="cntnt">
                                <h2>{!! $content['section6_heading'] ?? '' !!}</h2>
                                <div class="btn_blk">
                                    <a href="{!! $content['section7_btn_link'] ?? '' !!}" class="site_btn blank">{!! $content['section7_btn_txt'] ?? '' !!}</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                    <div class="col">
                         @for ($i = 20; $i <= 21; $i++)
                   
<div class="_inner">
                            <div class="mst">
                                <div class="img_icon">
                                    <img src="{{ get_site_image_src('images', !empty($content['image' . $i]) ? $content['image' . $i] : '') }}" alt="">
                                </div>
                                <h4>{{ !empty($content['sec6_heading' . $i]) ? $content['sec6_heading' . $i] : '' }}</h4>
                                <p>{{ !empty($content['sec6_text' . $i]) ? $content['sec6_text' . $i] : '' }}</p>
                            </div>
                        </div>
                   
                   
                     @endfor
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="video_sec" style="background: url('{{ get_site_image_src('images', $content['image22'] ?? 'default.jpg') }}') !important;">
            <div class="contain">
                <div class="cntnt">
                    <div class="sec_heading">
                        <h2>{!! $content['section5_heading'] ?? '' !!}</h2>
                    </div>
                    <p>{!! $content['section7_text1'] ?? '' !!}</p>
                    <div class="btn_blk">
                        <a href="{!! $content['section8_btn_link'] ?? '' !!}" class="site_btn blank">{!! $content['section8_btn_txt'] ?? '' !!}</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial_sec" id="testimonials">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="sec_heading">
                            {!! $content['section8_text'] ?? '' !!}
                        </div>

                    </div>
                    <div class="colR">
                        <div id="owl-testi" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="inner">
                                    <div class="comnt_testi">
                                        <p>We needed custom drum liners on short notice, and MOR Plastics delivered ahead of
                                            schedule. The quality was outstanding, and the team was a pleasure to work with.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="testi_icon">
                                            <img src="assets/images/2.png" alt="">
                                        </div>
                                        <h5>— Jordan L., Operations Manager</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="inner">
                                    <div class="comnt_testi">
                                        <p>MOR Plastics has been our go-to supplier for pail inserts and custom solutions.
                                            They’re consistent, responsive, and always ready to adapt to our requirements.
                                        </p>
                                    </div>
                                    <div class="flex">
                                        <div class="testi_icon">
                                            <img src="assets/images/1.png" alt="">
                                        </div>
                                        <h5>— Sarah K., Procurement Specialist</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="inner">
                                    <div class="comnt_testi">
                                        <p>The team at MOR Plastics offered creative ideas that made our packaging more
                                            efficient and environmentally friendly. Their expertise saved us both time and
                                            money.</p>
                                    </div>
                                    <div class="flex">
                                        <div class="testi_icon">
                                            <img src="assets/images/2.png" alt="">
                                        </div>
                                        <h5>— Carlos M., Plant Supervisor</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <div class="comnt_testi">
                                        <p>From the first call to final delivery, the process was seamless. Highly recommend
                                            for any custom plastic needs.</p>
                                    </div>
                                    <div class="flex">
                                        <div class="testi_icon">
                                            <img src="assets/images/1.png" alt="">
                                        </div>
                                        <h5>— Nina D., Project Engineer</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection