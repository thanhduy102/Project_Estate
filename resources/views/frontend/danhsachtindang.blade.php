@extends('frontend.master.master')
@section('title','Trang ca nhan')
@section('content')


    <section class="bds-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
            <div class="container pt-lg-5 py-3">
            </div>
        </div>
    </section>
    <section class="bds-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Trang cá nhân</li>
                <!-- <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Contact Us</li> -->
            </ul>
        </div>
    </section>
    <!-- contacts -->
    <section class="bds-contact-7 pt-5" id="contact">
        <div class="contacts-9 pt-lg-5 pt-md-4">
            <div class="container-fluid">
                <div class="top-map pb-5">
                    <div class="row map-content-9">
                        <div class="col-lg-9">
                            <div class="contact-form">
                                <h5 class="mb-2 pb-3">Danh sách tin đăng</h5>
                                {{-- <p class="mb-4">Đăng tin</p> --}}
                                <input type="hidden" value="{{route('ListEstateUser')}}" id="estateUserData"/>
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <select data-column="2" class="filter-select" name="" id="">
                                            <option value="">---Loại tin---</option>
                                            <option value="Tin thường">Tin thường</option>
                                            <option value="Tin VIP">Tin VIP</option>
                                        </select>
                                        
                                    </div>
                                    
                                    
                                    <div class="col-2">
                                        <select data-column="6" class="filter-select" name="" id="">
                                            <option value="">---Tình trạng---</option>
                                            <option value="Đang chờ duyệt...">Đang chờ duyệt</option>
                                            <option value="Đã duyệt">Đã duyệt</option>
                                            <option value="Hết hạn">Hết hạn</option>
                                            <option value="Đã bán">Đã bán</option>
                                            <option value="Duyệt không thành công">Duyệt không thành công</option>
                                        </select>
                                    </div>
                                </div>
                                <table class="table table-bordered" id="listBDSTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            {{-- <th style="width: 100px">Hình ảnh</th> --}}
                                            <th>Tiêu đề</th>
                                            <th>Loại tin</th>
                                            <th>Ngày bắt đầu</th>
                                            <th>Ngày kết thúc</th>
                                            <th>Lượt xem</th>
                                            <th style="width: 70px">Tình trạng</th>
                                            <th style="width: 80px">Hanh dong</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbd_listBDS">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @include('frontend.layout.layout')
                        
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- //contacts -->

    <script>
        $(function(){
            var urlData=$("#estateUserData").val();
            var table=$("#listBDSTable").DataTable({
                processing:true,
                serverSide:true,
                ajax:urlData,
                type:'post',
                columns:[
                    {data:'DT_RowIndex',name:'DT_RowIndex'},
                    // {data:'hinhanh',name:'hinhanh'},
                    {data:'TieuDeBDS'},
                    {data:'LoaiTin'},
                    {data:'NgayBatDau'},
                    {data:'NgayKetThuc'},
                    {data:'luotxem',name:'luotxem'},
                    {data:'tinhtrang',name:'tinhtrang'},
                    {data:'hanhdong',name:'hanhdong'},
                ],
                "pageLength":10
            });
            $('.filter-select').change(function(){
            table.column( $(this).data('column'))
                .search($(this).val())
                .draw();
        });
        });
    </script>
  
    <script>
        $(document).ready(function(){
            $.ajax({
                type:'post',
                url:'/infoUser',
                success:function(result){
                    console.log(result);
                    var str="";
                    // for(var i=0;i<result.user.length;i++){
                       str+= "<h5 class='text-center'>Thông tin cá nhân</h5>";

                            str+="<h5 class='mt-4 pt-lg-3 text-center'>"+result.user.Ho+" "+result.user.Ten+"</h5>";
                            str+="<p style='font-size: 14px;'><span></span> Tài khoản tin rao: "+parseInt(result.user.SoTien).toLocaleString()+" đ</p>";
                                

                            str+="<p><span class='fa fa-phone'></span> <strong class='txt_info'>Tel :</strong>";
                                str+="<a class='txt_info' href='tel:"+result.user.Phone+"'> "+result.user.Phone+"</a></p>";

                            str+="<p> <span class='fa fa-envelope'></span> <strong class='txt_info'>Email :</strong>";
                                str+="<a class='txt_info' href='mailto:"+result.user.email+"'> "+result.user.email+"</a></p>";

                                str+="<p class='title'>Quản lý thông tin cá nhân</p>";
                                str+="<ul>";
                                    str+="<a href='../trang-ca-nhan'><li>Thay đổi thông tin cá nhân</li></a>";
                                    str+="<a href='' data-toggle='modal' data-target='#exampleModal'><li>Thay đổi mật khẩu</li></a>";
                                    str+="<a href='' data-toggle='modal' data-target='#exampleModal12'><li>Nạp tiền</li></a>";

                                str+="</ul>";

                                str+="<p class='title'>Quản lý tin đăng</p>";
                                str+="<ul>";
                                    str+="<a href='../danh-sach-tin-dang'><li>Danh sách tin đăng</li></a>";
                                    str+="<a href='../dang-tin'><li>Đăng tin</li></a>";
                                   
                                str+="</ul>";
                    // }

                        $("#info_user").html(str);
                }
                
            })
        });
    </script>

    <script>
        $(function(){
            $(".form_password .eye").click(function(){
                let $this=$(this);
                if($this.hasClass('active')){
                    $this.parents(".form_password").find('input').attr('type','password');
                    $this.removeClass('active');
                }
                else{
                    $this.parents(".form_password").find('input').attr('type','text');
                    $this.addClass('active');
                }
                // alert("12");
            });
        });
    </script>
    <script>
        $(function(){
            $("#frm_changePass").submit(function(e){
                var route=$("#frm_changePass").data('route');
                var form=$(this);
                $('.text-danger').remove();
                $.ajax({
                    type:'post',
                    url:route,
                    data:form.serialize(),
                    success:function(result){
                        for(var i=0;i<result.length;i++){
                            if(result[i].password_old){
                                $("#show_errors").append('<p class="text-danger">'+result[i].password_old+'</p>');
                            }
                            if(result[i].err){
                                $("#show_errors").append('<p class="text-danger">'+result[i].err+'</p>');

                            }
                            if(result[i].password){
                                $("#show_errors1").append('<p class="text-danger">'+result[i].password+'</p>');
                            }
                            // if(result[i].password_confirm){
                            //     $("#show_errors2").append('<p class="text-danger">'+result[i].password_confirm+'</p>');
                            // }
                            if(result[i].success){
                                toastr.success(result[i].success,'Thong bao');
                                
                            }
                        }
                    }
                });
                e.preventDefault();
            });
        });
    </script>

<script>
    function btn_del_bds_user(id_BDS){
        if(confirm("Bạn có chắc chắn muốn xóa không?")==true){
            $.ajax({
                url:'/del_bds_user',
                type:'post',
                data:{id_BDS:id_BDS},
                success:function(result){
                    if(result.message=="Xóa thành công!"){
                        toastr.success(result.message);
                        $("#listBDSTable").DataTable().ajax.reload();
                    }
                    else{
                        toastr.warning(result.err);
                    }
                    
                }
            });
        }
    }
</script>
<script>
    function btn_sold(id_BDS){
        $.ajax({
            url:'/sold_estate',
            type:'post',
            data:{id_BDS:id_BDS},
            success:function(result){
                    if(result.message=="Gỡ tin thành công"){
                        toastr.success(result.message);
                        $("#listBDSTable").DataTable().ajax.reload();
                    }
                    else{
                        toastr.warning(result.err);
                    }
                    
                }
        });
    }
</script>
@endsection