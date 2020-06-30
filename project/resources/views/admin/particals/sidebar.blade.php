
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="" href="{{url('/admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Shop</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('/admin/shop/category')}}">Danh mục</a></li>
                        <li><a href="{{url('/admin/shop/product')}}">Sản Phẩm</a></li>
                        <li><a href="{{url('/admin/shop/order')}}">Đơn Hàng</a></li>
                        <li><a href="{{url('/admin/shop/review')}}">Đánh giá</a></li>
                        <li><a href="{{url('/admin/shop/customer')}}">Khách hàng</a></li>
                        <li><a href="{{url('/admin/shop/shipper')}}">Nhà Vận Chuyển</a></li>
                        <li><a href="{{url('/admin/shop/brands')}}">Brands</a></li>
                        <!-- <li><a href="{{url('/admin/shop/statistic')}}">Statistic</a></li> -->
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Nội dung</span>
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
                        <span>Danh mục hiển thị</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/menu') }}"> Danh mục cha</a></li>
                        <li><a href="{{ url('/admin/menuitems') }}"> Danh mục con</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Quản trị viên</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/users') }}"> Quản Trị Viên</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Quản lý file</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/media') }}"> Quản lý file</a></li>
                    </ul>
                </li>




                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Cài đặt</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/config') }}"> Cài đặt</a></li>
                    </ul>
                </li>



                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        <span>Email đăng ký</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/newletters') }}">Email đăng ký</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-bank"></i>
                        <span>Ảnh nền</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/banners') }}">Ảnh nền</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-angellist"></i>
                        <span>Liên lạc</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/contact') }}">Liên Hệ</a></li>
                    </ul>
                </li>
                <!-- <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-android"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/admin/email/inbox') }}">Inbox</a></li>
                        <li><a href="{{ url('/admin/email/draft') }}">Draft</a></li>
                        <li><a href="{{ url('/admin/email/send') }}">Send</a></li>
                    </ul>
                </li> -->
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>