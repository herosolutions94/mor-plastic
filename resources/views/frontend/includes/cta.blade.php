@if (!empty($cta_section))
<section class="cta_new_blk">
    <div class="contain">
        <div class="cntnt">
            <div class="sec_heading text-center">
                <h5>{{ $cta_section['cta_heading'] ?? '' }}</h5>
                <h2>{{ $cta_section['cta_sub_heading'] ?? '' }}</h2>
            </div>
            <p>{{ $cta_section['cta_text'] ?? '' }}</p>
            <div class="btn_blk text-center">
                <a href="{{ $cta_section['cta_btn1_link'] ?? '#' }}" class="site_btn">
                    {{ $cta_section['cta_btn1_txt'] ?? 'Contact Us' }}
                </a>
            </div>
        </div>
    </div>
</section>
@endif
