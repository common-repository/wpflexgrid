<html>
<head>

</head>
<body>
<p class="bolder"> This is very basic code you can use to create 3 column responsive grid using flexbox, like below example</p>

<div class="flex_row">

	 <div class="flex_item">
	
	 	  <img src="<?php echo plugin_dir_url(__FILE__).'images/14256982831_dd33f0cc27_z.jpg' ?>">
	 </div><!--flex_item-->

	 <div class="flex_item">
	 	  <img src="<?php echo plugin_dir_url(__FILE__).'images/14256982831_dd33f0cc27_z.jpg' ?>">
	 </div><!--flex_item-->
	 
	 <div class="flex_item">
	 	  <img src="<?php echo plugin_dir_url(__FILE__).'images/14256982831_dd33f0cc27_z.jpg' ?>">
	 </div><!--flex_item-->
</div>

</body>

</html>

<?php

echo "<br /><br />Copy following code into your page or post using <b>'Text'</b> editor and not 'visual'";
echo "<br />It contains very simple css which you can overright as per your requirement";
echo "<br />If you need more rows, then copy-paste following code as many times as you want.";
echo "<br />I have put images in <b>images</b> folder in plugin, you can upload images to your system and just replace the given links.<br /><br />";

echo '&lt;div class="flex_row"&gt;
<br />
	 &lt;div class="flex_item"&gt;
	 	  &lt;img src="http://localhost/wordpress/wp-content/plugins/wpflexgrid/inc/images/14256982831_dd33f0cc27_z.jpg"&gt;
	 &lt;/div&gt;<!--flex_item-->
<br />
	 &lt;div class="flex_item"&gt;
	 	  &lt;img src="http://localhost/wordpress/wp-content/plugins/wpflexgrid/inc/images/14256982831_dd33f0cc27_z.jpg"&gt;
	 &lt;/div&gt;<!--flex_item-->
<br />
	 &lt;div class="flex_item"&gt;
	 	  &lt;img src="http://localhost/wordpress/wp-content/plugins/wpflexgrid/inc/images/14256982831_dd33f0cc27_z.jpg"&gt;
	 &lt;/div&gt;<!--flex_item-->
<br />
&lt;/div&gt;';

?>