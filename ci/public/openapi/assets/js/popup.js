// 한국인터넷진흥원 - 
const kisaSearchDomain = () => {
    window.open();
}

// 등록팝업
const insertPopup = () => {
    var popupWidth = 700;
    var popupHeight = 300;


    var popupX = (window.screen.width / 2) - (popupWidth / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음

    var popupY= (window.screen.height / 2) - (popupHeight / 2);
    // 만들 팝업창 height 크기의 1/2 만큼 보정값으로 빼주었음
    // window.open("/2024/CI/public/openapimove/insertPage", "_blank", "width=700vw, height=300vh," + "top=" + popupY+",left="+ popupX);
    window.open('/2024/CI/public/openapimove/insertPage', '', 'status=no, height=' + popupHeight  + 'vw, width=' + popupWidth  + 'vh, left='+ popupX + ', top='+ popupY);
}