<?php
    include_once 'header.php';
?>
            <div class="inner view_page">
                <h2>여론조사결과 등록현황 상세보기</h2>
                <div class="view_box">
                    <ul>
                        <?php
                            $idx = $_GET['idx'];
                            $sql = "select * from board where idx = $idx";
                            $result = mysqli_query($link, $sql) or error(mysqli_error());
                            $row = mysqli_fetch_array($result);
                        ?>
                        <li>
                            <p class="view_subject">여론조사 기본</p>
                        </li>
                        <li>
                            <p class="view_subject">여론조사명칭</p>
                            <p class="view_contents">2020 9월 여론조사 결과</p>
                        </li>
                        <li>
                            <p class="view_subject">조사의뢰자</p>
                            <p class="view_contents">조사의뢰자</p>
                        </li>
                        <li>
                            <p class="view_subject">조사기관명</p>
                            <p class="view_contents">조사기관명</p>
                        </li>
                        <li>
                            <p class="view_subject">조사지역</p>
                            <p class="view_contents">조사지역</p>
                        </li>
                        <li>
                            <p class="view_subject">결과 등록일</p>
                            <p class="view_contents">결과 등록일</p>
                        </li>
                        <li>
                            <p class="view_subject">최종 공표·보도 예정일시</p>
                            <p class="view_contents">최종 공표·보도 예정일시</p>
                        </li>
                    </ul>
                </div>
                <div class="view_box">
                    <ul>
                        <li>
                            <p class="view_subject">등록사항</p>
                        </li>
                        <li>
                            <div class="view_pdf">
                                <iframe src="http://docs.google.com/gview?url=http://localhost/files/<?=$row['real_file_name']?>&embedded=true" frameborder="0"></iframe>
                            </div>
                            <script>
                                var file1 = '<?php echo $row['real_file_name']?>';
                                var file2 = '<?php echo $row['real_file_name2']?>';
                                var file3 = '<?php echo $row['real_file_name3']?>';
                            </script>
                        </li>
                    </ul>
                </div>
                <div class="view_file">
                    <ul>
                        <li>
                            <p class="view_file_subject">결과분석보기</p>
                            <div class="files">
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                            </div>
                            <p class="explan">※ 아이콘을 클릭하면 해당 파일을 보실 수 있습니다.</p>
                        </li>
                        <li>
                            <p class="view_file_subject">질문지 보기</p>
                            <div class="files">
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                                <span data-name><img src="img/file_ico.png" alt="file"></span>
                            </div>
                            <p class="explan">※ 아이콘을 클릭하면 해당 파일을 보실 수 있습니다.</p>
                        </li>
                    </ul>
                </div>
                <div class="notice_box">
                    <p>결과분석 및 질문지 자료는 여론조사기관이 공개 지정한 최초 공표·보도 예정일시에서 24시간 후에 공개됩니다.</p>
                    <p>첨부된 전체질문지 결과분석 자료는 지적재산권 보호를 위하여 다운로드 기능이 방지되어 있습니다.</p>
                </div>
                <div class="write_box">
                    <?php
                        //if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['writer'] || $_SESSION['user_id'] == "최고 관리자"){
                        if(isset($_SESSION['user_id'])){
                            if($_SESSION['user_id'] == $row['writer'] || $_SESSION['user_id'] == "최고 관리자"){
                    ?>
                        <a href="write.php?idx=<?=$row['idx']?>">등록 수정</a>
                        <a href="delect.html">등록 삭제</a>
                    <?php } } else { ?>
                        <a href="write.html">뒤로가기</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>