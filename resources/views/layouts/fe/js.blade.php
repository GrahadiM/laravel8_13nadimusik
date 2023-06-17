
    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/quill/quill.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <!-- Template API Youtube JS File -->
    <!-- <script src="https://apis.google.com/js/api.js"></script> -->
    <!-- <script src="{{ asset('frontend') }}/assets/js/api-yt.js"></script> -->

    <!-- Disable ctrl+u -->
    {{-- <script>
        document.onkeydown = function(e) {
            if (e.ctrlKey &&
                (e.keyCode === 67 ||
                e.keyCode === 86 ||
                e.keyCode === 85 ||
                e.keyCode === 117)) {
                alert('Jangan jail ya!!');
                return false;
            } else {
                return true;
            }
        };
    </script> --}}

    @stack('script')
