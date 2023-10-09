<script src="{{ asset('assets/common/js/vendors.js') }}"></script>
<script src="{{ asset('assets/common/js/jssocials.min.js') }}"></script>
<script src="{{ asset('assets/common/js/aiz-core.js') }}"></script>
<script src="{{ asset('assets/common/js/scripts-custom.js') }}"></script>

<script type="text/javascript">
    @foreach (session('flash_notification', collect())->toArray() as $message)
    AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
    @endforeach
</script>

@stack('script')
</body>
</html>
