<div class="col-md-6">
    <div class="course">
        <div class="row">
            <div class="col-md-5 image">
                <img src="{{ $course->present()->firstImage(400,600,"fit",80) }}" alt="{{ $course->title }}" />
            </div>
            <div class="col-md-7 info">
                <h3 class="title">{{ $course->title }} <span class="price">{{ $course->price }} TL</span></h3>

                <div class="meta1">
                    <ul>
                        <li><span>{{ trans('course::courses.title.dates') }}</span>: {{ $course->start_end_at }}</li>
                        <li><span>{{ trans('course::courses.title.hours') }}</span>: {{ $course->start_end_hour }}</li>
                        <li><span>{{ trans('course::courses.title.days') }}</span>: {{ $course->present()->days }}</li>
                        <li><span>{{ trans('course::courses.title.duration') }}</span>: {{ $course->total_week }} hafta ({{ $course->total_hour }} saat)</li>
                        <li><span>{{ trans('course::locations.title.address') }}</span>: {{ $course->location->address }}</li>
                    </ul>
                </div>
                <div class="meta2">
                    <ul class="list-inline">
                        <li>
                            {{ trans('course::courses.title.capacity') }} <span>{{ $course->present()->capacity }}</span>
                        </li>
                        <li>
                            {{ trans('course::courses.title.total_price') }} <span>{{ $course->price }} TL</span>
                        </li>
                        <li>
                            {{ trans('course::courses.title.age') }} <span>{{ $course->age }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>