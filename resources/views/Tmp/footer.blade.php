<!-- Notify Popup Start -->
<div id="notify" class="popup notify">
    <div class="popup__container">

        <!-- Popup Content Start -->
        <div class="popup__content border-radius-l">
            <!-- popup close button -->
            <a id="notify-close" class="btn btn-s btn-s-icon popup-close" href="#0">
                <span class="btn__background light"></span>
                <span class="btn__text dark">
                    <i class="fa-solid fa-xmark"></i>
                    <em class="btn-title">Close</em>
                    <em class="btn-hover">Close</em>
                </span>
            </a>

            <!-- Notify Popup Title Start -->
            <div class="popup-title">
                <p class="popup-title__title">Get to know about our launch</p>
                <p class="popup-title__text">Subscribe to our newsletter and we will send you a notification about the
                    launch of our brand new site</p>
            </div>
            <!-- Notify Popup Title End -->

            <!-- Notify Form Container Start -->
            <div class="form-container">

                <!-- Reply Messages Start-->
                <div class="reply-group subscription-ok">
                    <i class="fa-solid fa-circle-check reply-group__icon"></i>
                    <p class="reply-group__title txt-light">Done!</p>
                    <span class="reply-group__text">Thanks for subscribing. We will send you a notification about our
                        launch.</span>
                </div>
                <div class="reply-group subscription-error">
                    <i class="fa-solid fa-face-frown-open reply-group__icon"></i>
                    <p class="reply-group__title">Ooops!</p>
                    <span class="reply-group__text">Something went wrong. Please try again later.</span>
                </div>
                <!-- Reply Messages End-->

                <!-- Notify Contact Form Start-->
                <form class="form notify-form form-dark">
                    <input class="margin-l" type="email" placeholder="Your Email" required>
                    <button class="btn btn-l" type="submit">
                        <span class="btn__background dark"></span>
                        <span class="btn__text light">
                            <em class="btn-title">Submit</em>
                            <em class="btn-hover">Submit</em>
                        </span>
                    </button>
                </form>
                <!-- Notify Contact Form End-->

            </div>
            <!-- Notify Form Container End -->

        </div>
        <!-- Popup Content End -->

    </div>
</div>
<!-- Notify Popup End -->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
    It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader-active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script src="{{ asset('Assets')}}/js/libs.min.js"></script>
<script src="{{ asset('Assets')}}/js/gallery-init.js"></script>
<script src="{{ asset('Assets')}}/js/custom.js"></script>

</body>

</html>
