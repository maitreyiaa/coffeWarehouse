@extends('welcome')

@section('content')

    <div>
        <div>
            <h2>Update</h2>
        </div>

            <div>
                <div>
                    <a href="/"><button>Home</button></a>
                </div>
                <form action="/beans/{{ $beans->id }}" method="POST" class="form-control">
                    @method('PUT')
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
                            <!-- Name field -->
                            <input type="text" name="name" class="border-t border-r md:border-l" value="{{ $beans->name }}">
                            <!-- level field -->
                            <select class="form-control" name="level" value="{{ $beans->level }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="decaf">Decaf</option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                            <!-- harga field -->
                            <input type="text" name="harga" class="border-t border-r md:border-l" value="{{ $beans->harga }}"></input><span style="margin-left:10px;"></span>
                            <!-- proses field -->
                            <select class="form-control" name="proses" value="{{ $beans->proses }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="washed">washed</option>
                                <option value="honey-black">honey-black</option>
                                <option value="Other">OTHER</option>
                            </select>
                            <!-- ketinggian field -->
                            <select class="form-control" name="ketinggian" value="{{ $beans->ketinggian }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="lightk">LIGHT</option>
                                <option value="medium">MEDIUM</option>
                                <option value="dark">DARK</option>
                                <option value="french">FRENCH</option>
                            </select>
                            <!-- variasi field -->
                            <select class="form-control" name="variasi" value="{{ $beans->variasi }}">
                                <option selected value="" disabled>SELECT</option>
                                <option value="mix-varient">mix-varient</option>
                                <option value="dominant">dominant</option>
                                <option value="whole-bean">WHOLE-BEAN</option>
                            </select>
                            <!-- COUNTRY OF asal field -->
                            <input type="text" name="asal" class="border-t border-r md:border-l" value="{{ $beans->asal }}">
                            <!-- SUBMIT button -->
                            <button type="submit" class="ml-4">Submit</button>

                        </li>

                        <li>
                            <!-- ERROR MESSAGES - Required Fields -->
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
        </div>
    </div>


@endsection
