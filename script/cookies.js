function setCookie(cname, cvalue, exdays) {
    var d = new Date(); // 현재 날짜를 가져옴.
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
	//setTime:데이터 세팅
	//d를 초단위로 계산 ,  24*60*60*1000 = 1day (1000은 1초)
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
} 
// 쿠키 세팅




function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie); // 암호 풀어주세요.
    var ca = decodedCookie.split(';'); // 세미콜론 기준으로 가져오기
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}