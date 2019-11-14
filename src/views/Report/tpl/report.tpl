{include file='application/views/tpl/header.tpl'} 
{include file=$url}
    <div class="container">
        <div class="row" style="margin-top: 100px">                           
            <div class="col-md-6">
                <h1 style="color: red">{$error}</h1>
                <h5><small>Звіт: "Kількість проданих товарів за період"</small></h5><br>
                <form method="post">
                    <input type="hidden" name="type" value="report">
                    <label>Початок:</label>
                    <input type="date" name="sdate" value="sdate" class="form-control">
                    <label>Кінець:</label>
                    <input type="date" name="edate" value="edate" class="form-control"><br>
                    <input type="submit" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}