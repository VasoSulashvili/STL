<!-- banner start -->
@if($banner)
<div class="banner-area banner-area-5 mb-5 mb-lg-0" style="background-image: url('{{ asset('storage/' . $banner->back_image) }}')">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-9 order-lg-12">
                <div class="thumb mb-4 mb-lg-0">
                    <img
                        src="{{ asset('storage/' . $banner->image)}}"
                        alt="img"
                    />
                </div>
            </div>
            <div class="col-lg-5 order-lg-1 align-self-center">
                <div
                    class="banner-inner text-center text-lg-left mt-4 mt-lg-0"
                >
                    <p class="b-animate-1 sub-title sub-title-after">
                        {{ $banner->sub_title }}
                    </p>
                    <h1 class="b-animate-2 title">
                        {{ $banner->title }}
                    </h1>
                    <p class="content b-animate-3">
                        {!! $banner->description !!}
                    </p>
                    <div class="btn-wrap b-animate-4">
                        <a class="btn btn-base mr-3" href="{{ $banner->url }}"
                            >{{ __('words.read more') }}</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- banner end -->