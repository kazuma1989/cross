(function () {
    if (window !== window.top) return;



    // /*
    //  * Google Analytics tracking code
    //  */
    // (function (i, s, o, g, r, a, m) {
    //     i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
    //         (i[r].q = i[r].q || []).push(arguments)
    //     }, i[r].l = 1 * new Date(); a = s.createElement(o),
    //         m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    // })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    // ga('create', 'UA-34158472-1', 'u-tokyo.ac.jp');
    // ga('send', 'pageview');



    /*
     * main function (after the library loaded)
     */
    function main() {
        //
        var thisLocation = window.location.pathname.replace(/\/{2,}/g, '/');
        $('a[href]').each(function () {
            var sameOrigin = (this.protocol === location.protocol && this.host === location.host);
            if (!sameOrigin) {
                return;
            }

            var destination = ('/' + this.pathname).replace(/\/{2,}/g, '/') + this.search + this.hash;
            if (destination === thisLocation) {
                $(this).removeAttr('href target').addClass('selected');
                return;
            }

            try {
                var $this = $(this);
                var pattern = $this.data('selected-if-match');
                if (!pattern) {
                    return;
                }
                if (thisLocation.match(new RegExp(pattern))) {
                    $this.addClass('selected');
                }
            } catch (e) {
            }
        });

        // 
        $('.at-mark').text('@').removeClass('at-mark');
        $('.e-mail').attr('href', function () {
            return 'mailto:' + $(this).text()
        });
    }



    /*
     * Loads the library file
     */
    (function (srcToLibrary) {
        var s = document.createElement('script');
        s.src = srcToLibrary;
        if (s.addEventListener) {
            s.addEventListener('load', main, false);
        } else if (s.readyState) {
            s.onreadystatechange = main;
        }
        document.body.appendChild(s);
    })('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
})();
