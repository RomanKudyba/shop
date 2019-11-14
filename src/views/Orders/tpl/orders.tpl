{include file='application/views/tpl/header.tpl'} 
{include file=$url}
{include file='application/bootstrap.php'}
<div class="container">
    <div class="row">
        
            <table class="table table-bordered bg-light" style="margin-top: 100px; margin-left: 10px">
                <thead>
                <td>Ім'я</td>
                    <td>Прізвище</td>
                    <td>Емейл</td>
                    <td>Номер</td>
                    <td>Іd продукта</td>
                    <td>Опрацьовано(0/1)</td>
                </thead>
                <tbody>                       
                    {foreach $Products as $key=>$product}
                        <tr>
                                <td>{$product['name']}</td>
                                <td>{$product['surname']}</td>
                                <td>{$product['email']}</td>
                                <td>{$product['number']}</td>
                                <td>{$product['product_id']}</td> 
                                <td>{$product['bool']}</td> 
                                <td>{$btn["$key"]}</td>                                
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        
    </div>
</div>


{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}
