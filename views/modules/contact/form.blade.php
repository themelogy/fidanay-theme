<!-- TITLE -->
<div class="title-lines">
    <div class="title-lines-white-bg"></div>
    <div class="title-block">
        {!! trans('themes::contact.form.title') !!}
    </div>
</div>
<!-- CONTACT FORM -->
<div class="gray-bg-container m-top-min-35 ">
    <div class="contact-form-container ">
        {!! Form::open(['route' => 'contact.send', 'class' => 'contact-form', 'method'=>'post']) !!}
        {!! Form::hidden('from', Request::path()) !!}

        @if (session()->has('contact_form_message'))
            <div class="alert alert-success">
                {!! session('contact_form_message') !!}
            </div>
        @endif

        @foreach (config('asgard.contact.config.fields') as $fieldName => $options)
            <div class="form-group{!! $errors->has($fieldName) ? ' has-error' : '' !!}">

                @if ($options['type'] == 'textarea')
                    {!! Form::textarea($fieldName, old($fieldName), [
                        'class'       => 'form-control contact-form-'.$fieldName,
                        'placeholder' => trans('contact::contacts.form.'.$fieldName)
                    ]) !!}
                @elseif ($options['type'] == 'select')
                    {!! Form::select($fieldName, $options['choices'], old($fieldName), [
                        'class'       => 'form-control contact-form-'.$fieldName,
                        'placeholder' => trans('contact::contacts.form.'.$fieldName)
                    ]) !!}
                @else
                    {!! Form::text($fieldName, old($fieldName), [
                        'class'       => 'form-control contact-form-'.$fieldName,
                        'placeholder' => trans('contact::contacts.form.'.$fieldName)
                    ]) !!}
                @endif

                @if ($errors->has($fieldName))
                    <span class="help-block">{!! $errors->first($fieldName) !!}</span>
                @endif
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-4">
                {!! Form::submit(trans('contact::contacts.form.submit'), [
                    'class' => 'button medium thin-bg-dark'
                ]) !!}
            </div>
            <div class="col-md-8">
                <div class="form-group pull-right @if ($errors->has('g-recaptcha-response')) has-error @endif">
                    {!! Captcha::image() !!}
                    <span class="help-block">{!! $errors->first('g-recaptcha-response') !!}</span>
                </div>
            </div>
        </div>

        {!! Form::close() !!}

    </div>
</div>

@push('js_inline')
{!! Captcha::setLang(locale())->script() !!}
@endpush

