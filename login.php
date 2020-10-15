<?php
    include_once 'header.php';
?>
            <div class="inner">
                <div class="login_outer">
                    <form action="action/login.php" method="POST">
                        <p>발급받은 계정을 입력해주세요</p>
                        <div class="flex_box">
                            <div class="input_box">
                                <input type="text" placeholder="아이디" name="id">
                                <input type="password" placeholder="패스워드" name="pw">
                            </div>
                            <div class="login_box">
                                <input type="submit" value="로그인">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>