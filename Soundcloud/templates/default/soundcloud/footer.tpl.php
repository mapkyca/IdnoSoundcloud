<script>
    $(document).ready(function() {
	$('div.soundcloud-embed').each(function(index) {
	    var url = $(this).attr('data-url');
	    var div = $(this);
	    
	    $.getJSON('https://soundcloud.com/oembed?callback=?',
		    {
			format: 'js',
			url: url,
			iframe: true
		    },
		function(data) {
		    div.html(data['html']);
		}
	    );
	});
    });
</script>