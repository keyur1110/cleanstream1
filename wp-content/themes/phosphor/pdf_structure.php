<?php
require_once('tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('dejavusans', '', 12);

$pdf->AddPage();
$html = '
<div>DATED:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2015</div>
<hr>
<p style="text-align: center;"><strong><u>BETWEEN</u></strong></p>
<p style="text-align: center;"><strong>'.$a.'</strong></p>
<p style="text-align: center;"><strong><u>AND</u></strong></p>
<p style="text-align: center;"><strong>'.$b.'</strong></p>
<p style="text-align: center;"><strong>'.$acn.' ?</strong></p>
<p style="text-align: center;"><strong>'.$c.' TRUST</strong></p>
<p style="text-align: center;"><strong>DISCRETIONARY TRUST DEED</strong></p>
<p style="text-align: center;"></p>
<p style="text-align: center;">Prepared by:</p>
<p style="text-align:left;"><img src="tcpdf/1.png" border="0" align="left"/></p>
<p style="text-align: center;"></p>
<p style="text-align: center;">Level 1 "Wharf Central"</p>
<p style="text-align: center;">Suite 19/75-77 Wharf Street</p>
<p style="text-align: center;">Tweed Heads NSW 2485</p>
<p style="text-align: center;">P: 07 5599 1996 : F: 07 5599 3635</p>
<p style="text-align: center;">E: office@bml.net.au</p>
<p style="text-align: center;">for</p>
<p style="text-align:center;"><img src="tcpdf/2.png" border="0" align="middle"/></p>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();
$html = '
<p><b><u>THIS DEED OF SETTLEMENT</u></b> is made on the day mentioned in the first part of schedule one hereto (&quot;the schedule&quot;)</p>

<p><b><u>BETWEEN</u></b> the person or company named and described in the second part of schedule one as the settlor (&quot;the settlor&quot;) of the one part</p>

<p><b><u>AND</u></b> the person, persons or company named and described in the third part of schedule one as the trustee (&quot;the trustee&quot;) of the other part.</p>

<p><b><u>WHEREAS</u></b></p>

<p>(A) The settlor is desirous of making provision for the beneficiaries hereinafter described in the manner hereinafter set forth</p>

<p>(B) For the purpose of giving effect to that desire the settlor upon the execution hereof settles upon the trustee the sum of money or other property described in the fourth part of schedule one (&quot;the settled property&quot;)</p>

<p>(C) The trustee has consented to become the trustee hereof upon the trusts and with the powers and subject to the provisions hereinafter expressed.</p>

<p><b><u>NOW WITNESS</u></b> that the settlor declares and directs that the trustee shall and the trustee declares that it does hold and will hold the settled property and any additional property real or personal paid or transferred to or otherwise vested in the trustee for the purposes of this deed and the investments and property from time to time representing the same or any part or parts thereof and the income thereof (collectively, &quot;the trust fund&quot;) upon the trusts and with and subject to the powers and provisions hereinafter expressed namely:-</p>

<p><u>DEFINITIONS AND INTERPRETATION</u></p>

<p>1. In this deed except where the context otherwise requires the following terms shall have the following meanings:-</p>

<p>(a) &quot;<b>trustee</b>&quot; means the person persons and/or company named in the third part of schedule one or any other trustee or trustees hereof for the time being</p>

<p>(b) &quot;<b>issue</b>&quot; means children, grandchildren, great-grandchildren and great-great-grandchildren</p>

<p>(c) &quot;<b>vesting day</b>&quot; means the first to occur of the following dates namely:-</p>

<p>(i) the day specified in the fifth part of schedule one as the vesting day</p>

<p>(ii) such other date as may be fixed by the trustee as the vesting day whether by deed or written or oral declaration recorded in the minutes of the trustee</p>

<p>(d) &quot;<b>primary beneficiaries</b>&quot; means and includes</p>

<p>(i) the persons whose names appear or who fall within the classes listed in the sixth part of schedule one hereto as specified beneficiaries</p>

<p>(ii) any company which the trustee may nominate at any time and from time to time by deed or written or oral declaration recorded in the minutes of the trustee, incorporated in any country throughout the world at least one share in which is owned by any one or more of the persons listed as specified beneficiaries in schedule one or by the trustee upon trusts under which any one or more of the specified beneficiaries has any interest whether absolute or contingent</p>

<p>(iii) the trustee (in his capacity as such trustee) of any trusts which the trustee may nominate at any time and from time to time by deed or written or oral declaration recorded in the minutes of the trustee under which any one or more of the specified beneficiaries has an interest whether absolute or contingent provided that any such interest shall vest within the perpetuity period applicable hereto</p>

<p>(iv) any additional persons, corporations, charities, incorporated or unincorporated associations and trustees of trusts (conforming to the perpetuity period applicable hereto) as are nominated by the trustee at any time and from time to time by deed or written or oral declaration recorded in the minutes of the trustee.</p>

<p>PROVIDED HOWEVER that primary beneficiaries shall not include any person or company specifically excluded from benefit pursuant to any of the provisions of this deed.</p>

<p>(e) &quot;<b>secondary beneficiaries</b>&quot; means and includes the person corporation association or charity (if any) listed in the seventh part of schedule one as secondary beneficiaries</p>

<p>(f) &quot;<b>residuary beneficiaries</b>&quot; means the person or persons whose names appear or who fall within the class listed in the eighth part of schedule one hereto as residuary beneficiaries</p>

<p>(g) &quot;<b>beneficiaries</b>&quot; means the primary beneficiaries, secondary beneficiaries and the residuary beneficiaries</p>

<p>(h) &quot;<b>principal</b>&quot;, &ldquo;<b>first principal</b>&rdquo; and &ldquo;<b>successor principal</b>&rdquo; means the persons or corporations listed in the ninth part of schedule one as such.</p>

<p>(i) &quot;<b>set aside&quot; in relation to a beneficiary includes placing sums to the credit of such beneficiary in the books of the trust fund</p>

<p>(j) words and expressions conferring discretions on the trustee shall give the trustee the widest and most absolute and unexaminable discretion including the power to prefer one or other beneficiary to the total exclusion of any other or others of them</p>

<p>(k) &quot;<b>this deed</b>&quot; means this deed of settlement including all variations from time to time introduced by any deed executed by the trustee in accordance with the provisions of this deed</p>

<p>(l) &quot;<b>accounting period</b>&quot; means each period of twelve (12) months ending on the 30th day of June in each year PROVIDED first that the period commencing on the date hereof and ending on the 30th day of June next shall be an accounting period AND secondly the period commencing on the first day of July prior to the vesting day and ending on the vesting day shall be an accounting period, AND thirdly any period of time selected by the trustee shall be an accounting period</p>

<p>(m) &quot;<b>income</b>&quot; includes net income of the trust as defined in section 95 of the Act (as defined in this sub-clause) and any amounts derived by the trustee which are or in the opinion of the trustee may be assessable to income tax under the Income Tax Assessment Act 1936 and or the Income Tax Assessment act 1997 (the Act) which are specified by the trustee to be income in the accounts of the trust</p>

<p>(n) the name of the settlement hereby created is set out in the tenth part of schedule one</p>

<p>(o) the perpetuity period in relation to all dispositions made by or under this deed shall be the period of 80 years from the date hereof</p>

<p>(p) words importing the singular shall mean and include the plural and vice versa, any gender shall mean and include all other genders, references to persons shall include corporations and other entities recognised by law</p>

<p>(q) titles, captions and contents lists herein used are for convenience only and shall not be deemed a part of this deed.</p>

<p><u>INCOME</u></p>

<p>2. (1) The trustee may in each accounting period until the vesting day pay apply or set aside the whole or any part of the net income of the trust fund of such accounting period to or for the benefit of all or such one or more exclusive of the others or other of the beneficiaries living or in existence at the time of determination as the trustee in its absolute discretion may by deed or written or oral declaration recorded in the minutes of the trustee determine PROVIDED THAT:</p>

<p>(a) any such determination shall be conditional upon the income the subject thereof in fact proving to exist at the end of the accounting period, and</p>

<p>(b) in the event of the amount in respect of which determination has been made exceeding the net income of the trust fund the trustee shall be deemed to have supplied the excess as capital of the trust fund in accordance with cl 5 hereof</p>

<p>(2) In respect of any income of the trust fund not paid applied or set aside by the trustee pursuant to the provisions of sub-clause (1) hereof the trustee may in its absolute discretion by oral or written declaration recorded in the minutes of the trustee insofar as the law may allow stand possessed of such income and may accumulate such income throughout the fiscal year of receipt thereof and at the expiration of such year may convert the same to capital and the same shall thereupon become capital and be part of the trust fund</p>

<p>(3) In respect of any income of the trust fund not applied paid converted or accumulated by the trustee pursuant to the provisions of sub-clause (1) or</p>

<p>(2) hereof the trustee shall stand possessed of such income upon trust for the primary beneficiaries and if more than one in equal shares PROVIDED THAT the issue (if any) living at the end of the relevant accounting period of any of the primary beneficiaries dying before such end shall take as tenants-in-common calculated per stirpes the share of any income to which the said deceased person would have been entitled if he or she had survived PROVIDED THAT in the event of there being no primary beneficiaries or their issue to take under the foregoing provisions then for the secondary beneficiaries and if more than one in equal shares.</p>

<p>(4) The trustee as it thinks fit may treat as income of the trust fund any receipt profit or gain which is assessable income for the purposes of the Act and the trustee may if it so chooses distinguish between income of the different types or characters and may deal with one type or character of income in a different manner from that of any other type or character for all purposes of this present clause 2.</p>

<p>(5) The payment application or setting aside of any part of the income of the trust estate to or for the benefit of any beneficiary may be effected by a resolution of the trustee evidenced by deed or by written or oral declaration recorded in the minutes of the trustee that income of a specific type or character or a sum out of or portion of the net income (as defined in S.95 of the Act) of the trust fund for the accounting period be allocated to such beneficiary or otherwise dealt with for the benefit of such beneficiary. Any resolution of the trustee allocating income as hereinbefore provided shall be irrevocable and the income of the trust fund shall be dealt with as required by such resolution.</p>

<p>(6) In making determinations under this clause (2) the trustee: (i) must do so in accordance with the rules set out in Schedule Two;</p>

<p>(ii) must do so at or before midnight on 30 June each year or such later dates or times allowed by the Commissioner of Taxation under the Act;</p>

<p>(iii) can exclude any beneficiary and can decide to set aside, pay or apply income in any amount, between any or all beneficiaries in any manner the trustee decides.</p>

<p><u>CREDITING BENEFICIARIES</u></p>

<p>3. Any amount placed to the credit of any beneficiary in the books of account of the trust fund shall thenceforth be held by the trustee in trust for such beneficiary absolutely with power to the trustee pending payment over thereof to such person to invest or apply or deal with such fund or any resulting income therefrom or any part thereof in the manner hereinafter provided for the investment of the trust fund.</p>

<p><u>CAPITAL</u></p>

<p>4. On the vesting day the trustee shall stand possessed of the trust fund UPON TRUST for all or such one or more of the primary beneficiaries as the trustee may by deed or by written or oral declaration recorded in the minutes of the trustee determine and if more than one in such shares as the trustee may by deed or by such declaration declare but if on the vesting day the trustee has not made such a determination and declaration then UPON TRUST for the residuary beneficiaries and if more than one in equal shares PROVIDED THAT in the event of any of the residuary beneficiaries dying before the vesting day and leaving issue surviving them then such issue shall upon attaining the age of twenty one (21) years have the share to which the said deceased person would have been entitled if he or she had been alive on the vesting day there be not living any residuary beneficiaries or issue of the residuary beneficiaries then upon trust for the secondary beneficiaries and if more than one in equal shares.</p>

<p><u>POWER OF ADVANCEMENT OF CAPITAL</u></p>

<p>5. The trustee may from time to time pay apply or set aside from the trust fund any capital money not otherwise disposed of but including accumulated income not exceeding 90 per cent of the value of the trust fund for the maintenance, education, advancement or benefit of the beneficiaries or any of them as the trustee thinks fit.</p>

<p><u>PAYMENT TO GUARDIANS</u></p>

<p>6. Any income or capital of the trust fund to be paid applied or set aside by the trustee under the provisions of this deed may be paid or advanced by the trustee to the parent or guardian or any of the beneficiaries for whom such income or capital is to be applied if such beneficiary is a minor and the trustee shall not be responsible to see to the application of any such moneys.</p>

<p><u>SCOPE OF TRUSTEES DISCRETION</u></p>

<p>7. Every discretion vested in the trustee shall be absolute and uncontrolled and every power and authority vested in it shall be exercisable at its absolute and uncontrolled discretion.</p>

<p><u>EXERCISE OF TRUSTEES DISCRETION</u></p>

<p>8. At all times when exercising discretion vested in the trustee under the provisions of this deed as to the application of income of the trust fund and the distribution of capital thereof among the beneficiaries the trustee shall have regard to but shall not be bound by the wishes of first, the first principal during his life then second, the successor principal during his life, then third, the person if any nominated by his will and in the event of the death of the successor principal without such nomination having been made then fourth, his executors or administrators as may from time to time be advised to the trustee.</p>

<p><u>PAYMENT TO CREDITORS</u></p>

<p>9. Whenever under any provision hereof the trustee may make any payment to any beneficiary the trustee may in lieu thereof make such payment to any creditor of that person prepared to accept the payment in pro tanto discharge of that persons indebtedness or to any person who will accept the sum in pro tanto satisfaction of any obligation of that person by way of maintenance or order to settle property ordered or made by any court of competent jurisdiction.</p>

<p><u>ALTERNATES</u></p>

<p>10. A trustee (and each of the trustees if there be more than one with the consent of the other or others) may appoint any person to be an alternate trustee in its place but so that any such appointment shall have effect during the period only that such trustee may be absent from Australia or its Territories and the trustee may by power under its hand alter or revoke such appointment as alternate trustee.</p>

<p><u>DIRECTORS FEES ETC</u></p>

<p>11. Any trustee for the time being hereof who shall be or become a director of or who shall at any time hold any remunerated office in relation to any company of which, or of any other company or companies controlling which, any shares or stock carrying any voting rights are for the time being comprised in the trust fund, shall be entitled to receive and retain for his her or its own use all remuneration and other benefits received by such trustee from or through any such company, and shall not be liable to account therefore whether or not any such voting rights may have been used either by voting or by refraining from voting for the purpose of enabling such trustee to obtain or retain such directorship or other remunerated office.</p>

<p><u>LIABILITY OF TRUSTEE</u></p>

<p>12. Any trustee purporting to act in the execution of this trust and the powers and discretions hereof shall be entitled to be fully indemnified out of the assets of the trust and shall not be liable for loss not attributable to the dishonesty of the trustee or of its servants or agents or to the wilful commission or omission by the trustee or its servants or agents of any act known to be a breach of trust, such indemnity as aforesaid to operate in favour of the trustee notwithstanding any such breach of trust has not previously been made good.</p>

<p><u>RETIREMENT OF TRUSTEE</u></p>

<p>13. (1) the trustee may at any time resign from the office of trustee by giving not less than two (2) months notice in writing (which may be withdrawn by the trustee) addressed to the person or persons in whom the power of appointing a new trustee or new trustees of this settlement is then vested.</p>

<p>(2) the trustee shall on retirement vest the trust fund or cause it to be vested in the new trustee appointed in accordance with this deed and shall deliver to such new trustee all books documents records and other property whatsoever relating to the trust fund.</p>

<p><u>APPOINTMENT OF NEW TRUSTEE</u></p>

<p>14. The principal may at any time by notice in writing to the trustee remove from office any or all of the trustees or trustee for the time being of this deed and may by deed appoint a new trustee in its or their place to be the trustee hereof and such new</p>

<p>trustee may be any person (other than the principal himself or herself) or a company resident in any country throughout the world. A facsimile message purporting to be successfully sent by or on behalf of the principal to the usual or last known place of business of the trustee will be a sufficient notice in writing for the purposes of this clause and shall take effect as soon as the same is dispatched by or on behalf of the principal. Notwithstanding the provisions of this clause the trustee shall not be liable for any act, matter or thing done by it pursuant to this deed prior to the actual receipt by it of the notice referred to in this clause. The powers conferred upon the principal by this clause may be exercised by the principal himself or herself or by any other person (hereinafter referred to as &quot;a successor&quot;) who is specifically so authorised to exercise such powers by deed, Will or memorandum in writing executed by the principal or a successor. In the event of the death of the principal without a successor having been appointed the powers (including the power to appoint a successor) conferred upon the principal by this clause may be exercised by the legal personal representatives of the principal.</p>

<p><u>TRUSTEES REMUNERATION</u></p>

<p>15. The trustee shall be entitled to remuneration out of the trust fund for acting as such at a rate which may from time to time be agreed between the trustee and the principal or where applicable at the usual rate specified in the trustees terms and conditions of acting as trustee in force at the time of payment.</p>

<p><u>DEALINGS WITH THIRD PARTIES</u></p>

<p>16. Notwithstanding any other provisions of this deed:-</p>

<p>(a) no person dealing with the trustee including any person lending to the trustee shall be concerned to inquire as to the adequacy of the powers of the trustee in relation to such dealings or as to the proper exercise by the trustee of any of the powers authorities and discretions invested in the trustee by the provisions of this deed or as to the proprietary or regularity of any transaction affecting the trust fund or any other assets of the trustee or of the trust fund or as to the necessity for any borrowing or raising of money by the trustee or as to the purposes for which such money is borrowed or raised or to see to the application of any money paid to the trustee or to any person or corporation at the trustees discretion or otherwise and such dealing shall in the absence of fraud on the part of such person dealing with or lending money to or taking security from the trustee be valid and enforceable and effectual accordingly and the receipt of the trustee shall discharge any such person dealing with the trustee from all liability in respect thereof and such person shall be in the absence of fraud on its part be entitled to recover from the assets of the trust (whether or not by the exercise of any powers pursuant to any security granted by the trustee over the assets of the trust) the amount of all borrowings or raisings made on security given by the trustee notwithstanding that such person may have actual or constructive notice of trust by the trustee in relation to that dealing or borrowing or raising of money or granting of any security to that person over the trust fund and for this purpose the trustee and the beneficiaries shall be estopped as against such person from denying the validity and enforceability of such dealings and the recoverability of all money borrowed or raised and the enforceability of any security given by the trustee</p>

<p>(b) no mortgage, charge or other security given or created by the trustee to or in favour of any person or corporation over or in respect of the trust fund or any part thereof shall be unenforceable by the party in whose favour it has been created as against the trust fund by reason of any error or omission whether of law or fact on the part of the trustee or its legal or other advisers or by reason of any breach of duty or trust whatsoever</p>

<p>(c) where used in (a) and (b) above &quot;security&quot; includes a guarantee and an indemnity</p>

<p>(d) nothing in this clause shall prejudice the rights of the beneficiaries against the trustee for any breach of any duty or trust</p>

<p>(e) all persons claims and beneficial interest in over or to the trust fund shall be deemed to have had notice of the provisions of this clause.</p>

<p><u>EVIDENCE OF EXERCISE OF DISCRETION</u></p>

<p>17. The exercise of any discretion or power conferred or imposed upon the trustee or the making of any decision or determination by the trustee:-</p>

<p>(a) where the trustee is a company, may be exercised or made by a resolution of the board of directors or other governing body of the trustee</p>

<p>(b) whether or not the trustee is a company, shall be sufficiently evidenced if noted in minutes kept by the trustee of its proceedings as trustee and signed as a true record by the trustee or a director of the trustee and when so noted and if not expressed to be revocable shall be deemed to be irrevocable and binding upon all beneficiaries</p>

<p><u>EXCLUSION FROM BENEFITS</u></p>

<p>18. It is hereby declared that any person from time to time being the trustee hereof or any corporation in or under which any trustee has any actual or contingent beneficial interest are specifically excluded from all or any benefits whatsoever under this trust deed other than in respect of remuneration of the trustee hereunder.</p>

<p><u>VARIATION</u></p>

<p>19. (1) The trustee for the time being may at any time and from time to time by deed of appointment or other deed revoke, add to, substitute or vary all or any of the trusts hereinbefore contained or the trusts limited by any variation or alteration or addition made hereto from time to time or any of the provisions hereof and may by the same or any other deed or deeds declare any new or other trusts or powers in relation to the trust fund or any part or parts thereof but so that the law against perpetuities is not thereby infringed and PROVIDED ALWAYS that this power shall not be exercised so that:-</p>

<p>(a) the appointment or variation affects any interest in corpus already vested, or</p>

<p>(b) the appointment or variation affects the right of any beneficiary to income once applied for the benefit of that beneficiary, or</p>

<p>(c) the appointment or variation provides for an increase in any commission payable to a trustee who is a trustee at the date of such variation or otherwise operates to the personal benefit of the trustee, or</p>

<p>(d) gives any beneficial interest in the capital of the trust fund or results in the trust fund or the income thereof being applied for the advancement or benefit of the settlor</p>

<p>(2) any person being a beneficiary hereunder may by notice in writing given to the trustee at any time exclude himself from the class of beneficiaries hereunder and such person shall not thereafter form a member of the class of beneficiaries for the purpose of this deed and no further sums whether of income or of capital shall be allocated, set aside for, paid to or otherwise applied to or for the benefit of such person PROVIDED HOWEVER that any such notice shall not affect the beneficial entitlement to any amount set aside for such beneficiary or amount held in trust for such beneficiary prior to the date of such notice.</p>

<p><u>POWERS OF TRUSTEE</u></p>

<p>20. The trustee shall in addition to the powers otherwise conferred upon the trustee by law have the powers set out in schedule two hereto which it may exercise either solely or jointly with any other person or persons and upon such terms and conditions as the trustee thinks fit and to the intent that the trustee shall have the same powers in all respects as if it were the absolute owner beneficially entitled to the trust fund.</p>

<p><u>INDEMNITY OF SETTLOR</u></p>

<p>21. The settlor shall be entitled to be fully indemnified out of the assets of the Trusts and shall not be liable for any claims, liabilities, losses, expenses, duties, taxes, or other impositions of whatsoever nature incurred as a result of the formation or conduct of the Trust.</p>

<p><u>POWER OF ATTORNEY</u></p>

<p>22. The Trustee may from time to time by resolution or power of attorney under seal appoint any person to be the attorney of the Trustee for the purposes and with the powers authorities and discretions (not exceeding those exercisable by the Trustee under this Deed) and for the period and subject to the conditions as may be determined by the Trustee and an appointment by the Trustee of an attorney may be made in favour of any company, the members, directors, nominees or managers of any company or firm or any fluctuating body of persons whether nominated directly or indirectly by the Trustee and a power given of attorney pursuant to this clause may contain such provisions for the protection and convenience of persons dealing with an attorney as the Trustee thinks fit.</p>

<p><u>EXERCISE OF POWER BY PRINCIPAL</u></p>

<p>23. Except as otherwise provided (including any provisions in the Schedule):</p>

<p>23.1 Any power or authority exercisable by the principal shall be exercisable;</p>

<p>23.1.1 where a first principal is named and continues as such, by the first principal to the exclusion of other principals who are not first principals;</p>

<p>23.1.2 where a successor principal is named and there is no current first principal, by the successor principal;</p>

<p>23.1.3 where there is more than one principal of a particular class, namely, first principals, successor principals or principals generally, jointly by those principals of the class having the power and authority.</p>

<p>23.2 The first principal may at any time renounce his position as principal. The first principal shall have no power to appoint any other person or corporation as principal in his place or at all either during his lifetime or under his Will, unless at the request or delegated discretion of the successor principal.</p>

<p>23.3 The successor principal may at any time during his lifetime or by Will appoint another person or corporation as Principal in his stead or in addition to him and failing such appointment the legal personal representative of the successor principal will be appointed as principal of this Trust upon the death of the successor principal. Any person or corporation appointed as principal by the successor principal shall also have the same power to appoint.</p>

<p>23.4 Where a person that is the sole successor principal dies without having made an appointment under clause 23.3, the powers of successor principal (including the power under clause 23.3) shall be exercised by the legal personal representative of that person.</p>

<p>23.5 Where a corporation is the principal, it may exercise or concur in exercising any of the powers by resolution of such corporation or by a resolution of its directors or may delegate the right to exercise or concur in exercising such powers to one or more of its directors.</p>

<p>23.6 The successor principal may not appoint as principal the settlor or his estate of any corporation or trust in which the settlor or his estate has an actual or contingent beneficial interest.</p>

<p>23.7 The successor principal may delegate his powers under the Deed.</p>

<p>23.8 Clause 17 shall apply to the principal as if it specifically referred to the principal when it refers to the trustee.</p>

<p>23.9 A person shall cease to be a principal upon their death, upon the date of effect of their resignation, upon the appointment of a receiver or manager, in the case of a company upon its assets being subject to any arrangement under laws relating to insolvency and for the period during which the person does not have legal capacity or the persons personal estate is liable to be dealt with in any way under the law relating to mental health or bankruptcy (including by way of composition or other arrangement).</p>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();


$pdf->AddPage();
$html = '
<p style="text-align: center;font-size:14px;"><strong><u>SCHEDULE ONE</u></strong></p>
<table>
    <tr>
        <td>Part<br>Number</td>
        <td colspan="5">&nbsp;</td>
    </tr>
    <br><br>
    <tr>
        <td>first</td>
        <td colspan="5"><strong>DATE OF MAKING THIS DEED:</strong><br>(preamble)</td>
    </tr>
    <br><br>
    <tr>
        <td>second</td>
        <td colspan="5"><strong>SETTLOR: &nbsp;&nbsp;&nbsp; '.$a.'</strong><br>(preamble)</td>
    </tr>
    <br><br>
    <tr>
        <td>third</td>
        <td colspan="5"><strong>TRUSTEE: &nbsp;&nbsp;&nbsp; '.$b.'</strong><br>
            (preamble) &nbsp;&nbsp;&nbsp; <strong>'.$acn.' ??</strong></td>
    </tr>
    <br><br>
    <tr>
        <td>fourth</td>
        <td colspan="4"><strong>THE SETTLED PROPERTY:</strong><br>
            (recital (b))<br><br>
            $10.00
        </td>
    </tr>
    <br><br>
    <tr>
        <td>fifth</td>
        <td colspan="4"><strong>VESTING DAY:</strong><br>
            (clause 1(c)) <br><br>
            The day and year the 79th anniversary of the date of making this deed.
        </td>
    </tr>
    <br><br>
    <tr>
        <td>sixth</td>
        <td colspan="5"><strong>SPECIFIED BENEFICIARIES:</strong><br>
            (clause 1(d)) <br><br>
            (i)&nbsp;<strong>'.$d1.'</strong><br><br>
            (ii)&nbsp;<strong>'.$d2.'</strong><br><br>
            (iii)&nbsp;The children of either <strong>'.$d1.'</strong> and <strong>'.$d2.'.</strong> <br><br>
            (iv)&nbsp;The brothers, sisters and parents of <strong>'.$d1.'</strong> and <strong>'.$d2.'.</strong>
        </td>
    </tr>
    <br><br>
    <tr>
        <td>seventh</td>
        <td colspan="5"><strong>SECONDARY BENEFICIARIES:</strong><br>
            (clause 1(e)) <br><br>
            (i)&nbsp;The grandchildren and great grandchildren of either <strong>'.$d1.'</strong> and
            <strong>'.$d2.'.</strong> <br><br>
            (ii)&nbsp;The children, grandchildren and great grandchildren of either of the brothers and sisters of
            <strong>'.$d1.'</strong> and <strong>'.$d2.'.</strong>
        </td>
    </tr>
    <br><br><br><br>
    <tr>
        <td>eighth</td>
        <td colspan="5"><strong>RESIDUARY BENEFICIARIES:</strong><br>
            (clause 1(f)) <br><br>
            (i)&nbsp; Those persons not included in the classes of Specified Beneficiaries or Secondary Beneficiaries
            who are entitled to share in the estates of <strong>'.$d1.'</strong> and <strong>'.$d2.'.</strong>
        </td>
    </tr>
    <br><br>
    <tr>
        <td>ninth</td>
        <td colspan="5"><strong>PRINCIPAL:</strong><br>
            (clause 1(h)) <br><br>
            First Principal: &nbsp;&nbsp;&nbsp; <strong>'.$e.'.</strong><br><br>
            Successor Principal: &nbsp;&nbsp;&nbsp; <strong>'.$f.'.</strong>
        </td>
    </tr>
    <br><br>
    <tr>
        <td>tenth</td>
        <td colspan="5"><strong>NAME OF THE TRUST:</strong><br>
            (clause 1(n)) <br><br>
            <strong>'.$c.'.</strong>
        </td>
    </tr>
</table>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();
$html = '
<p style="text-align: center"><b><u>SCHEDULE TWO</u></b></p>

<p>The powers referred to in clause 20 are:</p>

<p></p>

<p><b>General investment</b></p>

<p>(a) to apply and invest all moneys at any time forming part of the trust fund in any investments it may select
    whether involving liabilities or not or upon personal credit with or without security including, without diminishing
    the generality of the foregoing, the taking of and the purchase of the whole or any part or share or interest in
    (including a minority party or share or interest in) any business or partnership and the goodwill and assets thereof
    and the purchase of any real or personal property wheresoever situate or any part or share or interest therein and
    notwithstanding that the same may not be income producing or may be of a wasting or speculative nature and to
    exercise all rights and privileges and perform all duties and obligations appertaining or incidental thereto.</p>

<p></p>

<p><b>Property powers</b></p>

<p>(b) to hold, use, purchase, construct, demolish, maintain, repair, renovate, reconstruct, develop, improve, sell,
    transfer, convey, surrender, let, lease, exchange, take and grant options or rights in, alienate, mortgage, charge,
    pledge, reconvey, release or discharge or otherwise deal with any real or personal property and in particular with
    shares, debentures or securities of any company and with or without deferred, restricted, qualified or special
    rights relating thereto</p>

<p></p>

<p><b>Investment terms</b></p>

<p>(c) to make or purchase any investments hereby authorised for cash or in consideration of an annuity or otherwise and
    upon such terms and conditions as the trustee thinks fit and it may make or purchase any such investment for a sum
    greater than the amount of the trust fund for the time being and it may agree to pay for any such investments wholly
    or in part from any future moneys which may come into its hands including dividends profits interest or other income
    paid or payable in respect of any such investments</p>

<p></p>

<p><b>Vary investments</b></p>

<p>(d) to vary or transpose any investments of the trust fund or any part thereof into or for any other or others of any
    nature whatsoever and to vary the terms of or property comprised in any security</p>

<p></p>

<p><b>Options</b></p>

<p>(e) to grant options in respect of any assets held subject to the trusts of this deed to any person, firm or
    company</p>

<p></p>

<p><b>Nominees</b></p>

<p>(f) to permit any moneys, investments or property forming part of the trust fund to stand in the names of any
    corporation or persons as the nominee of the trustee on such terms (if any) as to the execution of blank transfers
    or of declarations of trust and as to the custody of the documents of title to such investments or property and
    otherwise as the trustee shall in its absolute discretion think fit</p>

<p></p>

<p></p>

<p><b>Insurance and reversions</b></p>

<p>(g) to purchase or acquire any reversionary or deferred property or rights of any description or any life or life
    endowment or sinking fund or term or other policy or policies of insurance of whatsoever nature and at or subject to
    any premium or premiums whether single or payable periodically and with or subject to any options rights benefits
    conditions or provisions whatsoever and to pay out of the income or capital of the trust fund as the trustee thinks
    fit all sums payable from time to time for premiums or otherwise for the effecting or maintenance of any policy or
    policies of insurance (whether owned by the trustee or otherwise) or for the exercise or enjoyment of any option
    right or benefit thereunder and any surrender of any such policy or policies shall for all the purposes of this
    settlement be deemed to be a sale thereof.</p>

<p></p>

<p><b>Leasing</b></p>

<p>(h) to lease all or any part of any real or personal property for the time being subject to the said trust for any
    period upon such terms and conditions and for such rent as the trustee shall in its absolute discretion think fit
    and make allowances to and with tenants and others and accept surrenders and waive breaches of covenants and
    determine tenancies and raise out of any capital or income in its hands any sum from time to time required and in
    its opinion properly payable thereout for the exercise of any of the powers and discretions herein contained and
    generally to deal with the said real and personal property in a proper and due course of management as if
    beneficially entitled thereto.</p>

<p></p>

<p><b>Partnership/business</b></p>

<p>(i) to carry on any business of primary production either alone or in partnership with the same powers in that behalf
    as if the trustee was absolutely entitled thereto (including power to use the whole or any part of the trust fund
    therein) and to enter into partnership or profit sharing or sharefarming arrangement (&quot;partnership or
    arrangement&quot;) with the trustee in its private capacity and/or with any other person on such terms and
    conditions as the trustee shall think fit with power to vary the terms of and to terminate any such partnership or
    arrangement and to operate on any bank account opened by or on behalf of any partnership or arrangement in which the
    trustee is concerned or interested and so that the trustee or any person authorised by it may sign cheques on the
    bank account of any partnership or arrangement without the necessity for signature thereof by the trustee or all or
    any of the trustees (if more than one), and every trustee hereof shall be fully indemnified out of the trust fund
    and every part thereof in respect of any personal liability which it may incur in connection with any such business
    and no trustee hereof shall be liable to any beneficiary for any loss which may be incurred in carrying on such
    business.</p>

<p></p>

<p><b>Joint interests and blended funds</b></p>

<p>(j) in addition to all other powers herein conferred upon the trustee it shall have the following powers:-</p>

<p></p>

<p>(i) to use, deal with and administer any part of the trust fund together with any asset held by the trustee in its own
    right or as trustee of any other trust, including without prejudice to the generality of the foregoing the power to
    use, deal with and administer money, or other personality, together with partial interests in land including any
    undivided moiety as tenant-in-common, or as joint proprietor, or</p>

<p> estate in reversion or remainder, held by the trustee in different rights or capacities, and interests in different
    parcels of land including partial interests as aforesaid and estates in fee simple.</p>

<p></p>

<p> (ii) to purchase, hire or acquire by exchange any asset with blended funds or assets and to sell, lend, hire or
    mortgage any blended funds or assets and for the purpose of this sub-clause &quot;blended funds or assets&quot;
    shall mean assets of any kind belonging to the trustee personally or as trustee of this or any other trust.</p>

<p></p>

<p>(iii) to invest the trust fund or any part thereof or administer the same or exercise any powers in relation thereto
    in common with any other trust fund of which the trustee is trustee provided that separate and accurate records and
    books of account shall be kept in relation to each trust fund.</p>

<p></p>

<p><b>Loans to trustee</b></p>

<p>(k) the trustee (or any of them if more than one) shall be at liberty to lend or advance money in its personal
    capacity to itself as trustee and to charge interest therefore.</p>

<p></p>

<p><b>Guarantee</b></p>

<p>(l) to give any guarantee or indemnity solely or jointly with any other company or natural person and with or without
    remuneration, for the payment of money or for the performance of any contract, obligation or undertaking by any
    person, firm, company, corporation or association and to secure by mortgage, bill of sale, lien or charge, fixed or
    floating, legal, equitable or otherwise howsoever such guarantee or indemnity, or the payment of money, or the
    performance of obligations by the trustee or any other person, and upon such terms with or without interest as the
    trustee shall deem fit, and if the trustee is a company to give and to execute a registrable charge over all the
    property (both present and future) of the company and to execute a charge or other security whether or not
    registrable under the Corporations Law over the property (both present and future) of the trust fund held by it as
    trustee, and give and execute any other charge or security whether or not registrable under the Corporations Law,
    and to join with any person in granting and executing any security or other document referred to above AND to
    exercise all or any of these powers either alone or jointly with any person or persons natural or corporate
    including a trustee of any other trust or the trustee in its personal capacity as trustee of any other trust fund
    and to assume joint, or several, or joint and several liability in respect of any joint exercise of the said
    powers.</p>

<p></p>

<p><b>Securities investment</b></p>

<p>(m) to take up on allotment or purchase any stocks, share units, debentures, bonds, notes or securities issued
    by:-</p>

<p></p>

<p> (i) any corporation incorporated anywhere:</p>

<p>(ii) any government, local government or statutory authority anywhere as the trustee thinks fit.</p>

<p></p>

<p><b>Companies</b></p>

<p>(n) to establish, promote or acquire any company or companies or joint in the promotion, establishment or acquisition
    of any company or companies.</p>

<p></p>

<p><b>Corporate powers</b></p>

<p>(o) to exercise all rights and privileges and perform all duties and do all acts, matters and things appertaining to
    any shares, stock units or debentures in any corporation or unit trust for the time being subject to the trusts
    hereof as the trustee could do if it were the beneficial owner of the shares, stock units or debentures, or was
    personally interested or concerned in the corporation or unit trust, and without diminishing the generality of the
    foregoing with liberty to assent to any arrangements modifying such rights privileges or duties and to agree to any
    scheme or arrangement for the reconstruction or the increase or reduction of the capital of any corporation or unit
    trust, and to make any agreement in respect of or in the course of the winding-up of any company or unit trust, and
    for any such purpose to deposit, surrender or exchange any of the said shares, stock units or debentures or the
    title thereto, and to pay any calls or contributions or other necessary expenses in connection with, any such
    shares, stock units or debentures or any title thereto.</p>

<p></p>

<p><b>Borrowing</b></p>

<p>to borrow or raise moneys upon such terms with or without security or interest as the trustee shall deem fit and to
    secure by mortgage, bill of sale, lien or charge, fixed or floating, legal or equitable, registered or unregistered,
    or by any other document constituting or purporting to constitute a security for money over the trust fund or any of
    the assets thereof the payment of any moneys by any persons, firms, companies, corporations or governmental or
    municipal bodies to the trustee or to any other person or company, and the trustee is hereby expressly empowered to
    join with any other company or person including a trustee for any other trust or the trustee in its personal
    capacity or as trustee aforesaid for the purpose of securing the payment of money to the trustee alone, or for any
    of the purposes aforesaid, and to assume joint, or joint and several, or several liability in respect of any joint
    exercise of the said powers and without in any way limiting the generality of the foregoing is empowered to draw,
    make, accept, indorse, discount, execute and issue promissory notes, bills of exchange, bills of lading and other
    negotiable or transferable instruments alone, or with any other person or company, or for the purpose of securing
    the payment of money to any other person or company, and to authorise a bank to pay bills of exchange drawn upon the
    banking account of the trustee by the trustee or the trustee being a company by its authorised officer, and to
    recognise as a valid endorsement on any bill of exchange or promissory note the endorsement of the trustee or such
    authorised officer, and no bank acting in pursuance of such authority shall be deemed privy to a breach of trust on
    the ground only of notice that the person giving the authority was a trustee, and in addition the trustee may borrow
    or raise moneys to be used in deriving income or gain in augmentation of the trust fund notwithstanding that the
    trust fund may already be wholly invested or applied, or that the moneys to be borrowed or raised may exceed the sum
    or value of the trust fund, and it is hereby expressly provided that no person including any bank or other financial
    institution who advances or lends money to the trustee shall be required or bound to inquire as to the extent of the
    trustee\'s powers hereunder, or as to the propriety of any security given by the trustee, or as to the application by
    the trustee of the moneys so advanced or lent, but such person shall at all times be entitled to assume that the
    acts of the trustee are done in pursuance of its powers and duties hereunder.</p>

<p></p>

<p><b>Lending and borrowing</b></p>

<p>(q) to advance and lend moneys to, and borrow and raise moneys from and to secure by mortgage or otherwise howsoever
    the payment of money or the discharge or performance of any liability or obligation incurred by the trustee either
    alone or jointly with any other company, natural person or corporation to any persons, firms, companies,
    corporations or governmental or municipal bodies and upon such terms with or without security or interest as the
    trustee shall deem fit and the trustee is hereby expressly empowered to join with any company, corporation or
    natural person in executing any mortgage or other document for the purpose of security the payment of money to the
    trustee jointly with any company, corporation, natural person, governmental or municipal body.</p>

<p></p>

<p><b>Annuities</b></p>

<p>(r) to agree to pay and to pay and to charge the trust fund with the payment of an annuity or annuities or any other
    payment or payments of an annual nature.</p>

<p></p>

<p><b>Administration</b></p>

<p>(s) to employ any person or company (including any trustee hereof) in connection with any trade or business carried
    on by the trustee or in connection with anything required to be done pursuant to the provisions hereof including the
    receipt and payments of money and to decide the remuneration to be allowed and paid and the amount of all charges
    and expenses and to create or arrange any scheme of superannuation retirement benefit or pension for the benefit of
    any person so employed.</p>

<p></p>

<p><b>Employ professionals</b></p>

<p>(t) to employ a solicitor, accountant or any other agent to transact all or any business of whatsoever nature
    required to be done in the premises (including the receipt and payment of money) and so that the trustee shall be
    entitled to be allowed and paid all charges and expenses so incurred and shall not be responsible for the default of
    any such solicitor, accountant or agent or any loss occasioned by his or her employment.</p>

<p></p>

<p><b>Expenditures</b></p>

<p>(u) to pay out of the trust fund or the income thereof all costs, charges and expenses incidental to the management
    of the trust fund, or to the exercise of any power authority or discretion herein contained, or in carrying out or
    performing the trusts hereof, which the trustee may at any time incur, including all income tax or other taxes
    including tax on capital gains payable in respect of the trust fund or in consequence of any act or event relating
    to any asset of the trust fund, costs in any way connected with the preparation and execution of these presents, and
    all moneys which the trustee may be required to pay as settlement, probate, estate, gift, stamp or revenue duties
    including stamp gift or settlement duties payable in respect of the trust fund or of these presents.</p>

<p></p>

<p><b>Partition/subdivision</b></p>

<p>(v) to partition or agree to the partition of or to subdivide or agree to the subdivision of any land or other
    property which or any interest in which may for the time being be subject to the trusts hereof and to pay any moneys
    by way of equality of partition.</p>

<p></p>

<p></p>

<p><b>Capital/income determination</b></p>

<p>(w) to determine as the trustee thinks fit whether any real or personal property or any increase or decrease in
    amount, number or value of any property or holdings of property or any receipts or payments from for or in
    connection with any real or personal property shall be treated as and credited or debited to capital or to income
    and generally to determine all matters as to which any doubt difficulty or question may arise under or in relation
    to the execution of the trusts and powers of this settlement and every determination of the trustee in relation to
    any of the matters aforesaid whether made upon a question formally or actually raised or implied in any of the acts
    or proceedings of the trustee in relation to the trust fund shall bind all parties interested therein and shall not
    be objected to or questioned on any ground whatsoever.</p>

<p></p>

<p><b>Management</b></p>

<p>(x) so long as any real property or interest in real property shall form part of the trust fund the trustee, as it
    thinks fit, may manage, use or let the same or any part or parts thereof to receive stock on agistment, erect, pull
    down, rebuild and repair buildings and erections, carry out improvements of any nature, purchase stock plant
    equipment and fittings as the trustee considers necessary having regard to the purposes for which the real property
    is from time to time being used and may make allowances to and arrangements with tenants and other landowners or
    occupiers to grant or acquire easements or other rights and generally may deal with such property or interest or
    join in dealing with the same as if it was the absolute owner beneficially entitled thereto without being
    responsible for loss and without any of the restrictions imposed by law on trustees.</p>

<p></p>

<p><b>Outgoings</b></p>

<p>(y) to pay all insurance premiums, rates, taxes and rents and other outgoings in connection with any real or personal
    property subject to the said trusts and to manage the said property and effect such repairs as the trustee thinks
    fit to such property and where the trustee is unable to charge such expenditure against income from the property it
    shall be at liberty to resort to capital.</p>

<p></p>

<p><b>Professional fees</b></p>

<p>(z) any trustee for the time being hereof being a solicitor, accountant or other person engaged in any profession or
    business shall be entitled to charge and be paid all usual professional or other charges for business transacted,
    time expended and acts done by him, or her, or any partner of his or hers, or any company authorised to conduct
    legal practice in Australia in which the trustee is a shareholder, in connection with the trusts or powers of these
    presents including business and acts which a trustee not being engaged in a profession or business could have done
    personally.</p>

<p></p>

<p><b>Employ beneficiary</b></p>

<p>to remunerate any beneficiary who is at any time in the employ of the trustee to the same extent and in the same
    manner as if the beneficiary so employed was not a beneficiary hereunder and all bona fide payments made by the
    trustee to any such beneficiary in the form of remuneration for services rendered or to be rendered or on account of
    expenses in connection with such employment shall not be or be</p>

<p></p>

<p> deemed to be payment to the beneficiary of or on account of his or her share in the trust fund or the income
    thereof.</p>

<p></p>

<p><b>Appropriation</b></p>

<p>(bb) to appropriate as the trustee thinks fit any part or parts of the trust fund in the actual condition or state of
    investment thereof in or towards the satisfaction of the interest of any person in the trust fund or in or towards
    the satisfaction of any sum that the trustee may determine to pay or apply to or for the benefit of any beneficiary
    pursuant to the advancement provisions of this deed and in making such appropriation to estimate the value of the
    component parts of the trust fund or to employ such persons to make such valuation as in the circumstances the
    trustee deems proper without obtaining any consents otherwise required by law and every appropriation so made shall
    bind all persons interested in the trust fund notwithstanding that they may not yet be in existence or be under a
    legal disability.</p>

<p></p>

<p><b>Beneficiary residence</b></p>

<p>(cc) to permit any beneficiary to reside in any dwelling house which, or the proceeds of sale of which, may for the
    time being be subject to the trusts hereof upon such conditions as to payment of rents, rates, taxes and other
    outgoings and as to repair and decoration and for such period and generally upon such terms as the trustee thinks
    fit.</p>

<p></p>

<p><b>Asset protection</b></p>

<p>(dd) to do all things as it deems fit for the adequate protection of any part of the trust fund or otherwise for
    giving effect to this settlement and to do all such things as may be incidental to the exercise of any of the powers
    or authorities of the trustee.</p>

<p></p>

<p><b>Sole trustee\'s receipts</b></p>

<p>(ee) a sole trustee for the time being is hereby authorised, notwithstanding that it is the sole trustee, to receive
    capital and other moneys including moneys deemed to be capital by statute and to give valid and effectual receipts
    therefore for all purposes including the purposes of any statutory enactments.</p>

<p></p>

<p><b>Compromise</b></p>

<p>(ff) to compromise or refer to arbitration, conciliation or mediation any actions, proceedings, disputes, claims or
    demands and to settle all accounts relating to the trust fund or to any other estates or interests or share which
    are, is or may hereafter be subject to these presents or in which the trust fund has an interest and to execute
    release and to do all other things proper for any of the above purposes without being responsible for loss
    occasioned thereby.</p>

<p></p>

<p><b>Dispute resolution</b></p>

<p>(gg) to institute and defend any proceedings at law or in equity or by way of arbitration and to proceed to the final
    determination thereof or to discontinue the same or to compromise or settle such proceedings on such terms as the
    trustee thinks fit.</p>

<p></p>

<p></p>

<p><b>Conflicts</b></p>

<p>notwithstanding any rule of law or equity to the contrary and without obtaining the order of any court or any
    independent legal advice the trustee may exercise or concur in exercising all powers and discretions conferred on it
    by this deed or by</p>

<p></p>

<p> law notwithstanding that it or any person being a trustee or any person being a director or shareholder of the
    trustee (being a company) has or may have a direct or indirect or personal interest (whether as shareholder or
    director or member or partner of any company or partnership or otherwise) in the mode or result of exercising such
    power or discretion or may benefit directly or indirectly as a result of the exercise of any such power or
    discretion and notwithstanding that the trustee for the time being is the sole trustee.</p>

<p></p>

<p><b>Banking</b></p>

<p>(ii) in its absolute discretion as if it were acting on its own behalf solely or jointly with any other person,
    company, corporation or association to open and conduct bank accounts of every description upon such terms and
    conditions as the trustee shall think fit and operate such accounts in such manner as the trustee shall think fit in
    accordance with the customs, usages and practices of banks including on overdraft and to agree to its bank debiting
    any such account or accounts with interest, costs, charges, expenses and liabilities incurred by that banker or at
    any time from time to time on behalf of the trustee and in addition to any other power contained in this deed to
    borrow or raise or secure the payment of money in such manner as the trustee shall think fit and to secure that
    borrowing or raising or the repayment or performance of any debt, liability, contract, guarantee or other engagement
    incurred or to be entered into by the trustee in any way with its banker.</p>

<p></p>

<p><b>Negotiable instruments</b></p>

<p>(jj) to draw, make, accept, indorse, discount, execute and issue promissory notes, bills of exchange, bills of lading
    and other negotiable or transferable instruments; and to authorise a bank to pay bills of exchange drawn upon the
    banking account of the trustee by the trustee or the trustee being a company by its authorised officer and to
    recognise as a valid endorsement on any bill of exchange or promissory note the endorsement of the trustee or such
    authorised officer and no bank acting in pursuance of such authority shall be deemed privy to a breach of trust on
    the ground only of notice that the person giving the authority was a trustee.</p>

<p></p>

<p><b>New trustee</b></p>

<p>in any conditions or circumstances in which the trustee thinks it expedient, to appoint either in respect of the
    whole of the trust fund or any part thereof a new trustee or trustees in any country in the world and to transfer,
    assign or set over the investments for the time being representing the trust fund or any part thereof to any such
    new trustee or trustees upon similar trusts and subject to similar terms and conditions to those declared in these
    presents and either subject to the control of the trustee of these presents or without such control AND the trustee
    of these presents shall be indemnified and held harmless against any loss which may arise from the exercise of this
    power.</p>

<p> <b>Proper law</b></p>

<p>(ll) in any conditions or circumstances in which the trustee thinks it expedient to do acts or take steps which will
    have the effect that the proper law of this instrument and of the trusts hereunder or any of them is changed to the
    law of some other country, State or territory.</p>
';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();

$html = '
The rules referred to in clause 2 are:<br><br>

In making a decision or determination under clause 2:<br>
<ol>
    <li style="text-align:justify;">decisions or determinations to pay, apply or set aside income to or for
        beneficiaries will be irrevocable and the trustee must deal with the income in accordance with the decision or
        determination;
    </li>
    <br>

    <li style="text-align:justify;">in deciding whether to pay, apply or set aside any amount of income the trustee can
        specify a particular class of income or the amount of income from that particular class of income to which shall
        be paid, applied or set aside for any such beneficiary in any way the trustee determines e.g. by reference to a
        specific sum or a percentage of income or income of any particular class;
    </li>
    <br><br>

    <li style="text-align:justify;">decisions to accumulate income are irrevocable;</li>
    <br>

    <li style="text-align:justify;">if at the end of the year the total amount of determinations made by the trustee
        under clause 2 exceed the income of the trust for that year, the excess will be deducted from any amounts the
        trustee has decided to accumulate;
    </li>
    <br>

    <li style="text-align:justify;">if any excess is greater than any amount to be accumulated then the trustee will be
        deemed to have applied an amount of capital of the fund equal to that excess.
    </li>
</ol><br>

EXECUTED as a Deed in <strong>'.$g.'</strong>. <br><br><br>

<table>
    <tr>
        <td>SIGNED SEALED AND DELIVERED by the<br> said '.$a.' in the presence of:</td>
        <td><br><br>______________________________<br>'.$a.'</td>
    </tr>
    <tr>
        <td><br><br>______________________________<br>Witness sign</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><br><br>______________________________<br>Witness print full name</td>
        <td>&nbsp;</td>
    </tr>
</table><br><br><br>

EXECUTED by <strong>'.$b.'</strong><br>
<strong>PTY LTD '.$acn.' ??</strong><br>
in accordance with Section    127 of the <br>
Corporations Act 2001<br>

<table>
    <tr>
        <td><br><br>__________________________<br>Sole Director</td>
        <td><br><br>__________________________<br>Director/Secretary</td>
    </tr>
    <tr>
        <td><br><br>__________________________<br>'.$b1.'</td>
        <td><br><br>__________________________<br>'.$b1.'</td>
    </tr>
</table>

';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();
$html = '
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>DISCRETIONARY TRUST</strong></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>ANCILLARY DOCUMENTS</strong></p>
<p style="text-align: center;"></p>
<ul style="text-align: center;">
    <li><strong> Consent to Act as Trustee and Instructions for Completion</strong></li>
    <li><strong> Trustee Resolution and Instructions for Completion </strong></li>
</ul>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;">Prepared by:</p>
<p style="text-align:left;"><img src="tcpdf/1.png" border="0" align="left"/></p>
<p style="text-align: center;"></p>
<p style="text-align: center;">Level 1 "Wharf Central"</p>
<p style="text-align: center;">Suite 19/75-77 Wharf Street</p>
<p style="text-align: center;">Tweed Heads NSW 2485</p>
<p style="text-align: center;">P: 07 5599 1996 : F: 07 5599 3635</p>
<p style="text-align: center;">E: office@bml.net.au</p>
<p style="text-align: center;"></p>
<p style="text-align: center;">for</p>
<p style="text-align:center;"><img src="tcpdf/2.png" border="0" align="middle"/></p>

';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();
$html = '
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>Consent to Act as Trustee of</strong></p>
<p style="text-align: center;"><strong>['.$c.']</strong></p><br>
<strong>['.$b.'],</strong> hereby, consents to act as Trustee of the <strong>['.$c.'].</strong><br><br><br>
<table>
    <tr>
        <td>Signed by <strong>['.$b.']</strong></td>
        <td>__________________________</td>
    </tr>
    <br><br>
    <tr>
        <td>Signed by <strong>['.$b.']</strong></td>
        <td>__________________________</td>
    </tr>
</table><br><br><br>

EXECUTED by <strong>'.$b.'</strong><br>
<strong>PTY LTD '.$acn.' ??</strong><br>
in accordance with Section    127 of the <br>
Corporations Act 2001<br><br>

<table>
    <tr>
        <td><br><br>__________________________<br>Director</td>
        <td><br><br>__________________________<br>Director/Secretary</td>
    </tr>
    <tr>
        <td><br><br>__________________________<br>'.$b1.'</td>
        <td><br><br>__________________________<br>'.$b1.'</td>
    </tr>
</table><br><br><br>
Dated: ___________________

<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<hr>
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>Instructions for Completion</strong></p>
<ol>
    <li>Have the Trustee(s) sign and date to record the Trustee(s) consent to act as trustee of the Trust.</li>
</ol>

';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->AddPage();
$html = '
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>Minutes of Meeting of Directors of ['.$b.']</strong></p>
<ol>
    <li><strong>Held at</strong></li>
    <br>
    <li><strong>On</strong></li>
</ol>
<ol start="3">
    <li><strong>Present:</strong></li>
    <br><br><br><br>
    <li><strong>Chairman: </strong>The following person was appointed Chairman of the meeting:</li>
    <br>
    <li><strong>Charge: </strong>The Chairman tabled a deed of settlement for the <strong>['.$c.']</strong> and
        indicated that the company had been requested to act as its trustee.
    </li>
    <br>
    <li><strong>Resolution: </strong>That the company act as trustee of the <strong>['.$c.']</strong> and accordingly
        execute the deed of settlement tabled at the meeting.
    </li>
    <br>
    <li><strong>Closure: </strong>There being no further business the meeting terminated.</li>
    <br>
    <li><strong>Signed</strong> as a correct Minute of the meeting.</li>
    <br><br>
</ol>
<table>
    <tr>
        <td>&nbsp;</td>
        <td style="text-align:right;"><br><br>__________________________<br>Chairman</td>
    </tr>
</table>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<p style="text-align: center;"></p>
<hr>
<p style="text-align: center;"></p>
<p style="text-align: center;"><strong>Instructions for Completion</strong></p>
<ol>
    <li>Write the address at which the meeting is held.</li>
    <li>Write the date of the meeting.</li>
    <li>Write the names of the directors present.</li>
    <li>Write the name of the chairman of directors (nominated by directors present at the meeting to sign this
        Minute).
    </li>
    <li>The Chairman should sign the Minute.</li>
</ol>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

$pdf->Output($_SERVER['DOCUMENT_ROOT'] .'wp-content/plugins/order-record/pdf/docsss'.$id.'.pdf', 'F');
?>