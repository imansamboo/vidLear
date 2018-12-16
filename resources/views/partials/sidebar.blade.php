@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/homepage') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Visit site</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Address</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->segment(2) == 'addresses' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.addresses.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Addresses</span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'cities' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.cities.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Cities</span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'provinces' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.provinces.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">Provinces</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Product</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->segment(2) == 'categories' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.categories.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Categories</span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'products' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.products.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Products</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Fees</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->segment(2) == 'fees' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.fees.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Fees</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Manage Invoice</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Invoices</span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Pending Invoices</span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="title">Value Added Invoices</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="{{route('logout')}}" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">Log out</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open([/*'route' => 'auth.logout',*/ 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">Log out</button>
{!! Form::close() !!}
