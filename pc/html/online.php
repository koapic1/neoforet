<?php include("../include/header.html"); ?>
<div id="subContentsWrap">
    <div id="subContents">
        <div id="contents">
            <div class="breadCrumb">
                <ul>
                    <li>
                        <a href=""><span class="material-icons"> home </span></a>
                    </li>
                    <li>
                        <a href="">고객지원</a>
                    </li>
                    <li>
                        <a href="">샘플신청</a>
                    </li>
                </ul>
            </div>
            <h2 class="subTitle">고객 지원</h2>
            <nav id="lnb">
                <h3 class="hidden">local navigation bar</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li class="on"><a href="">온라인 문의</a></li>
                    <li><a href="contact.html">담당자 연락처</a></li>
                    <li><a href="">제품 카탈로그</a></li>
                    <li><a href="sample.html">샘플신청</a></li>
                </ul>
            </nav>
            <div class="boardBox">
                <div class="info">
                    <p>문의 내용 본문에 개인 정보를 기재하시는 경우, 답변 완료 후 임의로 삭제될 수 있사오니 개인 정보 기재는 삼가주세요. <br>
                    온라인 문의는 1~2일 내로 답변 드리겠습니다.</p>
                    <p><span class="require">*</span> 항목은 필수 입력항목입니다.</p>
                </div>
                <table class="board write">
                    <colgroup>
                        <col style="width: 10%;">
                        <col style="width: 40%;">
                        <col style="width: 10%;">
                        <col style="width: 40%;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">이름<span class="require">*</span></th>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <th scope="row">휴대전화<span class="require">*</span></th>
                            <td><input type="text" name="" id=""></td>
                            <th scope="row" class="even">이메일<span class="require">*</span></th>
                            <td><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <th scope="row">문의분야<span class="require">*</span></th>
                            <td colspan="3" class="harf">
                                <select name="" id="">
                                    <option value="">제품문의</option>
                                    <option value="">구매문의</option>
                                    <option value="">기타문의</option>
                                    <option value="">시험성적서 및 인증서</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">제목<span class="require">*</span></th>
                            <td colspan="3"><input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <th scope="row" class="fond">내용<span class="require">*</span></th>
                            <td colspan="3"><textarea name="" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row">첨부파일</th>
                            <td colspan="3"><input type="file" name="" id=""></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <div class="agreeBox">
                    <div class="agree">
                        <div class="show">
                            <label class="checkbox"><input type="checkbox" name="" id=""><span class="label">개인정보 수집에 동의합니다.</span></label>
                            <button>전문보기</button>
                        </div>
                        <div>
                            <label class="checkbox"><input type="checkbox" name="" id=""><span class="label">만 14세 이상입니다.</span></label>
                        </div>
                    </div>
                    <button type="submit">확인</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../include/footer.html"); ?>