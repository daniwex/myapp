@extends('layouts.layout')

@section('content')
    @include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="col-6 t-3">
              <img src="{{($storeage[products])}}">
            </div>
            <div class="col-6 t-3">
               <table style="width: 100%">
                   <tr>
                       <td><h3>Sweater</h3></td>
                   </tr>
                   <tr>
                   <td style="color: rgb(61, 57, 57)">${{ $storeage{'price'} }} </td>
                   </tr>
                   <tr>
                    <td class="qtn"> Quantity</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="quantity">
                                <button  id="add" onclick="add()" type="button" name="button"  style="padding-right: 25px">
                                    <i class="fas fa-plus" style="font-size:10px;"></i>
                                </button>
                                <input type="text" name="name" id="qty" value="1" size="5px" style="text-align: center" disabled>
                                <button  id="btn-name" onclick="subtract()" type="button" name="button" style="padding-right: 25px">   
                                    <i class="fas fa-minus" style="font-size:10px;"></i>
                                </button>
                              </div>
                        </td>
                    </tr>
                   <tr>
                   <td class="t-1-1"><button class="plus-btn"> Buy Now </button></td>
                   </tr>
                    <tr>
                    <td> <button class="minus-btn"> Add to cart </button></td>
                    </tr>
               </table>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection

<style>
 h3,.qtn{
     font-family: 'Dancing Script', cursive;
     font-family: 'Noto Serif', serif;
    }
 .t-3{
     padding: 2em;
 }
 button{
     width:100%;
     padding: 20px
 }
td{
    padding: 10px
}
 .t-1-1{
     margin-top: 20px
 }
 .quantity{
     display: flex;
     flex-direction: row;
     width: 20px
 }
 .plus-btn{
     background-color: black;
     color: white
 }
 .minus-btn{
     background-color: white;
     color: black
 }
</style>
<script>
    function subtract(){
        var qty = document.getElementById('qty').value;
        if (qty == 1) {
          var tr =  document.getElementById('btn-name')
          tr.disabled = true;
        }else{
            qty--;
            document.getElementById('qty').value = qty;
        }
    }

    function add(){
        var qty = document.getElementById('qty').value;
     
            var tr =  document.getElementById('btn-name')
            tr.disabled = false;
            qty++
            document.getElementById('qty').value = qty;
        
    }
    
</script>
