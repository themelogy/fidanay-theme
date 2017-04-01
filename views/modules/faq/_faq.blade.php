<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->iteration }}">{{ $faq->title }}</a>
        </h4>
    </div>
    <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse @if($loop->first)in @endif">
        <div class="panel-body">
            {!! $faq->content !!}
        </div>
    </div>
</div>