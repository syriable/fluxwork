<x-mail::message>
# Welcome, {{ $buyer->display_name }}!

Your account is ready. We're glad to have you on board.

You can now sign in and start exploring everything we have to offer.

<x-mail::button :url="config('app.url')">
Get started
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
