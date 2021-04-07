@component('mail::message')
# Introduction

Sua conta foi criada.

@component('mail::button', ['url' => ''])
    clique aui para ativar sua conta
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
