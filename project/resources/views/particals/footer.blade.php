<!--subscribe-address-->
<section class="subscribe">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
                <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Ha%20Noi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">embedgooglemap.net responsive blog themes</a></div><style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;}</style></div>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
                <div class="address-gried ">
                    <span class="far fa-map"></span>
                    <p>25478 Road St.121<br>USA New Hill
                    <p>
                </div>
                <div class="address-gried mt-3">
                    <span class="fas fa-phone-volume"></span>
                    <p> +(000)123 4565<br>+(010)123 4565</p>
                </div>
                <div class=" address-gried mt-3">
                    <span class="far fa-envelope"></span>
                    <p><a href="mailto:info@example.com">info@example1.com</a>
                        <br><a href="mailto:info@example.com">info@example2.com</a>
                    </p>
                </div>
            </div>
        </div>w
    </div>
</section>
<!--//subscribe-address-->
<section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Newsletter</h3>
        <div class="icons mt-4 text-center">
            <ul>
                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                <li><a href="#"><span class="fas fa-rss"></span></a></li>
                <li><a href="#"><span class="fab fa-vk"></span></a></li>
            </ul>
            <p class="my-3">velit sagittis vehicula. Duis posuere
                ex in mollis iaculis. Suspendisse tincidunt
                velit sagittis vehicula. Duis posuere
                velit sagittis vehicula. Duis posuere
            </p>
        </div>
        <div class="email-sub-agile">
            <form action="{{url('/newsletter')}}" method="post">
                @csrf
                <div class="form-group sub-info-mail">
                    <input type="text" class="form-control email-sub-agile" style="border: 1px solid black" placeholder="Your Name" name="name" required="">
                </div>
                <div class="form-group sub-info-mail">
                    <input type="email" name="email" class="form-control email-sub-agile" placeholder="email">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--//subscribe-->
<!-- footer -->
<footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
    <div class="copy-agile-right">
        <p>
            © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
        </p>
    </div>
</footer>
<!-- //footer -->
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="fields-grid">
                            <div class="styled-input">
                                <input type="email" placeholder="Your Email" name="email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="password" name="password" required="">
                            </div>
                            <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- //Modal 1-->

<script type="text/javascript">

</script>