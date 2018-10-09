<div id="disqus_thread"></div>
<script>
/* eslint-disable */
var disqus_config = function () {
    this.page.url = '{{ $page->getUrl() }}';
    this.page.identifier = '{{ $page->getFilename() }}';
};
(function() {
    var d = document, s = d.createElement('script');

    s.src = 'https://{{ $page->services->disqus }}.disqus.com/embed.js';

    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
