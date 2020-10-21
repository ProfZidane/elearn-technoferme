$(document).ready(function(){
    $('.hover-grid').mouseover(function(){
        $(this).css('box-shadow','8px 8px 12px #aaa');
    });
    $('.hover-grid').mouseout(function(){
        $(this).css('box-shadow','2px 3px 3px #aaa');
    });
});