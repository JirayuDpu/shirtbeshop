{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    เมนู</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> สินค้า
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">สินค้า</a></li>
                    <li><a href="{{route('product.create')}}">เพิ่ม สินค้า</a></li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>ประเภท
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">หมวดหมู่สินค้า</a></li>
                    <li><a href="{{route('colors.index')}}">สี</a></li>
                    <li><a href="{{route('sizes.index')}}">ขนาด/ไซต์</a></li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Order ที่รอดำเนินการ</a></li>
                    <li><a href="{{url('admin/orders/delivered')}}">Order ที่ส่งแล้ว</a></li>
                    <li><a href="{{url('admin/orders')}}">รายการ Orders ทั้งหมด</a></li>

                </ul>
            </li>

            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i>รายการชำระเงิน
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/payment/pending')}}">รายการที่รอดำเนินการ</a></li>
                    <li><a href="{{url('admin/payment/confirm')}}">รายการที่ชำระเงินเรียบร้อยแล้ว</a></li>
                    <li><a href="{{url('admin/payment')}}">All Orders</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->