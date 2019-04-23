@component('mail::message')
# Introduction

<div>
{{ $team->team_name }} 
</div>
<div>
{{ $team->team_location }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
