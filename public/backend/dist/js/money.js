Date.prototype.addDays = function (days) {
    const startDay = new Date(this.valueOf());
    startDay.setDate(startDay.getDate() + days);
    return startDay;
};

function pad2(n) {
    return (n < 10 ? '0' : '') + n;
};

$(document).ready(function(){
    var money=$("#txt_loaitin").val();
    var startDay=new Date($("#txt_ngaybatdau").val());
    var startEnd=new Date($("#txt_ngayketthuc").val());
    var millisBetween = startEnd.getTime() - startDay.getTime();

    var days = millisBetween / (1000 * 3600 * 24);
    var sumMoney=money*days;
    var kq="Giá tiền "+days+" ngày là: "+parseInt(sumMoney).toLocaleString()+" đ";
    $(".sumMoney").html(kq);
    $("#txt_money").val(sumMoney);

        $(".money").change(function(){
            var money=$("#txt_loaitin").val();
            var startDay=new Date($("#txt_ngaybatdau").val());
            var startEnd=new Date($("#txt_ngayketthuc").val());
            var millisBetween = startEnd.getTime() - startDay.getTime();
            if(millisBetween<=0){
                alert("Ngày kết thúc không được nhỏ hơn hoặc bằng ngày bắt đầu.");
                var date=startDay.addDays(7);
                var month=pad2(date.getMonth()+1);
                var day=pad2(date.getDate());
                var year=date.getFullYear();
                var formatDate=year+"-"+month+"-"+day;
                $("#txt_ngayketthuc").val(formatDate);
                var money=$("#txt_loaitin").val();
                var startDay=new Date($("#txt_ngaybatdau").val());
                var startEnd=new Date($("#txt_ngayketthuc").val());
                var millisBetween = startEnd.getTime() - startDay.getTime();
                var days = millisBetween / (1000 * 3600 * 24);
                var sumMoney=money*days;
                console.log(sumMoney);
                var kq="Giá tiền "+days+" ngày là: "+parseInt(sumMoney).toLocaleString()+" đ";
                $(".sumMoney").html(kq);
                $("#txt_money").val(sumMoney);

            }
            else{
                var days = millisBetween / (1000 * 3600 * 24);
                var sumMoney=money*days;
                console.log(sumMoney);
                var kq="Giá tiền "+days+" ngày là: "+parseInt(sumMoney).toLocaleString()+" đ";
                $(".sumMoney").html(kq);
                $("#txt_money").val(sumMoney);
            }                
        });
});
