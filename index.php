<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body >


<input type="text" id="busca">

<div id="resultados" style="width:50%;height:100px;border:1px solid black;background:#f8f8f8;overflow:auto;color:red">
	
</div>


<script src="jquery.js"></script>

<script>
	$(function(){
		$('#busca').keyup(function(){
			$.ajax({
				url:'usuarios.php',
				type:'post',
				data:{busca:$("#busca").val()},
				success:function(data){
					$('#resultados').html(data);
				},error:function(){
					$('#resultados').html('Produto não existe');
				}
			})
		})
	})
</script>
</body>
</html>