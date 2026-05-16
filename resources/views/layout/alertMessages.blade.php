<x-bladewind::notification
    name="notification"
    position="top-right" />

@if(session()->has('success'))

<script>
    showNotification(
        'Sucesso',
        '{{ session("success") }}',
        'success',
        'notification',
    );
</script>

@endif

@if(session()->has('error'))

<script>
    showNotification(
        'Erro',
        '{{ session("error") }}',
        'error',
        'notification'
    );
</script>

@endif
