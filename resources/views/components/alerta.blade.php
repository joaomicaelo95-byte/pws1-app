<!-- Caixa de avido -->
@props(['tipo' => 'info'])
    <!-- O texto entre as etiquetas chega no $slot -->
    <div {{ $attributes->merge(['class' => 'alerta alerta-' . $tipo]) }} role="status">
        {{ $slot }}
    </div>