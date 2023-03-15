// 모달 열기
function ModalOn() {
    document.querySelector('.modal_wrap').style.display = 'block';
    document.querySelector('.modal_background').style.display = 'block';
}

// 모달 끄기
function modalClose() {
    document.querySelector('.modal_wrap').style.display = 'none';
    document.querySelector('.modal_background').style.display = 'none';
}


document.querySelector('.modal_close').addEventListener('click', modalClose);