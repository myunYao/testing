<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <link href="<?php echo base_url()?>css/tutorial.css" rel="stylesheet" type="text/css" />

<title>页面跳转</title>

<script type="text/javascript">

function turnTo(){
	 var url = "<?php echo site_url('Page2')?>";
	 window.location.href=url;
	// window.open(url);
}

function optionSql(){
	 var url = "<?php echo site_url('SongContoller')?>";
	window.location.href=url;
}

function optionAjax(){
	 var url = "<?php echo site_url('Ajax')?>";
	 window.location.href=url;
}

function optionUpload(){
	 var url = "<?php echo site_url('Upload')?>";
	 window.location.href=url;
}

function formToData(){

	var url = "<?php echo site_url('Form1Controller')?>";
	window.location.href=url;

}

function hrefToData(){

	var url = "<?php echo site_url('HrefController/index')?>"+"/name/kk/passwd/123";


	window.location.href=url;

}

</script>

</head>
<body>

    <h1>CI建议教程!</h1>
	<div id="container">
		<div id="body">

			<code onclick="turnTo()">1，跳转到Page2</code>
			<code onclick="optionSql()">2，数据库操作.2,引用css、js文件</code>
			<code onclick="optionAjax()">3，AJAX</code>
			<code onclick="optionUpload()">4，图片上传</code>
			<code onclick="formToData()">5，表单提交数据</code>
			<code onclick="hrefToData()">6，href提交数据</code>
		
		</div>
	</div>



</body>
</html>