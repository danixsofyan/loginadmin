<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>DCV 2020</title>
    <meta name="description" content="DiLo PAD" />
    <meta name="author" content="danixsofyan | OIM 2020">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="http://dilo.id/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap Dropzone CSS -->
    <link href="<?= base_url('assets/user/'); ?>vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
    
    <!-- Bootstrap Dropzone CSS -->
    <link href="<?= base_url('assets/user/'); ?>vendors/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

    <!-- jquery-steps css -->
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>vendors/jquery-steps/demo/css/jquery.steps.css">

    <!-- Toggles CSS -->
    <link href="<?= base_url('assets/user/'); ?>vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/user/'); ?>vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Daterangepicker CSS -->
    <link href="<?= base_url('assets/user/'); ?>vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?= base_url('assets/user/'); ?>dist/css/style.css" rel="stylesheet" type="text/css">

    <script>
		var my_ajax=do_ajax();
		var ids;
		var wil=new Array('kab','kec','kel');
		function ajax(id){
			if(id.length<13){
				ids=id;
				var url="?id="+id+"&sid="+Math.random();
				my_ajax.onreadystatechange=stateChanged;
				my_ajax.open("GET",url,true);
				my_ajax.send(null);
			}
		}
		function do_ajax(){
			if (window.XMLHttpRequest) return new XMLHttpRequest();
			if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
			return null;
		}
		function stateChanged(){
			var n=ids.length;
			var w=(n==2?wil[0]:(n==5?wil[1]:wil[2]));
			var data;
			if (my_ajax.readyState==4){
				data=my_ajax.responseText;
				document.getElementById(w).innerHTML = data.length>=0 ? data:"<option selected>Pilih Kota/Kab</option>";
				<?php foreach($wil as $k=>$w):?>
					document.getElementById("<?php echo $w[2];?>_box").style.display=(n><?php echo $k-1;?>)?'table-row':'none';
				<?php endforeach;?>
			}
		}
	</script>
</head>

<body>