<x-mail::message>
# {{$recvoery->user->name}} Submitted Recvoery Request

Hi Admin,

{{$recvoery->user->name}} has submitted a Recvoery request. Please login the admin to confirm.


Thanks,<br>
{{ site('name') }}
</x-mail::message>
