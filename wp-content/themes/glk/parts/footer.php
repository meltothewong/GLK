		<footer>
			<nav class="center">
	            <li><a href="mailto:contact@grandlakekitchen.com" target="_top">Contact</a></li>
	            <li><a href="https://instagram.com/grandlakekitchen/">Instagram</a></li>
              <li><a href="https://www.facebook.com/GrandLakeKitchen/">Facebook</a></li>
        	</nav>
			<div class="container center"><p>©Copyright 2015</p></div>
		</footer>
		<div class="modal-wrapper">
			<div class="modal-close"></div>
			<div class="modal">
				<img src="">
			</div>
		</div>
		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script src="/js/build/production.js"></script>
        <script>
        	function modal_open() {
        		$('body').addClass('modal-shown');
        	}
        	function modal_close() {
        		$('body').removeClass('modal-shown');
        	}
        	$('.modal-image').click(function() {
        		var image_url = $(this).attr('data-image');
        		$('.modal img').attr('src', image_url)
        		modal_open();
        	});
        	$('.modal-wrapper').click(function() {
        		modal_close();
        	});
        	$('.modal').click(function(e) {
        		e.stopPropagation();
        	});        
        </script>
	</body>
</html>
