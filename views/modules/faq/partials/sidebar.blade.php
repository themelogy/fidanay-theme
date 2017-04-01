<div class="col-md-3">
    <div class="m-bot-30">
        <div class="title-block">
            {{ trans('themes::faq.category.title') }}
        </div>
    </div>
    <ul class="nav bs-sidenav blog-categories m-bot-30">
        @foreach($categories as $category)
            <li>
                <a href="{{ $category->url }}" title="{{ $category->name }}"><span class="blog-cat-icon"><i class="fa fa-angle-right"></i></span> {{ $category->name }} ({{ $category->faqs->count() }})</a>
            </li>
        @endforeach
    </ul>
</div>
