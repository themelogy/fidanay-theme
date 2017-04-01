<div class="feature-box2-container font-color-change">
    <div class="container">
        <div class="row box-with-hover feature-box2">
            <div class="col-md-4 pad-r-0 col-xs-12">
                @if($training = Page::find(43))
                <div class="ca-menu hovered">
                    <div class="ca-icon"><span aria-hidden="true" class="icon_graduate"></span></div>
                    <div class="ca-content">
                        <h2 class="ca-main"><a href="{{ $training->url }}">{{ $training->title }}</a></h2>
                        <div class="ca-sub">{{ $training->extension()->sub_title }}</div>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-md-4 pad-l-r-0  col-xs-12">
                @if(Module::has('Employee'))
                <div class="ca-menu hovered">
                    <div class="ca-icon"><span aria-hidden="true" class="icon_educator"></span></div>
                    <div class="ca-content">
                        <h2 class="ca-main"><a href="{{ route('employee.index') }}">{{ trans('themes::employee.title') }}</a></h2>
                        <div class="ca-sub">{{ trans('themes::employee.description') }}</div>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-md-4 pad-l-0  col-xs-12">
                @if($partner = Page::find(28))
                <div class="ca-menu hovered">
                    <div class="ca-icon"><span aria-hidden="true" class="icon_twohand"></span></div>
                    <div class="ca-content">
                        <h2 class="ca-main"><a href="{{ $partner->url }}">{{ $partner->title }}</a></h2>
                        <div class="ca-sub">{{ $partner->extension()->sub_title }}</div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>