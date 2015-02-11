<?php

// no direct access
defined('_JEXEC') or die;

class plgContentHelloworld extends JPlugin
{
    public function onContentPrepare($context, &$article, &$params, $page)
    	{
    		$article->title .= ' Hello Article Title';

    	}

    	public function onContentBeforeDisplay($context, &$article, &$params, $limitstart) {
			return "<p>Hello World!</p>";
    	}
}

?>