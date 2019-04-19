<?php

use Illuminate\Support\Facades\Storage ;
session()->regenerate();
if(Session('id')==null){
        echo "ليس لديك الصلاحيات للدخول على تلك الصفحة";
}else{
?>
@include('layout.head')
@include('admin.barsAdmin')
@foreach($x as $info)
<div id="page-wrapper">

    <div id="app">
    <!-- <input type="hidden" id="idele" value="{{ Session::get('id') }}" > -->
        <div   class="card text-center">
            <img src="{{asset($info->image)}}" style="width:350px; height:150px" class="img-rounded"/>
            <h2 id="banklabel">{{$info->bankName}}</h2>
            <div class="panel panel-default panel-sm">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>صاحب الحساب</b></h3>
                </div>
                <div class="panel-body">
                    {{$info->accountOwner}}
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title"><b>رقم الحساب</b></h3>
                </div>
                <div class="panel-body">
                    {{$info->accountNumber}}
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title"><b>السويفت</b></h3>
                </div>
                <div class="panel-body">
                    {{$info->swift}}
                </div>
            </div>
            <hr>
            </div>
    </div>

</div>
            @endforeach
           

     

<?php
}
?>
@include('layout.footer')
<!-- <script src={{asset("js/adminpanel.js")}}></script> -->
