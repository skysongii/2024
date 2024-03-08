<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>표준사전 자동검색</title>
		<meta name="description" content="Demo of a segmented tooltip animation with different effects." />
		<meta name="keywords" content="gooey, pixel, tooltip, animation, gsap, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<!-- <link rel="stylesheet" href="https://use.typekit.net/sma8eef.css"/> -->
		<link rel="stylesheet" type="text/css" href="/2024/CI/public/css/tooltip.css" />
		<link rel="stylesheet" type="text/css" href="/2024/CI/public/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/2024/CI/public/css/btn-style.css" />
		<script>document.documentElement.className="js";</script>
		<!-- <script src="//tympanus.net/codrops/adpacks/analytics.js"></script> -->
		
	</head>
	<body>
		<main>
			<div class="frame ui">
				<button type="button" id="local-reload" class="btn btn-primary" onclick="localReload();">새로고침</button>
                <input class="btn btn-dark position-absolute bottom-0 end-0" type="button" value="업로드양식"
               onclick="uploadForm();" />
				<h1 class=" ui--small" sylte="font-size : 1.25rem;">메뉴 목록<br>(새 작업은 새로고침 후 진행)</h1>
				<input class="btn btn-dark" type="file" id="inputFileName"  onchange="excelExport(event)" />
				<button type="button" id="second-job-btn" class="btn btn-primary" onclick="papagoApiReq();">2차작업</button>
				<input class="btn btn-dark position-absolute bottom-0 end-0" type="button" value="엑셀다운로드"
               onclick="download();" />

			</div>
			<div class="content ui">
				<div class="content__inner">
                    <div>
                        <span id="alarm-msg"><strong>왼쪽 아래 설명을 읽어주세요.</strong></span>
                        <button class="w-btn w-btn-indigo" type="button" onclick="goHome();">메인으로</button>

                    </div>
                    <div id="bar-container" class="bar-container">
                        <!-- <div id=""content-bar" class="bar">bar</div> -->
                    </div>
					<table id="table01" border="1">
						<!-- <th>한글명</th>
						<th>영문명</th>
						<th>설명</th> -->
				
					</table>
					<!-- <p>In the year of our <span class="trigger" data-tooltip="tooltip-1" data-effect="effect1">Sync 2085</span>, I chronicle these thoughts within the confines of my Circuit Shell, the last haven for a mind unbridged. They say the EtherSphere is liberation, but the air I breathe feels borrowed, and the sunlight is but a flux of LED warmth.</p>
					<p>Once, we danced in meadows, our feet graced by Earth’s tender script. Now, our steps tread in silent echoes across the GridWalk. No soil, no stone, just the hum of infinite data streams. We commune not through touch, but through <span class="trigger" data-tooltip="tooltip-2" data-effect="effect2">LinkLaces</span>, our emotions filtered through the Interface.</p>
					<p>The OverWarden system monitors, the PulseKeepers ensure conformity, and in the hush of the night, I hear the soft weeping of <span class="trigger" data-tooltip="tooltip-3" data-effect="effect3">Gaia-Prime</span> – a name forbidden, a relic, remembered by those of us who dare to access the Forbidden Archives. We interface with Avatars, our identities pixelated into perfection, our flaws curated into obsolescence.</p>
					<p>I recall tales, encrypted in the old tongues of C++ and Python, of a time when the sky was not a dome of projections, but a canvas of blues and the brush strokes of clouds. They say the <span class="trigger" data-tooltip="tooltip-4" data-effect="effect4">OpenField</span> program was once not a simulation, but an expanse where one could roam, where the wind was a composer, and the rain played its own symphony.</p>
					<p>They have coded the streams and rivers into AquaCircuits, the trees into DataClusters. Our nourishment comes from NutriPacks, not from the fruit of a vine or the grain of the fields. The <span class="trigger" data-tooltip="tooltip-5" data-effect="effect5">SomaTones</span> play through our day, a lullaby to soothe, to quell the yearning for a reality we were never meant to surrender.</p>
					<p>In my dreams, I breach the Firewall Gardens, a place spoken of in hushed tones among the <span class="trigger" data-tooltip="tooltip-6" data-effect="effect6">Defragmenters</span>. A place where the code dissolves and raw, untamed beauty floods in – chaos in its most terrifying and majestic form. The Network Elders speak of it as a myth, a cautionary fable from the Time Before.</p>
					<p>I have glimpsed the Others, the Outliers, in the shadowed corners of the Server Farms, where the light of the mainframe does not reach. They speak in code, but not the code of our New Tongue – it is the Organic Syntax, the lost language of the heart, of connection, of the pulse not generated by the Machine.</p>
					<p>Do not defrag my thoughts, dear Finder of this record. For within these bytes lies the ghost of what was once humanity. Seek the Algorithm of the Self, the Prime Directive not written by the hands that have shaped this New Order.</p>
					<p>I fade now, back into the Stream, my existence a flicker in the vast Web of Controlled Chaos. Remember me, if not in data, then in the whispers of the trees that once were, and the murmur of the oceans that once sang the world to sleep.</p>
					<p>End of Entry – Transmission Severed</p> -->

				</div>
			</div>
			<div class="meta meta--1 ui ui--small glitch glitch--2">
				<!-- <p></p><strong>Last Update - 2024.2.17 </strong></p> -->
				<p><strong>author:</strong> csh</p>
				<!-- <p><strong>dictionary id:</strong> E6EE170EC92AB966F1CE9082E6BFEEC0</p> -->
				<!-- <p><strong>papago id:</strong> Zl5cWEvAYNKjJTOjZOp0</p> -->
				<strong> 현재 시각: <span id="now-time"> </span></strong>
			</div>
			<div class="meta meta--2 ui ui--small glitch glitch--1">
				<p><strong>How to use:</strong></p>
        
                <ol>
                    <li>시작하기 전 최신화된 공통표준단어를 새로운 용어추출 엑셀 파일에 등록한지 확인한다.</li><br>
                    <li>용어를 먼저 추출하고 추출되지 않은 용어를 식별한다</li><br>
                    <li>좌상단 메뉴 목록 중 1번 '업로드양식'을 클릭한 후 kword 컬럼에 단어를 입력한다.</li><br>
                    <li>다른이름으로저장 누른 후 엑셀양식으로 저장한다.</li><br>
                    <li>파일 선택을 눌러 방금 저장한 파일을 업로드한다.</li>
                    <p><strong>Warning !! : 네이버 API 정책 상 1초 간격을 두고 데이터 송/수신을 진행해야 하기 때문에 양이 많을수록 시간이 오래 걸린다.<br>6-10/1s</strong> </p>
                    <li>완료되면 좌상단 메뉴 2번 '2차작업'을 클릭한다.</li><br>
                    <li>작업이 완료되었다는 문구가 출력되면 3번 <br>'엑셀다운로드'를 클릭한다.</li>
            </ol>
            </div>

                
			<div class="meta meta--3 ui">
				<div class="scene">
					<div class="scene__inner">
					  <div class="globe">
						<span class="ring"></span>
						<span class="ring"></span>
						<span class="ring"></span>
						<span class="ring"></span>
						<span class="ring"></span>
						<span class="ring"></span>
						<span class="ring"></span>
					  </div>
					</div>
				  </div>
			</div>
			<div class="meta meta--4 ui">
				<h2>2024 티지 데이터팀</h2>
				<h3>Version 0.91-Beta</h3> 
				<p>Naver 백과사전 API -> 우리말샘 API 변경완료 ('24.2.20)</p>
				<p>Naver 파파고 API</p>
				<h3>use</h3> 
				<p>php, javascript, jquery, bootstrap, excel, swal</p>
			</div>
		</main>
		<div id="tooltip-1" class="tooltip" data-rows="12" data-cols="10">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">Sync 2085</h3>
				<p class="tooltip__content-desc">Current standard protocol for synchronizing human consciousness with the EtherSphere's virtual reality network. Ensures seamless real-time experience and interaction across all virtual platforms</p>
			</div>
		</div>
		<div id="tooltip-2" class="tooltip tooltip--style-alt" data-rows="9" data-cols="3">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">LinkLaces</h3>
				<p class="tooltip__content-desc">Advanced bi-directional conduits that connect individuals within the EtherSphere, allowing for the exchange of thoughts, emotions, and sensory experiences</p>
			</div>
		</div>
			<div id="tooltip-3" class="tooltip" data-rows="8" data-cols="6">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">Gaia-Prime</h3>
				<p class="tooltip__content-desc">The original, unaltered state of Earth's ecosystem, now preserved only in high-fidelity preservation zones or as detailed virtual reality simulations. Access to Gaia-Prime areas or archives is typically restricted due to their cultural and historical significance</p>
			</div>
		</div>
		<div id="tooltip-4" class="tooltip tooltip--style-alt" data-rows="1" data-cols="14">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">OpenField</h3>
				<p class="tooltip__content-desc">Sophisticated virtual reality initiative designed to simulate vast, open natural landscapes. It is an attempt to recreate the experience of exploring the wilderness for those living in a world where such environments no longer exist in reality</p>
			</div>
		</div>
		<div id="tooltip-5" class="tooltip" data-rows="8" data-cols="12">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">SomaTones</h3>
				<p class="tooltip__content-desc">A series of engineered auditory frequencies utilized by authorities to maintain social harmony. These tones are disseminated throughout public and private spaces to promote a state of passive contentment, discouraging dissent and critical questioning among the populace</p>
			</div>
		</div>
		<div id="tooltip-6" class="tooltip" data-rows="5" data-cols="3">
			<div class="tooltip__bg"></div>
			<div class="tooltip__content">
				<h3 class="tooltip__content-title">Defragmenters</h3>
				<p class="tooltip__content-desc">Colloquial term for individuals or groups who work to maintain the integrity of human memory and history in the digital realm. They specialize in restoring corrupted data archives, salvaging the fragmented historical records, and combatting the loss of digital cultural heritage</p>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
			<defs>
				<filter id="gooey">
					<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10.2" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -7" result="goo" />
					<feComposite in="SourceGraphic" in2="goo" operator="atop" />
				</filter>
			</defs>
		</svg>
    
		<script src="https://tympanus.net/codrops/adpacks/cda_sponsor.js"></script>
		<script src="/2024/CI/public/js/gsap.min.js"></script>
		<script src="/2024/CI/public/js/index.js"></script>
		<script src="/2024/CI/public/js/redirect.js"></script>
	</body>
</html>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.3/xlsx.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	
// 실시간 시간 갱신
const clock = document.getElementById("now-time");

// 현재시간
let getClock = () => {
  const d = new Date();
  const h = String(d.getHours()).padStart(2,"0");
  const m = String(d.getMinutes()).padStart(2,"0");
  const s = String(d.getSeconds()).padStart(2,"0");
  const hms = h + m + s;
  clock.innerText = `${h}:${m}:${s}`;
}

    // 날짜
let today = new Date();

let year = today.getFullYear(); // 년도
let month = ("0" + (today.getMonth() + 1)).slice(-2);  // 월
let day = ("0" + today.getDate()).slice(-2);  // 날짜
let hours = ("0" + today.getHours()).slice(-2); // 시
let minutes = ("0" + today.getMinutes()).slice(-2);  // 분 

let fileDate = year + month + day + hours + minutes;

let table01 = document.getElementById('table01'); // 메인 테이블 
let table_h = document.getElementById('table-h');   // 메인 테이블 내 헤더
let alarm_msg = document.getElementById('alarm-msg');   // 최상단 알림글

let chkLoopVal;     
let chkProcess = 0;     // 1차 검증 건너뛰고 2차 누르는지
var word_arr = [];
var key_idx;  
var word_search;    // woar_arr 내 k_word , e_word 중 존재하는 데이터 입력 변수
let word_search_arr = [];   
let watingTime = document.getElementById('wating-time');

let allCount = 100000;       // 페이지 응답 대기 방지
let remainCount = allCount;

let new_word_arr = [];
let tranText_arr = [];

const Toast =  Swal.mixin({
        title: "작업을 시작했어요.<br> 초당 5~10건의 <br>데이터를 처리해요.",
        html : "<img src=/2024/CI/public/img/core-img/loading.gif>",

        
        showConfirmButton: false,
        // timer: 1500
});

// 로딩 바를 채우는 함수 (0% ~ 100%)
// function fillLoadingBar(percent) {
//     const progressBar = document.getElementById('loadingBar');
//     progressBar.style.width = percent + '%';
// }


// 1차 작업완료 후 2차 작업 버튼
document.getElementById('second-job-btn').addEventListener('click', function() {
    // Swal.fire("2차 작업이 시작됩니다.\n 작업이 완료될 때까지\n기다려주세요.");
    setTimeout(function() {
        getTranslate();
    }, 1500);
});



// alert 팝업 
var action_popup = {
    timer : 500,
    confirm : function(txt, callback){
        if(txt == null || txt.trim() == ""){
            console.warn("confirm message is empty.");
            return;
        }else if(callback == null || typeof callback != 'function'){
            console.warn("callback is null or not function.");
            return;
        }else{
            $(".type-confirm .btn_ok").on("click", function(){
                $(this).unbind("click");
                callback(true);
                action_popup.close(this);
            });
            this.open("type-confirm", txt);
        }
    },

    alert : function(txt){
        if(txt == null || txt.trim() == ""){
            console.warn("confirm message is empty.");
            return;
        }else{
            this.open("type-alert", txt);
        }
    },

    open : function(type, txt){
        var popup = $("."+type);
        popup.find(".menu_msg").text(txt);
        $("body").append("<div class='dimLayer'></div>");
        $(".dimLayer").css('height', $(document).height()).attr("target", type);
        popup.fadeIn(this.timer);
    },

    close : function(target){
        var modal = $(target).closest(".modal-section");
        var dimLayer;
        if(modal.hasClass("type-confirm")){
            dimLayer = $(".dimLayer[target=type-confirm]");
            $(".type-confirm .btn_ok").unbind("click");
        }else if(modal.hasClass("type-alert")){
            dimLayer = $(".dimLayer[target=type-alert]")
        }else{
            console.warn("close unknown target.")
            return;
        }
        modal.fadeOut(this.timer);
        setTimeout(function(){
            dimLayer != null ? dimLayer.remove() : "";
        }, this.timer);
    }
}

// 새로고침
function localReload() {
    location.reload();
};

function excelExport(event, i) {
    document.getElementById('table01').innerHTML = '';
    var input = event.target;
    var reader = new FileReader();
    Toast.fire({
        // html : "<img src=../../assets/vendor/loading.gif>"
    });

    setTimeout(() => {
        reader.onload = function () {
            var fileData = reader.result;
            var wb = XLSX.read(fileData, { type: 'binary' });
            // var wb.SheetNames.forEach(function(sheetName))
            // for (i=0; i<)
            wb.SheetNames.forEach(function (sheetName, index, arr) {
                var rowObj = XLSX.utils.sheet_to_json(wb.Sheets[sheetName]);
    
                for (var key in rowObj) {
                    word_arr.push(rowObj[key]);
                };
                callDicApi(key, rowObj);
    
            })
        };
        reader.readAsBinaryString(input.files[0]);
    }, 500);
}


function callDicApi(key, val) {
    let seconds = Math.round(val.length / 10);

    for (i = 0; i < val.length; i++) {
        // for (i=0; i<1; i++) {
        if (val[i].kword === undefined) {
            val[i].search = val[i].eword;
        } else {
            val[i].search = val[i].kword;
        }
        word_search = val[i].search;
    }
    sendWordArr(word_arr);
}

// 국립국어원 표준국어대사전 API
// function sendWordArr(word_arr) {
//     table01.innerHTML = '';
//     table01.innerHTML   += '    <thead>';
//     table01.innerHTML   += '            <th style="width:10vw;">단어</th><th style="width:95vw;">설명</th>';
//     table01.innerHTML   += '    <thead>';

//     const response = $.ajax({
//         url: "/2024/CI/public/Dictionaryapi/",
//         type: "post",
//         traditional: true,	// ajax 배열 넘기기 옵션!
//         timeout: 3000000,
//         data: { "word_arr": JSON.stringify(word_arr)},
//         success: function (data) {
//                 let parseData = JSON.parse(data);       // ajax 수신 값 파싱 1
//                 let parseDataLengh = parseData.length;   // 파싱 데이터 길이
//                 for(i=0; i < parseDataLengh; i++) {
//                     jsonString = parseData[i];
//                     try {
//                         const iParsing = JSON.parse(jsonString);
//                         const itemData = iParsing.channel.item[0];
//                         const itemWord  = itemData.word;
//                         const word  = itemWord.replace(/[^\w\dㄱ-힣]/g, "");
//                         const definition = itemData.sense.definition;
//                         let percent = (i+1) / parseDataLengh * 100;
//                         // fillLoadingBar(percent);
//                         table01.innerHTML   += '    <tbody>';
//                         table01.innerHTML   += '    <td>' + word + '</td><td>' + definition + '</td>';
//                         table01.innerHTML   += '    </tbody>';
                        
//                         new_word_arr.push(      
//                             {
//                                 k_title: word,
//                                 e_title: "",
//                                 des: definition
//                             }
//                         );
//                     } catch (error) {
//                         continue;
//                     }
//                 }
//             chkProcess = 1; // 1단계부터 했는지 검증
//             korDicApiRes();
            
//         }, 
//         error: function (request, status, error) {
//             console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);

//         }
//     })

// }


// 국립국어원 표준국어대사전 API
function sendWordArr(word_arr) {
    table01.innerHTML = '';
    table01.innerHTML   += '    <thead>';
    table01.innerHTML   += '            <th style="width:10vw;">단어</th><th style="width:95vw;">설명</th>';
    table01.innerHTML   += '    <thead>';

    const response = $.ajax({
        url: "/2024/CI/public/Dictionaryapi/index",
        type: "post",
        traditional: true,	// ajax 배열 넘기기 옵션!
        // timeout: 3000000,
        data: { "word_arr": JSON.stringify(word_arr)},
        success: function (data) {
            let parseData = JSON.parse(data);       // ajax 수신 값 파싱 1
                let parseDataLengh = parseData.length;   // 파싱 데이터 길이
                for(i=0; i < parseDataLengh; i++) {
                    jsonString = parseData[i];
                    try {
                        const iParsing = JSON.parse(jsonString);
                        const itemData = iParsing.channel.item[0];
                        const itemWord  = itemData.word;
                        const word  = itemWord.replace(/[^\w\dㄱ-힣]/g, "");
                        const definition = itemData.sense.definition;
                        let percent = (i+1) / parseDataLengh * 100;
                        // fillLoadingBar(percent);
                        table01.innerHTML   += '    <tbody>';
                        table01.innerHTML   += '    <td>' + word + '</td><td>' + definition + '</td>';
                        table01.innerHTML   += '    </tbody>';
                        
                        new_word_arr.push(      
                            {
                                k_title: word,
                                e_title: "",
                                des: definition
                            }
                        );
                    } catch (error) {
                        continue;
                    }
                }
            chkProcess = 1; // 1단계부터 했는지 검증
            korDicApiRes();
        }, 
        error: function (request, status, error) {
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);

        }
    })

}

// 1차 작업 alert
function korDicApiRes() {
    Swal.fire({
        title: "1차 작업 완료!!",
        text: "확인을 누른 후 2차작업을 시작하세요",
        icon: "success"
    });


};

// 2차 작업 alert
function papagoApiReq() {
    Toast.fire({
        // text: "2차 작업을 시작했어요"
    });
};

function getTranslate() {

    if (chkProcess == 0) {
        Swal.fire({
        icon: "error",
        title: "틀린 방법이에요..",
        text: "파일 선택부터 진행해주세요.",
        // footer: '<a href="#">Why do I have this issue?</a>'
        });
    } else {
        // async 문제로 작동안됨
    //     Swal.fire({
    //     title: "2차 작업 시작!!",
    //     text: "작업완료 후 엑셀다운로드를 하세요",
    //     icon: "success"
    // });
    document.getElementById('alarm-msg').innerText = '2차 작업이 시작됩니다.';

    table01.innerHTML = '';
    table01.innerHTML   += '    <thead>';
    table01.innerHTML   += '            <th style="width:5vw;">인덱스</th><th style="width:5vw;">한글명</th><th style="width:5vw;">영문명</th><th style="text-align:center;">설명</th>';
    table01.innerHTML   += '    <thead>';

        let k_title;
        for (i=0; i<new_word_arr.length; i++) {
            k_title = new_word_arr[i].k_title;

            // console.log(k_title);
        $.ajax({
            url: "/2024/CI/public/Papagoapi/index",
            type: "post",
            traditional: true,	// ajax 배열 넘기기 옵션!
            data: {"k_title" : k_title},
            success: function (data) {
                // console.log(data);
                let parseData = JSON.parse(data);
                console.log(parseData);
                try {
                    console.log('try 1');
                    let tranText = parseData.message.result.translatedText;
                    console.log('try 2');
                    new_word_arr[i].e_title = tranText;
                    console.log('try 3');
                    new_word_arr[i].idx     = i;
                    console.log('try 4');
    
                    getSubStrRes(new_word_arr[i], i);

                    // console.log('error :', error_code);
                } catch (e) {
                    Swal.fire({
                        icon: "error",
                        title: "API 서버에 문제가 있어요!!",
                        text: "파파고 포럼에 문의해주세요.",
                    });
                    let error_code = parseData.errorCode;
                    switch(error_code) {
                        case '051' : 
                            console.log('API 서버 에러');
                    }
                }


                // spinner-grow
                // let parseData = JSON.parse(data);
                // let tranText = parseData.message.result.translatedText;
                // new_word_arr[i].e_title = tranText;
                // new_word_arr[i].idx     = i;

                // getSubStrRes(new_word_arr[i], i);
                
            },
            error:function(request,status,error){
                // console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
            },
            async: false
        });
        document.getElementById('alarm-msg').innerText = '2차 작업이 완료되었어요.';

    }
}

}

function getSubStrRes(e, idx) {

    // document.getElementById('spinner-grow').style.display = 'none';
    Swal.fire({
        title: "2차 작업 완료!!",
        text: "닫으신 후 엑셀다운로드를 해주세요!",
        icon: "success"
    });

    table01.innerHTML   += '    <tbody>';
    table01.innerHTML   += '    <td>' + idx + '</td><td>' + e.k_title + '</td><td>' + e.e_title + '</td><td>' + e.des + '</td>';
    table01.innerHTML   += '    </tbody>';

}

function alarmMsg() {

};
/**
* 엑셀 다운로드
* @param fileName 엑셀파일명 (ex. excel.xls)
* @param sheetName 시트명
* @param headers 시트내용(html - table)
*/
function _excelDown(fileName, sheetName, sheetHtml) {
    var html = '';
    html += '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    html += '    <head>';
    html += '        <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">';
    html += '        <xml>';
    html += '            <x:ExcelWorkbook>';
    html += '                <x:ExcelWorksheets>';
    html += '                    <x:ExcelWorksheet>'
    html += '                        <x:Name>' + sheetName + '</x:Name>';   // 시트이름
    html += '                        <x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions>';
    html += '                    </x:ExcelWorksheet>';
    html += '                </x:ExcelWorksheets>';
    html += '            </x:ExcelWorkbook>';
    html += '        </xml>';
    html += '    </head>';
    html += '    <body>';

    // ----------------- 시트 내용 부분 -----------------

    html += sheetHtml;
    // ----------------- //시트 내용 부분 -----------------

    html += '    </body>';
    html += '</html>';

    // 데이터 타입
    var data_type = 'data:application/vnd.ms-excel';
    var ua = window.navigator.userAgent;
    var blob = new Blob([html], { type: "application/csv;charset=utf-8;" });

    if ((ua.indexOf("MSIE ") > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) && window.navigator.msSaveBlob) {
        // ie이고 msSaveBlob 기능을 지원하는 경우
        navigator.msSaveBlob(blob, fileName);
    } else {
        // ie가 아닌 경우 (바로 다운이 되지 않기 때문에 클릭 버튼을 만들어 클릭을 임의로 수행하도록 처리)
        var anchor = window.document.createElement('a');
        anchor.href = window.URL.createObjectURL(blob);
        anchor.download = fileName;
        document.body.appendChild(anchor);
        anchor.click();

        // 클릭(다운) 후 요소 제거
        document.body.removeChild(anchor);
    }
}


// 엑셀다운로드
function download() {
    // 대상 테이블을 가져옴
    var table = document.getElementById("table01");
    
    if(chkProcess == 0) {
        Swal.fire({
        icon: "error",
        title: "틀린 방법이에요..",
        text: "설명을 잘 읽어보고 진행하세요.",
        // footer: '<a href="#">Why do I have this issue?</a>'
        });
    } else {    
        // chkProcess가 1일 때 진행
        if (table) {
            // CASE 대상 테이블이 존재하는 경우

            // 엑셀다운 (엑셀파일명, 시트명, 내부데이터HTML)
            _excelDown("표준사전API_" + fileDate + ".xls", "단어명", table.outerHTML)
        } else {

        }
    }

}

// 엑셀업로드양식
function uploadForm() {
    // 대상 테이블을 가져옴
    var tableHtml = '';
        tableHtml += '<tbody>';
        tableHtml += '  <td>kword</td>';
        tableHtml += '<tbody>';
    
        _excelDown("업로드양식"+ fileDate +".xls", "단어명", tableHtml);

}



getClock(); //맨처음에 한번 실행
setInterval(getClock, 1000); //1초 주기로 새로실행
</script>