// 한국인터넷진흥원 - 
const openApiFunc = (val) => {
    var popupWidth = 700;
    var popupHeight = 300;

    var xPos = (document.body.offsetWidth/2) - (popupWidth/2); // 가운데 정렬
	xPos += window.screenLeft; // 듀얼 모니터일 때
	var yPos = (document.body.offsetHeight/2) - (popupHeight/1.5);

    switch(val) {
        case 1: 
    console.log(window.screen.width);

        // window.open('/2024/CI/public/openapimove/kisaDomain', '', 'status=no, height=' + popupHeight  + 'vw, width=' + popupWidth  + 'vh, left=' + popupX + ', top='+ popupY);
        window.open('/2024/CI/public/openapimove/kisaDomain', '', 'status=no, menubar=no, status=no, titlebar=no, resizable=no", height=' + popupHeight  + 'vw, width=' + popupWidth  + 'vh, left='+xPos+', top='+yPos);
    }        
}

// 등록팝업
const insertPopup = () => {
    var popupWidth = 700;
    var popupHeight = 300;


    // console.log(window.screen.width);
    // var popupX = (window.screen.width / 2) - (popupWidth / 2);
    var popupX = (window.screen.width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음

    var popupY= (window.screen.height / 2) - (popupHeight / 2);
    // var popupY= (window.screen.height / 2);

    // 만들 팝업창 height 크기의 1/2 만큼 보정값으로 빼주었음
    // window.open("/2024/CI/public/openapimove/insertPage", "_blank", "width=700vw, height=300vh," + "top=" + popupY+",left="+ popupX);
    window.open('/2024/CI/public/openapimove/insertPage', '', 'status=no, height=' + popupHeight  + 'vw, width=' + popupWidth  + 'vh, left='+ popupX + ', top='+ popupY);
}
