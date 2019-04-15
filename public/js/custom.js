//Remover marcaçao menu
function removeMarcacaoMenuAtivo() {
    var quantiadeMenu = $(".sidebar-menu li").length;
    for (var i = 0; i < quantiadeMenu; i++) {
        $(".sidebar-menu li").eq(i).removeClass("active");
        // $(".sidebar-menu li").eq(i).removeClass("menu-open");
    }
}

//Ativar marcaçao menu
function addMarcacaoMenuAtivo(string) {
    $(string).addClass("active");
}
