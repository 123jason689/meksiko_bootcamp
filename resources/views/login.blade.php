@extends('layout.index')

@section('links')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('container')

<div class="container-fluid d-flex align-items-center justify-content-center" style="height:90vh; background-color:azure;">
	<div class="card d-flex flex-column align-items-center" style="width: 30vw;">
		<div id="" class="card-logo">
            <img src="{{ asset('img/main-logo.png') }}" alt="Logo mexico" id="" class="">
        </div>
		<h1 class="poppins " style="font-weight:500; text-align:center;">Login</h1>
		<form action="/login" method="POST" class="container-fluid">
            @csrf
			<div class="row mx-2 mt-4">
                <div class="row resetmp">
                    <div class="col-4 d-flex align-items-center justify-content-end pe-3 nunito">
                        <label for="inputemail" class="nunito" style="font-size:1.5em; font-weight:700; line-height:0.3em;">Email :</label>
                    </div>
                    <div class="col-8 resetmp">
                        <input type="email" class="form-control nunito" id="inputemail" aria-describedby="emailHelp" name="email" style="width:100%;">
                    </div>
                </div>
                @error('email')
                    <div class="row resetmp">
                        <div class="col-4 "></div>
                        <div class="col-8 resetmp px-2">
                            <div class="alert alert-danger nunito alerts resetmp bblac" style="font-size: 1.3em; text-align:center;">{{ $message }}</div>
                        </div>
                    </div>
                @enderror
			</div>
			<div class="row mx-2 @error('email') mt-3 @else mt-5 @enderror mb-4">
                <div class="row resetmp">
                    <div class="col-4 d-flex align-items-center justify-content-end pe-3 nunito">
                        <label for="inputpass" class="nunito" style="font-size:1.5em; font-weight:700; line-height:0.3em;">Password :</label>
                    </div>
                    <div class="col-8 resetmp">
                        <input type="password" class="form-control nunito" id="inputpass" aria-describedby="emailHelp" name="password" style="width:100%;">
                    </div>
                </div>
                @error('password')
                    <div class="row resetmp">
                        <div class="col-4 "></div>
                        <div class="col-8 resetmp px-2">
                            <div class="alert alert-danger nunito alerts resetmp bblac" style="font-size: 1.3em; text-align:center;">{{ $message }}</div>
                        </div>
                    </div>
                @enderror
			</div>

            <div class="row mb-2">
                <small class="col nunito " style="font-size:1em; font-weight:700; text-align:center">Don't have an account yet ? <a href="/register">Register Here!</a></small>
            </div>

			<div class="row mx-2 mt-3 mb-5">
				<div class="col d-flex justify-content-center poppins">
					<button type="submit" class="btn-submit bblac">login</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection

