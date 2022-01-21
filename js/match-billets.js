function reduce_check(that) {
    if (that.value == "L") {
        document.getElementById("ifL").style.display = "block";
        document.getElementById("ifJDS").style.display = "none";
    } else if ( that.value == "JDS") {
        document.getElementById("ifJDS").style.display = "block";
        document.getElementById("ifL").style.display = "none";
    
    } else if ( that.value == "GP") {
        document.getElementById("ifJDS").style.display = "none";
        document.getElementById("ifL").style.display = "none";
    }
}