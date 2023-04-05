<x-mail::message>
# Introduction

Building the message

@foreach($tests as $test)

{{ $test->name }}

@endforeach



<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
