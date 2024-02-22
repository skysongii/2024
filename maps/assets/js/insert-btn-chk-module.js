document.write('<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>');

const Toast =  Swal.mixin({
	title: "작업중이에요. 기다려주세요.",
	text: "초당 6~10건의 데이터 통신을 합니다.\n\n 오래걸려도 기다려주세요.",
	
	showConfirmButton: false,
	// timer: 1500
});



/** 모달 각 칸 id */
let chk_geocode		= document.getElementById("chk-geocode");	// 주소 정상여부 판단 - API
let si_name_val 	= document.getElementById("geocode-name");	// 모달 창 시군구 자동출력칸
let input_start		= document.getElementById("start-date");	// 모달 창 시작날짜
let input_end		= document.getElementById("end-date");		// 모달 창 종료날짜
let input_geoCode 	= document.querySelector("#search-geocode");// 모달 창주소 입력칸
let chk_insert_btn = document.getElementById("chk-insert-btn"); // 모달 창 등록 버

/** 모달 체크 */
let geocode_name_chk_val	= 0;	// 주소
let ymd_chk_val				= 0;	// 날짜
let stay_chk_val			= 0;	// 숙소이름
let visit_chk_val			= 0;	// 방문장소
let review_chk_val			= 0;	// 총평
let danger_geoCode			= document.getElementById('danger-geocode');

/** 경고 문구 */
const alrt_start_str = "시작날짜 8자리를 정확하게 입력하세요.\n예시)20240208";
const alrt_end_str = "종료날짜 8자리를 정확하게 입력하세요.\n예시)20240208";

// let t_response = fetch('./location.js').then(
// 	(res) => {
// 		// console.log(res);
// 	}
// );

// 주소 입력란 검증 - keyup
input_geoCode.addEventListener('keyup', event => callLocationChkFunc(event));

// 주소 입력란 검증 - focusout
input_geoCode.addEventListener("focusout", function() {
	console.log(`focusout`);
	locationChkFunc();
});

// 시작날짜 검증 - focusout
// chk_insert_btn.addEventListener('click', event => callYmdChkFunc(input_start.value, input_end.value));
chk_insert_btn.addEventListener('click', event => locationChkFunc());
chk_insert_btn.addEventListener('click', event => callYmdChkFunc(input_start.value, input_end.value));

/**
 * @author	: csh
 * @date	: 2024-02-05
 * callLocationChkFunc - locationChkFunc 호출함수
 */
let callLocationChkFunc = () => {
	let key = event.key || event.keyCode;

	if (key === 'Enter' || key == 13) {
		locationChkFunc();
	}
}

/**
 * @author 	: csh
 * @date	: 2024-02-02
 * locationChkFunc - 주소입력 확인 함수
 */
let locationChkFunc = () => {

	let search_geocode_val = input_geoCode.value;

	if (search_geocode_val == '') {
		danger_geoCode.style.display 	= 'block';
	} else {
		chk_geocode.style.display 		= 'none';
	}

	naver.maps.Service.geocode({
		query: search_geocode_val
	}, function(status, response) {
		if (status !== naver.maps.Service.Status.OK) {
			return alert('Something wrong!');
		}
	
		var result = response.v2, // 검색 결과의 컨테이너
			items = result.addresses; // 검색 결과의 배열
			
		// 시 가져오기
		try {
			let str 	= items[0].roadAddress;			// 주소
			let si_name = str.split(' ');				// 주소 공백 분리
			si_name		= si_name[1];					// 시군구

			let si_lng	= items[0].x;					// 경도
			let si_lat	= items[0].y;					// 위도

			// console.log(items);
			// console.log(`경도 : ${si_lng}`);
			// console.log(`위도 : ${si_lat}`);

			if(si_name == undefined || search_geocode_val.length <= 2) {
				si_name_val.value				= "";
				danger_geoCode.style.display 	= 'block';
				chk_geocode.style.display 		= 'none';
				geocode_name_chk_val	= 0;
			} else {
				si_name_val.value 	 			= si_name;
				chk_geocode.innerText			= "확인되었습니다.";
				danger_geoCode.style.display 	= 'none';
				chk_geocode.style.display 		= 'block';
				geocode_name_chk_val			= 1;
			}

			const data = {
				method: 'POST',
				headers: {
				'Content-Type': 'application/json'
				},
				body: JSON.stringify({
					si_name	: si_name,
					lng 	: si_lng,
					lat 	: si_lat,
					
				})
			};
			
			fetch('../../application/controllers/locationInsert.php', data)
			.then((res) => res.text())
			.then((data) => {
				// console.log(`data : ${data}`);
			})


		} catch (error) {	// 틀린 주소
			si_name_val.value				= "";
			danger_geoCode.style.display 	= 'block';
			chk_geocode.style.display 		= 'none';
			geocode_name_chk_val 			= 0;
		}

		console.log(`주소 확인 값 : ${geocode_name_chk_val}`)
	});
};


/**
 * @author	: csh
 * @date	: 2024-02-05
 * callYmdChkFunc - ymdChkFunc 호출함수
 */
let callYmdChkFunc = (startYmd, endYmd, si_name) => {
	ymdChkFunc(startYmd, endYmd);
};

/**
 * @author 	: csh
 * @date	: 2024-02-02
 * ymdChkFunc - 날짜 확인함수
 */
let ymdChkFunc = (startYmd, endYmd) => {
	console.log(`ymdChkFunc()`);
	console.log(`start : ${startYmd}, end : ${endYmd}`);
	const regex_date = RegExp(/^\d{4}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])$/);
	if (regex_date.test(startYmd)) {
		if (regex_date.test(endYmd) && startYmd <= endYmd) {
			ymd_chk_val = 1;
		} else {
			alert(alrt_end_str);
			input_end.value = '';
			ymd_chk_val = 0;
		}
		
	} else {
		alert(alrt_start_str);
		input_start.value = '';
		ymd_chk_val = 0;
	}

	console.log(`날짜 확인값 : ${ymd_chk_val}`);
};

/**
 * @author 	: csh
 * @date	: 2024-02-08
 * function 전달
 */
let insertVal = () => {

}

/**
 * @author	: csh
 * @date	: 2024-02-02
 * insertFnlChk - 등록 버튼 클릭 시 검증작업!
 * {
 * 	@location 	: 주소 0,1
 *  @start_date : 시작날짜 0,1
 *  @end_date	: 종료날짜 0,1
 *  @stay		: 숙소 0,1
 *  @visit		: 방문장소 0,1
 * 	@review		: 총평 0,1 
 * }
 */
const insertFnlChk = (location, start_date, end_date, stay, visit, review) => {
	if (stay == '') stay = '당일치기';
	if (visit == '') visit = '';
	if (review == '') review = '평균';

	console.log(stay, visit, review);
}





		
/**--------------------------------------------------------------------------------------- */