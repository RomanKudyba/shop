{include file='application/views/tpl/header.tpl'} 
{include file=$url}
<div class="container">
    <div class="row" style="margin-top: 70px">
        <div class="col-4"></div>
        <div class="col-4">
            <form method="post" action="{$smar}">
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Характеристики</th>
                    </tr>
                </thead>
                <tbody>                   
                    <tr>
                        <td>Модель</td>
                        <td>{$model}</td>
                    </tr>

                    <tr>
                        <td colspan="2">Корпус</td>
                    </tr>
                    
                    <tr>
                        <td>Водозащита</td>
                        <td><input type="text" name="waterProtect" value="{$waterProtect}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Матеріал корпуса</td>
                        <td><input type="text" name="material" value="{$material}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Вага</td>
                        <td><input type="text" name="weight" value="{$weight}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Габарити</td>
                        <td><input type="text" name="dimentions" value="{$dimentions}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">Дисплей</td>
                    </tr>
                    
                    <tr>
                        <td>Тип екрана</td>
                        <td><input type="text" name="typeScreen" value="{$typeScreen}" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Розмір екрана</td>
                        <td><input type="text" name="sizeScreen" value="{$sizeScreen}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Розширення екрана</td>
                        <td><input type="text" name="expantion" value="{$expantion}" class="form-control"></td>
                    </tr>
                                        
                    <tr>
                        <td colspan="2">Камера</td>
                    </tr>
                    
                    <tr>
                        <td>Основна камера</td>
                        <td><input type="text" name="mainCamera" value="{$mainCamera}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Фронтальна камера</td>
                        <td><input type="text" name="frontalCamera" value="{$frontalCamera}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Кількість модулів основної камери</td>
                        <td><input type="text" name="countModels" value="{$countModels}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Автофокус</td>
                        <td><input type="text" name="focus" value="{$focus}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Встроєна вспишка</td>
                        <td><input type="text" name="flash" value="{$flash}" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <td>Стабілізація</td>
                        <td><input type="text" name="stabilisation" value="{$stabilisation}" class="form-control"></td>
                    </tr>
                    
                    <tr>                       
                        <td><input type="hidden" name="hiddenId" value="{$product_id}"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="submit" class="btn btn-success form-control"></td>
                    </tr>
                </tbody>
            </table>
                </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}