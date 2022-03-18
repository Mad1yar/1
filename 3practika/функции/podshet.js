function km_count(km, hour) {
    var res = km * hour;
    printRes(res);
    return res;
}
function printRes(res) {
    var word = res == 1 ? "Вы проедете: 1 километр" : "Вы проедете: " + res + "километров";
    console.log(word);
}


var res = km_count(21, 2.4);