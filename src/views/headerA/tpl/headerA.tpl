<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">MyStore</a>
        
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">            
                <li class="nav-item"><a href="index.php?type=products" class="nav-link">Products/edit</a></li>
                <li class="nav-item"><a href="index.php?type=orders" class="nav-link">Orders</a></li>
                <li class="nav-item"><a href="index.php?type=report" class="nav-link">Report</a></li>
                <li class="nav-item"><a href="index.php?type=processing" class="nav-link">Processing</a></li>
            </ul>
                <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">{$username} <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                       <li class="px-3 py-2">                               
                                    <small><a href="index.php?logout=1" class="form-control">Logout</a></small>                                                          
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>