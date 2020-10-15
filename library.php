<?php
	// 페이지 리스트 출력
	function print_pagelist($page, $total, $page_set, $block_set, $params) {

		$total_page = ceil ($total / $page_set); // 총페이지수(올림함수)
		$total_block = ceil ($total_page / $block_set); // 총블럭수(올림함수)
		
		$block = ceil ($page / $block_set); // 현재블럭(올림함수)
		 
		// 페이지번호 & 블럭 설정
		$first_page = (($block - 1) * $block_set) + 1; // 첫번째 페이지번호
		$last_page = min ($total_page, $block * $block_set); // 마지막 페이지번호
		 
		$prev_page = $page - 1; // 이전페이지
		$next_page = $page + 1; // 다음페이지
		 
		$prev_block = $block - 1; // 이전블럭
		$next_block = $block + 1; // 다음블럭
		 
		// 이전블럭을 블럭의 마지막으로 하려면...
		$prev_block_page = $prev_block * $block_set; // 이전블럭 페이지번호

		if($prev_block_page <= 0) $prev_block_page = 1;

		// 이전블럭을 블럭의 첫페이지로 하려면...
		//$prev_block_page = $prev_block * $block_set - ($block_set - 1);
		$next_block_page = $next_block * $block_set - ($block_set - 1); // 다음블럭 페이지번호

		if($next_block_page <= 0) $next_block_page = 1;
		if($next_block_page > $total_page) $next_block_page = $total_page;
?>                    
                    <div class="a-pager">
                        <a href="<?=$_SERVER['PHP_SELF']?>?page=1&<?=$params?>" class="a-pager-prev2"><img src="img/pag_prev1.png" alt=""></a>
						<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$prev_block_page?>&<?=$params?>" class="a-pager-prev1"><img src="img/pag_prev2.png" alt=""></a>
						<div class="a-pager-num">
							<?php for ($i=$first_page; $i<=$last_page; $i++) { ?>
							<a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$i?>&<?=$params?>" class="<?php if($i==$page){ ?>on<?php } ?>"><?=$i?></a>
							<?php } ?>
						</div>
                        <a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$next_block_page?>&<?=$params?>" class="a-pager-next1"><img src="img/pag_next1.png" alt=""></a>
                        <a href="<?=$_SERVER['PHP_SELF']?>?page=<?=$total_page?>&<?=$params?>" class="a-pager-next2"><img src="img/pag_next1.png" alt=""></a>
					</div>
<?php
	}
?>
