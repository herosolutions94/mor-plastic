@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<section class="sub_banner"
    style="background-image: url('{{ get_site_image_src('images', !empty($content['image1']) ? $content['image1'] : 'default.jpg') }}');">
    <div class="contain">
        <div class="cntnt">
            <h1>{!! $content['banner_heading'] ?? '' !!}</h1>
            <p>{!! $content['banner_text'] ?? '' !!}</p>
        </div>
    </div>
</section>
<section class="contact_pg">
    <div class="contain">
        <div class="flex">
            <div class="colL">
                <div class="inner">
                    <h3>{!! $content['section1_heading'] ?? '' !!}</h3>
                    <p>{!! $content['section1_text'] ?? '' !!}</p>
                    <ul class="lst_top">
                        <li>
                            <a href="tel:516-816-5251">
                                <img src="./assets/images/call.svg" alt="">
                                <span>{{$site_settings->site_phone}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:Info@morplastics.com">
                                <img src="./assets/images/email.svg" alt="">
                                <span>{{$site_settings->site_email}}</span>
                            </a>
                        </li>
                        <li>
                            <p>
                                <img src="./assets/images/map.svg" alt="">
                                <span>{{$site_settings->site_address}}</span>
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="colR">
                <form id="contactForm" action="{{url('/api/save-contact-message')}}" data-aos="fade-up" class="frmAjax">
                    @csrf
                    <div class="form_row row">
                        <div class="col-sm-6">
                            <div class="txtGrp">
                                <label>First Name</label>
                                <input type="text" class="input" name="fname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="txtGrp">
                                <label>Last Name</label>
                                <input type="text" class="input" name="lname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="txtGrp">
                                <label>Email</label>
                                <input type="text" class="input" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="txtGrp">
                                <label>Phone</label>
                                <input type="text" class="input" name="phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="txtGrp">
                                <label>Subject</label>
                                <input type="text" name="subject" value="subject" class="input">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="txtGrp">
                                <label>Message</label>
                                <textarea name="message" id="" placeholder="Enter Your Message Here"
                                    class="input"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn_blk text-center">
                        <button class="site_btn orange" type="submit">Send Message<i
                                class="spinner hidden"></i></button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>







@endsection