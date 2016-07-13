<?php

class SendNewsletterAttachments extends DataExtension {
	
	public function onBeforeSend() {
		foreach($this->owner->Newsletter()->Attachments() as $attachment) {
			$this->owner->attachFile($attachment->Filename);
		}
	}
}
