<?php include 'config.php'; ?>

<?php include('inc/_head.php'); ?>

    <body>

    	<?php include('inc/_header.php'); ?>        

        <div class="section">
            <div class="container">

                <h1 class="text-center">Listen</h1>

                <iframe
                   data-lnk-widget
                   src="<?php echo $streaming_widget; ?>"
                   width="300"
                   height="300"
                   frameborder="0"
                   allowtransparency="true">
                </iframe>

            </div>
        </div>

    	<script type="text/javascript">
    		
    		// window.location.replace('<?php // echo $streaming_link; ?>');

    	</script>

    </body>
</html>
