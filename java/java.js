$(document).ready(function (){
    $('.burger').click(function (event){
        $('.burger, .nav, .secret_box').toggleClass('active');
    });
});
$(document).ready(function (){
    $('.language_button').click(function (event){
        $('.language_button, .language_block').toggleClass('active');
    });
});
