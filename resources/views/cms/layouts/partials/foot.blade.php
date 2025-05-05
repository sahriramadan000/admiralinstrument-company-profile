<!-- Vendor Javascript (Require in all Page) -->
<script src="{{ asset('assets-login/js/vendor/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor.js') }}"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Vector Map Js -->
<script src="{{ asset('assets/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ asset('assets/vendor/jsvectormap/maps/world.js') }}"></script>

<!-- Sweatalerts -->
<script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>

<!-- Gridjs Plugin js -->
<script src="{{ asset('assets/vendor/gridjs/gridjs.umd.js') }}"></script>

<!-- Filepond js -->
<script src="{{ asset('assets/vendor/filepond-4.32.7/filepond.js') }}"></script>
<script src="{{ asset('assets/vendor/filepond-4.32.7/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ asset('assets/vendor/filepond-4.32.7/filepond-plugin-file-validate-type.js') }}"></script>

<script>
    function formatRupiah(input) {
        let value = input.value.replace(/\D/g, '');
        if (value) {
            input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        } else {
            input.value = "";
        }
    }

    function formatPhone(input) {
        let value = input.value.replace(/\D/g, '');

        let formatted = value.match(/.{1,4}/g);
        if (formatted) {
            input.value = formatted.join('-').substring(0, 20);
        } else {
            input.value = '';
        }
    }
</script>

@stack('scripts')
