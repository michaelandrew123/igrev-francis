<?
$msgDict = array();
$msgDict['S0001'] = "정상 처리 되었습니다.";
$msgDict['F0001'] = "서버 오류가 발생 하였습니다.";
$msgDict['F0002'] = "정보 저장에 실패 하였습니다.";
$msgDict['F0003'] = "게임 정보 저장에 실패 하였습니다.\n올바른 키 정보가 아닙니다.";
$msgDict['F0004'] = "게임 정보 저장에 실패 하였습니다.\n키 정보가 없습니다.";
$msgDict['F0005'] = "게임 정보 저장에 실패 하였습니다.\n요청 유형 정보가 없습니다.";
$msgDict['F0100'] = "요청 유형 정보가 없습니다.";
$msgDict['F1000'] = "로그인이 필요 합니다.";
$msgDict['F9998'] = "메세지가 잘못 선택 되었습니다."; //jsonResp function 호출시 resultCd 값 오류
$msgDict['F9999'] = "메세지가 잘못 선택 되었습니다.";

function getMsg($msgCd){
    global $msgDict;
    $msgCd = $msgCd ? $msgCd : "F9999";
    return $msgDict[$msgCd];
}