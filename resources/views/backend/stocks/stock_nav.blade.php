<div class="container-fluid">
    <div class="d-flex justify-content-start my-2">
        <a href="{{ route('dashboard') }}">
            <button type="button" class="btn btn-md btn-outline-primary mb-1 mr-1"><i class="fas fa-bars"></i>
                <b>Menu</b></button>
        </a>
        <a href="{{ route('fidsl_general_stock.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 mb-1 px-1 @yield('fidsl-active')">
                FIDSL General Stock List
            </button>
        </a>
        <a href="{{ route('chemical_list.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('chemical-list-active')">
                Chemical Lab Chemical List
            </button>
        </a>
        <a href="{{ route('glass_wares.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('glass-ware-active')">
                Chemical Lab (Glass Wares)
            </button>
        </a>
        <a href="{{ route('cl_equipment_list.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('cl-equipment-active')">
                Chemical Lab Equipment List
            </button>
        </a>
        <a href="{{ route('ml_equipment_list.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('ml-equipment-active')">
                Micro Lab Equipment List
            </button>
        </a>
        <a href="{{ route('ml_general_stock.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('ml-general-stock-active')">
                Micro Lab General Stock
            </button>
        </a>
        <a href="{{ route('ml_petrifilm_stock.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary mr-1 px-1 @yield('ml-petrifilm-stock-active')">
                Micro Lab Petrifilm List
            </button>
        </a>
        <a href="{{ route('ml_media_stock.index') }}">
            <button type="button" class="btn btn-md btn-outline-primary px-1 @yield('ml-media-stock-active')">
                Micro Lab Media Stock
            </button>
        </a>
    </div>

    {{-- <h4 class="text-danger mt-3">FIDSL General Stock List(Detail), Chemical Lab Chemical List(Detail မပါ), Glass
        Wares(Detail မပါ)
        နဲ့ Micro Lab Equipment List(Detail မပါ)တွေကို အသုံးပြုနိုင်ပါသည်။ Form အရေအတွက် နဲ့ Form တခုချင်းစီရဲ့ data
        name၊ functionများ
        များနေခြင်းနဲ့
        securityပိုမိုကောင်းစေရန်အတွက် အချိန်အနည်းငယ် ပိုပေး၍ ကျန်ရှိသော Form များကို ဆက်လက် လုပ်ပေးနေပါသည်။</h4> --}}
</div>
