{include file='application/views/tpl/header.tpl'} 
{include file=$url}
<div class="container">
    <div class="row" style="margin-top : 100px">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="row">            
                <h3>Щоб зробити замовлення ви повинні створити акаунт або зайти вже під створеним.</h3>
            </div>
            <div class="row">            
                <img src="https://feng-shui-po-russki.com/wp-content/uploads/2016/05/strelki-vniz.png">
            </div>
            <div class="row mt-2">
                <div class="col-auto col-sm-5">
                    <a href="index.php?register" class="btn btn-outline-secondary ml-4">Register</a>
                </div>
                <div class="col-auto col-sm-4">
                    <a href="index.php?login" class="btn btn-outline-secondary ml-4">Login</a>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}
