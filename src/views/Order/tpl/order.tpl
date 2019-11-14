{include file='application/views/tpl/header.tpl'} 
{include file=$url}
    
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-4"></div>
        <div class="col-4">
            <form method="post">
                <div class="row justify-content-center"
                     <p><h2 class="text-danger">{$msg}</h2></p>
                    <p><h2>Заповніть форму</h2></p>
                </div>
                <div class="form-group">
                    <label for="Name"><h2><small>Ім'я:</small></h2></label>
                    <input type="text" name="Name" id="Name" class="form-control">
                    <label for="Name"><h2><small>Прізвище:</small></h2></label>
                    <input type="text" name="Surname" id="Surname" class="form-control">
                    <label for="Email"><h2><small>Емейл:</small></h2></label>
                    <input type="email" name="Email" id="Email" class="form-control" value="{$userEmail}">
                    <label for="Number"><h2><small>Номер телефону:</small></h2></label>
                    <input type="text" name="Number" id="Number" class="form-control" placeholder="380631231213">
                    <input type="hidden" name="productId" value="{$productId}" class="form-control"><br><br>
                    <input type="submit" name="sendOrder" class="btn btn-outline-secondary float-right">
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}
