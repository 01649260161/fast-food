
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{url('/admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Shop</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('/admin/shop/category')}}">Category</a></li>
                        <li><a href="{{url('/admin/shop/product')}}">Product</a></li>
                        <li><a href="{{url('/admin/shop/order')}}">Order</a></li>
                        <li><a href="{{url('/admin/shop/review')}}">Review</a></li>
                        <li><a href="{{url('/admin/shop/customer')}}">Customer</a></li>
                        <li><a href="{{url('/admin/shop/shipper')}}">Nhà Vận Chuyển</a></li>
                        <li><a href="{{url('/admin/shop/seller')}}">Nhà Cung Cấp</a></li>
                        <li><a href="{{url('/admin/shop/brands')}}">Brands</a></li>
                        <li><a href="{{url('/admin/shop/statistic')}}">Statistic</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Content</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/content/category') }}"> Danh Mục</a></li>
                        <li><a href="{{ url('/admin/content/post') }}"> Bài Viết</a></li>
                        <li><a href="{{ url('/admin/content/page') }}"> Trang</a></li>
                        <li><a href="{{ url('/admin/content/tag') }}"> Tag</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-tasks"></i>
                        <span>Menu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/menu') }}"> Menu</a></li>
                        <li><a href="{{ url('/admin/menuitems') }}"> Menu Items</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/users') }}"> Quản Trị Viên</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Media Manager</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/media') }}"> Media Manager</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Global Setting</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/config') }}"> Global Setting</a></li>
                    </ul>
                </li>



                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        <span>Newletters</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/newletters') }}">Newletters</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-bank"></i>
                        <span>Banners</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/banners') }}">Banners</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-angellist"></i>
                        <span>Contact</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/contact') }}">Liên Hệ</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-android"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/email/inbox') }}">Inbox</a></li>
                        <li><a href="{{ url('/admin/email/draft') }}">Draft</a></li>
                        <li><a href="{{ url('/admin/email/send') }}">Send</a></li>
                    </ul>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>