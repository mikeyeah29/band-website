<?php

class CssBuilder {

	// $colors => primary, secondary, accent...
	// $fonts => primary, secondary

	var $css = '';

	public function addRule($selector, $props) {
		$rule = $selector;
		$rule .= '{';
		foreach ($props as $key => $value) {
			$rule .= $key . ':' . $value . ';';
		}
		$rule .= '}';
		$this->css .= $rule;
	}

	public function heroBackground($path) {
		$this->addRule('.section--hero', [
			'background-image' => 'url("' . $path . '")'
		]);
	}

	public function callToActionButton($bgColor, $textColor, $padding, $radius = '5px') {
		$this->addRule('.streaming_link', [
			'padding' => $padding,
			'background' => $bgColor,
			'color' => $textColor,
			'border-radius' => $radius
		]);
	}

	public function addFont($woff, $woff2) {
		$src = 'url("' . $woff2 . '") format("woff2"), url("' . $woff . '") format("woff")';
		$this->addRule('@font-face', [
			'font-family' => 'INC_Font',
			'src' => $src
		]);
		$this->addRule('h1, h2, h3, h4, p, a', [
			'font-family' => 'INC_Font'
		]);
	}

	public function printCss() {
		echo 'PRINT ' . $this->css;
	}

	public function writeCss($fileName) {
		file_put_contents('css/' . $fileName . '.css', $this->css);
	}

}

?>