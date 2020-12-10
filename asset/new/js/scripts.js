$(window).scroll(function(){
 var scrollTop = $(window).scrollTop();
 if(scrollTop>=100){
     $(".header").css({"background":"white","opacity":"0.8"});
     $(".navbar").css({"background":"white","opacity":"0.8"});
 }
 if(scrollTop<=100){
     $(".header").css({"background":"transparent","opacity":"1"});
     $(".navbar").css({"background":"transparent","opacity":"1"});
 }
if (scrollTop >= 500){
    $(".why_chose_us").fadeIn(2000);
    //   console.log("ok");
}
if (scrollTop <= 500){
    $(".why_chose_us").fadeOut(500);
    //   console.log("ok");
}
if (scrollTop >= 700){
    $(".how_it_work").fadeIn(2000);
    $(".header").fadeOut(1000);
    //   console.log("ok");
}
if (scrollTop <= 700){
    $(".how_it_work").fadeOut(500);
    $(".header").fadeIn(1500);
    //   console.log("ok");
}
if (scrollTop >= 1000){
    $(".any_qus_sec").fadeIn(2000);
    //   console.log("ok");
}
if (scrollTop <= 1000){
    $(".any_qus_sec").fadeOut(500);
    //   console.log("ok");
}
if (scrollTop >= 1200){
    $(".teachers_section").fadeIn(2000);
    //   console.log("ok");
}
if (scrollTop <= 1200){
    $(".teachers_section").fadeOut(500);
    //   console.log("ok");
}

//   console.log("ok");
});
// animation end

$('#addlanguage').click(function(){
    alert("ok");
});











