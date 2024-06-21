@component('mail::message')

# Site B.boy Iron

<div style="text-align: center;">
    <img src="{{ asset('image/iron.png') }}" style="max-width: 40%; height: auto;">
</div>

**Nome:** {{ $dadosFormulario['nome'] }}
<br>
**Telefone:** {{ $dadosFormulario['telefone'] }}
<br>
**Email:** {{ $dadosFormulario['email'] }}
<br>
**Mensagem:** {{ $dadosFormulario['mensagem'] }}

@endcomponent