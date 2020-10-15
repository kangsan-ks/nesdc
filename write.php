<?php
    include_once 'header.php';
?>
            <div class="inner view_page write_outer">
                <?php
                    if($_GET['idx']){
                ?>
                <form action="action/action_board.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="write" name="write_type">
                    <h2>여론조사결과 등록현황 상세보기</h2>
                    <div class="view_box">
                        <ul>
                            <li>
                                <p class="view_subject">여론조사 기본</p>
                            </li>
                            <li>
                                <p class="view_subject">여론조사명칭</p>
                                <input type="text" placeholder="2020 9월 여론조사 결과" name="contents" required>
                            </li>
                            <li>
                                <p class="view_subject">조사의뢰자</p>
                                <input type="text" placeholder="조사의뢰자" name="manager_name" required>
                            </li>
                            <li>
                                <p class="view_subject">조사기관명</p>
                                <input type="text" placeholder="조사기관명" name="category" required>
                            </li>
                            <li>
                                <p class="view_subject">조사지역</p>
                                <input type="text" placeholder="조사지역" name="address" required>
                            </li>
                        </ul>
                    </div>
                    <div class="view_file">
                        <ul>
                            <li>
                                <p class="view_file_subject">등록사항</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file1" name="file1">
                                <label for="file1">파일추가</label>
                            </li>
                            <li>
                                <p class="view_file_subject">결과분석보기</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file2" name="file2">
                                <label for="file2">파일추가</label>
                            </li>
                            <li>
                                <p class="view_file_subject">질문지 보기</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file3" name="file3">
                                <label for="file3">파일추가</label>
                            </li>
                        </ul>
                    </div>
                    <div class="notice_box">
                        <p>결과분석 및 질문지 자료는 여론조사기관이 공개 지정한 최초 공표·보도 예정일시에서 24시간 후에 공개됩니다.</p>
                        <p>첨부된 전체질문지 결과분석 자료는 지적재산권 보호를 위하여 다운로드 기능이 방지되어 있습니다.</p>
                    </div>
                    <div class="write_box">
                        <input type="submit" value="등록 하기">
                        <a href="#none" onclick="javascript:history.go(-1);">등록 취소</a>
                    </div>
                </form>
                <?php } else {?>
                <form action="action/action_board.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="write" name="write_type">
                    <h2>여론조사결과 등록현황 상세보기</h2>
                    <div class="view_box">
                        <ul>
                            <li>
                                <p class="view_subject">여론조사 기본</p>
                            </li>
                            <li>
                                <p class="view_subject">여론조사명칭</p>
                                <input type="text" placeholder="2020 9월 여론조사 결과" name="contents" required>
                            </li>
                            <li>
                                <p class="view_subject">조사의뢰자</p>
                                <input type="text" placeholder="조사의뢰자" name="manager_name" required>
                            </li>
                            <li>
                                <p class="view_subject">조사기관명</p>
                                <input type="text" placeholder="조사기관명" name="category" required>
                            </li>
                            <li>
                                <p class="view_subject">조사지역</p>
                                <input type="text" placeholder="조사지역" name="address" required>
                            </li>
                        </ul>
                    </div>
                    <div class="view_file">
                        <ul>
                            <li>
                                <p class="view_file_subject">등록사항</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file1" name="file1">
                                <label for="file1">파일추가</label>
                            </li>
                            <li>
                                <p class="view_file_subject">결과분석보기</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file2" name="file2">
                                <label for="file2">파일추가</label>
                            </li>
                            <li>
                                <p class="view_file_subject">질문지 보기</p>
                                <div class="files">
                                    <span class="file_name">파일을 등록해주세요</span>
                                </div>
                                <input type="file" id="file3" name="file3">
                                <label for="file3">파일추가</label>
                            </li>
                        </ul>
                    </div>
                    <div class="notice_box">
                        <p>결과분석 및 질문지 자료는 여론조사기관이 공개 지정한 최초 공표·보도 예정일시에서 24시간 후에 공개됩니다.</p>
                        <p>첨부된 전체질문지 결과분석 자료는 지적재산권 보호를 위하여 다운로드 기능이 방지되어 있습니다.</p>
                    </div>
                    <div class="write_box">
                        <input type="submit" value="등록 하기">
                        <a href="#none" onclick="javascript:history.go(-1);">등록 취소</a>
                    </div>
                </form>
                <?php } ?>
                <script>
                    $('.view_file input[type=file]').change(function(){
                        var filename = $(this).val().split('/').pop().split('\\').pop();

                        $(this).siblings('.files').children('.file_name').text(filename);
                    });
                </script>
            </div>
        </div>
    </div>
</body>
</html>