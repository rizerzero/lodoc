<?php
session()->regenerate();
?>
<script src="//unpkg.com/vue/dist/vue.js"></script>
<script src="//unpkg.com/element-ui@2.4.2/lib/index.js"></script>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" id="template" role="navigation" style="margin-bottom: 0">

    <ul class="nav navbar-top-links navbar-right">
        <img width="50" height="50" style="margin: 10px 10px 0px 10px" src="http://locationdoctor.com/wp-content/uploads/2018/07/Group-170-244x300.png"
             class="img-responsive" alt="تطبيق لودوك "/>
    </ul>

    <div   class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:;">لوحة تحكم التطبيق </a>
    </div>
    <div class="navbar-header">
       
       <a style="margin-top:7px ; " class="btn btn-warning" name="logout" href="{{url('/')}}"> <i class="fa fa-sign-out">
   
   
                &nbsp;خروج</i> </a>
    </div>
    <!-- /.navbar-header -->


    <!-- /.navbar-top-links -->

    
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                {{--<li>--}}
                {{--<a href="#"><i class="fa fa-mobile fa-fw"></i> <span class="fa arrow"></span>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-second-level">--}}

                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
                {{--</li>--}}
                
                <li><a href={{url('Admin/users')}}><i class="fa fa-address-book"></i> المستخدمين</a></li>
                <li><a href={{url('Admin/requests')}}><i class="fa fa-plus"></i> طلبات الأنضمام</a></li>
                <li><a href={{url('Admin/show')}}><i class="fa fa-product-hunt"></i> الأحصائيات </a></li>
                <li><a href={{url('Admin/bankaccount')}}><i class="fa fa-credit-card"></i> الحسابات البنكية </a>
                <li><a href={{url('Admin/showbanks')}}><i class="fa fa-credit-card"></i> تعديل الحسابات البنكية </a>
                <li><a href={{url('Admin/addbanks')}}><i class="fa fa-credit-card"></i> اضافة الحسابات البنكية </a>
                <li><a href={{url('Admin/addcities')}}><i class="fa fa-building"></i> ادخال المدن</a></li>
                
                <li><a href={{url('Admin/add')}}><i class="fa fa-building"></i> ادخال الأحياء</a></li>
              
                <li><a href={{url('Admin/ads')}}><i class="fa fa-assistive-listening-systems"></i> إدارة الإعلانات</a></li>
                <li><a href={{url('Admin/addspecialists')}}><i class="fa fa-headphones"></i> ادخال التخصصات </a></li>
                <li><a href={{url('Admin/addadmin')}}><i class="fa fa-address-card"></i> اضافة مسؤول </a></li>
                <li><a href={{url('/Admin/addroles')}}><i class="fa fa-address-card"></i> اضافة دور </a></li>
                </li>

            </ul>
            <center>
                Powered by <a href="http://alexforprog.com" target="_blank">AlexApps</a>
            </center>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

{{--side bar and header end--}}


