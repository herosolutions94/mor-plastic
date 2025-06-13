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
    <section class="cta_new_blk">
        <div class="contain">
            <div class="cntnt">
                <div class="sec_heading text-center">
                    <h5>Let's Connect</h5>
                    <h2>Let’s Build Something Better — Together</h2>
                </div>
                <p>Whether you need a custom liner or a full-scale plastic solution, we’re ready to help. Reach out
                    today to speak with our team.</p>
                <div class="btn_blk text-center">
                    <a href="contact.php" class="site_btn">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection