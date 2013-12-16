<?php

class TB {

	public static function css($path=false){
		if($path!=true){
			$path="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.css";
		}
		echo "<link href=\"$path\" rel=\"stylesheet\" media=\"screen\">\n";
	}

	public static function js($path=false){
		if($path!=true){
			$path="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js";
		}
		echo "<script type=\"text/javascript\" src=\"$path\"></script>";
	}

	public static function badges($size){
		return "<span class=\"badge\">$size</span>";
	}

	public static function label($text,$style,$attr=array()){
		$var='';
		foreach ($attr as $key => $value) {
			$var.="$key = \"$value\"";
		}
		echo "<span class=\"label label-$style\" $var >$text</span>";
	}

	public static function alert($text,$style,$attr=array()){
		$var='';
		foreach ($attr as $key => $value) {
			$var.="$key = \"$value\"";
		}
		echo "<div class=\"alert alert-$style\" $var >$text</div>";
	}

	public static function header($text,$subtext){
		echo "<div class=\"page-header\"><h1>$text <small>$subtext</small></h1></div>";
	}

	public static function button($text,$style,$attr=array()){
		$var='';
		foreach ($attr as $key => $value) {
			$var.="$key = \"$value\"";
		}
		echo "<button type=\"button\" class=\"btn btn-$style\" $var >$text</button>";
	}

}