<!-- testimonial area start -->
<div class="testimonial-area pd-top-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 text-center">
                <div class="section-title">
                    <h2 class="title">
                        <span>{{ __('words.team') }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div
            class="course-slider-2 owl-carousel"
            style="background: none"
        >
        @foreach($team as $member)
            <div class="testimonial-single text-center">
                <div class="test-thumb">
                    <img
                        src="{{ asset('storage/' . $member->image) }}"
                        alt="image here"
                        class="rounded-circle"
                    />
                </div>
                <div class="testimonial-desc">
                    <div class="client-info">
                        <a href="{{ route('persons.show', ['locale' => app()->getlocale(), 'person' => $member->id]) }}">
                            <h4>{{ Str::title($member->fullName) }}</h4>
                        </a>
                        <p class="color-light-blue">{{ $member->position }}</p>
                    </div>
                    <p>
                        {!! strip_tags(Str::limit($member->biography, 255)) !!}
                    </p>
                </div>
            </div>

        @endforeach
        </div>
    </div>
    </div>
    <!-- testimonial area end -->