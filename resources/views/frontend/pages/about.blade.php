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
            @for ($i = 3; $i <= 6; $i++) @php $image=$content['image' . $i] ?? null; $heading=$content['sec2_heading' .
                $i] ?? null; $text=$content['sec2_text' . $i] ?? null; @endphp @if (!empty($image) || !empty($heading))
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