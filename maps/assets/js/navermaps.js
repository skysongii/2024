import { kor_location } from "./location.js";

/** 마커 배열 선언 */
let markers 			= new Array();
let infowindows 		= new Array();
let location_lat_arr	= [];
let location_lng_arr	= [];

/** 좌표 변수 선언 */
let lat, lng; // 위도, 경도

// kor_location length
let latlng_len = kor_location.length;

//지도를 삽입할 HTML 요소 또는 HTML 요소의 id를 지정합니다.
const mapDiv = document.getElementById("map"); // 'map'으로 선언해도 동일

//지도 생성 시에 옵션을 지정할 수 있습니다.
const map = new naver.maps.Map("map", {
	center: new naver.maps.LatLng(35.4799, 127.2892), //지도의 초기 중심 좌표
	zoom: 7, //지도의 초기 줌 레벨
	minZoom: 7, //지도의 최소 줌 레벨
	zoomControl: true, //줌 컨트롤의 표시 여부
	zoomControlOptions: {
		//줌 컨트롤의 옵션
		position: naver.maps.Position.TOP_RIGHT
	},
	mapTypeControl: true

});

map.setOptions("disableKineticPan", false); // 관성 드래깅 켜기
map.setOptions("tileTransition", true); // 타일 fadeIn 효과 켜기

var move_value = 0;

// 줌 이벤트
naver.maps.Event.addListener(map, "zoom_changed", function(zoom) {

});

let mapBounds = map.getBounds();
var marker, position;
// 현재 보이는 지도의 경계
let ne_lat = mapBounds._ne._lat; // 북동쪽 위도
let ne_lng = mapBounds._ne._lng; // 북동쪽 경도
let sw_lat = mapBounds._sw._lat; // 남서쪽 위도
let sw_lng = mapBounds._sw._lng; // 남서쪽 경도

console.log(ne_lat);

// 마커 좌표 (JSON 길이만큼 출력)
for(i=0; i < kor_location.length; i++) {
	let location_lat = kor_location[i][0].lat;
	let location_lng = kor_location[i][0].lng;
	
	let marker = new naver.maps.Marker({
		position: new naver.maps.LatLng(location_lat, location_lng),
		map: map,
		title : kor_location[i][0].name,
	});
	
	let contentString = '<div id="info-content">'+ kor_location[i][0].name+'</div>';
	
	// 추가적인 속성
	let infowindow = new naver.maps.InfoWindow({
		content			: contentString,
		start_period	: kor_location[i][0].start_period,
		end_period		: kor_location[i][0].end_period,
		place			: kor_location[i][0].place,
		anchorSkew		: true
	});
	
	markers.push(marker);
	infowindows.push(infowindow);
}
	
/**
 * @author  : csh
 * @date	: 2024-1-5
 *  마커 클릭 핸들러 깃 테스트
 */

let getClickHandler = (seq) => {
	let marker = markers[seq];
	let infowindow = infowindows[seq];

	// 지역명
	let title_name 		= infowindow.wrapper.innerText;
	// 시작일
 	let start_period	= infowindow.start_period;
	// 종료일
	let end_period		= infowindow.end_period;
	// 시작 ~ 종료
	let period			= start_period + ' ~ ' + end_period;
	// 가본 장소
	let visit			= infowindow.place.visit;
	// 숙소
	let stay			= infowindow.place.stay;

	naver.maps.Event.addListener(marker, "click", function(e) {
		let location_explain 	= document.getElementById("marker-explain");
		let location_lead		= document.getElementById("lead");
		let location_name 		= document.getElementById("location-name");
		let location_period 	= document.getElementById("location-period");
		let lead_place_q 		= document.getElementById("lead-place-q");
		let lead_place_a 		= document.getElementById("lead-place-a");
		let lead_stay_q 		= document.getElementById("lead-stay-q");
		let lead_stay_a 		= document.getElementById("lead-stay-a");

		let con_show			= document.getElementById("content-update");

		if (infowindow.getMap()) {
			infowindow.close();			// 클릭 시 정보창 닫음
			
			// 마커 재클릭시 정보 초기화
			location_explain.innerText	= "지도에서 궁금한 마커를 클릭";
			location_name.innerText		= "대한민국";
			location_period.innerText	= "기간";
			lead_place_q.innerText		= "";
			lead_place_a.innerText		= "";
			con_show.style.display 		= "none";
		} else {
			infowindow.open(map, marker); // 클릭시 정보창 출력
			console.log(infowindow.getMap());
			// 마커 클릭 시 우측 글 변환
			location_explain.innerText	= "대한민국";
			location_name.innerText		= title_name;
			location_period.innerText	= period;
			lead_place_q.innerText		= "가본곳 : ";
			lead_place_a.innerText		= visit;
			con_show.style.display 		= "block";
		}
	});
}

for (var i=0, ii=markers.length; i<ii; i++) {
	naver.maps.Event.addListener(markers[i], 'click', getClickHandler(i)); // 클릭한 마커 핸들러
}

// 지도 이동 이벤트
naver.maps.Event.addListener(map, 'idle', function() {
	if (move_value == 0) {
		updateMarkers(map, markers); // 지도 이동시 updateMarkers 실행
	} else {

	}
})


/**
 * @author	: csh
 * @date	: 2024-1-21
 * @param {} map 
 * @param {*} markers 
 * @param {*} move_value 
 * 지도 이동 시 이벤트
 */
function updateMarkers(map, markers) {
    let mapBounds = map.getBounds();
	let position, marker;

	// 좌표 경계까지만 마커 보임 및 숨김
	for (var i = 0; i < markers.length; i++) {
		marker = markers[i]
		position = marker.getPosition();
		
		if (mapBounds.hasLatLng(position)) {
			showMarker(map, marker);
		} else {
			hideMarker(map, marker);
		}
	}
}
	
function showMarker(map, marker) {
	if (marker.getMap()) return;
}

function hideMarker(map, marker) {
	if (!marker.getMap()) return;
}

/**--------------------------------------------------------------------------------------- */