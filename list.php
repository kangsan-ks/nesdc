<?php
    include_once 'header.php';
?>
            <div class="inner">
                <div class="notice_outer">
                    <div class="notice_box">
                        <p>
                            추석 연휴 기간(’20. 9. 30 ~ 10. 4.) 중 중앙선거여론조사심의위원회 홈페이지 서버 이전 작업으로 인하여 임시 홈페이지를 운영합니다.<br/>
                            임시 홈페이지에서는 2020년 7월 1일부터 9월 29일까지 등록되었거나 이번 추석 연휴기간에 등록되는 선거여론조사 결과만을 아래에서 확인하실 수 있습니다.
                        </p>
                    </div>
                    <div class="notice_box">
                        <p>
                            아래 여론조사 결과는  『공직선거법』 및 『선거여론조사기준』 에 따라 등록된 것으로 선거여론조사심의위원회에서 사전에 검증한 자료가 아니며, 이의신청 또는
                            모니터링 결과 법이나 기준에 위반된 사안 이 발견되면 관련 규정에 따라 처벌될 수 있음을 알려드립니다.
                        </p>
                    </div>
                    <div class="notice_box">
                        <p>
                            현재 선거여론조사 등록제의 취지를 제고하기 위해 ‘접촉률’을 공개하고 있으며, 접촉률과 응답률(협조율)을 통해 국제기준(미국여론조사협회)의 응답률을<br/>산출할 수 있습니다.
                        </p>
                        <div class="math">
                            <p><b>접촉률 X 응답률(협조율) = 국제 기준 (AAPOR) 응답률</b></p>
                        </div>
                    </div>
                </div>
                <div class="form_outer">
                    <form action="">
                        <select name="">
                            <option value="">검색어구분</option>
                            <option value="">조사기관명</option>
                            <option value="">조사의뢰자</option>
                            <option value="">여론조사 명칭</option>
                            <option value="">등록일</option>
                            <option value="">지역</option>
                        </select>
                        <input type="text" placeholder="검색어를 입력해주세요">
                        <input type="image" src="img/search_btn.png">
                    </form>
                </div>
                <div class="table_outer">
                    <table>
                        <colgroup>
                            <col width="200">
                            <col width="300">
                            <col width="515">
                            <col width="90">
                            <col width="100">
                        </colgroup>
                        
                        <tr>
                            <th>조사기관명</th>
                            <th>조사의뢰자</th>
                            <th>여론조사 명칭</th>
                            <th>등록일</th>
                            <th>지역</th>
                        </tr>
                        <?php
                            $sql = "select * from board order by idx desc";
                            $result = mysqli_query($link, $sql) or error(mysqli_error());
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?=$row['category']?></td>
                            <td class="wd315"><?=$row['manager_name']?></td>
                            <td class="wd495"><a href="view.php?idx=<?=$row['idx']?>"><?=$row['contents']?></a></td>
                            <td><?=substr($row['reg_date'],0,10)?></td>
                            <td><?=$row['address']?></td>
                        </tr>
                        <!-- <tr>
                            <td>(주)엠브레인퍼블릭</td>
                            <td class="wd315">(주)엠브레인퍼블릭,케이스탯리서치 </td>
                            <td class="wd495"><a href="#none">전국 정기(정례)조사 대통령 선거 정당지지도 정치, 사회현안 등</a></td>
                            <td>2020-09-06</td>
                            <td>전국</td>
                        </tr> -->
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <div class="bottom_layout">
                    <div class="a-pager">
                        <a href="#none" class="a-pager-prev2"><img src="img/pag_prev1.png" alt=""></a>
                        <a href="#none" class="a-pager-prev1"><img src="img/pag_prev2.png" alt=""></a>
                        <div class="a-pager-num">
                            <a href="#none" class="on">1</a>
                            <a href="#none">2</a>
                            <a href="#none">3</a>
                            <a href="#none">4</a>
                            <a href="#none">5</a>
                        </div>
                        <a href="#none" class="a-pager-next1"><img src="img/pag_next1.png" alt=""></a>
                        <a href="#none" class="a-pager-next2"><img src="img/pag_next2.png" alt=""></a>
                    </div>

                    <div class="login_write_outer">
                        <?php
                            if(isset($_SESSION['user_id'])){
                        ?>
                        <div class="session_box">
                            <p><b><?=$_SESSION['user_id']?></b>님 접속중입니다.</p>
                            <a href="logout.php">로그아웃하기</a>
                        </div>
                        <div class="login_write_box write_page"><a href="write.php">여론조사결과 등록</a></div>
                        <?php
                            } else{
                        ?>
                        <div class="login_write_box"><a href="login.php">여론조사기관 로그인</a></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>