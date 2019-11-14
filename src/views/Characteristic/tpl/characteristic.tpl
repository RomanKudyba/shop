{include file='application/views/tpl/header.tpl'} 
{include file=$url}
<div class="container">
    <div class="row" style="margin-top: 70px">
        <div class="col-4"></div>
        <div class="col-4">
            <a href="{$edit}">Edit</a>
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
                        <td>{$waterProtect}</td>
                    </tr>
                    
                    <tr>
                        <td>Матеріал корпуса</td>
                        <td>{$material}</td>
                    </tr>
                    
                    <tr>
                        <td>Вага</td>
                        <td>{$weight} гр</td>
                    </tr>
                    
                    <tr>
                        <td>Габарити</td>
                        <td>{$dimentions} мм</td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">Дисплей</td>
                    </tr>
                    
                    <tr>
                        <td>Тип екрана</td>
                        <td>{$typeScreen}</td>
                    </tr>

                    <tr>
                        <td>Розмір екрана</td>
                        <td>{$sizeScreen}</td>
                    </tr>
                    
                    <tr>
                        <td>Розширення екрана</td>
                        <td>{$expantion}</td>
                    </tr>
                                        
                    <tr>
                        <td colspan="2">Камера</td>
                    </tr>
                    
                    <tr>
                        <td>Основна камера</td>
                        <td>{$mainCamera}п</td>
                    </tr>
                    
                    <tr>
                        <td>Фронтальна камера</td>
                        <td>{$frontalCamera} Мп</td>
                    </tr>
                    
                    <tr>
                        <td>Кількість модулів основної камери</td>
                        <td>{$countModels}</td>
                    </tr>
                    
                    <tr>
                        <td>Автофокус</td>
                        <td>{$focus}</td>
                    </tr>
                    
                    <tr>
                        <td>Встроєна вспишка</td>
                        <td>{$flash}</td>
                    </tr>
                    
                    <tr>
                        <td>Стабілізація</td>
                        <td>{$stabilisation}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>
{include file='html/footer.php'}
{include file='application/views/tpl/footer.tpl'}