<?php
$this->dust->helpers['content'] = function (\Dust\Evaluate\Chunk $chunk, \Dust\Evaluate\Context $ctx, \Dust\Evaluate\Bodies $bodies, \Dust\Evaluate\Parameters $params) {
	global $dustpress;

	ob_start();
	the_content();
	$output = ob_get_clean();

	return $chunk->write($output);
};