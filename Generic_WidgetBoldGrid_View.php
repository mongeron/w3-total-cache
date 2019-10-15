<?php
namespace W3TC;

if ( !defined( 'W3TC' ) )
	die();

?>
<div>
	<p class="notice notice-error">W3 Total Cache has detected that you do not have a Backup Plugin installed.</p>
	<p>
		<strong>
			Protect your WordPress site from data loss by installing the FREE
			BoldGrid Backup plugin.
		</strong>
	</p>

	<p>
		It's easy to set up and manage, backups up your entire WordPress site, has automated fault protection if an update fails and provides easy site migration options.
	</p>

	<a href="<?php echo esc_url( $install_url ) ?>" class="button-primary">Install Free Backup Plugin</a>
</div>
