<?php if ( is_active_sidebar( 'bulk-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="row clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'bulk-footer-area' ) ?>
		</div>	
	</div>		
<?php } ?> 

</div>
<footer id="colophon" class="footer-credits container-fluid row">
	<div class="container">
	<?php do_action( 'bulk_generate_footer' ); ?> 
		<p><a href "http://wordpress/">ООО «СтройКомфорт»</a> © Copyright, 2018
		<p><a href="http://wordpress/%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F-%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F-%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82-%D0%BC%D0%B0%D0%B3%D0%B0/">Условия использования </a></p> 
		 <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
	</div>	
</footer>
<!-- end main container -->
</div>

<?php wp_footer(); ?>

</body>
</html>
