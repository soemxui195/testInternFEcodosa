<footer id="footer-06" class="footer">
    <div class="copyright">
        <p> Copyright &copy; 2018, Created by <span>MYBLUE Team</span></p>
    </div>
    <span class="shape1 header-shape"><img src="/assets_introduce/images/shape/home_6/footer_shape_1.png" alt=""></span>
    <span class="shape2 header-shape"><img src="/assets_introduce/images/shape/home_6/footer_shape_2.png" alt=""></span>
    <span class="shape3 header-shape"><img src="/assets_introduce/images/shape/home_6/footer_shape_3.png" alt=""></span>

</footer><!-- ./ End Footer Area-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/style.js"></script>

<!-- <script src="assets/js/app.js"></script> -->

<script>
    var header = document.querySelector('.header');
    var origOffsetY = header.offsetTop;

    function onScroll(e) {
        window.scrollY >= 200 ? header.classList.add('collapse_change') :
            header.classList.remove('collapse_change');
    }

    document.addEventListener('scroll', onScroll);
</script>

</body>

</html> 