<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">MyStore</a>
        
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.php?type=mobile">Телефони</a>
                      <a class="dropdown-item" href="index.php?type=tablet">Планшети</a>
                      <a class="dropdown-item" href="index.php?type=laptop">Ноутбуки</a>
                      <a class="dropdown-item" href="index.php?type=all">Усі категорії</a>
                    </div>
                </li>               
            </ul>
            <nav class="navbar navbar-dark bg-dark">
                <form action='http://localhost/shop/index.php?search=1' method="post" class="form-inline">
              <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
</nav>
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