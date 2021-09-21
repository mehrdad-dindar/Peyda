<footer class="mt-auto">
    <div class="container-fluid main-footer position-relative overflow-hidden">
        <div class="footer-bg"></div>
        <div class="container pt-5 position-absolute start-0 bottom-0">
            <div class="row justify-content-end">
                <div class="col-md-4 text-left ltr">
                    <div class="text-white"><i class="zmdi zmdi-phone-in-talk"></i> <a href="tel:+989121234567">0912-1234568</a>
                    </div>
                    <div class="text-white"><i class="zmdi zmdi-phone-in-talk"></i> <a href="tel:+989121234567">0912-1234567</a>
                    </div>
                    <div class="text-white"><i class="zmdi zmdi-phone-in-talk"></i> <a href="tel:+989121234567">0912-1234567</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
{{--<script src="front/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ URL::asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('front/js/custom.js') }}"></script>
<script>
    $(".nav-toggle").click(function(){
        $("#menu").toggleClass("active");
    });
</script>
