<?php
	$acf_field_URL = str_replace("_", "-", $acf_field_TYPE);
	if(($acf_field_TYPE == 'textarea') || ($acf_field_TYPE == 'wysiwyg')):

	$getcode = 'echo &quot;&lt;h2&gt; Your '.$acf_field_TYPE.' says: &quot; . $'.$acf_field_NAME.' . &quot;&lt;/h2&gt;&quot;' ;
	$getinstr = "<p>//".strtoupper($acf_field_TYPE)." EXAMPLE <span class='hide toggle-instructions' ><br><a href='http://www.advancedcustomfields.com/resources/".$acf_field_URL."/' target='_BLANK'>//# For more info  field: <strong>".$acf_field_TYPE."</strong>, goto http://www.advancedcustomfields.com/resources/".$acf_field_URL."/</a></span></p>";
	echo "<pre class='EnlighterJSRAW' data-enlighter-language='php'>";
	echo $getinstr;
	echo '<span class="change-function" data-name2="';
	echo $getcode;
	echo ';" data-name1="&quot;&lt;h2&gt; Your '.$acf_field_TYPE.' says: &quot; . the_field(&#39;'.$acf_field_NAME.'&#39;) . &quot;&lt;/h2&gt;&quot;; // USE FIELD KEY (OPTIONAL): &#39;'.$acf_field_KEY.'&#39;">echo &quot;&lt;h2&gt; Your '.$acf_field_TYPE.' says: &quot; . $'.$acf_field_NAME.' . &quot;&lt;/h2&gt;&quot;'.';</span> //'.$acf_field_TYPE;
	echo "</pre><br>";
	


	elseif(($acf_field_TYPE == 'checkbox') || ($acf_field_TYPE == 'select') ||($acf_field_TYPE == 'radio') ):										
	    echo '<pre class="code">';
	    echo "<p>//".strtoupper($acf_field_TYPE)." EXAMPLE <span class='hide toggle-instructions' ><br><a href='http://www.advancedcustomfields.com/resources/".$acf_field_URL."/' target='_BLANK'>//# For more info  field: <strong>".$acf_field_TYPE."</strong>, goto http://www.advancedcustomfields.com/resources/".$acf_field_URL."/</a><br></span></p>";
		echo "$"."field = get_field_object('".$acf_field_NAME."');<br>";
		echo "$"."value = $"."field['value'];<br>";
		echo "$"."choices = $"."field['choices'];<br><br>";

		echo "if( $"."value ): ?&gt;<br>";
		echo "&nbsp;&lt;ul&gt;<br>";
		echo "&nbsp;&nbsp;&lt;?php foreach( $"."value as $"."v ): ?&gt;<br>";
		echo "&nbsp;&nbsp;&nbsp;&lt;li&gt;<br>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php echo $"."choices[ $"."v ]; ?&gt;<br>";
		echo "&nbsp;&nbsp;&nbsp;&lt;/li&gt;<br>";
		echo "&nbsp;&nbsp;&lt;?php endforeach; ?&gt;<br>";
		echo "&nbsp;&lt;/ul&gt;<br>";
		echo "&lt;?php<br>";
		echo "endif;<br>";
		echo "</pre><br>"; 


	elseif(($acf_field_TYPE == 'text') || ($acf_field_TYPE == 'password') || ($acf_field_TYPE == 'number') || ($acf_field_TYPE == 'email')):

	$getcode = 'echo &quot;&lt;h2&gt; Your '.$acf_field_TYPE.' is: &quot; . $'.$acf_field_NAME.' . &quot;&lt;/h2&gt;&quot;' ;
	$getinstr = "<p>//".strtoupper($acf_field_TYPE)." EXAMPLE <span class='hide toggle-instructions' ><br><a href='http://www.advancedcustomfields.com/resources/".$acf_field_URL."/' target='_BLANK'>//# For more info  field: <strong>".$acf_field_TYPE."</strong>, goto http://www.advancedcustomfields.com/resources/".$acf_field_URL."/</a></span></p>";
	echo "<pre class='EnlighterJSRAW' data-enlighter-language='php'>";
	echo $getinstr;
	echo '<span class="change-function" data-name2="';
	echo $getcode;
	echo ';" data-name1="&quot;&lt;h2&gt; Your '.$acf_field_TYPE.' is: &quot; . the_field(&#39;'.$acf_field_NAME.'&#39;) . &quot;&lt;/h2&gt;&quot;; // USE FIELD KEY (OPTIONAL): &#39;'.$acf_field_KEY.'&#39;">echo &quot;&lt;h2&gt; Your '.$acf_field_TYPE.' is: &quot; . $'.$acf_field_NAME.' . &quot;&lt;/h2&gt;&quot;'.';</span> //'.$acf_field_TYPE;
	echo "</pre><br>";
	else:



	echo "<p>//".strtoupper($acf_field_TYPE)." EXAMPLE <br><a href='http://www.advancedcustomfields.com/resources/".$acf_field_URL."/' target='_BLANK'>//# Examples for field: <strong>".$acf_field_URL."</strong>, goto http://www.advancedcustomfields.com/resources/".$acf_field_URL."/</a><br>//This example will be added in next version. Until then, please click the link above</p><br>";

	endif;

?>