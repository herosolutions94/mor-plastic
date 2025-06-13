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
    <section class="value_sec">
        <div class="contain">
            <div class="sec_heading text-center">
                <h5>{!! $content['section1_heading'] ?? '' !!}</h5>
                <h2>{!! $content['section1_sub_heading'] ?? '' !!}</h2>
            </div>
            <div class="flex cap_flex">
                @for ($i = 2; $i <= 4; $i++) @php $image=$content['image' . $i] ?? null;
                    $heading=$content['sec1_heading' . $i] ?? null; $text=$content['sec1_text' . $i] ?? null; @endphp
                    @if (!empty($image) || !empty($heading)) <div class="col">
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

    <section class="process_sec grid_change">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="image">
                        <img src="{{ get_site_image_src('images', $content['image5'] ?? 'default.jpg') }}" alt="">
                    </div>
                </div>
                <div class="colR">
                    <div class="sec_heading">
                        <h5>{!! $content['section2_heading'] ?? '' !!}</h5>
                        <h2>{!! $content['section2_sub_heading'] ?? '' !!}</h2>
                    </div>
                    {!! $content['section2_text'] ?? '' !!}

                    <div class="btn_blk">
                        <a href="{{ url($content['section2_btn_link']) }}"
                            class="site_btn">{{ $content['section2_btn_txt'] }}</a>
                    </div>
                </div>
            </div>
    </section>
    <section class="opt_sec">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="sec_heading">
                        <h5>{!! $content['section3_heading'] ?? '' !!}</h5>
                        <h2>{!! $content['section3_sub_heading'] ?? '' !!}</h2>
                    </div>

                </div>
                <div class="colR">
                    {!! $content['section3_text'] ?? '' !!}
                </div>
            </div>
        </div>
    </section>
    <section class="dif_sec">
        <div class="contain">
            <div class="flex">
                <div class="col">
                    <div class="inner">
                        <div class="sec_heading">
                            <h3>{!! $content['section4_heading1'] ?? '' !!}</h3>
                        </div>
                        <p>{!! $content['section4_text1'] ?? '' !!}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="sec_heading">
                        <h3>{!! $content['section4_heading2'] ?? '' !!}</h3>
                    </div>
                    <p>{!! $content['section4_text2'] ?? '' !!}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="process_sec">
        <div class="contain">
            <div class="flex">
                <div class="colL">
                    <div class="sec_heading">
                        <h5>{!! $content['section5_heading'] ?? '' !!}</h5>
                        <h2>{!! $content['section5_sub_heading'] ?? '' !!}</h2>
                    </div>
                    {!! $content['section5_text'] ?? '' !!}
                </div>
                <div class="colR">
                    <div class="image">
                        <img src="{{ get_site_image_src('images', $content['image7'] ?? 'default.jpg') }}" alt="">
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
                        <h2>{!! $content['section6_heading'] ?? '' !!}</h2>
                        <p>{!! $content['section6_sub_heading'] ?? '' !!}</p>
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