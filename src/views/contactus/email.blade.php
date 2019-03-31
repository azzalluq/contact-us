@component('mail::message')
# Introduction
{{$name}} sent a {{$type}} request from {{$email}}
<br>
The body of your {{$message}}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
