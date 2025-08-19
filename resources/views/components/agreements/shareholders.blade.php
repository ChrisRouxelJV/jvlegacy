<h5 class="grey">Effective: <?= $project->getCreatedOn()->format('jS \o\f F Y') ?></h5>
<div class="ui hidden divider"></div>
<h3>Parties</h3>
<ol>
    <li><strong><?= strtoupper('JaeVee Holdings Ltd') ?></strong> incorporated and registered in <?= getenv('COMPANY_REG_IN') ?> with company number <?= getenv('COMPANY_REG_NUMBER') ?> whose registered office is at <?= getenv('COMPANY_REG_ADDRESS') ?> (<strong>the A Shareholder</strong>);</li>
    <?php if ($company): ?>
    <li><strong><?= strtoupper($company->getName()) ?></strong> incorporated and registered in England and Wales with company number <?= $company->getNumber() ?> whose registered office is at <?= $company->getAddress()->getFormatted() ?> (<strong>the B Shareholder</strong>);</li>
    <?php else: ?>
    <li><strong><?= strtoupper($person->getName()) ?></strong> of <?= $person->getAddress()->getSmallFormatted() ?> (<strong>the B Shareholder</strong>);</li>
    <?php endif ?>
    <li>The <strong>Investors</strong> in the Company whose details are set out in Schedule 3 (<strong>the C Shareholders</strong>); and</li>
    <li><strong><?= strtoupper($spv->getCompanyName()) ?></strong> incorporated and registered in England and Wales with company number <?= $spv->getCompanyNumber() ?> whose registered office is at <?= getenv('COMPANY_REG_ADDRESS') ?> (<strong>the Company</strong>).</li>
</ol>
<h3>Background</h3>
<ul class="upper-alpha">
    <li>The Company is a newly formed private limited company formed as a special purpose vehicle to undertake the Project as herein defined. The intention is that the share capital of the Company will be allotted as follows:
        <ul class="lower-alpha">
            <li>to the A Shareholder a <?= "{$profitShare['a']}%" ?> interest in the Company to be held by it on the terms and conditions of this Agreement;</li>
            <li>to the B Shareholder a <?= "{$profitShare['b']}%" ?> interest in the Company to be held by it on the terms and conditions of this Agreement;</li>
            <li>to the C Shareholders shares together totalling a <?= "{$profitShare['c']}%" ?> interest in the Company to be held by them on the terms and conditions of this Agreement.</li>
        </ul>
    </li>
    <li>The Company shall carry on the Business subject to the terms and conditions of this agreement with a view to the realisation by way of sale of the Properties or the Company for the benefit of the Shareholders by the End Date.</li>
    <li>The Company has made available to the Shareholders the Investment Information as the Shareholders acknowledge.</li>
    <li>The Shareholders agree to abide by the terms of this Agreement and to exercise their rights in relation to the Company and their shareholding in the Company in accordance with the terms and conditions of this agreement.</li>
</ul>
<h3>Agreed Terms</h3>
<h3>1. Interpretation</h3>
<p>1.1 The definitions and rules of interpretation in this clause apply in this agreement.</p>
<p><strong>A Share(s):</strong> ordinary shares of £1 in the capital of the Company designated as an A Shareholder</p>
<p><strong>Articles:</strong> the Articles of Association of the Company</p>
<p><strong>B Share(s):</strong> ordinary shares of £1 in the capital of the Company designated as a B Share with the rights attaching to such class of shares to be allotted to the B Shareholder.</p>
<p><strong>Board:</strong> the board of directors of the Company as constituted from time to time.</p>
<p><strong>Business:</strong> means property development, purchase and sale, management and letting of freehold and leasehold properties in England and Wales.</p>
<p><strong>Business Day:</strong> any day other than a Saturday, Sunday or public holiday in England when banks in London are open for business.</p>
<p><strong>CA 2006:</strong> the Companies Act 2006.</p>
<p><strong>Completion:</strong> the completion of this agreement.</p>
<p><strong>Confidential Information:</strong> has the meaning given in clause 17.</p>
<p><strong>C Share(s):</strong> ordinary shares of £1 in the capital of the Company designated as a C Share with the rights attaching to such class of shares to be allotted to the C Shareholders.</p>
<p><strong>CTA 2010:</strong> the Corporation Tax Act 2010.</p>
<p><strong>Deed of Adherence:</strong> the deed of adherence in the form set out in Schedule 2 required to be signed by any successor(s) to the Shares as a condition of their being registered in the
    registers of the Company as the owner(s) of the Shares.</p>
<p><strong>Developer</strong> means B Shareholder.</p>
<p><strong>Development Agreement:</strong> a development agreement to be entered into between theCompany and the Developer on Completion in respect of the Project.</p>
<p><strong>Director:</strong> a director of the Company.</p>
<p><strong>Electronic form:</strong> has the meaning given in section 1168 of the CA 2006.</p>
<p><strong>Encumbrance:</strong> any interest or equity of any person (including any right to acquire, option or right of pre-emption) or any mortgage, charge, pledge, lien, assignment, hypothecation,
    security interest, title retention or any other security agreement or arrangement.</p>
<p><strong>End Date:</strong> means <?= $endDate->format('jS \o\f F Y') ?> or such other later date as is approved under the Reserved Matters provisions set out in clause 4 and Schedule 1.</p>
<p><strong>Facilities Agreement:</strong> means the agreement between the Principal Lender and the Company to provide funding for the Project.</p>
<p><strong>Financial Year:</strong> in relation to the Company, means its accounting reference period of 12 months ending on or such other date as the Company may determine in accordance with
    section 392 of the CA 2006 but, in the first year in which the Company is formed, means the period starting with the day the Company is formed and ending on 2018, subject to the CA 2006.</p>
<p><strong>Group:</strong> in relation to a company, that company, any subsidiary or holding company from time to time of that company, and any subsidiary from time to time of a holding company of that company. Each company in a Group is a member of the Group.</p>
<p><strong>Intellectual Property:</strong> means patents, utility models, rights to inventions, copyright and related rights, moral rights, trademarks and service marks, business names and domain names,
    rights in get-up, goodwill and the right to sue for passing off or unfair competition, rights in designs, database rights, rights to use, and protect the confidentiality of, confidential information (including know-how and trade secrets), semiconductor topography rights, image rights, rights of personality and other similar rights, processes, models or formats and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, renewals or extensions of, and rights to claim priority from, such rights and all similar or equivalent rights or forms of protection which subsist or will subsist now or in the future in any part
    of the world.</p>
<p><strong>Investment Capital:</strong> means the investment capital invested in the Company by the C Shareholder.</p>
<p><strong>Investment Information:</strong> means the Investment Information relating to the Project made available prior to the date hereof to the Shareholders to include:
<ul class="lower-roman">
    <li>feasibility analysis relating to the Project;</li>
    <li>market research report relating to the Project;</li>
    <li>property documents, reports, documents of title, any relevant conveyancing searches;</li>
    <li>property surveys and floor plans;</li>
    <li>proposals in respect of the realisation of the Project and exit strategy.</li>
</ul>
</p>
<p><strong>JaeVee:</strong> means the A Shareholder.</p>
<p><strong>Mezzanine Debt:</strong> the secondary lending to be secured upon the properties.</p>
<p><strong>Permitted Transferee:</strong> means any transferee of Shares comprising a Permitted Transfer.</p>
<p><strong>Permitted Transfers:</strong> means any transfers of Shares permitted in accordance with clause 11.2 of this agreement.</p>
<p><strong>Platform:</strong> means JaeVee’s online system.</p>
<p><strong>Principal Lender:</strong> means <?= $seniorDebt ? $seniorDebt->getLender() : 'the senior debt lender' ?> or such other lender as shall be agreed by the Board to provide funding for the Project.</p>
<p><strong>Profit Share:</strong> means the C shareholders share in the distributable reserves available to be paid to shareholders after settlement of all expenses and liabilities of the Company including corporation tax</p>
<p><strong>Project:</strong> means the carrying on of the Business in respect of the Properties.</p>
<p><strong>Properties:</strong> means the freehold property known as the <?= $address->getFormatted() ?>.</p>
<p><strong>Reserved Matters:</strong> the matters listed in Schedule 1.</p>
<p><strong>Secondary Lender:</strong> means <?= $mezzanineDebt ? $mezzanineDebt->getLender() : 'the mezzanine lender' ?>.</p>
<p><strong>Security:</strong> means all and any security granted by the Company to the Principal Lender by way of mortgage, charge or debenture over the Company’s assets as security for the Senior Debt.</p>
<p><strong>Senior Debt:</strong> means the funding to be provided in respect of the Project by the Principal Lender
    pursuant to the Facilities Agreement.</p>
<p><strong>Shareholders:</strong> the holders of shares in the Company.</p>
<p><strong>Shares:</strong> the A Shares, the B Shares and the C Shares in issue from time to time.</p>
<p><strong>Subsidiary:</strong> has the meaning given in clause 1.11.</p>
<p>1.2 Clause, Schedule and paragraph headings shall not affect the interpretation of this agreement.</p>
<p>1.3 References to clauses and Schedules are to clauses of and Schedules to this agreement and references to paragraphs are to paragraphs of the relevant Schedule.</p>
<p>1.4 The Schedules form part of this agreement and shall have effect as if set out in full in the body of this agreement. Any reference to this agreement includes the Schedules.</p>
<p>1.5 A reference to <strong>this agreement</strong> or to any <strong>other agreement or document referred to in this agreement</strong> is a reference to this agreement or such other agreement or document as varied or novated in accordance with its terms from time to time.</p>
<p>1.6 Unless the context otherwise requires, words in the singular shall include the plural and in the plural shall include the singular.</p>
<p>1.7 Unless the context otherwise requires, a reference to one gender shall include a reference to the other genders.</p>
<p>1.8 A <strong>person</strong> includes a natural person, corporate or unincorporated body (whether or not having separate legal personality).</p>
<p>1.9 A reference to a <strong>party</strong> shall include that party's successors and permitted assigns.</p>
<p>1.10 A reference to a <strong>company</strong> shall include any company, corporation or other body corporate, wherever and however incorporated or established.</p>
<p>1.11 A reference to a <strong>holding company</strong> or a <strong>subsidiary</strong> means a holding company or a subsidiary (as the case may be) as defined in section 1159 of the CA 2006</p>
<p>1.12 References to a document in <strong>agreed form</strong> are to that document in the form agreed by the parties and initialled by them or on their behalf for identification.</p>
<p>1.13 A reference to a statute or statutory provision is a reference to it as amended, extended or re-enacted from time to time.</p>
<p>1.14 Any obligation on a party not to do something includes an obligation not to allow that thing to be done.</p>
<h3>2. Consideration and Agreements</h3>
<p>2.1 In consideration of the mutual agreements and undertakings of the Shareholders, the Shareholders have granted the rights and accepted the obligations set out in this agreement.</p>
<p>2.2 The Company has been formed by the A Shareholder as a special purpose vehicle to carry on the Business and intends to enter into a contract for the acquisition of the Properties and a Development Agreement with the Developer to carry out the Project.</p>
<p>2.3 It is agreed that the Company may also carry on any other businesses which are incidental or ancillary to the Business.</p>
<p>2.4 The Shareholders agree that the Business shall at all times be carried out in the best interests of the Company and the Shareholders.</p>
<h3>3. Completion</h3>
<p>3.1 Upon Completion of this Agreement.</p>
<p>3.2 The parties shall procure that such meetings of the Company are held and/or resolutions passed as may be necessary to:
<ul class="lower-alpha">
    <li>give the directors the authority to allot the A Shares, the B Shares and the C Shares in accordance with clause 3.3;</li>
    <li>confirm the appointment of Benjamin James Smith or another director of the A Shareholder as Managing Director;</li>
    <li>appoint Benjamin James Smith and/or another or additional directors of the A Shareholder as signatories on the Company’s bank account;</li>
    <li>change the registered office of the Company (if required) to the same registered office as the A Shareholder;</li>
    <li>the parties waive, or agree to procure the waiver of, any rights or restrictions which may exist in the articles of association of the Company or otherwise which may prevent the allotment and issue of the shares in the Company pursuant to clause 3.4 and clause 3.5.</li>
</ul>
</p>
<p>3.3 At Completion, the parties shall procure that the Company shall redesignate any Ordinary
    shares currently held by the A Shareholder as A Shares and shall issue credited as fully paid against payment in full by the relevant Shareholder of their nominal value the following Shares to the following Shareholders and enter such Shareholders in the register of members of the Company as the holder of such
    Shares and issue the relevant share certificates in respect of all such shares:</p>
<table>
    <thead>
    <tr>
        <th width="30%">Name Of Shareholders</th>
        <th width="40%">Number &amp; Class Of Shares</th>
        <th width="30%">Aggregate Subscription Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>JaeVee<br/> (A Shareholder)</td>
        <td><?= number_format($shares * ($profitShare['a'] / 100), 0) ?> A Shares</td>
        <td><?= $this->finance->format($shareValue->multiply(($profitShare['a'] / 100)), true) ?></td>
    </tr>
    <tr>
        <td>The Developer<br/> (B Shareholder)</td>
        <td><?= number_format($shares * ($profitShare['b'] / 100), 0) ?> B Shares</td>
        <td><?= $this->finance->format($shareValue->multiply(($profitShare['b'] / 100)), true) ?></td>
    </tr>
    <tr>
        <td>The Investors<br/> (C Shareholder)</td>
        <td><?= number_format($shares * ($profitShare['c'] / 100), 0) ?> C Shares</td>
        <td><?= $this->finance->format($shareValue->multiply(($profitShare['c'] / 100)), true) ?></td>
    </tr>
    </tbody>
</table>
<p>The above figures are subject to change before the purchase of the Properties is completed, in the event that more Investment Capital is required.</p>
<p>3.4 At Completion, JaeVee shall procure that the following agreements have
    been executed in agreed form by the Company and the Developer and any third parties:
<ul class="lower-alpha">
    <li>the Development Agreement; and</li>
    <li>all and any documents relating to the Project at Completion required to be entered into in accordance with the Development Agreement;</li>
</ul>
</p>
<p>3.5 At Completion, each party shall deliver a notice to the Company confirming its required particulars under section 790K of the CA 2006 for the purposes of updating the Company's PSC register.</p>
<h3>4. Matters requiring consent of shareholders</h3>
<p>4.1 The Company (and each Shareholder shall procure that the Company) shall not carry out any of
    the Reserved Matters unless Shareholders holding in value <?= $profitShare['b'] + $profitShare['c'] + 1 ?>% of the issued share capital vote in favour of a resolution whether at a general meeting of the Shareholders or by a written resolution.</p>
<h3>5. Directors and management</h3>
<p>5.1 The Board has responsibility for the day to day management of the Company and for the supervision of the Business, subject to clause 4.</p>
<p>5.2 There shall be a minimum of two directors on the Board, one appointed by the A Shareholder and one appointed by the B Shareholder.The managing director shall be appointed by the A Shareholder. There will be no chairman of the Company appointed.</p>
<p>5.3 The A Shareholder is appointed by all of the parties to this Agreement to oversee the Project and in case of any disputes between the Shareholders as to the undertaking of the Project the decision of the Managing Director appointed by the A Shareholder shall be final and binding upon them and the Company.</p>
<p>5.4 The removal of a director shall be classed as a Reserved Matter. The director appointed by Shareholder B shall be subject to clause 20.</p>
<h3>6. Restrictions on the parties</h3>
<p>6.1 No party nor any subsidiary of any party shall at any time when the party in question is a Shareholder or for a period of 12 months after they cease to be a Shareholder:-</p>
<p style="padding-left: 30px;">6.1.1 be engaged either directly or indirectly in any business or project which would compete with the Business or in any of the following ways with the Project in terms of timing, location, type of property or rental on lettings with the Project in such a manner as would be reasonably likely to have a negative impact on the profitability of the Project or any part or parts thereof;</p>
<p style="padding-left: 30px;">6.1.2 seek to divert the custom of any person that is, or was within the previous 12 months, a potential purchaser of the Properties or of a lease or tenancy of the Properties or any part or parts thereof or, where the party is no longer a Shareholder, any person that was such a potential purchaser at any time during the period of 12 months immediately preceding the party in question ceasing to be a Shareholder;</p>
<p style="padding-left: 30px;">6.1.3 offer employment to, enter into a contract for the services of, or attempt to solicit or seek to entice away from the Company or the Developer any individual who is at the time of the offer, or attempt, a director, officer or employee holding an executive or senior position with the Company or procure or facilitate the making of any such offer or attempt by any other person; or</p>
<p style="padding-left: 30px;">6.1.4 make use of the Company’s Intellectual Property in any way whatsoever other than in respect of the Business and/or Project pursuant to the Licence.</p>
<p>6.2 The undertakings in this clause are limited to any business or project located within a 50 mile radius of the Project.</p>
<p>6.3 The undertakings in this clause are given by each party to the other and to the Company and apply to actions carried out by each party (or any of its subsidiaries) in any capacity and whether directly or indirectly, on the party's (or subsidiary's) own behalf, on behalf of any other person or jointly with any other person.</p>
<p>6.4 Each of the covenants in this clause is considered fair and reasonable by the parties.</p>
<p>6.5 Each party shall procure that its subsidiaries comply with the terms of this clause.</p>
<p>6.6 If a party ceases to be a Shareholder as a result of a transfer of shares to a Permitted Transferee in accordance with the Articles, the restrictions in this clause 7 shall continue to apply to the transferor and to the Permitted Transferees who shall sign the Deed of Adherence agreeing to be bound by the Conditions hereof.</p>
<h3>7. Anti-corruption</h3>
<p>7.1 Each party undertakes to the other party that:
<ul class="lower-alpha">
    <li>It, or any parties connected to the party will not, and will procure that the Company will not engage in any activity, practice or conduct which would constitute an offence under sections 1, 2 or 6 of the Bribery Act 2010; and</li>
    <li>it has and will maintain in place, and will procure that the Company has and will maintain in place, adequate procedures designed to prevent any associated person from undertaking any conduct that would give rise to an offence under section 7 of the Bribery Act 2010.</li>
</ul>
</p>
<p>7.2 Breach of any of the undertakings in this clause shall be deemed to be a material breach of the agreement.</p>
<h3>8. Accounting and other information</h3>
<p>8.1 The Shareholders shall procure that the Company shall at all times maintain accurate and complete accounting and other financial records including all corporation tax computations and related documents and correspondence with HM Revenue & Customs in accordance with the requirements of all applicable laws and generally accepted accounting principles applicable in the United Kingdom.</p>
<p>8.2 Each class of Shareholders and/or their authorised representatives shall be allowed access at all reasonable times and by prior appointment to examine the books and records of the Company and to discuss the Company's performance with its directors and senior management.</p>
<p>8.3 The Company shall supply to each class of Shareholders such financial information as the Board may consider reasonable to ensure that the Shareholders are aware of the progress with the Project and in particular:
<ul class="lower-alpha">
    <li>a quarterly update, together with copies of all interim reports in respect of the Project received from the Developer; and</li>
    <li>a copy of the accounts of the Company prepared in accordance with the laws applicable in and the accounting standards, principles and practices generally accepted in the United Kingdom, within 4 months of the end of the year to which the accounts relate.</li>
</ul>
</p>
<h3>9. Dividend policy</h3>
<p>The parties agree that the Company shall not declare, pay or make any dividend or other distribution until and unless:
<ul class="lower-alpha">
    <li>approved by the Board.</li>
    <li>in accordance with the Facilities Agreement.</li>
    <li>the dividend or distribution can be made in the opinion of the Board without adversely affecting the cash flow of the Company with regard to the Business.</li>
    <li>in accordance with a decision of the Shareholders made pursuant to clause 4 upon the End Date.</li>
    <li>it takes into account the understanding of the Shareholders that the Company will at all times maintain a cash reserve of an amount recommended by the Board up to the End Date.</li>
</ul>
</p>
<h3>10. Order of Priority for Profit Distribution at End Date</h3>
<p>10.1 The Parties agree that the profit available for distribution at the End Date shall be subject to payment of a, b and c, the return investment of the investment capital to the C shareholders and the profit remaining then distributed to the shareholders in the order set out in paragraphs a to e;
<ul class="lower-alpha">
    <li>Payment of all proper expenses and taxes by the Company.</li>
    <li>Senior Debt.</li>
    <li>Mezzanine Debt.</li>
    <li>Investment Capital.</li>
    <li>Profit share</li>
</ul>
</p>
<p>The distribution of Profit Share to the C shareholders shall be on a pro rata basis to the C shareholders’ investment Capital.</p>
<p>10.2 Following a payment to the C Shareholders of all monies due, on exercise of an option by the Company, the C Shareholders will transfer all of their C Shares in the Company to the B Shareholder for a nominal consideration of £1 per share.</p>
<h3>11. Tax matters</h3>
<p>Unless the parties otherwise expressly agree in writing, the parties shall procure that all of the Company's trading losses and all other amounts eligible for relief from taxation shall be carried by the Company and not surrendered (wholly or partly) to the parties.</p>
<h3>12. Transfer of shares</h3>
<p>12.1 No party shall create any Encumbrance over, transfer, or otherwise dispose of or give any person any rights in or over any share or interest in any share in the Company unless it is classed as a Permitted Transfer or required under this agreement or the Articles and carried out in accordance with the terms of this agreement and the Articles.</p>
<p>12.2 For the purpose of this agreement Permitted Transfers shall mean:
<ul class="lower-alpha">
    <li>a transfer arising upon the death of a Shareholder;</li>
    <li>a transfer arising as a result of the insolvency of a Shareholder;</li>
    <li>a transfer required to be made pursuant to an order of a court of competent jurisdiction binding upon the Shareholder in question;</li>
    <li>such other transfer that the Board shall approve upon request of a Shareholder in its absolute discretion;</li>
    <li>such other transfer of Shares that shall be approved by the Shareholders pursuant to clause 4 and Schedule 1.</li>
</ul>
</p>
<p>12.3
<ul class="lower-alpha">
    <li>Except as expressly provided in the Articles or this agreement, the parties shall procure that no transfer of shares shall be registered by the Board unless the transferee of such shares has executed and delivered a Deed of Adherence as a condition of agreeing to registration of the transfer of Shares as a Permitted Transfer;</li>
    <li>The Board shall also be entitled to be satisfied that the transfer complies with the provisions of this clause and to receipt of such documentary evidence to substantiate that such transfer may be considered as a Permitted Transfer as a condition of its registration in the registers of the Company.</li>
</ul>
</p>
<h3>13. Drag Along</h3>
<p>13.1 If <?= $profitShare['b'] + $profitShare['c'] + 1 ?>% or more of the Shareholders by nominal value (“the Supermajority Shareholders”) wish to transfer all of their Shares (“the Sale Shares”) they shall be entitled to do so at market value to a bona fide arms length purchaser (the “Third Party Purchaser”) the Supermajority Shareholders shall have the option (the “Drag Along Option”) to require the remaining shareholders (“the Minority Shareholder”) to sell and transfer all his shares (the “Remaining Shares”) to the Third Party Purchaser or as the Third Party Purchaser shall direct in accordance with the provisions of this clause provided that the Supermajority Shareholders shall not be required to sell the Remaining Shares unless all of the Sale Shares and Remaining Shares are sold simultaneously to the Third Party Purchaser.</p>
<p>13.2 The Supermajority Shareholders may exercise the Drag Along Option by giving written notice to that effect to the Minority Shareholder (a “Drag Along Notice”) at least 15 working days before the transfer of the Sale Shares to the Third Party Purchaser. A Drag Along Notice shall specify that the Minority Shareholder is required to transfer the Remaining Shares pursuant to this clause, the person to whom they are to be transferred, the consideration for which the Remaining Shares are to be transferred (calculated in accordance with clause 12.3) and the proposed date of the transfer.</p>
<p>13.3 The consideration (in cash) for which the Minority Shareholder shall be obliged to sell each of the Remaining Shares shall be the same price per share as that at which the Supermajority Shareholders sell the Sale Shares to the Third Party.</p>
<p>13.4 Drag Along Notices shall be irrevocable but will lapse if for any reason there is not a sale of the Sale Shares by the Supermajority Shareholders to the Third Party Purchaser within ninety (90) days after the date of service of the Drag Along Notice. The Supermajority Shareholders shall be entitled to serve further Drag Along Notices following the lapse of any particular Drag Along Notice.</p>
<p>13.5 If the Minority Shareholder does not execute transfer(s) in respect of all the Remaining Shares held by him, the Minority Shareholder in default shall be deemed to have irrevocably appointed a person nominated for the purpose by the Supermajority Shareholders to be his agent and attorney to execute all necessary transfer(s) on his behalf and against receipt by the Company (on trust for such holder) of the purchase monies or any other consideration payable for the Remaining Shares, deliver such transfer(s) to the Third Party Purchaser (or has he may direct) and the Directors shall forthwith register the Third Party Purchaser (or his nominee) as the holder thereof and, after the Third Party Purchaser (or his nominee) has been registered as the holder, the validity of such proceedings shall not be questioned by any such person. It shall be no impediment to registration of a transfer of Shares under this sub-clause that no share certificate has been produced.</p>
<h3>14. Tag Along</h3>
<p>14.1 If <?= $profitShare['b'] + $profitShare['c'] + 1 ?>% or more of the Shareholders by nominal value (“the Selling Shareholders”) wish to transfer Shares which constitute a majority of the Shares in issue (the “Sale Shares”) to a bona fide third party purchaser (the “Purchaser”), the remaining Shareholders (“the Remaining Shareholder”) shall have the option (the “Tag Along Option”) to require the Purchaser to purchase all his Shares in the Company (the “Remaining Shareholders Shares”) in accordance with the provisions of this clause.</p>
<p>14.2 The Remaining Shareholder may exercise the Tag Along Option by giving written notice to that effect to the Selling Shareholders (a “Tag Along Notice”) at any time before the transfer of the Sale Shares to the Purchaser. A Tag Along Notice shall specify that:
<ul class="lower-alpha">
    <li>the Purchaser is required to purchase the Remaining Shareholders Shares pursuant to this sub-clause;</li>
    <li>the persons from whom they are to be transferred;</li>
    <li>the consideration for which the Remaining Shareholders Shares are to be transferred, (calculated in accordance with clause 13.3).</li>
</ul>
</p>
<p>14.3 The consideration (in cash) for which the Purchaser shall be obliged to purchase the Remaining Shareholders Shares shall be the same price per share as that at which the Selling Shareholders sells the Sale Shares to the Purchaser.</p>
<p>14.4 The Selling Shareholders shall not be permitted to transfer any of the Sale Shares to the Purchaser unless the Purchaser purchases all the Remaining Shareholders Shares simultaneously with the purchase of all of the Sale Shares in accordance with this sub-clause.</p>
<h3>15. Termination and liquidation</h3>
<p>15.1 Subject to clause 14.2, this agreement shall terminate:
<ul class="lower-alpha">
    <li>when, as a result of redemption or transfers of shares made in accordance with this agreement or the Articles, only one party remains as legal and beneficial holder of the shares in the Company; or</li>
    <li>when a resolution is passed by shareholders or creditors, or an order is made by a court or other competent body or person instituting a process that shall lead to the Company being wound up and its assets being distributed among the Company's creditors, shareholders or other contributors;</li>
    <li>following the making of a final distribution of the distributable reserves to the Shareholders upon the End Date.</li>
</ul>
</p>
<p>15.2 On termination of this agreement, the following clauses shall continue in force: clause 1 (interpretation); clause 6 (restrictions on parties); clause 10 (tax matters); this clause; clause 17 (confidentiality); clause 21 (assignment and other dealings); clause 22 (entire agreement); clause 23 (variation and waiver);clause 24 (costs); clause 25 (no partnership or agency); clause 26 (notices); clause 27 (severance); and clause 33 (governing law and jurisdiction.</p>
<p>15.3 Termination of this agreement shall not affect any rights, remedies, obligations or liabilities of the parties that have accrued up to the date of termination, including the right to claim damages in respect of any breach of the agreement which existed at or before the date of termination.</p>
<p>15.4 A party shall cease to be a party to this agreement for the purpose of receiving benefits and enforcing its rights from the date that it ceases to hold (or beneficially own) any shares in the capital of the Company (but without prejudice to any benefits and rights enjoyed prior to such cessation).</p>
<p>15.5 Where, following an event referred to in clause 14.1(b), the Company is to be wound up and its assets distributed, the parties shall agree a suitable basis for dealing with the interests and assets of the Company and shall endeavour to ensure that, before dissolution:
<ul class="lower-alpha">
    <li>all existing contracts of the Company are performed to the extent that there are sufficient resources;</li>
    <li>the Company shall not enter into any new contractual obligations; and</li>
    <li>the Company's assets are distributed as soon as practical.</li>
</ul>
</p>
<h3>16. Intellectual Property</h3>
<p>All of the parties acknowledge that any Intellectual Property appertaining to the Project is held by the A Shareholder under the Licence and that neither the Company, the B Shareholder or any of the C Shareholders shall have any other rights or interest thereto.</p>
<h3>17. Status of agreement</h3>
<p>17.1 Each party shall, to the extent that it is able to do so, exercise all its voting rights and other powers in relation to the Company to procure that the provisions of this agreement are properly and promptly observed and given full force and effect according to the spirit and intention of the agreement.</p>
<p>17.2 If there is an inconsistency between any of the provisions of this agreement and the provisions of the Articles, the provisions of this agreement shall prevail as between the parties.</p>
<p>17.3 The parties shall, when necessary, exercise their powers of voting and any other rights and powers they have to amend, waive or suspend a conflicting provision in the Articles to the extent necessary to permit the Company and its Business to be administered as provided in this agreement.</p>
<h3>18. Confidentiality</h3>
<p>18.1 In this clause, Confidential Information means any information (however recorded or preserved) which:
<ul class="lower-alpha">
    <li>each of the Shareholders may have or acquire (whether before, on or after the date of this agreement) in relation to the customers, suppliers, business, assets or affairs or plans, intentions or market opportunities of the Company (including, without limitation, any information provided pursuant to clause 8); or</li>
    <li>each of the Shareholders or any member of its Group may have or acquire (whether before, on or after the date of this agreement) in relation to the customers, suppliers, business, assets or affairs or plans, intentions or market opportunities of the other party or any member of the other party's Group, as a consequence of the negotiations relating to this agreement or any other agreement or document referred to in this agreement or the performance of the agreement or any other agreement or document referred to in this agreement; or</li>
    <li>relates to the contents of this agreement (or any agreement or document referred to in this agreement or agreement or arrangement entered into pursuant to this agreement), but excludes the information in clause 17.2.</li>
</ul>
</p>
<p>18.2 Information is not Confidential Information if:
<ul class="lower-alpha">
    <li>it is or becomes generally available to the public (other than as a result of its disclosure in breach of this agreement); or</li>
    <li>a party can establish to the reasonable satisfaction of the other party that it found out the information from a person not connected with the other party or its Group and that such person is not under any obligation of confidence in respect of the information; or</li>
    <li>a party can establish to the reasonable satisfaction of the other party that the information was known to the first party before the date of this agreement and that it was not under any obligation of confidence in respect of the information; or</li>
    <li>the parties agree in writing that it is not confidential.</li>
</ul>
</p>
<p>18.3 Each of the Shareholders shall at all times keep confidential (and use all reasonable endeavours to ensure that its employees, agents, subsidiaries, and the employees and agents of such subsidiaries, and the Company shall keep confidential) any Confidential Information and shall not use such Confidential Information except for the purpose of exercising or performing its rights and obligations under or in connection with this agreement, and shall not disclose such Confidential Information except:
<ul class="lower-alpha">
    <li>to another member of the that Shareholder’s Group or to that party's professional advisers where such disclosure is for a purpose related to the operation of this agreement; or</li>
    <li>with the written consent of such of the Company or the party or any member of its Group that the information relates to; or</li>
    <li>as may be required by law or by the rules of any recognised stock exchange, or governmental or other regulatory authority or by a court or other authority of competent jurisdiction, provided that, to the extent it is legally permitted to do so, it gives the other party as much notice of such disclosure as possible; or</li>
    <li>a party may, provided it has reasonable grounds to believe that the other party is involved in activity that may constitute a criminal offence under the Bribery Act 2010, disclose Confidential Information to the Serious Fraud Office without first informing the other party of such disclosure; or</li>
    <li>to any tax authority to the extent reasonably required for the purposes of the tax affairs of the party concerned or any member of its Group.</li>
</ul>
</p>
<p>18.4 On termination of this agreement, each of the Shareholders shall (and shall use all reasonable endeavours to procure that its subsidiaries, and its officers and employees and those of its subsidiaries and the Company shall):
<ul class="lower-alpha">
    <li>return to the other party all documents and materials (and any copies) containing, reflecting, incorporating or based on the other party's Confidential Information; and</li>
    <li>erase all the other party's Confidential Information from computer and communications systems and devices used by it, including such systems and data storage services provided by third parties (to the extent technically and legally practicable), provided that a recipient party (and/or the Company, as the case may be) may retain documents and materials containing, reflecting, incorporating or based on the other party's Confidential Information to the extent required by law or any applicable governmental or regulatory authority.</li>
</ul>
</p>
<h3>19. Announcements</h3>
<p>19.1 Subject to clause 18.2 no party shall make, or permit any person to make, any public announcement, communication or circular (announcement) concerning the existence, subject matter or terms of this agreement, the wider transactions contemplated by it, or the relationship between the parties, without the prior written consent of the other parties and the Company.</p>
<p>19.2 Where an announcement is required by law or any governmental or regulatory authority or by any court or other authority of competent jurisdiction, the party required to make the announcement shall promptly notify the other parties and the Company. The party concerned shall make all reasonable attempts to agree the contents of the announcement before making it.</p>
<h3>20. Developer</h3>
<p>20.1 The Developer undertakes to the A Shareholder and the C Shareholders separately to observe and perform the Developer’s obligations in the Development Agreement.</p>
<p>20.2 To enable the Company to comply with its obligations under clause 8.3(b) the Developer shall:
<ul class="lower-alpha">
    <li>ensure that it shall at all times maintain accurate and complete accounting and other financial records including all tax computations and related documents and correspondence with HM Revenue & Customs in accordance with the requirements of all applicable laws and generally accepted accounting principles applicable in the United Kingdom;</li>
    <li>shall allow the authorised representatives of the Company access at all reasonable times and by prior appointment to examine the books and records of the Developer and to discuss the Developer's performance to date;</li>
    <li>supply to the Company on a monthly basis such financial information as the Board may consider reasonable to ensure that the Company is aware of the progress with the Project to include:
        <ul class="lower-roman">
            <li>a copy of the accounts of the Developer prepared in accordance with the laws applicable in and the accounting standards, principles and practices generally accepted in the United Kingdom, within 4 months of the end of the year to which the accounts relate; and</li>
            <li>a monthly update, together with copies of all interim reports received by the Developer from the Monitoring Surveyor and highlighting any significant (i.e. more than 5% in relation to any one matter or which would take the total overrun over 10%) in respect of the costs of the Project as agreed between the Developer and the Company.</li>
        </ul>
    </li>
</ul>
</p>
<p>20.3 Where the Company shall lawfully in accordance with clause 16 of the Development Agreement give notice to determine the Development Agreement and take control of the Project the Developer covenants with the Company and the A Shareholder and the C Shareholders respectively that upon being called upon to do so by the Company the Developer will:
<ul class="lower-alpha">
    <li>comply with the consequence of termination provisions contained in the Development Agreement;</li>
    <li>procure the assignment/novation to the Company of all contracts and collateral warranties as defined in the Development Agreement requested to be assigned to it by the Company; and</li>
    <li>Subject to the provisions of Clause 19.4, transfer to the A Shareholder the B Shares as consideration for the A Shareholder overseeing the completion of the Project to which the C Shareholders agree to give consent to such transfer in these circumstances.</li>
</ul>
</p>
<p>20.4 Provided that, where a Developer fails to perform its duties under the Development Agreement solely as a result of the Developer or an individual as a director of the Developer responsible for overseeing the project is certified by a general medical practitioner as unfit to perform his duties in respect of the project for more than 4 weeks, then in such circumstances the number of B shares to be transferred to the A shareholder referred to in Clause 19.3(c) shall be reduced to 50% of the Developers shareholding.</p>
<h3>21. Further assurance</h3>
<p>21.1 Each party shall (and shall use all reasonable endeavours to procure that any relevant third party shall) promptly execute and deliver such documents and perform such acts as the other parties may reasonably require from time to time for the purpose of giving full effect to this agreement.</p>
<h3>22. Assignment and other dealings</h3>
<p>22.1 Neither party shall assign, transfer, mortgage, charge, sub-contract, declare a trust over or deal in any other manner with any or all of its rights and obligations under this agreement (or any other document referred to in it) without the prior written consent of the other parties.</p>
<h3>23. Entire agreement</h3>
<p>23.1 This agreement (together with any documents referred to in it) constitute the entire agreement between the parties and supersede and extinguish all previous discussions, correspondence, negotiations, drafts, agreements, promises, assurances, warranties, representations, arrangements and understandings between them, whether written or oral, relating to their subject matter.</p>
<p>23.2 Each party acknowledges that in entering into this agreement (and any documents referred to in it), it does not rely on, and shall have no remedies in respect of, any statement, representation, assurance or warranty (whether made innocently or negligently) that is not set out in this agreement or those documents.</p>
<h3>24. Variation and waiver</h3>
<p>24.1 No variation of this agreement shall be effective unless it is in writing and signed by the parties (or their authorised representatives).</p>
<p>24.2 A waiver of any right or remedy under this agreement or by law is only effective if given in writing and signed by the person waiving such right or remedy. Any such waiver shall apply only to the circumstances for which it is given and shall not be deemed a waiver of any subsequent breach or default.</p>
<p>24.3 A failure or delay by any person to exercise any right or remedy provided under this agreement or by law shall not constitute a waiver of that or any other right or remedy, nor shall it prevent or restrict any further exercise of that or any other right or remedy. No single or partial exercise of any right or remedy provided under this agreement or by law shall prevent or restrict the further exercise of that or any other right or remedy.</p>
<p>24.4 A person that waives a right or remedy provided under this agreement or by law in relation to one person, or takes or fails to take any action against that person, does not affect its rights or remedies in relation to any other person.</p>
<h3>25. Costs</h3>
<p>Except as expressly provided in this agreement, each of the Shareholders shall pay its own costs and expenses incurred in connection with the negotiation, preparation, execution and performance of this agreement (and any documents referred to in it).</p>
<h3>26. No partnership or agency</h3>
<p>26.1 Nothing in this agreement is intended to, or shall be deemed to, establish any partnership between the parties or constitute any party the agent of another party.</p>
<p>26.2 Each of the Shareholders confirms that it is acting on its own behalf and not for the benefit of any other person.</p>
<h3>27. Notices</h3>
<p>27.1 A notice given to a party under or in connection with this agreement:
<ul class="lower-alpha">
    <li>shall be in writing;</li>
    <li>shall be signed by or on behalf of the party giving it;</li>
    <li>shall be sent to the relevant party for the attention of the contact and to the address or e mail specified in clause 27.2, or such other address, email or contact as that party may notify to the other in accordance with the provisions of this clause 27; and</li>
    <li>shall be:
        <ul class="lower-roman">
            <li>delivered by hand; or</li>
            <li>sent by pre-paid first class post or another next working day delivery service; or</li>
            <li>sent by email to an email address notified by the relevant party to the other party for such purpose.</li>
        </ul>
    </li>
</ul>
</p>
<p>27.2 The addresses and e mail addresses for service of notices are:
<ul class="lower-alpha">
    <li>
        A Shareholder<br/>
        For the attention of: Benjamin James Smith, Estateducation Ventures Ltd<br/>
        Address: <?= getenv('COMPANY_REG_ADDRESS') ?><br/>
        Email: ben.james@estateducation.co.uk
    </li>
    <li>
        B Shareholder<br/>
        <?php if ($company): ?>
        For the attention of: <?= $company->getName() ?><br/>
        Address: <?= $company->getAddress()->getFormatted() ?><br/>
        Email: <?= $company->getEmail() ?>
               <?php else: ?>
        For the attention of: <?= $person->getName() ?><br/>
        Address: <?= $person->getAddress()->getSmallFormatted() ?><br/>
        Email: <?= $person->getEmail() ?>
               <?php endif; ?>
    </li>
    <li>
        C Shareholder<br/>
        <?php if ($invested): ?>
        <ul class="lower-roman">
                <?php foreach ($investors as $investor):?>
            <li>
                    <?php if ($this->clientAccount->id == $investor->accountId) : ?>
                For the attention of: <?= $investor->name ?><br/>
                Address: <?= $investor->address ?><br/>
                Email: <?= $investor->email ?>
                       <?php else : ?>
                For the attention of: **********<br/>
                Address: **********<br/>
                Email: **********
                <?php endif ?>
            </li>
            <?php endforeach ?>
        </ul>
        <?php else: ?>
        C Shareholder details remain confidential at all times inline with GDPR. You are only able to see your own shareholding and notice information after investing into a project.
        <?php endif ?>
    </li>
    <li>the Company hello@jaevee.co.uk</li>
</ul>
</p>
<p>27.3 A party may change its details for service of notices by giving notice to the other party.</p>
<p>27.4 Delivery of a notice is deemed to have taken place (provided that all other requirements in this clause have been satisfied):
<ul class="lower-alpha">
    <li>if delivered by hand, at the time the notice is left at the address; or</li>
    <li>if sent by pre-paid first class post or another next working day delivery service to an address in the United Kingdom, at 9.00 am on the second Business Day after posting; or</li>
    <li>if sent by email, at the time of transmission; and</li>
    <li>if deemed receipt under the previous paragraphs of this clause 26.3 is not within business hours (meaning 9.00 am to 5.30 pm Monday to Friday on a day that is not a public holiday in the place of deemed receipt), at 9.00 am on the day when business next starts in the place of deemed receipt. For the purposes of this clause, all references to time are to local time in the place of deemed receipt.</li>
</ul>
</p>
<p>27.5 To prove service, it is sufficient to prove that:
<ul class="lower-alpha">
    <li>if delivered by hand, the notice was delivered to the correct address; or</li>
    <li>if sent by post, the envelope containing the notice was properly addressed, paid for and posted; or</li>
    <li>if sent by email, the notice was properly addressed and sent to the email address of the recipient.</li>
</ul>
</p>
<p>27.6 This clause 27 does not apply to the service of any proceedings or other documents in any legal action.</p>
<h3>28. Severance</h3>
<p>28.1 If any provision or part-provision of this agreement is or becomes invalid, illegal or unenforceable, it shall be deemed modified to the minimum extent necessary to make it valid, legal and enforceable. If such modification is not possible, the relevant provision or part-provision shall be deemed deleted. Any modification to or deletion of a provision or part-provision under this clause shall not affect the validity and enforceability of the rest of this agreement.</p>
<p>28.2 If any provision or part-provision of this agreement is invalid, illegal or unenforceable, the parties shall negotiate in good faith to amend such provision so that, as amended, it is legal, valid and enforceable, and, to the greatest extent possible, achieves the intended commercial result of the original provision.</p>
<h3>29. Agreement survives Completion</h3>
<p>29.1 This agreement (other than obligations that have already been fully performed) remains in full force after Completion.</p>
<h3>30. Third party rights</h3>
<p>30.1 This agreement does not give rise to rights under the Contracts (Rights of Third Parties) Act 1999 to enforce any term of this agreement.</p>
<p>30.2 The rights of the parties to rescind or vary this agreement are not subject to the consent of any other person.</p>
<h3>31. Counterparts</h3>
<p>31.1 This agreement may be executed in any number of counterparts, each of which when executed shall constitute a duplicate original, but all the counterparts shall together constitute the one agreement.</p>
<p>31.2 Transmission of an executed counterpart of this agreement (but for the avoidance of doubt not just a signature page) by email (in PDF, JPEG or other agreed format), shall take effect as delivery of an executed counterpart of this agreement.</p>
<p>31.3 No counterpart shall be effective until each party has executed and delivered at least one counterpart.</p>
<h3>32. Professional Advice</h3>
<p>32.1 Each of the Shareholders acknowledges that it has been brought to their attention that they should take independent legal, financial and such other professional advice as they deem prudent upon the Investment Information supplied and in making their decision to enter into this Shareholders Agreement. Each of the Shareholders acknowledge and confirm that they have in reaching the decision to enter into this Shareholders Agreement taking into account such advice and have either taken such advice or freely decided of their own volition that they choose not to do so.</p>
<h3>33. Rights and remedies</h3>
<p>33.1 The rights and remedies provided under this agreement are in addition to, and not exclusive of, any rights or remedies provided by law.</p>
<h3>34. Governing law and jurisdiction</h3>
<p>34.1 This agreement and any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with it or its subject matter or formation shall be governed by and construed in accordance with the law of England and Wales.</p>
<p>34.2 Each party irrevocably agrees that the courts of England and Wales shall have exclusive jurisdiction to settle any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with this agreement or its subject matter or formation.</p>
<br/>
<p>This agreement has been entered into on the date stated at the beginning of it. For C Shareholders, this agreement is entered into upon confirmation of their investment in this Project on JaeVee's Platform.</p>
<h3>Schedule 1<br/>Matters reserved for shareholder approval</h3>
<ol>
    <li>Altering in any respect the Articles or the rights attaching to any of the shares in the Company.</li>
    <li>Permitting the registration of any person as a member of the Company other than the parties in relation to their initial investment and any Permitted Transferees.</li>
    <li>The issue of any shares other than the Shares or other equity securities (within the meaning of section 560(1) of the CA 2006) to any person.</li>
    <li>A variation of the End Date.</li>
    <li>Increasing or reducing the amount of the Company's issued share capital, granting any option or other interest over or in its share capital, redeeming or purchasing any of its own shares or effecting any other reorganisation of its share capital.</li>
    <li>Issuing any loan capital in the Company or entering into any commitment with any person with respect to the issue of any loan capital.</li>
    <li>The transfer of the Shares not comprising a Permitted Transfer and/or the approval of a Permitted Transfer pursuant to clause 11.2(e).</li>
    <li>Applying for the listing or trading of any shares or debt securities on any stock exchange or market.</li>
    <li>Passing any resolution for the Company's winding up or presenting any petition for its administration unless it has become insolvent).</li>
    <li>Changing the nature of the Business or commencing any new business by the Company which is not ancillary or incidental to the Business.</li>
    <li>Acquiring shares in any other company or participating in any partnership or joint venture (incorporated or not).</li>
    <li>Amalgamating or merging with any other company or business undertaking.</li>
    <li>Making any acquisition or disposal by the Company of any material asset(s) otherwise than in the ordinary course of the Business.</li>
    <li>Creating or granting any Encumbrance over the whole or any part of the undertaking or other assets of the Company other than to the Principal Lender in respect of the Secured Debt or over any shares in the Company or agreeing to do so.</li>
    <li>Making any loan (otherwise than by way of deposit with a bank or other institution the normal business of which includes the acceptance of deposits or in the ordinary course of business) or granting any credit (other than in the normal course of trading) or giving any guarantee (other than in the normal course of trading) or indemnity.</li>
    <li>Making a distribution to the shareholders on the End Date.</li>
    <li>Altering any mandate given to the Company's bankers save as is necessary to give effect to the provisions of this agreement relating to any matter concerning the operation of the Company's bank accounts.</li>
    <li>Entering into any arrangement, contract or transaction outside the normal course of the Business or otherwise than on arm's length terms.</li>
    <li>Giving notice of termination of any arrangements, contracts or transactions which are material in the nature of the Business.</li>
    <li>Changing the auditors of the Company or its Financial Year end.</li>
    <li>Making or permitting to be made any material change in the accounting policies and principles adopted by the Company in the preparation of its audited and management accounts except as may be required to ensure compliance with relevant accounting standards under the CA 2006 or any other generally accepted accounting principles in the United Kingdom.</li>
    <li>Establishing or amending any profit-sharing, share option, bonus or other incentive scheme of any nature for directors.</li>
    <li>Establishing any pension scheme or granting any pension rights to any director or officer.</li>
    <li>Dismissing any director, subject to clause 20.</li>
    <li>Agreeing to offer employment to any person.</li>
    <li>Entering into or varying any contract of employment providing for the payment of remuneration (including pension and other benefits) in excess of £10,000 per annum.</li>
    <li>The payment of any sums not in the ordinary course of the Business provided that dividends declared in accordance with the terms of this agreement, payments in the normal course of the Business, repayment of the Senior Debt (together with interest thereon) and taxation or other sums required by law to be paid prior to the End Date are specifically excluded from this requirement.</li>
</ol>
<h3>Schedule 2<br/>Deed of Adherence</h3>
<p>THIS DEED is made on the <?= date('jS \d\a\y \of F Y') ?> and made between ("<strong>the Parties</strong>"):</p>
<ul>
    <li>the existing Shareholders of the Company; and</li>
    <li><?= $this->clientAccount->getAccountName() ?> ("<strong>the New Shareholder</strong>")</li>
</ul>
<ol>
    <li>This Deed of Adherence is supplemental to the Shareholders Agreement above dated <?= $project->getCreatedOn()->format('jS \o\f F Y') ?> and made between the Parties ("<strong>Agreement</strong>")</li>
    <li>Shareholder A proposes to transfer <?= $investment ? number_format($shareTransfer, 0) : ' X ' ?> C class shares to the New Shareholder in exchange for <?= $investment ? $this->finance->format($shareCost, true) : ' £X ' ?>.</li>
    <li>The exiting Shareholders have consented to the proposed transfer of Shares to the New Shareholder subject to the New Shareholder entering into this Deed of Adherence.</li>
    <li>The New Shareholder hereby agrees that subject to the transfer of the shares to them that they will abide by the terms of the Shareholders Agreement in all respects and acknowledges that the shares to be transferred to them will be held by them in accordance with and subject to and upon the terms and conditions set out in the Shareholders Agreement.</li>
    <li>For the purpose of this deed all terms used in this deed will be interpreted in accordance with the terms of the Agreement save where the context hereof otherwise requires.</li>
    <li>The Parties hereto acknowledge that the provisions of the Agreement shall continue in full force and effect save as varied by this deed.</li>
</ol>
<h3>Schedule 3<br/>Investors</h3>
<?php if ($invested): ?>
    <?php if (count($investors) > 0): ?>
<table>
    <tr>
        <th>Name</th>
        <th>Date agreed</th>
    </tr>
        <?php foreach ($investors as $investor):?>
    <tr>
            <?php if ($this->clientAccount->id == $investor->accountId) : ?>
        <td>
            <p style="margin: 0 1em 0 0; font-weight: 500"><?= $investor->name ?></p>
            <p style="margin: 0 1em 0 0"><?= $investor->companyName ? $investor->companyName : '' ?></p>
        </td>
        <td><?= $investor->paidOn ?></td>
        <?php else : ?>
        <td>
            <p style="margin: 0 1em 0 0; font-weight: 500">**********</p>
        </td>
        <td>**********</td>
        <?php endif ?>
    </tr>
    <?php endforeach ?>
</table>
<?php else: ?>
<p>Currently no investors</p>
<?php endif ?>
<?php else: ?>
<p>Investor details remain confidential at all times inline with GDPR. You are only able to see your own shareholding and notice information after investing into a project.</p>
<?php endif ?>
