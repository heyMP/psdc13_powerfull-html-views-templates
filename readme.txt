This is the HTML that from our prototype.  We are going to take this static structure
and create a dynamic view with our variables from our view fields. 
 
ARTICLE
<div class="article">
	<div class="grid-8 push-4 omega">
		<h3 class="title">My Test Article</h3>
		<div class="body">
			Morbi non erat non ipsum pharetra tempus. Donec orci. Proin in ante. Pellentesque 
			sit amet purus. Cras egestas diam sed ante. Etiam imperdiet urna sit amet risus. 
			Donec ornare arcu id erat. Aliquam ultrices scelerisque sem. In elit nulla, molestie 
			vel, ornare sit amet, interdum vel, mauris. Etiam dignissim imperdiet metus.
		</div>	
	</div>
	<div class="grid-4 pull-8 alpha">
		<div class="img responsive">
			<img src="http://placehold.it/350x150&text=[img]" />
		</div>
	</div>
	<div class="grid-12 alpha omega">
			<label>Author:</label>
			<div class="author"><a href="#">admin</a></div>
	</div>
</div>

PAGE
<div class="page">
	<div class="grid-8 alpha">
		<h3 class="title">Just a regular Page</h3>
		<div class="body">
			Donec orci. Proin in ante. Pellentesque sit amet purus. Cras egestas diam sed ante. 
			Etiam imperdiet urna sit amet risus. 
			Donec ornare arcu id erat. Aliquam ultrices scelerisque sem. In elit nulla, molestie 
			vel, ornare sit amet, interdum vel, mauris. Etiam dignissim imperdiet metus.
		</div>	
	</div>
	<div class="grid-4 omega">
		<div class="img responsive">
			<img src="http://placehold.it/350x150&text=[img]" />
		</div>
	</div>
</div>