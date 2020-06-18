<section>
    <h1 class="hidden-title">홍카페 로그인</h1>
    <div class="sub-page-content">
        <div class="sub-page-layout p100t p100b">
            <div class="sub-page-layout-header">
                <p class="title">로그인</p>
            </div>
            <div class="sub-page-layout-content">
                <div class="input-layout p30t p30b">
                    <form name="loginform" id="loginform" method="post">
                        <div class="member-input m20b">
                            <label for="login-email" class="member-label label-type-email">이메일 라벨</label>
                            <input type="text" placeholder="아이디(이메일)" class="input-type-email" name="_ac_id" id="_ac_id" >
                            <p class="fail-ment" id="msg_mb_id"></p>
                        </div>
                        <div class="member-input m20b">
                            <label for="login-password" class="member-label label-type-password">비밀번호 라벨</label>
                            <input type="password" placeholder="비밀번호" class="input-type-email" name="_ac_password" id="_ac_password" onblur="value_chk.mb_pass()">
                            <p class="fail-ment" id="msg_mb_pass"></p>
                        </div>

                        <div class="member-input m15b">
                            <button class="all-back" type="button" id="login_btn"  style="cursor:pointer;">로그인</button>
                        </div>
                        <div class="member-input">
                            <a href="<?php echo site_url($menu['join'])?>"><button class="border-back" type="button">무료 회원가입</button></a>
                        </div>
                        <div class="login-check m10t">
                            <p>
                                <input type="checkbox" name="save_id" value="y" id="save_id">
                                <label for="save_id" class="login-keep-text">로그인 유지</label>
                            </p>
                            <p class="find-pw"><a href="<?php echo site_url($menu['findinfo'])?>">아이디(이메일)/비밀번호 찾기</a></p>
                        </div>
                    </form>
                    <div class="sns-login-area m30t p30t">
                        <ul>
                            <li class="m20b">
                                <a href="javascript:;" target="_blank" class="social_oauth" rel="opener">
                                    <img src="<?=site_url()?>assets/image/pc/member/n_login.png" alt="login-btn">
                                </a>
                            </li>
                            <li class="m20b">
                                <a href="javascript:;" target="_blank" class="social_oauth" rel="opener">
                                    <img src="<?=site_url()?>assets/image/pc/member/f_login.png" alt="login-btn">
                                </a>
                            </li>
                            <li class="">
                                <a href="javascript:;" target="_blank" class="social_oauth" rel="opener">
                                    <img src="<?=site_url()?>assets/image/pc/member/k_login.png" alt="login-btn">
                                </a>
                            </li>        
                        </ul>
                    </div>
                    <div class="m10t" style="text-align:center; font-size:16px; font-weight:500">
                        <a href="javascript:;">
                            <span style="display:inline-block; margin-right:7px;">ⓘ</span>로그인이 자꾸 풀리거나 안되는 경우 〉
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>