<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="'https:://mailtrap.io'">
Visit Site
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
