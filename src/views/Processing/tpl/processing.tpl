{include file='application/views/tpl/header.tpl'} 
{include file=$url}
<div class="container">
    <div class="row" style="margin-top: 100px">
        <div class="col-4"></div>
        <div class="col-4">
            <h3><small>Кількість проданих мобілок</small></h3>
            <table class="table">
                <tr>
                    <td>Мобільні телефони</td>
                    <td>{$countMobile}</td>
                </tr>
            </table>

            <h3><small>Кількість проданих планшетів</small></h3>
            <table class="table">
                <tr>
                    <td>Планшети</td>
                    <td>{$countTablet}</td>
                </tr>
            </table>

            <h3><small>Кількість проданих ноутбуків</small></h3>
            <table class="table">
                <tr>
                    <td>Ноутбуки</td>
                    <td>{$countLaptop}</td>
                </tr>
            </table>
                
                <h3><small>Кількість ще невиконаних замовлень</small></h3>
            <table class="table">
                <tr>
                    <td>Усіх</td>
                    <td>{$start}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}
