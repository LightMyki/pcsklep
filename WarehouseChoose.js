
function skrypt1() {
    if(document.getElementById("che1").checked) {
        document.getElementById("text").style.visibility="visible";
    }else {
        document.getElementById("text").style.visibility="hidden";
        document.getElementById("text").value=null;
    }

    if(document.getElementById("che2").checked) {
        document.getElementById("sel").style.visibility="visible";
    }else {
        document.getElementById("sel").style.visibility="hidden";
        document.getElementById("sel").value="WybierzKategorie";
    }
    if(document.getElementById("sel").style.visibility=="visible" || document.getElementById("text").style.visibility=="visible"){
        document.getElementById("sub").style.visibility="visible";
    }
    if(document.getElementById("sel").style.visibility=="hidden" && document.getElementById("text").style.visibility=="hidden"){
        document.getElementById("sub").style.visibility="hidden";
    }
}
