
    <script data-cfasync="false" src="{{asset('asset//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/vendor/flowbite.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/pages/dashboard-admin-lms.js')}}"></script>
    <script src="{{asset('/admin-assets/js/component/app-menu-bar.js')}}"></script>
    <script src="{{asset('/admin-assets/js/switcher.js')}}"></script>
    <script src="{{asset('/admin-assets/js/layout.js')}}"></script>
    <script src="{{asset('/admin-assets/js/main.js')}}"></script>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.close-button').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const alert = this.closest('.aleart');
                if (alert) {
                    alert.style.display = 'none';
                }
            });
        });
    });
</script>
