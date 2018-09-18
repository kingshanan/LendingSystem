
    //=====请用用 户名数据======//
    $.get('./Api/Chickuser.php', function (data) {
        // console.log(data);
        if (data.isSuccess) {
            var strlogin = ` <p id="nameper">用户名： ${data.username}</p>`;
            $("#nameper").after(strlogin);
        }
    }, 'json');

    $(".but1").on('click',function () {
        $('#personCon').toggleClass('active');
        if($('#personCon').hasClass('active')){
            $(this).text('隐藏');
        }else {
            $(this).text('显示');
        }
    });

    //========滑动事件的函数=====//

    var x1=0,
        y1=0;
    $(window).on('touchstart',function (e) {
        // console.log(e.originalEvent.changedTouches[0].clientX)
        x1=e.originalEvent.changedTouches[0].clientX;
        y1=e.originalEvent.changedTouches[0].clientY;
        // console.log(x1,y2)
    });
    $(window).on('touchend',function (e) {
        // console.log(e.originalEvent.changedTouches[0].clientX)
        x2=e.originalEvent.changedTouches[0].clientX;
        y2=e.originalEvent.changedTouches[0].clientY;
        // console.log(x1,y2)
        let dx=x2-x1;
        // console.log(dx,dy)
        if(Math.abs(dx)>=50){
            $(".but1").trigger('click');
            // $(".but1").click();
        }
    });
