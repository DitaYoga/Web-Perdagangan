@extends('layouts.master')

@section('content')

    <header>
        @include('layouts.header')
    </header>

    <div class="container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
					<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>


	{{-- ini komen
	<footer>
       @include('layouts.footer')
  	</footer> 
  	hapus komennya kalo udah jadi --}}
   
@endsection
