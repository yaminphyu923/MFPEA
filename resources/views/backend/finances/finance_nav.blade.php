<div class="container-fluid">
    <div class="d-flex justify-content-start">

        <div class="dropdown show my-3">
            <a class="btn btn-secondary dropdown-toggle mr-1 text-white" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #4B49AC;">
                Admin Worksheet
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('ad-0101-finance-active')" href="{{ route('ad-finance.index') }}">FIDSL-Ad-01-01</a>
                <a class="dropdown-item @yield('ad-0201-finance-active')" href="{{ route('indexAd0201') }}">FIDSL-Ad-02-01</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #4B49AC;">
                GC Analysis
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('car0501-finance-active')" href="{{ route('car0501-finance.index') }}">F-CAR-05-01</a>
                <a class="dropdown-item @yield('car0501-17-finance-active')"
                    href="{{ route('car0501s-17-finance.index') }}">F-CAR-05-01</a>
                <a class="dropdown-item @yield('fche040029-finance-active')"
                    href="{{ route('fche040029-finance.index') }}">F-Che-04-00/29</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Heavy Metals and Minerals
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('car0500-finance-active')" href="{{ route('car0500-finance.index') }}">F-CAR-05-00</a>
                <a class="dropdown-item @yield('che040036-finance-active')"
                    href="{{ route('che040036-finance.index') }}">FIDSL-Che-04-01/36</a>
                <a class="dropdown-item @yield('che040037-finance-active')"
                    href="{{ route('che040037-finance.index') }}">FIDSL-Che-04-01/37</a>
                <a class="dropdown-item @yield('che040040-finance-active')"
                    href="{{ route('che040040-finance.index') }}">FIDSL-Che-04-01/40</a>
                <a class="dropdown-item @yield('che040141-finance-active')"
                    href="{{ route('che040141-finance.index') }}">FIDSL-Che-04-01/41</a>
                <a class="dropdown-item @yield('che040042-finance-active')"
                    href="{{ route('che040042-finance.index') }}">FIDSL-Che-04-01/42</a>
                <a class="dropdown-item @yield('che040043-finance-active')"
                    href="{{ route('che040043-finance.index') }}">FIDSL-Che-04-01/43</a>
                <a class="dropdown-item @yield('che040044-finance-active')"
                    href="{{ route('che040044-finance.index') }}">FIDSL-Che-04-01/44</a>
                <a class="dropdown-item @yield('che040045-finance-active')"
                    href="{{ route('che040045-finance.index') }}">FIDSL-Che-04-01/45</a>
                <a class="dropdown-item @yield('che040146-finance-active')"
                    href="{{ route('che040146-finance.index') }}">FIDSL-Che-04-01/46</a>
                <a class="dropdown-item @yield('che040047-finance-active')"
                    href="{{ route('che040047-finance.index') }}">FIDSL-Che-04-01/47</a>
                <a class="dropdown-item @yield('che040048-finance-active')"
                    href="{{ route('che040048-finance.index') }}">FIDSL-Che-04-01/48</a>


                <a class="dropdown-item @yield('che040049-finance-active')"
                    href="{{ route('che040049-finance.index') }}">FIDSL-Che-04-01/49</a>
                <a class="dropdown-item @yield('che040050-finance-active')"
                    href="{{ route('che040050-finance.index') }}">FIDSL-Che-04-01/50</a>

            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Micro Worksheet
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('f03m05-finance-active')"
                    href="{{ route('f03m05-finance.index') }}">FIDSL-03-M-05</a>
                <a class="dropdown-item @yield('f03m06-finance-active')"
                    href="{{ route('f03m06-finance.index') }}">FIDSL-03-M-06</a>
                <a class="dropdown-item @yield('fm010101-finance-active')" href="{{ route('m010101-finance.index') }}">F-M01-01-01</a>
                <a class="dropdown-item @yield('fm020101-finance-active')" href="{{ route('m020101-finance.index') }}">F-M02-01-01</a>
                <a class="dropdown-item @yield('fm030101-finance-active')" href="{{ route('m030101-finance.index') }}">F-M03-01-01</a>
                <a class="dropdown-item @yield('fm040101-finance-active')" href="{{ route('m040101-finance.index') }}">F-M04-01-01</a>
                <a class="dropdown-item @yield('fmar0501-finance-active')"
                    href="{{ route('fmar0501-finance.index') }}">F-MAR-05-01</a>


            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Nutrition Analysis
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                {{-- <a class="dropdown-item @yield('fcar0501-finance-active')"
                    href="{{ route('fcar0501-finance.index') }}">F-CAR-05-01</a> --}}
                <a class="dropdown-item @yield('fcar0502-finance-active')"
                    href="{{ route('fcar0502-finance.index') }}">F-CAR-05-02</a>
                <a class="dropdown-item @yield('fche040101-finance-active')"
                    href="{{ route('fche040101-finance.index') }}">FIDSL-Che-04-01/01</a>
                <a class="dropdown-item @yield('fche040102-finance-active')"
                    href="{{ route('fche040102-finance.index') }}">FIDSL-Che-04-01/02</a>
                <a class="dropdown-item @yield('fche040103-finance-active')"
                    href="{{ route('fche040103-finance.index') }}">FIDSL-Che-04-01/03</a>
                <a class="dropdown-item @yield('fche040104-finance-active')"
                    href="{{ route('fche040104-finance.index') }}">FIDSL-Che-04-01/04</a>
                <a class="dropdown-item @yield('fche040105-finance-active')"
                    href="{{ route('fche040105-finance.index') }}">FIDSL-Che-04-01/05</a>
                <a class="dropdown-item @yield('fche040106-finance-active')"
                    href="{{ route('fche040106-finance.index') }}">FIDSL-Che-04-01/06</a>
                <a class="dropdown-item @yield('fche040107-finance-active')"
                    href="{{ route('fche040107-finance.index') }}">FIDSL-Che-04-01/07</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Oil Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('oilfcar0502-finance-active')"
                    href="{{ route('oilfcar0502-finance.index') }}">F-CAR-05-02</a>

                <a class="dropdown-item @yield('fche040108-finance-active')"
                    href="{{ route('fche040108-finance.index') }}">FIDSL-Che-04-01/08</a>

                <a class="dropdown-item @yield('fche040109-finance-active')"
                    href="{{ route('fche040109-finance.index') }}">FIDSL-Che-04-01/09</a>

                <a class="dropdown-item @yield('fche040110-finance-active')"
                    href="{{ route('fche040110-finance.index') }}">FIDSL-Che-04-01/10</a>

                <a class="dropdown-item @yield('fche040111-finance-active')"
                    href="{{ route('fche040111-finance.index') }}">FIDSL-Che-04-01/11</a>

                <a class="dropdown-item @yield('fche040112-finance-active')"
                    href="{{ route('fche040112-finance.index') }}">FIDSL-Che-04-01/12</a>

                <a class="dropdown-item @yield('fche040113-finance-active')"
                    href="{{ route('fche040113-finance.index') }}">FIDSL-Che-04-01/13</a>

                <a class="dropdown-item @yield('fche040114-finance-active')"
                    href="{{ route('fche040114-finance.index') }}">FIDSL-Che-04-01/14</a>

                <a class="dropdown-item @yield('fche040115-finance-active')"
                    href="{{ route('fche040115-finance.index') }}">FIDSL-Che-04-01/15</a>
                {{-- <a class="dropdown-item @yield('f04che06-finance-active')"
                    href="{{ route('f04che06-finance.index') }}">FIDSL-04-Che/06</a>
                <a class="dropdown-item @yield('f04che07-finance-active')"
                    href="{{ route('f04che07-finance.index') }}">FIDSL-04-Che/07</a>
                <a class="dropdown-item @yield('f04che08-finance-active')"
                    href="{{ route('f04che08-finance.index') }}">FIDSL-04-Che/08</a>
                <a class="dropdown-item @yield('f04che09-finance-active')"
                    href="{{ route('f04che09-finance.index') }}">FIDSL-04-Che/09</a>
                <a class="dropdown-item @yield('f04che10-finance-active')"
                    href="{{ route('f04che10-finance.index') }}">FIDSL-04-Che/10</a>
                <a class="dropdown-item @yield('f04che11-finance-active')"
                    href="{{ route('f04che11-finance.index') }}">FIDSL-04-Che/11</a>
                <a class="dropdown-item @yield('f04che12-finance-active')"
                    href="{{ route('f04che12-finance.index') }}">FIDSL-04-Che/12</a>
                <a class="dropdown-item @yield('f04che14-finance-active')"
                    href="{{ route('f04che14-finance.index') }}">FIDSL-04-Che/14</a> --}}
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Others Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                {{-- <a class="dropdown-item @yield('f05-finance-active')" href="{{ route('f05-finance.index') }}">F-CAR-05-01</a> --}}
                <a class="dropdown-item @yield('fche040039-finance-active')"
                    href="{{ route('fche040039-finance.index') }}">FIDSL-Che-04-00/39</a>

                <a class="dropdown-item @yield('fche040051-finance-active')"
                    href="{{ route('fche040051-finance.index') }}">FIDSL-Che-04-00/51</a>
                <a class="dropdown-item @yield('fche040052-finance-active')"
                    href="{{ route('fche040052-finance.index') }}">FIDSL-Che-04-00/52</a>
                <a class="dropdown-item @yield('fche040028-finance-active')"
                    href="{{ route('fche040028-finance.index') }}">FIDSL-Che-04-00/28</a>

                <a class="dropdown-item @yield('fche040038-finance-active')"
                    href="{{ route('fche040038-finance.index') }}">FIDSL-Che-04-00/38</a>

                <a class="dropdown-item @yield('fche040027-finance-active')"
                    href="{{ route('fche040027-finance.index') }}">FIDSL-Che-04-00/27</a>

                <a class="dropdown-item @yield('fche040123-finance-active')"
                    href="{{ route('fche040123-finance.index') }}">FIDSL-Che-04-01/23</a>

                <a class="dropdown-item @yield('fche040121-finance-active')"
                    href="{{ route('fche040121-finance.index') }}">FIDSL-Che-04-01/21</a>

                <a class="dropdown-item @yield('fche040120-finance-active')"
                    href="{{ route('fche040120-finance.index') }}">FIDSL-Che-04-01/20</a>

                <a class="dropdown-item @yield('fche040122-finance-active')"
                    href="{{ route('fche040122-finance.index') }}">FIDSL-Che-04-01/22</a>

                <a class="dropdown-item @yield('fche040125-finance-active')"
                    href="{{ route('fche040125-finance.index') }}">FIDSL-Che-04-01/25</a>

                <a class="dropdown-item @yield('fche040126-finance-active')"
                    href="{{ route('fche040126-finance.index') }}">FIDSL-Che-04-01/26</a>

                <a class="dropdown-item @yield('fche040124-finance-active')"
                    href="{{ route('fche040124-finance.index') }}">FIDSL-Che-04-01/24</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Water Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('wtfcar0502-finance-active')"
                    href="{{ route('wtfcar0502-finance.index') }}">F-CAR-05-02</a>
                <a class="dropdown-item @yield('fche040116-finance-active')"
                    href="{{ route('fche040116-finance.index') }}">FIDSL-Che-04-01/16</a>
                <a class="dropdown-item @yield('fche040117-finance-active')"
                    href="{{ route('fche040117-finance.index') }}">FIDSL-Che-04-01/17</a>
                <a class="dropdown-item @yield('fche040118-finance-active')"
                    href="{{ route('fche040118-finance.index') }}">FIDSL-Che-04-01/18</a>
                <a class="dropdown-item @yield('fche040119-finance-active')"
                    href="{{ route('fche040119-finance.index') }}">FIDSL-Che-04-01/19</a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-start">

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Alcohol Analysis
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('aa_fcar0501_finance-active')"
                    href="{{ route('aa_fcar0501_finance.index') }}">F-CAR-05-01</a>
            </div>
        </div>

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Wastewater
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('fcar0500_finance-active')"
                    href="{{ route('fcar0500_finance.index') }}">F-CAR-05-00</a>
                <a class="dropdown-item @yield('fche040053-finance-active')"
                    href="{{ route('fche040053-finance.index') }}">FIDSL-Che-04-00/53</a>
                <a class="dropdown-item @yield('fche040055-finance-active')"
                    href="{{ route('fche040055-finance.index') }}">FIDSL-Che-04-00/55</a>
                <a class="dropdown-item @yield('fche040056-finance-active')"
                    href="{{ route('fche040056-finance.index') }}">FIDSL-Che-04-00/56</a>
                <a class="dropdown-item @yield('fche040054-finance-active')"
                    href="{{ route('fche040054-finance.index') }}">FIDSL-Che-04-00/54</a>
                <a class="dropdown-item @yield('fche040057-finance-active')"
                    href="{{ route('fche040057-finance.index') }}">FIDSL-Che-04-00/57</a>
                <a class="dropdown-item @yield('fche040058-finance-active')"
                    href="{{ route('fche040058-finance.index') }}">FIDSL-Che-04-00/58</a>
                <a class="dropdown-item @yield('fche040059-finance-active')"
                    href="{{ route('fche040059-finance.index') }}">FIDSL-Che-04-00/59</a>
                <a class="dropdown-item @yield('fche040060-finance-active')"
                    href="{{ route('fche040060-finance.index') }}">FIDSL-Che-04-00/60</a>
                <a class="dropdown-item @yield('fche040061-finance-active')"
                    href="{{ route('fche040061-finance.index') }}">FIDSL-Che-04-00/61</a>
                <a class="dropdown-item @yield('fche040062-finance-active')"
                    href="{{ route('fche040062-finance.index') }}">FIDSL-Che-04-00/62</a>
                <a class="dropdown-item @yield('fche040063-finance-active')"
                    href="{{ route('fche040063-finance.index') }}">FIDSL-Che-04-00/63</a>
                <a class="dropdown-item @yield('fche040064-finance-active')"
                    href="{{ route('fche040064-finance.index') }}">FIDSL-Che-04-00/64</a>
            </div>
        </div>

        {{-- <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Chemical Report
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('ad01341-finance-active')"
                    href="{{ route('ad01341_finances.index') }}">FIDSL-Ad-06-03-01341 / 22</a>
                <a class="dropdown-item @yield('ad01087-finance-active')"
                    href="{{ route('ad01087_finances.index') }}">FIDSL-Ad-06-03-01087 / 22</a>
                <a class="dropdown-item @yield('ad00879-finance-active')"
                    href="{{ route('ad00879_finances.index') }}">FIDSL-Ad-06-03-00879 / 22</a>
                <a class="dropdown-item @yield('ad01288-finance-active')"
                    href="{{ route('ad01288_finances.index') }}">FIDSL-Ad-06-03-01288 / 22</a>
                <a class="dropdown-item @yield('ad01354-finance-active')"
                    href="{{ route('ad01354_finances.index') }}">FIDSL-Ad-06-03-01354 / 22</a>
                <a class="dropdown-item @yield('ad01351-finance-active')"
                    href="{{ route('ad01351_finances.index') }}">FIDSL-Ad-06-03-01351 / 22</a>
            </div>
        </div>

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Microbiological Report
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('ad01250-finance-active')"
                    href="{{ route('ad01250_finances.index') }}">FIDSL-Ad-06-03-01250 / 22</a>
                <a class="dropdown-item @yield('ad01254-finance-active')"
                    href="{{ route('ad01254_finances.index') }}">FIDSL-Ad-06-03-01254 / 22</a>
                <a class="dropdown-item @yield('ad00084-finance-active')"
                    href="{{ route('ad00084_finances.index') }}">FIDSL-Ad-06-03-00084 / 22</a>
                <a class="dropdown-item @yield('ad00086-finance-active')"
                    href="{{ route('ad00086_finances.index') }}">FIDSL-Ad-06-03-00086 / 22</a>
                <a class="dropdown-item @yield('ad00088-finance-active')"
                    href="{{ route('ad00088_finances.index') }}">FIDSL-Ad-06-03-00088 / 22</a>
                <a class="dropdown-item @yield('ad01357-finance-active')"
                    href="{{ route('ad01357_finances.index') }}">FIDSL-Ad-06-03-01357 / 22</a>
                <a class="dropdown-item @yield('ad00396-finance-active')"
                    href="{{ route('ad00396_finances.index') }}">FIDSL-Ad-06-03-00396 / 22</a>

            </div>
        </div> --}}

        {{-- <h4 class="text-danger mt-3">Admin Worksheet, GC Analysis နဲ့ Chemical Report(FIDSL-Ad-06-03-01341/22) တွေ ရဲ့
            Finance ကို အသုံးပြုနိုင်ပါသည်။ Form အရေအတွက် နဲ့ Form တခုချင်းစီရဲ့ data name၊ functionများ များနေခြင်းနဲ့
            securityပိုမိုကောင်းစေရန်အတွက် အချိန်အနည်းငယ် ပိုပေး၍ ကျန်ရှိသော Form များကို ဆက်လက် လုပ်ပေးနေပါသည်။</h4> --}}
    </div>
</div>
