<div class="container-fluid">
    <div class="d-flex justify-content-start">

        <div class="dropdown show my-3">
            <a class="btn btn-secondary dropdown-toggle mr-1 text-white" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #4B49AC;">
                Admin Worksheet
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('ad-0101-active')" href="{{ route('aw-ad0101.create') }}">FIDSL-Ad-01-01</a>
                <a class="dropdown-item @yield('ad-0201-active')" href="{{ route('aw-ad0201.create') }}">FIDSL-Ad-02-01</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #4B49AC;">
                GC Analysis
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('car0501-active')" href="{{ route('car0501.create') }}">F-CAR-05-01</a>
                <a class="dropdown-item @yield('car0501-17-active')" href="{{ route('car0501s_17.create') }}">F-CAR-05-01</a>
                <a class="dropdown-item @yield('fche040029-active')"
                    href="{{ route('fche040029.create') }}">FIDSL-Che-04-00/29</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Heavy Metals and Minerals
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('car0500-active')" href="{{ route('car0500.create') }}">F-CAR-05-00</a>
                <a class="dropdown-item @yield('che040036-active')" href="{{ route('che040036.create') }}">FIDSL-Che-04-01/36</a>
                <a class="dropdown-item @yield('che040037-active')" href="{{ route('che040037.create') }}">FIDSL-Che-04-01/37</a>
                <a class="dropdown-item @yield('che040040-active')" href="{{ route('che040040.create') }}">FIDSL-Che-04-01/40</a>
                <a class="dropdown-item @yield('che040141-active')" href="{{ route('che040141.create') }}">FIDSL-Che-04-01/41</a>
                <a class="dropdown-item @yield('che040042-active')"
                    href="{{ route('che040042.create') }}">FIDSL-Che-04-01/42</a>
                <a class="dropdown-item @yield('che040043-active')"
                    href="{{ route('che040043.create') }}">FIDSL-Che-04-01/43</a>
                <a class="dropdown-item @yield('che040044-active')"
                    href="{{ route('che040044.create') }}">FIDSL-Che-04-01/44</a>
                <a class="dropdown-item @yield('che040045-active')"
                    href="{{ route('che040045.create') }}">FIDSL-Che-04-01/45</a>
                <a class="dropdown-item @yield('che040146-active')"
                    href="{{ route('che040146.create') }}">FIDSL-Che-04-01/46</a>
                <a class="dropdown-item @yield('che040047-active')"
                    href="{{ route('che040047.create') }}">FIDSL-Che-04-01/47</a>
                <a class="dropdown-item @yield('che040048-active')"
                    href="{{ route('che040048.create') }}">FIDSL-Che-04-01/48</a>


                <a class="dropdown-item @yield('che040049-active')"
                    href="{{ route('che040049.create') }}">FIDSL-Che-04-01/49</a>

                <a class="dropdown-item @yield('che040050-active')"
                    href="{{ route('che040050.create') }}">FIDSL-Che-04-01/50</a>

            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Micro Worksheet
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('f03m05-active')" href="{{ route('f03m05.create') }}">FIDSL-03-M-05</a>
                <a class="dropdown-item @yield('f03m06-active')" href="{{ route('f03m06.create') }}">FIDSL-03-M-06</a>
                <a class="dropdown-item @yield('m010101-active')" href="{{ route('m010101.create') }}">F-M01-01-01</a>
                <a class="dropdown-item @yield('m020101-active')" href="{{ route('m020101.create') }}">F-M02-01-01</a>
                <a class="dropdown-item @yield('m030101-active')" href="{{ route('m030101.create') }}">F-M03-01-01</a>
                <a class="dropdown-item @yield('m040101-active')" href="{{ route('m040101.create') }}">F-M04-01-01</a>
                <a class="dropdown-item @yield('fmar0501-active')" href="{{ route('fmar0501.create') }}">F-MAR-05-01</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Nutrition Analysis
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <a class="dropdown-item @yield('fcar0502-active')" href="{{ route('fcar0502.create') }}">F-CAR-05-02</a>
                {{-- <a class="dropdown-item @yield('fcar0501-active')" href="{{ route('fcar0501.create') }}">F-CAR-05-01</a> --}}
                <a class="dropdown-item @yield('fche040101-active')"
                    href="{{ route('fche040101.create') }}">FIDSL-Che-04-01/01</a>
                <a class="dropdown-item @yield('fche040102-active')"
                    href="{{ route('fche040102.create') }}">FIDSL-Che-04-01/02</a>
                <a class="dropdown-item @yield('fche040103-active')"
                    href="{{ route('fche040103.create') }}">FIDSL-Che-04-01/03</a>
                <a class="dropdown-item @yield('fche040104-active')"
                    href="{{ route('fche040104.create') }}">FIDSL-Che-04-01/04</a>
                <a class="dropdown-item @yield('fche040105-active')"
                    href="{{ route('fche040105.create') }}">FIDSL-Che-04-01/05</a>
                <a class="dropdown-item @yield('fche040106-active')"
                    href="{{ route('fche040106.create') }}">FIDSL-Che-04-01/06</a>
                <a class="dropdown-item @yield('fche040107-active')"
                    href="{{ route('fche040107.create') }}">FIDSL-Che-04-01/07</a>
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Oil Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('oilfcar0502-active')" href="{{ route('oilfcar0502.create') }}">F-CAR-05-02</a>

                <a class="dropdown-item @yield('fche040108-active')"
                    href="{{ route('fche040108.create') }}">FIDSL-Che-04-01/08</a>

                <a class="dropdown-item @yield('fche040109-active')"
                    href="{{ route('fche040109.create') }}">FIDSL-Che-04-01/09</a>

                <a class="dropdown-item @yield('fche040110-active')"
                    href="{{ route('fche040110.create') }}">FIDSL-Che-04-01/10</a>

                <a class="dropdown-item @yield('fche040111-active')"
                    href="{{ route('fche040111.create') }}">FIDSL-Che-04-01/11</a>

                <a class="dropdown-item @yield('fche040112-active')"
                    href="{{ route('fche040112.create') }}">FIDSL-Che-04-01/12</a>

                <a class="dropdown-item @yield('fche040113-active')"
                    href="{{ route('fche040113.create') }}">FIDSL-Che-04-01/13</a>

                <a class="dropdown-item @yield('fche040114-active')"
                    href="{{ route('fche040114.create') }}">FIDSL-Che-04-01/14</a>

                <a class="dropdown-item @yield('fche040115-active')"
                    href="{{ route('fche040115.create') }}">FIDSL-Che-04-01/15</a>

                {{-- <a class="dropdown-item @yield('f04che06-active')" href="{{ route('f04che06.create') }}">FIDSL-04-Che/06</a>
                <a class="dropdown-item @yield('f04che07-active')" href="{{ route('f04che07.create') }}">FIDSL-04-Che/07</a>
                <a class="dropdown-item @yield('f04che08-active')" href="{{ route('f04che08.create') }}">FIDSL-04-Che/08</a>
                <a class="dropdown-item @yield('f04che09-active')" href="{{ route('f04che09.create') }}">FIDSL-04-Che/09</a>
                <a class="dropdown-item @yield('f04che10-active')" href="{{ route('f04che10.create') }}">FIDSL-04-Che/10</a>
                <a class="dropdown-item @yield('f04che11-active')" href="{{ route('f04che11.create') }}">FIDSL-04-Che/11</a>
                <a class="dropdown-item @yield('f04che12-active')" href="{{ route('f04che12.create') }}">FIDSL-04-Che/12</a>
                <a class="dropdown-item @yield('f04che14-active')" href="{{ route('f04che14.create') }}">FIDSL-04-Che/14</a> --}}
            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Others Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                {{-- <a class="dropdown-item @yield('f05-active')" href="{{ route('f05.create') }}">F-CAR-05-01</a> --}}
                <a class="dropdown-item @yield('fche040039-active')"
                    href="{{ route('fche040039.create') }}">FIDSL-Che-04-00/39</a>
                <a class="dropdown-item @yield('fche040051-active')"
                    href="{{ route('fche040051.create') }}">FIDSL-Che-04-00/51</a>
                <a class="dropdown-item @yield('fche040052-active')"
                    href="{{ route('fche040052.create') }}">FIDSL-Che-04-00/52</a>
                <a class="dropdown-item @yield('fche040028-active')"
                    href="{{ route('fche040028.create') }}">FIDSL-Che-04-00/28</a>
                <a class="dropdown-item @yield('fche040038-active')"
                    href="{{ route('fche040038.create') }}">FIDSL-Che-04-00/38</a>
                <a class="dropdown-item @yield('fche040027-active')"
                    href="{{ route('fche040027.create') }}">FIDSL-Che-04-00/27</a>
                <a class="dropdown-item @yield('fche040123-active')"
                    href="{{ route('fche040123.create') }}">FIDSL-Che-04-01/23</a>
                <a class="dropdown-item @yield('fche040121-active')"
                    href="{{ route('fche040121.create') }}">FIDSL-Che-04-01/21</a>
                <a class="dropdown-item @yield('fche040120-active')"
                    href="{{ route('fche040120.create') }}">FIDSL-Che-04-01/20</a>

                <a class="dropdown-item @yield('fche040122-active')"
                    href="{{ route('fche040122.create') }}">FIDSL-Che-04-01/22</a>

                <a class="dropdown-item @yield('fche040125-active')"
                    href="{{ route('fche040125.create') }}">FIDSL-Che-04-01/25</a>

                <a class="dropdown-item @yield('fche040126-active')"
                    href="{{ route('fche040126.create') }}">FIDSL-Che-04-01/26</a>

                <a class="dropdown-item @yield('fche040124-active')"
                    href="{{ route('fche040124.create') }}">FIDSL-Che-04-01/24</a>

            </div>
        </div>

        <div class="dropdown show my-3">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Water Test
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('wtfcar0502-active')" href="{{ route('wtfcar0502.create') }}">F-CAR-05-02</a>
                <a class="dropdown-item @yield('fche040116-active')"
                    href="{{ route('fche040116.create') }}">FIDSL-Che-04-01/16</a>
                <a class="dropdown-item @yield('fche040117-active')"
                    href="{{ route('fche040117.create') }}">FIDSL-Che-04-01/17</a>
                <a class="dropdown-item @yield('fche040118-active')"
                    href="{{ route('fche040118.create') }}">FIDSL-Che-04-01/18</a>
                <a class="dropdown-item @yield('fche040119-active')"
                    href="{{ route('fche040119.create') }}">FIDSL-Che-04-01/19</a>
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
                <a class="dropdown-item @yield('aa_fcar0501-active')" href="{{ route('aa_fcar0501.create') }}">F-CAR-05-01</a>
            </div>
        </div>

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Wastewater
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item @yield('fcar0500-active')" href="{{ route('fcar0500.create') }}">F-CAR-05-00</a>
                <a class="dropdown-item @yield('fche040053-active')"
                    href="{{ route('fche040053.create') }}">FIDSL-Che-04-00/53</a>

                <a class="dropdown-item @yield('fche040055-active')"
                    href="{{ route('fche040055.create') }}">FIDSL-Che-04-00/55</a>

                <a class="dropdown-item @yield('fche040056-active')"
                    href="{{ route('fche040056.create') }}">FIDSL-Che-04-00/56</a>

                <a class="dropdown-item @yield('fche040054-active')"
                    href="{{ route('fche040054.create') }}">FIDSL-Che-04-00/54</a>

                <a class="dropdown-item @yield('fche040057-active')"
                    href="{{ route('fche040057.create') }}">FIDSL-Che-04-00/57</a>

                <a class="dropdown-item @yield('fche040058-active')"
                    href="{{ route('fche040058.create') }}">FIDSL-Che-04-00/58</a>

                <a class="dropdown-item @yield('fche040059-active')"
                    href="{{ route('fche040059.create') }}">FIDSL-Che-04-00/59</a>

                <a class="dropdown-item @yield('fche040060-active')"
                    href="{{ route('fche040060.create') }}">FIDSL-Che-04-00/60</a>

                <a class="dropdown-item @yield('fche040061-active')"
                    href="{{ route('fche040061.create') }}">FIDSL-Che-04-00/61</a>

                <a class="dropdown-item @yield('fche040062-active')"
                    href="{{ route('fche040062.create') }}">FIDSL-Che-04-00/62</a>

                <a class="dropdown-item @yield('fche040063-active')"
                    href="{{ route('fche040063.create') }}">FIDSL-Che-04-00/63</a>

                <a class="dropdown-item @yield('fche040064-active')"
                    href="{{ route('fche040064.create') }}">FIDSL-Che-04-00/64</a>
            </div>
        </div>

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Chemical Report
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a href="{{ route('nutritions.create') }}" class="dropdown-item @yield('nutrition-active')">Nutrition
                    Analysis
                    Test Report</a>
                <a href="{{ route('oils.create') }}" class="dropdown-item @yield('oil-active')">Oil Test Report</a>
                <a href="{{ route('waters.create') }}" class="dropdown-item @yield('water-active')">Water Test Report</a>
                <a href="{{ route('gcs.create') }}" class="dropdown-item @yield('gc-active')">GC Test Report</a>
                <a href="{{ route('heavy_metals.create') }}" class="dropdown-item @yield('heavy_metal-active')">Heavy Metals
                    and
                    Essential
                    Minerals Test Report</a>
                <a href="{{ route('others.create') }}" class="dropdown-item @yield('other-active')">Other Test Report</a>
                {{-- <a class="dropdown-item @yield('ad01341-active')"
                    href="{{ route('ad01341s.create') }}">FIDSL-Ad-06-03-01341/22</a>
                    {{ route('others.create') }}
                <a class="dropdown-item @yield('ad01087-active')"
                    href="{{ route('ad01087s.create') }}">FIDSL-Ad-06-03-01087/22</a>

                <a class="dropdown-item @yield('ad00879-active')"
                    href="{{ route('ad00879.create') }}">FIDSL-Ad-06-03-00879/22</a>

                <a class="dropdown-item @yield('ad01288-active')"
                    href="{{ route('ad01288.create') }}">FIDSL-Ad-06-03-01288/22</a>

                <a class="dropdown-item @yield('ad01354-active')"
                    href="{{ route('ad01354.create') }}">FIDSL-Ad-06-03-01354/22</a>

                <a class="dropdown-item @yield('ad01351-active')"
                    href="{{ route('ad01351.create') }}">FIDSL-Ad-06-03-01351/22</a> --}}
            </div>
        </div>

        <div class="dropdown show">
            <a class="mr-1 btn btn-secondary dropdown-toggle text-white" href="#" role="button"
                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                style="background-color: #4B49AC;">
                Microbiological Report
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a href="{{ route('swabs.create') }}" class="dropdown-item @yield('swab-active')">Swab Test Report</a>
                <a href="{{ route('exports.create') }}" class="dropdown-item @yield('export-active')">Export Test
                    Report</a>
                <a href="{{ route('wjsas.create') }}" class="dropdown-item @yield('wjsa-active')">Water/Juice/Swab
                    Test/Air Test Report</a>
                <a href="{{ route('other_samples.create') }}" class="dropdown-item @yield('other_sample-active')">Other Sample
                    Test Report</a>
                <a href="{{ route('sacs.create') }}" class="dropdown-item @yield('sac-active')">SAC
                    Test Report</a>
                {{-- <a class="dropdown-item @yield('ad01250-active')"
                    href="{{ route('ad01250s.create') }}">FIDSL-Ad-06-03-01250/22</a>

                <a class="dropdown-item @yield('ad01254-active')"
                    href="{{ route('ad01254s.create') }}">FIDSL-Ad-06-03-01254/22</a>

                <a class="dropdown-item @yield('ad00084-active')"
                    href="{{ route('ad00084s.create') }}">FIDSL-Ad-06-03-00084/22</a>

                <a class="dropdown-item @yield('ad00086-active')"
                    href="{{ route('ad00086s.create') }}">FIDSL-Ad-06-03-00086/22</a>

                <a class="dropdown-item @yield('ad00088-active')"
                    href="{{ route('ad00088s.create') }}">FIDSL-Ad-06-03-00088/22</a>

                <a class="dropdown-item @yield('ad01357-active')"
                    href="{{ route('ad01357s.create') }}">FIDSL-Ad-06-03-01357/22</a>

                <a class="dropdown-item @yield('ad00396-active')"
                    href="{{ route('ad00396s.create') }}">FIDSL-Ad-06-03-00396/22</a> --}}

            </div>
        </div>

        {{-- <h4 class="text-danger mt-3">Admin Worksheet(Finance), GC Analysis(Finance), Chemical
            Report(FIDSL-Ad-06-03-01341/22)(Finance) နဲ့ Heavy Metals and
            Minerals(Finance မပါ)တွေကို အသုံးပြုနိုင်ပါသည်။ Form အရေအတွက် နဲ့ Form တခုချင်းစီရဲ့ data name၊ functionများ
            များနေခြင်းနဲ့
            securityပိုမိုကောင်းစေရန်အတွက် အချိန်အနည်းငယ် ပိုပေး၍ ကျန်ရှိသော Form များကို ဆက်လက် လုပ်ပေးနေပါသည်။</h4> --}}
    </div>
</div>
