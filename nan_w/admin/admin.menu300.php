<?php
$menu['menu300'] = array(
    array('300000', '게시판관리', '' . G5_ADMIN_URL . '/board_list.php', 'board'),
    array('300100', '게시판관리', '' . G5_ADMIN_URL . '/board_list.php', 'bbs_board'),
    array('300200', '게시판그룹관리', '' . G5_ADMIN_URL . '/boardgroup_list.php', 'bbs_group'),
    array('300300', '인기검색어관리', '' . G5_ADMIN_URL . '/popular_list.php', 'bbs_poplist', 1),
    array('300400', '인기검색어순위', '' . G5_ADMIN_URL . '/popular_rank.php', 'bbs_poprank', 1),
    array('300401', '컨텐츠 관리', G5_ADMIN_URL . '/content_list.php', 'bbs_content'),
    array('300402', '신고 댓글 및 컨텐츠', G5_ADMIN_URL . '/ported_comment_list.php', 'bbs_comment'),
    array('300403', '신고 회원', G5_ADMIN_URL . '/ported_member_list.php', 'bbs_member'),
    // array("300301", "신고 게시글 관리", G5_ADMIN_URL . '/report_list.php?mode=$report[count]'),
    array('300500', '1:1문의설정', '' . G5_ADMIN_URL . '/qa_config.php', 'qa'),
    array('300600', '내용관리', G5_ADMIN_URL . '/contentlist.php', 'scf_contents', 1),
    array('300700', 'FAQ관리', G5_ADMIN_URL . '/faqmasterlist.php', 'scf_faq', 1),
    array('300820', '글,댓글 현황', G5_ADMIN_URL . '/write_count.php', 'scf_write_count'),
    array('300900', '공지사항', G5_ADMIN_URL . '/write_notice.php', 'board_notice'),
);
