@extends('layouts.frontend')


@section('content')
    <main index>
        <section class="sub_banner"
            style="background-image: url('{{ get_site_image_src('images', !empty($content['image1']) ? $content['image1'] : 'default.jpg') }}');">
            <div class="contain">
                <div class="cntnt">
                    <h1>{!! $content['banner_heading'] ?? '' !!}</h1>
                    <p>{!! $content['banner_text'] ?? '' !!}</p>
                </div>
            </div>
        </section>
        <section class="process_sec">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="sec_heading">
                            <h5>{!! $content['section1_heading'] ?? '' !!}</h5>
                            <h2>{!! $content['section1_sub_heading'] ?? '' !!}</h2>
                        </div>
                        <p>{!! $content['section1_text'] ?? '' !!}</p>
                        <div class="btn_blk">
                            <a href="{{ url($content['section1_btn_link']) }}"
                                class="site_btn">{{ $content['section1_btn_txt'] }}</a>
                        </div>
                    </div>
                    <div class="colR">
                        <div class="image">
                            <img src="{{ get_site_image_src('images', $content['image2'] ?? 'default.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="value_sec">
            <div class="contain">
                <div class="sec_heading text-center">
                    <h5>{!! $content['section2_heading'] ?? '' !!}</h5>
                    <h2>{!! $content['section2_sub_heading'] ?? '' !!}</h2>
                </div>
                <div class="text_flex">
                    <div class="left_blk">
                        <h3>{!! $content['section2_heading1'] ?? '' !!}</h3>
                        <p>{!! $content['section2_text1'] ?? '' !!}</p>
                    </div>
                    <div class="right_blk">
                        <h3>{!! $content['section2_heading2'] ?? '' !!}</h3>
                        <p>{!! $content['section2_text2'] ?? '' !!}</p>
                    </div>
                </div>

            </div>
            <div class="flex">
                @for ($i = 3; $i <= 6; $i++)
                            @php $image = $content['image' . $i] ?? null;
                                $heading = $content['sec2_heading' .
                                    $i] ?? null;
                            $text = $content['sec2_text' . $i] ?? null; @endphp @if (!empty($image) || !empty($heading))
                            <div class="col">
                            <div class="img_icon">
                                <img src="{{ get_site_image_src('images', $image) }}" alt="">
                            </div>
                            <h4>{{ $heading }}</h4>
                                <p>{{ $text }}</p>
                        </div>
                    @endif
                @endfor


            </div>
            </div>
        </section>
        <section class="history_sec"
            style="background-image: url('{{ get_site_image_src('images', !empty($content['image7']) ? $content['image7'] : 'default.jpg') }}');">
            <div class="contain">
                <div class="sec_heading">
                    <h5>{!! $content['section3_heading'] ?? '' !!}</h5>
                    <h2>{!! $content['section3_sub_heading'] ?? '' !!}</h2>
                </div>
                <div class="txt">
                    {!! $content['section3_text'] ?? '' !!}
                    </ul>
                </div>
            </div>
        </section>
        <section class="process_sec grid_change">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="image">
                            <img src="{{ get_site_image_src('images', $content['image8'] ?? 'default.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="colR">
                        <div class="sec_heading">
                            <h5>{!! $content['section4_heading'] ?? '' !!}</h5>
                            <h2>{!! $content['section4_sub_heading'] ?? '' !!}</h2>
                        </div>
                        {!! $content['section4_text'] ?? '' !!}
                        <div class="btn_blk">
                            <a href="{{ url($content['section4_btn_link']) }}"
                                class="site_btn">{{ $content['section4_btn_txt'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial_sec" id="testimonials">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="sec_heading">
                            <h2>{!! $content['section5_heading'] ?? '' !!}</h2>
                            <p>{!! $content['section5_sub_heading'] ?? '' !!}</p>
                        </div>

                    </div>
                    <div class="colR">
                      @include('frontend.includes.testimonials')
                    </div>
                </div>
            </div>
        </section>
      @include('frontend.includes.cta')
    </main>
@endsection