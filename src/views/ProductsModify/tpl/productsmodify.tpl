<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <title>Add</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col"></div>
		<div class="col-6 border border-dark">
			<form method="post">
				<center>
<form method="post" class="border border-dark">
        <h3 class="text-danger">{$errorMsg}</h3>
	{$nameAction}
	<div class="form-group">
		<select name='type' class="form-control w-50 mt-2 mb-2">
                    {foreach $types as $type}
                        <option value="{$type}">{$type}</option>                    
                    {/foreach}                   
                </select><br>
                Модель:
                <input type="text" name="name" value="{$row['name']}" class="form-control w-50"><br>
                Ціна:
                <input type="text" name="price" value="{$row['price']}" class="form-control w-50"> грн
	</div>
	<div class="row justify-content-center">
		<div class="form-inline mb-1">
			<div class="col-auto">
				<input type="submit" value="Save" name="save">
			</div>
			<div class="col-auto">
				<input type="submit" value="Cancel" name="cancel">
			</div>
		</div>
	</div>
</form>
</center>
			</form>
		</div>
		<div class="col"></div>
	</div>
</div>
</body>
</html>