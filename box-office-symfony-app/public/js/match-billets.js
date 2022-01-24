function reduce_check(that) {
    isL = that.value == "L";
    isJDS = that.value == "JDS";

    document.getElementById("ifL").style.display = isL ? "block" : "none";
    document.getElementById("ifJDS").style.display = isJDS ? "block" : "none";

    document.getElementById("lInput").required = isL;
    document.getElementById("jdsInput").required = isJDS;
}