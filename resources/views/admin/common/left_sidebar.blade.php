<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{asset('admin/assets/images/logo.svg')}}" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Main Menu</li>



                <li class="sidebar-item active ">

                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Services</span>
                    </a>


                    <ul class="submenu ">
                        <br>
                        <li>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#inlineForm">Add
                                Service</button>
                        </li>
                        <li>
                            <button type="button" class="btn" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">Service List</button>
                        </li>
                        <br>
                    </ul>

                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>