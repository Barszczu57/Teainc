$("#workeradd").
click(function(){
    $("#content-edit-produkty").removeClass('visible').addClass('unvisible');
    $("#content-edit-pracownicy").removeClass('unvisible').addClass('visible').
    html("Dodawanie pracownika");

});
$("#workeredit").
click(function(){
    $("#content-edit-produkty").removeClass('visible').addClass('unvisible');
    $("#content-edit-pracownicy").removeClass('unvisible').addClass('visible').
    html("Edytowanie pracownika");
});
$("#workerdel").
click(function(){
    $("#content-edit-produkty").removeClass('visible').addClass('unvisible');
    $("#content-edit-pracownicy").removeClass('unvisible').addClass('visible').
    html("Usuwanie pracownika");
});
$("#productadd").
click(function(){
    $("#content-edit-pracownicy").removeClass('visible').addClass('unvisible');
    $("#content-edit-produkty").removeClass('unvisible').addClass('visible').
    html("Dodawanie produktu");

});
$("#productedit").
click(function(){
    $("#content-edit-pracownicy").removeClass('visible').addClass('unvisible');
    $("#content-edit-produkty").removeClass('unvisible').addClass('visible').
    html("Edytowanie produktu");
});
$("#productdel").
click(function(){
    $("#content-edit-pracownicy").removeClass('visible').addClass('unvisible');
    $("#content-edit-produkty").removeClass('unvisible').addClass('visible').
    html("Usuwanie produktu");
});