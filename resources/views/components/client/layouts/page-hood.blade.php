<!-- page title start -->
<div class="page-title-area bg-sky" style="background-image: url('{{ asset('storage/' . $image) }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="breadcrumb-inner">
                    <h2 class="page-title">{{ __('words.' . $title) }}</h2>
                    <ul class="page-list">
                        @foreach($breadcrumbs as $breadcrumb)
                        <li><a href="{{ $breadcrumb['url'] }}">{{ __('words.' . $breadcrumb['title']) }}</a></li>
                        @endforeach
                        <li>{{ __('words.' . $title) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title end --> 