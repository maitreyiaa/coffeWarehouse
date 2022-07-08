@extends('welcome')

@section('content')

    <!-- INDEX HEADING -->

    <h2>PENYIMPANAN KOPI</h2>
    <!-- TABLE HEAD ROW -->
    <ul class="responsive-table">
        <div>
            <a href="/"><button>Home</button></a>
        </div>
        <li class="table-header">
        <div class="col col-1">ID</div>
        <div class="col col-2">NAME</div>
        <div class="col col-3">level</div>
        <div class="col col-4">harga</div>
        <div class="col col-5">proses</div>
        <div class="col col-6">ketinggian</div>
        <div class="col col-7">variasi</div>
        <div class="col col-8">asal</div>
        <div class="col col-9">OPTIONAL/</div>
        <div class="col col-10">ACTIVITY</div>

        </li>

        <!-- INDEX COFFEE BEANS TABLE BODY -->
        @foreach ($beans as $beans)

        <li class="table-row">
        <div class="col col-1" data-label="Job Id">{{ $beans->id }}</div>
        <div class="col col-2" data-label="Customer Name">{{ $beans->name }}</div>
        <div class="col col-3" data-label="Amount">{{ $beans->level }}</div>
        <div class="col col-4" data-label="Payment Status">${{ $beans->harga }}/lb</div>
        <div class="col col-5" data-label="Customer Name">{{ $beans->proses }}</div>
        <div class="col col-6" data-label="Amount">{{ $beans->ketinggian }}</div>
        <div class="col col-7" data-label="Payment Status">{{ $beans->variasi }}</div>
        <div class="col col-8" data-label="Payment Status">{{ $beans->asal }}</div>
        <div class="col col-9"><a href="/beans/{{ $beans->id }}/edit"><button type="submit">UPDATE</button></a></div>
        <div class="col col-10"><a href="/beans/{{ $beans->id }}" method="DELETE"><button type="submit">DELETE</button></a></div>
        </li>

        @endforeach

    </ul>
        <!-- ADD NEW BEANS SECTION -->
        <div>
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> -->
            <div>
                <h2>TAMBAH DATA</h2>
            </div>
        </div>


    <!-- CREATE BEANS FORM -->
    <div>
        <form action="beans" method="POST" class="form-control">
            @csrf

            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-2">NAME</div>
                    <div class="col col-3">level</div>
                    <div class="col col-4">harga</div>
                    <div class="col col-5">proses</div>
                    <div class="col col-6">ketinggian</div>
                    <div class="col col-7">variasi</div>
                    <div class="col col-8">asal</div>
                    <div class="col col-9">ACTION</div>
                </li>

                <li>
                    <!-- NAME FIELD -->
                    <input type="text" name="name" value="{{ old('name') }}">

                    <select class="form-control" name="level" value="{{ old('level') }}">
                    <option selected value="" disabled>SELECT</option>
                    <option value="decaf">Decaf</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    </select>

                    <input type="text" name="harga" value="{{ old('harga') }}">
                    <span>/lb</span>

                    <select class="form-control" name="proses" value="{{ old('proses') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="washed">washed</option>
                        <option value="honey-black">honey-black</option>
                        <option value="Other">OTHER</option>
                    </select>

                    <select class="form-control" name="ketinggian" value="{{ old('ketinggian') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="lightk">LIGHT</option>
                        <option value="medium">MEDIUM</option>
                        <option value="dark">DARK</option>
                        <option value="french">FRENCH</option>
                    </select>

                    <select class="form-control" name="variasi" value="{{ old('variasi') }}">
                        <option selected value="" disabled>SELECT</option>
                        <option value="mix-varient">mix-varient</option>
                        <option value="dominant">dominant</option>
                        <option value="whole-bean">WHOLE-BEAN</option>
                    </select>

                    <input type="text" name="asal" class="border-t border-r md:border-l" value="{{ old('asal') }}">
                    <button type="submit" class="ml-4">Submit</button>
                </li>
                <li>
                    <!-- NAME FIELD ERROR MESSAGE -->
                    <p>{{ $errors->first('name') }}<p>
                    <p>{{ $errors->first('level') }}<p>
                    <p>{{ $errors->first('harga') }}<p>
                    <p>{{ $errors->first('proses') }}<p>
                    <p>{{ $errors->first('ketinggian') }}<p>
                    <p>{{ $errors->first('variasi') }}<p>
                    <p>{{ $errors->first('asal') }}<p>

                </li>
            </ul>
        </form>
    </div>


@endsection
