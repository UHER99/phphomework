function open_modal() {
    $("#modal").css("display","flex")
    
    setTimeout(() => {
        $("#modal").css({
            "opacity": "1",
            "transform": "translateY(0)"
        })
    }, 50)
}
function close_modal() {

    $("#modal").css({
        "opacity": "0",
        "transform": "translateY(200px)"
    })
    setTimeout(() => {
        $("#modal").css("display","none")
    }, 300)
}