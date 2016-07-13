<?php
class NewsletterAttachments extends DataExtension {
	
	private static $many_many = array(
		'Attachments' => 'File'
	);
}
