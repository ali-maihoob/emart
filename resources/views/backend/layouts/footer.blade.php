
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
{{--<!-- OPTIONAL SCRIPTS -->--}}
{{--<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>--}}
<script>
    $(function () {
        $('.select2').select2();
    })
</script>
@yield('scripts')
