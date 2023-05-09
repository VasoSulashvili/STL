<!-- intro start -->
<div class="intro-area intro-style-2 intro-one-area mg-top--82">
    <div class="container">
        <div class="row justify-content-center intro-wrapper">
            @foreach($services as $service)
            <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="single-intro-inner text-center">
                    <div class="thumb">
                        <img src="{{ asset('client/assets/img/icon/' . $service->icon) }}" alt="img" />
                    </div>
                    <div class="details">
                        <h6 class="title color-base">
                            {{ Str::title($service->title) }}
                        </h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    <!-- intro end -->