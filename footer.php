
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<p class="col-md-4 mb-0 text-muted">UMBC LUG</p>

		<a href="https://getbootstrap.com/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
		<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		</a>

		<ul class="nav col-md-4 justify-content-end">
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
		<li class="nav-item"><a href="/about.php" class="nav-link px-2 text-muted">About</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Get Involved</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Installfest</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Events</a></li>
		
		</ul>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
			$(document).ready(function() {
				$('li.active').removeClass('active').removeAttr('aria-current');
				$('a[href="' + location.pathname + '"]').closest('li').addClass('active').attr('aria-current', 'page'); 
			});
</script>

</html>