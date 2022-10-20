<button {{ $attributes->merge(['type' => 'submit', 'class' => 'form-control-submit-button']) }}>
    {{ $slot }}
</button>
