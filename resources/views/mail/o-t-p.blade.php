<x-mail::message>
# Welcome {{$name}}

We are happy to see you here,

<x-mail::panel>
    Your two factory code is: {{$code}}
</x-mail::panel>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

