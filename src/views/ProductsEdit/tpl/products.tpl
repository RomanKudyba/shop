{include file='application/views/tpl/header.tpl'} 
{include file=$url}
{include file='application/bootstrap.php'}
<div class="container">
    <div class="row">
        <div class="col-xs-auto col-sm-2 col-md-4"></div>
        <div class="col-8 col-md-4">            
            <table class="table table-bordered bg-light" style="margin-top: 100px">
                <thead>
                    <td>Тип</td>
                    <td>Модель</td>
                    <td>Ціна</td>
                    <td>{$btnA}</td>
                </thead>
                <tbody>                           
                    {foreach $Products as $key=>$product}
                        <tr>
                                <td>{$product['type']}</td>
                                <td>{$product['name']}</td>
                                <td>{$product['price']}</td>
                                <td>{$btnM["$key"]}{$btnD["$key"]}</td>
                                <td>{$btn["$key"]}</td>
                        </tr>
                    {/foreach}                    
                </tbody>
            </table>
        </div>
        <div class="col-xs-auto col-sm-2 col-md-4"></div>
    </div>
</div>


{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}
