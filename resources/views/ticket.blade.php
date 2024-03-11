<x-sections.home-header/>

<section class="py-4 relative ">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Vos Tickets</h2>
        </div>

    </div>
    @if($ticketsPendingCount > 0)
        <div class="flex justify-between py-6 px-4 bg-white/100 ml-1 rounded-lg absolute top-[95px]">
            <div class="flex items-center space-x-4">
                <div class="flex flex-col space-y-1">
                    <span class="font-bold text-3xl">{{$ticketsPendingCount }} Billets en attente</span>
                    <span class="text-sm">vous avez {{$ticketsPendingCount }} tickets en attente 🔥</span>
                </div>
            </div>

        </div>
    @endif
</section>
<style>
    .box {
        position: relative;
        top: calc(50% - 125px);
        top: -webkit-calc(50% - 125px);
        left: calc(50% - 300px);
        left: -webkit-calc(50% - 300px);
        margin-bottom: 40px
    }

    .ticket {
        width: 600px;
        height: 250px;
        background: #FFB300;
        border-radius: 3px;
        box-shadow: 0 0 100px #aaa;
        border-top: 1px solid #E89F3D;
        border-bottom: 1px solid #E89F3D
    }

    .left {
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        top: 0;
        left: -5px
    }

    .left li {
        width: 0;
        height: 0
    }

    .left li:nth-child(-n+2) {
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300
    }

    .left li:nth-child(3), .left li:nth-child(6) {
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #EEE
    }

    .left li:nth-child(4) {
        margin-top: 8px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #EEE
    }

    .left li:nth-child(5) {
        margin-top: 8px;
        margin-left: -1px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-right: 6px solid #EEE
    }

    .left li:nth-child(7), .left li:nth-child(9), .left li:nth-child(11), .left li:nth-child(12) {
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5
    }

    .left li:nth-child(8) {
        margin-top: 7px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5
    }

    .left li:nth-child(10) {
        margin-top: 7px;
        margin-left: 1px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #E5E5E5
    }

    .left li:nth-child(13) {
        margin-top: 7px;
        margin-left: 2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300
    }

    .left li:nth-child(14) {
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-right: 5px solid #FFB300
    }

    .right {
        margin: 0;
        padding: 0;
        list-style: none;
        position: absolute;
        top: 0;
        right: -5px
    }

    .right li:nth-child(-n+2) {
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #FFB300
    }

    .right li:nth-child(3), .right li:nth-child(4), .right li:nth-child(6) {
        margin-top: 8px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #EEE
    }

    .right li:nth-child(5) {
        margin-top: 8px;
        margin-left: -2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #EEE
    }

    .right li:nth-child(8), .right li:nth-child(9), .right li:nth-child(11) {
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5
    }

    .right li:nth-child(7) {
        margin-top: 7px;
        margin-left: -3px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5
    }

    .right li:nth-child(10) {
        margin-top: 7px;
        margin-left: -2px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #E5E5E5
    }

    .right li:nth-child(12) {
        margin-top: 7px;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-left: 6px solid #E5E5E5
    }

    .right li:nth-child(13), .right li:nth-child(14) {
        margin-top: 7px;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 5px solid #FFB300
    }

    .ticket:after {
        content: '';
        position: absolute;
        right: 300px;
        top: 0;
        width: 2px;
        height: 250px;
        box-shadow: inset 0 0 0 #FFB300, inset 0 -10px 0 #B56E0A, inset 0 -20px 0 #FFB300, inset 0 -30px 0 #B56E0A, inset 0 -40px 0 #FFB300, inset 0 -50px 0 #999999, inset 0 -60px 0 #E5E5E5, inset 0 -70px 0 #999999, inset 0 -80px 0 #E5E5E5, inset 0 -90px 0 #999999, inset 0 -100px 0 #E5E5E5, inset 0 -110px 0 #999999, inset 0 -120px 0 #E5E5E5, inset 0 -130px 0 #999999, inset 0 -140px 0 #E5E5E5, inset 0 -150px 0 #B0B0B0, inset 0 -160px 0 #EEEEEE, inset 0 -170px 0 #B0B0B0, inset 0 -180px 0 #EEEEEE, inset 0 -190px 0 #B0B0B0, inset 0 -200px 0 #EEEEEE, inset 0 -210px 0 #B0B0B0, inset 0 -220px 0 #FFB300, inset 0 -230px 0 #B56E0A, inset 0 -240px 0 #FFB300, inset 0 -250px 0 #B56E0A
    }

    .ticket:before {
        content: '';
        position: absolute;
        z-index: 5;
        right: 300px;
        top: 0;
        width: 1px;
        height: 250px;
        box-shadow: inset 0 0 0 #FFB300, inset 0 -10px 0 #F4D483, inset 0 -20px 0 #FFB300, inset 0 -30px 0 #F4D483, inset 0 -40px 0 #FFB300, inset 0 -50px 0 #FFFFFF, inset 0 -60px 0 #E5E5E5, inset 0 -70px 0 #FFFFFF, inset 0 -80px 0 #E5E5E5, inset 0 -90px 0 #FFFFFF, inset 0 -100px 0 #E5E5E5, inset 0 -110px 0 #FFFFFF, inset 0 -120px 0 #E5E5E5, inset 0 -130px 0 #FFFFFF, inset 0 -140px 0 #E5E5E5, inset 0 -150px 0 #FFFFFF, inset 0 -160px 0 #EEEEEE, inset 0 -170px 0 #FFFFFF, inset 0 -180px 0 #EEEEEE, inset 0 -190px 0 #FFFFFF, inset 0 -200px 0 #EEEEEE, inset 0 -210px 0 #FFFFFF, inset 0 -220px 0 #FFB300, inset 0 -230px 0 #F4D483, inset 0 -240px 0 #FFB300, inset 0 -250px 0 #F4D483
    }

    .content {
        position: absolute;
        top: 40px;
        width: 600px;
        height: 170px;
        background: #eee
    }

    .airline {
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Arial;
        font-size: 20px;
        font-weight: 700;
        color: rgba(0, 0, 102, 1)
    }

    .boarding {
        position: absolute;
        top: 10px;
        right: 220px;
        font-family: Arial;
        font-size: 18px;
        color: rgba(255, 255, 255, 0.6)
    }

    .jfk {
        position: absolute;
        top: 10px;
        left: 20px;
        font-family: Arial;
        font-size: 38px;
        color: #222
    }

    .sfo {
        position: absolute;
        top: 10px;
        left: 180px;
        font-family: Arial;
        font-size: 38px;
        color: #222
    }

    .plane {
        position: absolute;
        left: 105px;
        top: 0
    }

    .sub-content {
        background: #e5e5e5;
        width: 100%;
        height: 100px;
        position: absolute;
        top: 70px
    }

    .watermark {
        position: absolute;
        left: 5px;
        top: -10px;
        font-family: Arial;
        font-size: 110px;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.2)
    }

    .name {
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 14px;
        color: #999
    }

    .name span {
        color: #555;
        font-size: 17px
    }

    .flight {
        position: absolute;
        top: 10px;
        left: 180px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 14px;
        color: #999
    }

    .number {
        position: absolute;
        top: 30px;
        left: 180px;
        margin-left: 50px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 17px;
        color: #999
    }

    .flight span {
        color: #555;
        font-size: 17px
    }

    .gate {
        position: absolute;
        top: 10px;
        left: 280px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 14px;
        color: #999
    }

    .gate span {
        color: #555;
        font-size: 17px
    }

    .seat {
        position: absolute;
        top: 10px;
        left: 350px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 14px;
        color: #999
    }

    .seat span {
        color: #555;
        font-size: 17px
    }

    .boardingtime {
        position: absolute;
        top: 60px;
        left: 10px;
        font-family: Arial Narrow, Arial;
        font-weight: 700;
        font-size: 14px;
        color: #999
    }

    .boardingtime span {
        color: #555;
        font-size: 17px
    }

    .barcode {
        position: absolute;
        left: 8px;
        bottom: 6px;
        height: 30px;
        width: 90px;
        background: #222;
        box-shadow: inset 0 1px 0 #FFB300, inset -2px 0 0 #FFB300, inset -4px 0 0 #222, inset -5px 0 0 #FFB300, inset -6px 0 0 #222, inset -9px 0 0 #FFB300, inset -12px 0 0 #222, inset -13px 0 0 #FFB300, inset -14px 0 0 #222, inset -15px 0 0 #FFB300, inset -16px 0 0 #222, inset -17px 0 0 #FFB300, inset -19px 0 0 #222, inset -20px 0 0 #FFB300, inset -23px 0 0 #222, inset -25px 0 0 #FFB300, inset -26px 0 0 #222, inset -26px 0 0 #FFB300, inset -27px 0 0 #222, inset -30px 0 0 #FFB300, inset -31px 0 0 #222, inset -33px 0 0 #FFB300, inset -35px 0 0 #222, inset -37px 0 0 #FFB300, inset -40px 0 0 #222, inset -43px 0 0 #FFB300, inset -44px 0 0 #222, inset -45px 0 0 #FFB300, inset -46px 0 0 #222, inset -48px 0 0 #FFB300, inset -49px 0 0 #222, inset -50px 0 0 #FFB300, inset -52px 0 0 #222, inset -54px 0 0 #FFB300, inset -55px 0 0 #222, inset -57px 0 0 #FFB300, inset -59px 0 0 #222, inset -61px 0 0 #FFB300, inset -64px 0 0 #222, inset -66px 0 0 #FFB300, inset -67px 0 0 #222, inset -68px 0 0 #FFB300, inset -69px 0 0 #222, inset -71px 0 0 #FFB300, inset -72px 0 0 #222, inset -73px 0 0 #FFB300, inset -75px 0 0 #222, inset -77px 0 0 #FFB300, inset -80px 0 0 #222, inset -82px 0 0 #FFB300, inset -83px 0 0 #222, inset -84px 0 0 #FFB300, inset -86px 0 0 #222, inset -88px 0 0 #FFB300, inset -89px 0 0 #222, inset -90px 0 0 #FFB300
    }

    .slip {
        left: 455px
    }

    .nameslip {
        top: 60px;
        left: 410px
    }

    .flightslip {
        left: 410px
    }

    .seatslip {
        left: 540px
    }

    .jfkslip {
        font-size: 30px;
        top: 20px;
        left: 350px
    }

    .sfoslip {
        font-size: 26px;
        top: 20px;
        left: 460px
    }

    .planeslip {
        top: 10px;
        left: 475px
    }

    .airlineslip {
        left: 455px
    }
</style>
<section class="  bg-gradient-to-b from-green-100 to-green-0">

    <div class="mt-5">

        <main class="w-full">
            @forelse($tickets as $ticket)
                <div class="box relative">
                    <ul class="left">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <ul class="right">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="ticket">
                        <span class="airline">Evento</span>
                        <span class="airline airlineslip">######</span>
                        <div class="content">
                            <span class="jfk">{{$ticket->event->title}}</span>


                            <span class="sfo sfoslip">{{$ticket->event->price}} $</span>
                            <div class="sub-content">
                                <span class="watermark">Evento</span>
                                <span class="name">Nom Participant<br><span>{{Auth::user()->name}}</span></span>
                                <span class="flight">Localisation<br><span>{{$ticket->event->localisation}}</span></span>

                                <span class="boardingtime">Date Evenement<br><span>{{$ticket->event->date}}</span></span>

                                <span class="number flightslip">Ticket N&deg;<br><span>{{$ticket->id}}</span></span>
                            </div>
                        </div>
                        <div class="barcode"></div>
                        <div class="barcode slip"></div>
                    </div>

                    <form action="{{ route('pdf') }}" method="get">
                        @csrf
                        <input type="hidden" name="title" value="{{$ticket->event->title}}">
                        <input type="hidden" name="price" value="{{$ticket->event->price}}">
                        <input type="hidden" name="local" value="{{$ticket->event->localisation}}">
                        <input type="hidden" name="tikcetId" value="{{$ticket->id}}">
                        <input type="hidden" name="date" value="{{$ticket->event->date}}">

                        <button class="absolute top-4 right-[640px]  inline-flex items-center justify-center px-6 py-4 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700 mt-7"
                                type="submit">Generate PDF
                        </button>
                    </form>


                </div>
                <hr class="my-12 ">

            @empty
                <div class="mx-auto container  text-center py-12">
                    <x-elements.no_data/>
                </div>

            @endforelse
        </main>

    </div>
</section>

<x-sections.home-footer/>
