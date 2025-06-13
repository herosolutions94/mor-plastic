@if ($testimonials && count($testimonials))
<div id="owl-testi" class="owl-carousel owl-theme">
    @foreach ($testimonials as $testimonial)
        <div class="item">
            <div class="inner">
                <div class="comnt_testi">
                    {!! $testimonial->message !!}
                </div>
                <div class="flex">
                    <div class="testi_icon">
                        @if ($testimonial->image)
                            <img src="{{ get_site_image_src('testimonials', !empty($testimonial->image) ? $testimonial->image : '') }}" alt="{{ $testimonial->name }}">
                        @else
                            <img src="{{ asset('assets/images/default-user.png') }}" alt="User">
                        @endif
                    </div>
                    <h5>{{ $testimonial->name ?? '' }}{{ $testimonial->designation ? ', ' . $testimonial->designation : '' }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif
