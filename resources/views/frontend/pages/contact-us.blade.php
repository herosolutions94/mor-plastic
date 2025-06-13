@extends('layouts.frontend')

@section('title', 'Welcome to Our Website')

@section('content')

<main index>
    <section class="sub_banner">
        <div class="contain">
            <div class="cntnt">
                <h1>Get In Touch</h1>
                <p>Any question or remarks? Just write us a message!</p>
            </div>
        </div>
    </section>
    <section class="contact_pg">
            <div class="contain">
                <div class="flex">
                    <div class="colL">
                        <div class="inner">
                            <h3>Contact Information</h3>
                            <p>Say something to start a live chat!</p>
                            <ul class="lst_top">
                                <li>
                                    <a href="tel:516-816-5251">
                                    <img src="./assets/images/call.svg" alt="">
                                    <span>516-816-5251</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:Info@morplastics.com">
                                    <img src="./assets/images/email.svg" alt="">
                                    <span>Info@morplastics.com</span>
                                    </a>
                                </li>
                                <li>
                                    <p>
                                    <img src="./assets/images/map.svg" alt="">
                                    <span>MOR Plastics, LLC 10624 Avenue D, Brooklyn, NY 11236</span>
                                    </p>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                    <div class="colR">
                        <form action="">
                            <div class="form_row row">
                                <div class="col-sm-6">
                                    <div class="txtGrp">
                                        <label>First Name</label>
                                        <input type="text" name="" value="" class="input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="txtGrp">
                                        <label>Last Name</label>
                                        <input type="text" name="" value="" class="input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="txtGrp">
                                        <label>Email</label>
                                        <input type="text" name="" value="" class="input">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="txtGrp">
                                        <label>Phone</label>
                                        <input type="text" name="" value="" class="input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="txtGrp">
                                        <label>Subject</label>
                                        <input type="text" name="" value="" class="input">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="txtGrp">
                                        <label>Message</label>
                                        <textarea class="input" name=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_blk text-center">
                                <button class="site_btn orange" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>






@endsection