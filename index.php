<?php

include('Wse2.php');

function get_topmost_script() 
{
	$backtrace = debug_backtrace
	(
		defined
		(
			"DEBUG_BACKTRACE_IGNORE_ARGS"
		)
		? DEBUG_BACKTRACE_IGNORE_ARGS
		: FALSE
	);
	$top_frame = array_pop($backtrace);
	return $top_frame['file'];
}

function	db()
{
	$var		=		'<script>$("#console").append(\'<hr><p class="console_scriptname">& script = ';
	$string	=		str_replace('\\', '\\\\', get_topmost_script());
	$var.=				$string;
	$var.=				'</p>&nbsp;&nbsp;<p class="console_semicolon">::::</p>&nbsp;&nbsp;<p class="console_function">& function = ';
	$var.=				debug_backtrace()[1]['function'];
	$var.=				'</p>&nbsp;&nbsp;<p class="console_semicolon">::::</p>&nbsp;&nbsp;<p class="console_line">& line = ';
	$var.= 			debug_backtrace()[0]['line'];
	$var.=				'</p><hr>\');</script>';
	
	/** whitespace eliminator used to get rid of whitespace so that javascript script can echo properly **/
	echo Wse2($var);
}

function	parent_function_name()
{
	db();
}

?>
<html>

	<head>
	
		<link href="stylesheet.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		
	</head>
	
	<body>
	
		<div id="console">
		
		</div>
		
		<?php
		
		parent_function_name();
		
		?>
	</body>

</html>















